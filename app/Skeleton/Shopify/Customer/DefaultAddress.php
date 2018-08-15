<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/12/18
 * Time: 8:19 AM
 */

namespace App\Skeleton\Shopify\Customer;


use App\Skeleton\Shopify\AbstractAddress;

class DefaultAddress extends AbstractAddress
{

    protected $default;

    /**
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param mixed $default
     * @return DefaultAddress
     */
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }



}