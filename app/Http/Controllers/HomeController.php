<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 7/19/18
 * Time: 6:38 PM
 */

namespace App\Http\Controllers;

use App\Skeleton\Model\ShopOwner;
use App\Skeleton\Shopify\Metafield;

class HomeController extends Controller
{
    private $shop;
    private $token;

    public function index( \Illuminate\Http\Request $request )
    {

        $shopOwner   = new ShopOwner();
        $shop        = \App\Skeleton\Basic\Assist::getParam( 'shop' );
        $owner       = $shopOwner->where( 'shop' , $shop )->first();

        $data = [
          'shop'  => $shop ,
          'key'   => isset( $owner ) ? $owner->access_token : null
        ];

        return view('layouts/app', $data );
    }


    public function load( \Illuminate\Http\Request $request )
    {

        $shop = $request->input( 'shop' );

        if( strlen( $shop ) === 0 ) return json_encode( [] );

        $shopOwner = new ShopOwner();
        $shopOwner = $shopOwner->where( 'shop' , $shop )->first();

        if( ! isset( $shopOwner ) ) return json_encode( [] );

        $this->token = $shopOwner->access_token ;
        $this->shop  = $shop ;
        return json_encode([
            'metafields' => $this->fetchMetaFields(),
            'sections'   => $this->sections()
        ]);
    }

    public function fetchMetaFields( $page = 1 )
    {
        if( strlen( $this->shop ) === 0 || strlen( $this->token ) === 0 ) return [];
        $metafield = new Metafield();
        return $metafield->setShop( $this->shop )
            ->setAccessToken( $this->token )
            ->all( 50 , $page );
    }

    public function sections()
    {
        return [
            [ 'value' => 'articles' , 'text' => 'Articles' , 'disabled' => false ],
            [ 'value' => 'blogs' , 'text' => 'Blogs' , 'disabled' => false ],
            [ 'value' => 'collections' , 'text' => 'Collections' , 'disabled' => false ],
            [ 'value' => 'customers' , 'text' => 'Customers' , 'disabled' => false ],
            [ 'value' => 'draft_orders' , 'text' => 'Draft Orders' , 'disabled' => false ],
            [ 'value' => 'orders' , 'text' => 'Orders' , 'disabled' => false ],
            [ 'value' => 'pages' , 'text' => 'Pages' , 'disabled' => false ],
            [ 'value' => 'products' , 'text' => 'Products' , 'disabled' => false ],
            [ 'value' => 'images' , 'text' => 'Product Image' , 'disabled' => false ],
            [ 'value' => 'variants' , 'text' => 'Product Variant' , 'disabled' => false ],
            [ 'value' => 'shop' , 'text' => 'Shop' , 'disabled' => false ],
        ];
    }
}