<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/13/18
 * Time: 9:51 PM
 */

namespace App\Skeleton\Model;


use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    protected $table = 'product_variants';

    public function product()
    {
        return $this->belongsTo( 'App\Skeleton\Model\Product' ) ;
    }
}