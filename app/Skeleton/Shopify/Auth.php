<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 7/19/18
 * Time: 7:00 PM
 */

namespace App\Skeleton\Shopify;

use App\Skeleton\Basic\Assist;
use App\Skeleton\Basic\Client;

class Auth
{

    public static $shop;
    public static $access_token;
    public static $secret;
    public static $key;
    public static $state = 'random_string';

    public static function config( $data )
    {
        self::$shop         = $data[ 'ShopUrl' ];
        self::$key          = $data[ 'ApiKey' ];
        self::$secret       = $data[ 'SharedSecret' ];
        self::$access_token = $data[ 'AccessToken' ];
    }

    /**
     * @param array $config
     * @return null
     * @throws \Exception
     */
    public static function getAccessToken( $config = [] )
    {

        if( self::verifyShopifyRequest() ) {
            $data = array(
                'client_id'     => env( 'SHOPIFY_KEY' ) ,
                'client_secret' => env( 'SHOPIFY_SECRET' ) ,
                'code'          => $_GET['code'],
            );

            $uri         = 'https://' . self::$shop . DIRECTORY_SEPARATOR . 'admin/oauth/access_token';
            $httpConnect = new Client();
            $response    = $httpConnect->request(
                $uri ,
                $data ,
                Client::POST ,
                [ "Content-Type: application/json" ]
            );
            $response = json_decode( $response ) ;
            return property_exists( $response , 'access_token') ? $response->access_token : null;
        } else {
            throw new \Exception("This request is not initiated from a valid shopify shop!");
        }
    }

    /**
     * @return bool
     * @throws \Exception
     */
    public static function verifyShopifyRequest()
    {
        $data = $_GET;

        if( ! isset( self::$secret) ) {
            throw new \Exception( "Please provide SharedSecret while configuring the SDK client." );
        }


        $sharedSecret = self::$secret;

        //Get the hmac and remove it from array
        if (isset($data['hmac'])) {
            $hmac = $data['hmac'];
            unset($data['hmac']);
        } else {
            throw new \Exception("HMAC value not found in url parameters.");
        }
        //signature validation is deprecated
        if (isset($data['signature'])) {
            unset($data['signature']);
        }
        //Create data string for the remaining url parameters
        $dataString = http_build_query($data);

        $realHmac = hash_hmac('sha256', $dataString, $sharedSecret);

        //hash the values before comparing (to prevent time attack)
        if(md5($realHmac) === md5($hmac)) {
            return true;
        } else {
            return false;
        }
    }

    public static function authRequest( $scopes , $redirectUrl )
    {
        $oauthUrl = 'https://' . self::$shop . '/admin/oauth/authorize?client_id=' .
            self::$key . '&scope=' . $scopes . '&redirect_uri=' . $redirectUrl .
            '&state=' . self::$state;
        return $oauthUrl;
    }

    /**
     * @return bool
     * @throws \Exception
     */
    public static function verify()
    {
        $secret = env( 'SHOPIFY_SECRET' );

        if (  is_null( $secret ) ) throw new \Exception('Shopify Config not set');

        $data   = $_GET;
        $params = array();

        foreach($data as $param => $value) {
            if ($param != 'signature' && $param != 'hmac' ) {
                $params[$param] = "{$param}={$value}";
            }
        }

        asort($params);
        $params = implode('&', $params);

        $hmac           = array_key_exists( 'hmac' , $data ) ? $data['hmac'] : null ;
        $calculatedHmac = hash_hmac('sha256', $params,  $secret );

        return ($hmac == $calculatedHmac);
    }

    public static function verifyWebhook( $data , $hmac_header ){
        $calculated_hmac = base64_encode(hash_hmac('sha256', $data, env( 'SHOPIFY_SECRET' ), true));
        return ($hmac_header == $calculated_hmac);
    }
}