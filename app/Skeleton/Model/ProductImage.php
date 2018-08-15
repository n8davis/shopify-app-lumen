<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/13/18
 * Time: 9:51 PM
 */

namespace App\Skeleton\Model;


use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'product_images';

    public function product()
    {
        return $this->belongsTo( 'App\Skeleton\Model\Product' ) ;
    }
}