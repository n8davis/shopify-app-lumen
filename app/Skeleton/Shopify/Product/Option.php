<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/12/18
 * Time: 9:10 AM
 */

namespace App\Skeleton\Shopify\Product;


class Option
{

    protected $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Option
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}