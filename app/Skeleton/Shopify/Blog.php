<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/12/18
 * Time: 8:00 AM
 */

namespace App\Skeleton\Shopify;


use App\Skeleton\Shopify\Blog\Metafield;

class Blog extends Shopify
{

    const COMMENTABLE_NO = 'no';
    const COMMENTABLE_MODERATE = 'moderate';
    const COMMENTABLE_YES  = 'yes';
    const SINGULAR_NAME = 'blog';
    const PLURAL_NAME = 'blogs';

    protected $commentable;
    protected $created_at;
    protected $feedburner;
    protected $feedburner_location;
    protected $handle;
    protected $id;
    protected $metafield;
    protected $tags;
    protected $template_suffix;
    protected $title;
    protected $updated_at;

    public function getSingularName(){
        return self::SINGULAR_NAME;
    }

    public function getPluralName()
    {
        return self::PLURAL_NAME;
    }

    /**
     * @return mixed
     */
    public function getCommentable()
    {
        return $this->commentable;
    }

    /**
     * @param mixed $commentable
     * @return Blog
     */
    public function setCommentable($commentable)
    {
        $this->commentable = $commentable;
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
     * @return Blog
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFeedburner()
    {
        return $this->feedburner;
    }

    /**
     * @param mixed $feedburner
     * @return Blog
     */
    public function setFeedburner($feedburner)
    {
        $this->feedburner = $feedburner;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFeedburnerLocation()
    {
        return $this->feedburner_location;
    }

    /**
     * @param mixed $feedburner_location
     * @return Blog
     */
    public function setFeedburnerLocation($feedburner_location)
    {
        $this->feedburner_location = $feedburner_location;
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
     * @return Blog
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
     * @return Blog
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
     * @return Blog
     */
    public function setMetafield( Metafield $metafield)
    {
        $this->metafield = $metafield;
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
     * @return Blog
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
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
     * @return Blog
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
     * @return Blog
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
     * @return Blog
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }


}