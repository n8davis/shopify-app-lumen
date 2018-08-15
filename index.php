<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| First we need to get an application instance. This creates an instance
| of the application / container and bootstraps the application so it
| is ready to receive HTTP / Console requests from the environment.
|
*/
$app = require __DIR__.'/bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$version  = '1.0.109';
$accepted = [ 'x-skeleton-app-header' , 'x-shopify-hmac-sha256' ];
$skeleton = new \App\Skeleton\Skeleton( \App\Skeleton\Basic\Assist::getParam( 'shop' ) );
$useSlim  = false  ;

// use slim app or shopify header is present
foreach( getallheaders() as $name => $header ) if( in_array( strtolower( $name ) , $accepted ) ) $useSlim = true;
if( $useSlim ) $app->run();
else{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv='cache-control' content='no-cache'>
        <meta http-equiv='expires' content='0'>
        <meta http-equiv='pragma' content='no-cache'>

        <link rel="stylesheet" href="public/css/app.css?v=<?php echo $version;?>" />

        <script src="https://cdn.shopify.com/s/assets/external/app.js"></script>

    </head>
    <body>
    <div id="app"></div>
    <script src="views/assets/js/functions.js?v=<?php echo $version;?>" type="text/javascript"></script>
    <script src="public/js/app.js?v=<?php echo $version;?>" type="text/javascript"></script>
    </body>
    </html>
    <?php
}
?>
