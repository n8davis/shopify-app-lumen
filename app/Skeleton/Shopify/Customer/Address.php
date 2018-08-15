<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/12/18
 * Time: 8:18 AM
 */

namespace App\Skeleton\Shopify\Customer;


use App\Skeleton\Shopify\AbstractAddress;

class Address extends AbstractAddress
{
    protected $customer_id;
    protected $default;

    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * @param mixed $customer_id
     * @return Address
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param mixed $default
     * @return Address
     */
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }


}