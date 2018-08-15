<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/13/18
 * Time: 9:49 PM
 */

namespace App\Skeleton\Model;


use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    public function blog()
    {
        return $this->belongsTo( 'App\Skeleton\Model\Blog'  ) ;
    }
}