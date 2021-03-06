<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/5/18
 * Time: 7:41 AM
 */

namespace App\Skeleton\Shopify;


class Webhook extends Shopify
{

    const SINGULAR_NAME = 'webhook';
    const PLURAL_NAME   = 'webhooks' ;

    protected $topic;
    protected $address;
    protected $format;

    public function getSingularName()
    {
        return self::SINGULAR_NAME;
    }

    public function getPluralName()
    {
        return self::PLURAL_NAME;
    }

    /**
     * @return mixed
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * @param mixed $topic
     * @return Webhook
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     * @return Webhook
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param mixed $format
     * @return Webhook
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }


}