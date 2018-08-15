<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/13/18
 * Time: 9:42 PM
 */

namespace App\Skeleton\Model;


use Illuminate\Database\Eloquent\Model;

class Cron extends Model
{
    const TYPE_WEBHOOK = 1;
    const TYPE_STORE_INFO = 2;

    const STATUS_PENDING = 1;
    const STATUS_RUNNING = 2;
    const STATUS_COMPLETE = 3;
    const STATUS_ERROR = 4;

    public static function installProcesses()
    {
        return [
            self::TYPE_WEBHOOK,
            self::TYPE_STORE_INFO,
        ];
    }

    public function shopOwner()
    {
        return $this->belongsTo( 'App\Skeleton\Model\ShopOwner' ) ;
    }

}