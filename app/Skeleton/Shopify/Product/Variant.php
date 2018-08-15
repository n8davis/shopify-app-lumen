<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/12/18
 * Time: 9:12 AM
 */

namespace App\Skeleton\Shopify\Product;


class Variant
{

    protected $barcode;
    protected $compare_at_price;
    protected $created_at;
    protected $fulfillment_service;
    protected $grams;
    protected $weight;
    protected $weight_unit;
    protected $id;
    protected $inventory_item_id;
    protected $inventory_management;
    protected $inventory_policy;
    protected $inventory_quantity;
    protected $option1;
    protected $position;
    protected $price;
    protected $product_id;
    protected $requires_shipping;
    protected $sku;
    protected $taxable;
    protected $title;
    protected $updated_at;
    protected $metafield;

    /**
     * @return mixed
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @param mixed $barcode
     * @return Variant
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompareAtPrice()
    {
        return $this->compare_at_price;
    }

    /**
     * @param mixed $compare_at_price
     * @return Variant
     */
    public function setCompareAtPrice($compare_at_price)
    {
        $this->compare_at_price = $compare_at_price;
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
     * @return Variant
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
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
     * @return Variant
     */
    public function setFulfillmentService($fulfillment_service)
    {
        $this->fulfillment_service = $fulfillment_service;
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
     * @return Variant
     */
    public function setGrams($grams)
    {
        $this->grams = $grams;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     * @return Variant
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWeightUnit()
    {
        return $this->weight_unit;
    }

    /**
     * @param mixed $weight_unit
     * @return Variant
     */
    public function setWeightUnit($weight_unit)
    {
        $this->weight_unit = $weight_unit;
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
     * @return Variant
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInventoryItemId()
    {
        return $this->inventory_item_id;
    }

    /**
     * @param mixed $inventory_item_id
     * @return Variant
     */
    public function setInventoryItemId($inventory_item_id)
    {
        $this->inventory_item_id = $inventory_item_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInventoryManagement()
    {
        return $this->inventory_management;
    }

    /**
     * @param mixed $inventory_management
     * @return Variant
     */
    public function setInventoryManagement($inventory_management)
    {
        $this->inventory_management = $inventory_management;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInventoryPolicy()
    {
        return $this->inventory_policy;
    }

    /**
     * @param mixed $inventory_policy
     * @return Variant
     */
    public function setInventoryPolicy($inventory_policy)
    {
        $this->inventory_policy = $inventory_policy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInventoryQuantity()
    {
        return $this->inventory_quantity;
    }

    /**
     * @param mixed $inventory_quantity
     * @return Variant
     */
    public function setInventoryQuantity($inventory_quantity)
    {
        $this->inventory_quantity = $inventory_quantity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOption1()
    {
        return $this->option1;
    }

    /**
     * @param mixed $option1
     * @return Variant
     */
    public function setOption1($option1)
    {
        $this->option1 = $option1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     * @return Variant
     */
    public function setPosition($position)
    {
        $this->position = $position;
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
     * @return Variant
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
     * @return Variant
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
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
     * @return Variant
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
     * @return Variant
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
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
     * @return Variant
     */
    public function setTaxable($taxable)
    {
        $this->taxable = $taxable;
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
     * @return Variant
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * @return Variant
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
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
     * @return Variant
     */
    public function setMetafield( \Skeleton\Shopify\Product\Variant\Metafield $metafield)
    {
        $this->metafield = $metafield;
        return $this;
    }


}