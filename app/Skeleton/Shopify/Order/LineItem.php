<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/11/18
 * Time: 2:47 PM
 */

namespace App\Skeleton\Shopify\Order;


class LineItem
{
    protected $fulfillable_quantity;
    protected $fulfillment_service;
    protected $fulfillment_status;
    protected $grams;
    protected $id;
    protected $price;
    protected $product_id;
    protected $quantity;
    protected $requires_shipping;
    protected $sku;
    protected $title;
    protected $variant_id;
    protected $variant_title;
    protected $vendor;
    protected $name;
    protected $gift_card;
    protected $properties;
    protected $taxable;
    protected $tax_lines;
    protected $total_discount;
    protected $discount_allocations;

    /**
     * @return mixed
     */
    public function getFulfillableQuantity()
    {
        return $this->fulfillable_quantity;
    }

    /**
     * @param mixed $fulfillable_quantity
     * @return LineItem
     */
    public function setFulfillableQuantity($fulfillable_quantity)
    {
        $this->fulfillable_quantity = $fulfillable_quantity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFulfillmentService()
    {
        return $this->fulfillment_service;
    }

    /**
     * @param mixed $fulfillment_service
     * @return LineItem
     */
    public function setFulfillmentService($fulfillment_service)
    {
        $this->fulfillment_service = $fulfillment_service;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFulfillmentStatus()
    {
        return $this->fulfillment_status;
    }

    /**
     * @param mixed $fulfillment_status
     * @return LineItem
     */
    public function setFulfillmentStatus($fulfillment_status)
    {
        $this->fulfillment_status = $fulfillment_status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGrams()
    {
        return $this->grams;
    }

    /**
     * @param mixed $grams
     * @return LineItem
     */
    public function setGrams($grams)
    {
        $this->grams = $grams;
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
     * @return LineItem
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     * @return LineItem
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param mixed $product_id
     * @return LineItem
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     * @return LineItem
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRequiresShipping()
    {
        return $this->requires_shipping;
    }

    /**
     * @param mixed $requires_shipping
     * @return LineItem
     */
    public function setRequiresShipping($requires_shipping)
    {
        $this->requires_shipping = $requires_shipping;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $sku
     * @return LineItem
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return LineItem
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVariantId()
    {
        return $this->variant_id;
    }

    /**
     * @param mixed $variant_id
     * @return LineItem
     */
    public function setVariantId($variant_id)
    {
        $this->variant_id = $variant_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVariantTitle()
    {
        return $this->variant_title;
    }

    /**
     * @param mixed $variant_title
     * @return LineItem
     */
    public function setVariantTitle($variant_title)
    {
        $this->variant_title = $variant_title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @param mixed $vendor
     * @return LineItem
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return LineItem
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGiftCard()
    {
        return $this->gift_card;
    }

    /**
     * @param mixed $gift_card
     * @return LineItem
     */
    public function setGiftCard($gift_card)
    {
        $this->gift_card = $gift_card;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param mixed $properties
     * @return LineItem
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxable()
    {
        return $this->taxable;
    }

    /**
     * @param mixed $taxable
     * @return LineItem
     */
    public function setTaxable($taxable)
    {
        $this->taxable = $taxable;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxLines()
    {
        return $this->tax_lines;
    }

    /**
     * @param mixed $tax_lines
     * @return LineItem
     */
    public function setTaxLines($tax_lines)
    {
        $this->tax_lines = $tax_lines;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalDiscount()
    {
        return $this->total_discount;
    }

    /**
     * @param mixed $total_discount
     * @return LineItem
     */
    public function setTotalDiscount($total_discount)
    {
        $this->total_discount = $total_discount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscountAllocations()
    {
        return $this->discount_allocations;
    }

    /**
     * @param mixed $discount_allocations
     * @return LineItem
     */
    public function setDiscountAllocations($discount_allocations)
    {
        $this->discount_allocations = $discount_allocations;
        return $this;
    }


}