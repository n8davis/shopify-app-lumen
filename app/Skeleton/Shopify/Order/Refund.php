<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/11/18
 * Time: 2:54 PM
 */

namespace App\Skeleton\Shopify\Order;


class Refund
{

    protected $id;
    protected $order_id;
    protected $created_at;
    protected $note;
    protected $user_id;
    protected $processed_at;
    protected $restock;
    protected $refund_line_items;
    protected $transactions;
    protected $order_adjustments;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Refund
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
     * @return Refund
     */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     * @return Refund
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     * @return Refund
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     * @return Refund
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProcessedAt()
    {
        return $this->processed_at;
    }

    /**
     * @param mixed $processed_at
     * @return Refund
     */
    public function setProcessedAt($processed_at)
    {
        $this->processed_at = $processed_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRestock()
    {
        return $this->restock;
    }

    /**
     * @param mixed $restock
     * @return Refund
     */
    public function setRestock($restock)
    {
        $this->restock = $restock;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRefundLineItems()
    {
        return $this->refund_line_items;
    }

    /**
     * @param mixed $refund_line_items
     * @return Refund
     */
    public function setRefundLineItems($refund_line_items)
    {
        $this->refund_line_items = $refund_line_items;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * @param mixed $transactions
     * @return Refund
     */
    public function setTransactions($transactions)
    {
        $this->transactions = $transactions;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrderAdjustments()
    {
        return $this->order_adjustments;
    }

    /**
     * @param mixed $order_adjustments
     * @return Refund
     */
    public function setOrderAdjustments($order_adjustments)
    {
        $this->order_adjustments = $order_adjustments;
        return $this;
    }


}