<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/8/18
 * Time: 7:29 PM
 */

namespace App\Http\Controllers;

use \App\Skeleton\Basic\Assist;
use \App\Skeleton\Model\ShopOwner;
use \App\Skeleton\Security;
use \App\Skeleton\Shopify\Auth;
use \App\Skeleton\Shopify\Shop;
use \App\Skeleton\Shopify\Webhooks;
use \App\Skeleton\Skeleton;
use Illuminate\Http\Response;

class ShopifyController
{

    /**
     * @return array
     */
    public function getHeaders()
    {
        $shop        = null;
        $topic       = null;
        $hmac_header = null;

        foreach (getallheaders() as $name => $value) {

            if ( strtoupper( $name ) === 'X-SHOPIFY-SHOP-DOMAIN') {
                $shop   =  trim($value);
            }
            if ( strtoupper( $name ) === 'X-SHOPIFY-TOPIC') {
                $topic = trim($value);
            }
            if ( strtoupper( $name ) === 'X-SHOPIFY-HMAC-SHA256') {
                $hmac_header = trim($value);
            }
        }

        return [
            'shop'  => $shop,
            'topic' => $topic ,
            'hmac'  => $hmac_header
        ];
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Laravel\Lumen\Http\Redirector
     */
    public function install( \Illuminate\Http\Request $request )
    {
        $appHandle   = env( 'APP_HANDLE' ) ;
        $currentShop = Assist::getParam( 'shop');
        $skeleton    = new Skeleton( $currentShop );
        $shop_key    = Security::generateRandomKey( 75 );

        Auth::config( $skeleton->getConfig() );

        try{$accessToken  = Auth::getAccessToken();}
        catch ( \Exception $exception ){
            $accessToken = null;
        }

        if( is_null( $accessToken ) ) exit( 'not allowed' ) ;
        $shopifyStore = new Shop();
        $shopifyStore->setShop( $currentShop )
            ->setAccessToken( $accessToken ) ;

        $storeInfo = $shopifyStore->find();

        ShopOwner::firstOrCreate([
            "shop"             => $currentShop,
            "access_token"     => $accessToken ,
            'key'              => $shop_key ,
            'timezone'         => $storeInfo->getIanaTimezone(),
            'email'            => $storeInfo->getEmail()
        ]);

        // create webhooks
        foreach ( $skeleton->webhookTopics() as $topic ) {
            $webhook = new Webhooks();
            $webhook->setShop( $currentShop )->setAccessToken( $accessToken );
            $webhook->setTopic( $topic )
                ->setAddress( Skeleton::baseUrl() . 'webhook' )
                ->setFormat( 'json' )
                ->insert();
        }

        $redirectTo = 'https://' . $currentShop . '/admin/apps/' . $appHandle . '/';

        return redirect( $redirectTo , 302 , [] , true );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \Illuminate\Http\Response $response
     * @var ShopOwner $shopOwner
     * @return mixed
     */
    public function redirect( \Illuminate\Http\Request $request , $response )
    {
        $data        = file_get_contents('php://input');
        $shopifyData = json_decode( trim( $data ) );
        $header      = $this->getHeaders();
        $hmac        = $header[ 'hmac' ];
        $shop        = $header[ 'shop' ];
        $topic       = $header[ 'topic' ];

        if( Auth::verifyWebhook( trim( $data ) , $hmac ) == false ) return response( [] )
            ->header( 'Content-Type' , 'application/json'  );

        switch ( $topic ){
            case 'app/uninstalled':
                $shopOwner = ShopOwner::where( 'shop' , $shop )->first();

                // remove member
                if( $shopOwner != null ) {
                    $memberToDelete = ShopOwner::find($shopOwner->id);
                    $memberToDelete->delete();
                }
            break;
        }

        return response( [] )->header( 'Content-Type' , 'application/json'  );
    }
}