<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/11/18
 * Time: 2:34 PM
 */

namespace App\Skeleton\Shopify;


use App\Skeleton\Shopify\Customer\DefaultAddress;
use App\Skeleton\Shopify\Customer\Metafield;

class Customer
{

    const DISABLED = 'disabled';
    const INVITED = 'invited';
    const ENABLED = 'enabled';
    const DECLINED = 'declined';

    protected $accepts_marketing;
    protected $addresses;
    protected $created_at;
    protected $default_address;
    protected $email;
    protected $first_name;
    protected $id;
    protected $last_name;
    protected $last_order_id;
    protected $last_order_name;
    protected $metafield;
    protected $multipass_identifier;
    protected $note;
    protected $orders_count;
    protected $phone;
    protected $state;
    protected $tags;
    protected $tax_exempt;
    protected $total_spent;
    protected $updated_at;
    protected $verified_email;

    /**
     * @return mixed
     */
    public function getAcceptsMarketing()
    {
        return $this->accepts_marketing;
    }

    /**
     * @param mixed $accepts_marketing
     * @return Customer
     */
    public function setAcceptsMarketing($accepts_marketing)
    {
        $this->accepts_marketing = $accepts_marketing;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @param mixed $addresses
     * @return Customer
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;
        return $this;
    }

    public function addAddress( $address )
    {
        
        $addresses = $this->getAddresses();
        $addresses[] = $address;
        $this->setAddresses( $addresses ) ;
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
     * @return Customer
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefaultAddress()
    {
        return $this->default_address;
    }

    /**
     * @param DefaultAddress $default_address
     * @return Customer
     */
    public function setDefaultAddress( DefaultAddress $default_address)
    {
        $this->default_address = $default_address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     * @return Customer
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
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
     * @return Customer
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     * @return Customer
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastOrderId()
    {
        return $this->last_order_id;
    }

    /**
     * @param mixed $last_order_id
     * @return Customer
     */
    public function setLastOrderId($last_order_id)
    {
        $this->last_order_id = $last_order_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastOrderName()
    {
        return $this->last_order_name;
    }

    /**
     * @param mixed $last_order_name
     * @return Customer
     */
    public function setLastOrderName($last_order_name)
    {
        $this->last_order_name = $last_order_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMetafield()
    {
        return $this->metafield;
    }

    /**
     * @param Metafield $metafield
     * @return Customer
     */
    public function setMetafield( Metafield $metafield)
    {
        $this->metafield = $metafield;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMultipassIdentifier()
    {
        return $this->multipass_identifier;
    }

    /**
     * @param mixed $multipass_identifier
     * @return Customer
     */
    public function setMultipassIdentifier($multipass_identifier)
    {
        $this->multipass_identifier = $multipass_identifier;
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
     * @return Customer
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrdersCount()
    {
        return $this->orders_count;
    }

    /**
     * @param mixed $orders_count
     * @return Customer
     */
    public function setOrdersCount($orders_count)
    {
        $this->orders_count = $orders_count;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     * @return Customer
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     * @return Customer
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     * @return Customer
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxExempt()
    {
        return $this->tax_exempt;
    }

    /**
     * @param mixed $tax_exempt
     * @return Customer
     */
    public function setTaxExempt($tax_exempt)
    {
        $this->tax_exempt = $tax_exempt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalSpent()
    {
        return $this->total_spent;
    }

    /**
     * @param mixed $total_spent
     * @return Customer
     */
    public function setTotalSpent($total_spent)
    {
        $this->total_spent = $total_spent;
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
     * @return Customer
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVerifiedEmail()
    {
        return $this->verified_email;
    }

    /**
     * @param mixed $verified_email
     * @return Customer
     */
    public function setVerifiedEmail($verified_email)
    {
        $this->verified_email = $verified_email;
        return $this;
    }


}