<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/11/18
 * Time: 2:44 PM
 */

namespace App\Skeleton\Shopify\Order;


class Fulfillment
{
    protected $created_at;
    protected $id;
    protected $order_id;
    protected $status;
    protected $tracking_company;
    protected $tracking_number;
    protected $updated_at;

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     * @return Fulfillment
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Fulfillment
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param mixed $order_id
     * @return Fulfillment
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return Fulfillment
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTrackingCompany()
    {
        return $this->tracking_company;
    }

    /**
     * @param mixed $tracking_company
     * @return Fulfillment
     */
    public function setTrackingCompany($tracking_company)
    {
        $this->tracking_company = $tracking_company;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTrackingNumber()
    {
        return $this->tracking_number;
    }

    /**
     * @param mixed $tracking_number
     * @return Fulfillment
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->tracking_number = $tracking_number;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     * @return Fulfillment
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }


}