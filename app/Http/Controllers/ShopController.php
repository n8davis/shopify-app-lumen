<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/8/18
 * Time: 9:16 PM
 */

namespace App\Http\Controllers;


use App\Skeleton\Model\ShopOwner;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * @param Request $request
     * @return string
     */
    public function access( Request $request )
    {
        $shop = $request->input( 'shop' );

        if( strlen( $shop ) === 0 ) return json_encode( [] );

        $shopOwner = new ShopOwner();
        $shopOwner = $shopOwner->where( 'shop' , $shop )->first();

        if( ! isset( $shopOwner ) ) return json_encode( [] );

        return json_encode( $shopOwner->access_token );
    }
}