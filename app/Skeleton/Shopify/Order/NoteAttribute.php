<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/11/18
 * Time: 2:50 PM
 */

namespace App\Skeleton\Shopify\Order;


class NoteAttribute
{

    protected $name;
    protected $value;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return NoteAttribute
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return NoteAttribute
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}