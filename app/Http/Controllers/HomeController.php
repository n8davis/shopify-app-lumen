<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 7/19/18
 * Time: 6:38 PM
 */

namespace App\Http\Controllers;

use App\Skeleton\Model\ShopOwner;

class HomeController
{

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
}