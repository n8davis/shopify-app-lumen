<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/13/18
 * Time: 9:49 PM
 */

namespace App\Skeleton\Model;


use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $primaryKey = 'id';

    public $incrementing = false;

    public function articles()
    {
        return $this->hasMany('App\Skeleton\Model\Article' );
    }

}