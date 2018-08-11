<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/8/18
 * Time: 9:16 PM
 */

namespace App\Http\Controllers;


class ShopController
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \Illuminate\Http\Response $response
     * @var ShopOwner $shopOwner
     * @return mixed
     */
    public function access( \Illuminate\Http\Request $request , $response )
    {
        return json_encode( $request->input() ) ;
    }
}