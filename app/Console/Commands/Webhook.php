<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/13/18
 * Time: 10:11 PM
 */

namespace App\Console\Command;

use App\Skeleton\Model\Cron;
use App\Skeleton\Shopify\Webhook as ShopifyWebhook;
use Illuminate\Console\Command;

class Webhook extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:webhook';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create webhooks for new stores';
    /**
     * The list of webhooks to create in Shopify.
     * @var array
     */
    protected $webhooks = [
        'app/uninstalled'
    ];
    /**
     * BackupOrders constructor.
     * Create a new command instance.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $crons = Cron::where( [ ['status' , '=' , Cron::STATUS_PENDING ] , [ 'type' , '=' , Cron::TYPE_WEBHOOK ]  ] )->get();
        if( ! isset( $crons ) ) return false;
        foreach( $crons as $cron ){

            $shopifyWebhook = new ShopifyWebhook();
            $shopifyWebhook->setAccessToken( $cron->shopOwner->token )->setShop( $cron->shopOwner->shop );

            foreach( $this->webhooks as $webhook ){
                $result = $shopifyWebhook->setTopic( $webhook )
                    ->setFormat( 'json' )
                    ->setAddress( env( 'BASE_URL' ) . 'webhooks' )
                    ->save();
                if( $result === false ) $cron->update( [ 'status' => Cron::STATUS_ERROR ] );
                else $cron->update( [ 'status' => Cron::STATUS_COMPLETE ] );
            }
        }
    }
}