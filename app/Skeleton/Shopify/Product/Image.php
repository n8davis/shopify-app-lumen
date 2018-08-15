<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/12/18
 * Time: 9:09 AM
 */

namespace App\Skeleton\Shopify\Product;


class Image
{

    protected $id;
    protected $product_id;
    protected $position;
    protected $created_at;
    protected $updated_at;
    protected $width;
    protected $height;
    protected $src;
    protected $variant_ids;
    protected $metafields;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Image
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return Image
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
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
     * @return Image
     */
    public function setPosition($position)
    {
        $this->position = $position;
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
     * @return Image
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
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
     * @return Image
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     * @return Image
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     * @return Image
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * @param mixed $src
     * @return Image
     */
    public function setSrc($src)
    {
        $this->src = $src;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVariantIds()
    {
        return $this->variant_ids;
    }

    /**
     * @param mixed $variant_ids
     * @return Image
     */
    public function setVariantIds($variant_ids)
    {
        $this->variant_ids = $variant_ids;
        return $this;
    }

    public function addVariantId( $id )
    {
        $ids = $this->getVariantIds();
        $ids[] = $id ;
        $this->setVariantIds( $ids );
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMetafields()
    {
        return $this->metafields;
    }

    /**
     * @param mixed $metafields
     * @return Image
     */
    public function setMetafields( \Skeleton\Shopify\Product\Variant\Image\Metafield $metafields)
    {
        $this->metafields = $metafields;
        return $this;
    }


}