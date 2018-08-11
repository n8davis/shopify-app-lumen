<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/8/18
 * Time: 8:08 PM
 */

namespace App\Http\Middleware;


class AuthMiddleware
{

    /**
     * @param $request
     * @param \Closure $next
     * @return \Illuminate\Http\RedirectResponse|\Laravel\Lumen\Http\Redirector
     */
    public function handle($request, \Closure $next)
    {

        if( strlen( $request->input( 'shop' ) ) === 0 ) exit;

        $shopOwner = new \App\Skeleton\Model\ShopOwner();
        $shop      = $shopOwner->where( 'shop', $request->input( 'shop' ) )->first();

        if( is_null( $shop ) ){
            $scopes      = 'read_shipping,write_shipping';
            $redirectUrl =  rawurlencode( \App\Skeleton\Skeleton::baseUrl(). 'redirect'  );
            $authUrl     = \App\Skeleton\Shopify\Auth::authRequest( $scopes , $redirectUrl );
            return redirect( $authUrl , 302 , [] , true );
        }

        return $next($request);
    }
}