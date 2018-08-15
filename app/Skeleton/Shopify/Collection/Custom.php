<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/12/18
 * Time: 8:11 AM
 */

namespace App\Skeleton\Shopify\Collection;


use App\Skeleton\Shopify\Collection\Custom\Image;
use App\Skeleton\Shopify\Collection\Custom\Metafield;
use App\Skeleton\Shopify\Shopify;

class Custom extends Shopify
{

    const SORT_ALPHA_ASC = 'alpha-asc';//: Alphabetically, in ascending order (A - Z).
    const SORT_ALPHA_DESC = 'alpha-desc';//: Alphabetically, in descending order (Z - A).
    const SORT_BEST_SELLING = 'best-selling';//: By best-selling products.
    const SORT_CREATED = 'created';//: By date created, in ascending order (oldest - newest).
    const SORT_CREATED_DESC = 'created-desc';//: By date created, in descending order (newest - oldest).
    const MANUAL = 'manual';//: Order created by the shop owner.
    const PRICE_ASC = 'price-asc';//: By price, in ascending order (lowest - highest).
    const PRICE_DESC = 'price-desc';//: By price, in descending order (highest - lowest).

    const SINGULAR_NAME = 'collection';
    const PLURAL_NAME ='collections';


    protected $body_html;
    protected $handle;
    protected $image;
    protected $id;
    protected $metafield;
    protected $published;
    protected $published_at;
    protected $published_scope;
    protected $sort_order;
    protected $template_suffix;
    protected $title;
    protected $updated_at;

    public function getSingularName()
    {
        return self::SINGULAR_NAME;
    }

    public function getPluralName()
    {
        return self::PLURAL_NAME;
    }

    /**
     * @return mixed
     */
    public function getBodyHtml()
    {
        return $this->body_html;
    }

    /**
     * @param mixed $body_html
     * @return Custom
     */
    public function setBodyHtml($body_html)
    {
        $this->body_html = $body_html;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHandle()
    {
        return $this->handle;
    }

    /**
     * @param mixed $handle
     * @return Custom
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param Image $image
     * @return Custom
     */
    public function setImage( Image $image)
    {
        $this->image = $image;
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
     * @return Custom
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return Custom
     */
    public function setMetafield( Metafield $metafield)
    {
        $this->metafield = $metafield;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @param mixed $published
     * @return Custom
     */
    public function setPublished($published)
    {
        $this->published = $published;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublishedAt()
    {
        return $this->published_at;
    }

    /**
     * @param mixed $published_at
     * @return Custom
     */
    public function setPublishedAt($published_at)
    {
        $this->published_at = $published_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublishedScope()
    {
        return $this->published_scope;
    }

    /**
     * @param mixed $published_scope
     * @return Custom
     */
    public function setPublishedScope($published_scope)
    {
        $this->published_scope = $published_scope;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSortOrder()
    {
        return $this->sort_order;
    }

    /**
     * @param mixed $sort_order
     * @return Custom
     */
    public function setSortOrder($sort_order)
    {
        $this->sort_order = $sort_order;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTemplateSuffix()
    {
        return $this->template_suffix;
    }

    /**
     * @param mixed $template_suffix
     * @return Custom
     */
    public function setTemplateSuffix($template_suffix)
    {
        $this->template_suffix = $template_suffix;
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
     * @return Custom
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
     * @return Custom
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }




}