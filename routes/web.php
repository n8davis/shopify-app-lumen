<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
//
$router->get('/', ['middleware' => [ 'hmac' , 'auth' ] , function () {
    return response( view( 'app' , [] ) )
    ->header('Cache-Control', 'max-age=21600, no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
} ] );
$router->post('/home/load', 'HomeController@load');
$router->post('/dashboard/load', 'DashboardController@load');
$router->post('/blogs/load', 'BlogsController@load');

$router->post('/shops/access', 'ShopController@access');

$router->get('/redirect', 'ShopifyController@install');
$router->post('/webhooks', 'ShopifyController@webhook');
$router->post('/shop/delete', 'ShopifyController@redactShop');
$router->post('/cust/redact', 'ShopifyController@redactCustomer');
$router->post('/customers/data_request', 'ShopifyController@customerDataRequest');
$router->post('/shopify/fetch', 'ShopifyController@fetch');
