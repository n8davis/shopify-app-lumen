<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/13/18
 * Time: 9:52 PM
 */

namespace App\Skeleton\Model;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $primaryKey = 'id';

    public $incrementing = false;

    public function variants()
    {
        return $this->hasMany( 'App\Skeleton\Model\Variant' );
    }

    public function images()
    {
        return $this->hasMany( 'App\Skeleton\Model\Image' );
    }
}