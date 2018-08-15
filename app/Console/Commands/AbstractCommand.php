<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/13/18
 * Time: 10:10 PM
 */

namespace App\Console\Command;
use Illuminate\Console\Command;


class AbstractCommand extends Command
{
    public $shop ;
    public $errors = [];

    public function log( $data , $color = '1;32m')
    {
        if( is_string( $data ) ) echo "\033[" . $color . $data  . "\033[0m \n";
        else var_dump( $data ) ;
        return true;
    }

}