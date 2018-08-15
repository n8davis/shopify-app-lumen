<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/12/18
 * Time: 8:30 AM
 */

namespace App\Skeleton\Shopify\Collection;


use App\Skeleton\Shopify\Collection\Smart\Metafield;
use App\Skeleton\Shopify\Collection\Smart\Rule;
use App\Skeleton\Shopify\Shopify;

class Smart extends Shopify
{

    protected $body_html;
    protected $handle;
    protected $id;
    protected $image;
    protected $published_at;
    protected $published_scope;
    protected $rules;
    protected $disjunctive;
    protected $sort_order;
    protected $template_suffix;
    protected $title;
    protected $updated_at;
    protected $metafield;

    const SINGULAR_NAME = 'smart_collection';
    const PLURAL_NAME ='smart_collections';

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
     * @return Smart
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
     * @return Smart
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;
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
     * @return Smart
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @param mixed $image
     * @return Smart
     */
    public function setImage($image)
    {
        $this->image = $image;
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
     * @return Smart
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
     * @return Smart
     */
    public function setPublishedScope($published_scope)
    {
        $this->published_scope = $published_scope;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * @param Rule $rules
     * @return Smart
     */
    public function setRules( Rule $rules)
    {
        $this->rules = $rules;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDisjunctive()
    {
        return $this->disjunctive;
    }

    /**
     * @param mixed $disjunctive
     * @return Smart
     */
    public function setDisjunctive($disjunctive)
    {
        $this->disjunctive = $disjunctive;
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
     * @return Smart
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
     * @return Smart
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
     * @return Smart
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
     * @return Smart
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
     * @param mixed $metafield
     * @return Smart
     */
    public function setMetafield( Metafield $metafield)
    {
        $this->metafield = $metafield;
        return $this;
    }


}