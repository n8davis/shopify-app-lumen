<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    public function shopInHeader()
    {
        foreach( getallheaders() as $name => $value ){
            if( strtolower( $name ) === env( 'APP_HEADER' ) ) return true;
        }
        return false;
    }
}
