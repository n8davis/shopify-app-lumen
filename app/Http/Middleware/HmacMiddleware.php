<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/8/18
 * Time: 5:58 PM
 */

namespace App\Http\Middleware;


use App\Skeleton\Model\ShopOwner;
use App\Skeleton\Shopify\Auth;
use Illuminate\Support\Facades\Request;

class HmacMiddleware
{
    /**
     * @param Request $request
     * @param \Closure $next
     * @return mixed
     * @throws \Exception
     */
    public function handle($request, \Closure $next)
    {
        if( Auth::verify() ) return $next($request);
        exit( '' ) ;
    }
}