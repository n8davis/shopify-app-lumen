<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/12/18
 * Time: 8:02 AM
 */
namespace App\Skeleton\Shopify\Blog;
class Article
{
    protected $author;
    protected $blog_id;
    protected $body_html;
    protected $created_at;
    protected $id;
    protected $handle;
    protected $image;
    protected $metafields;
    protected $published;
    protected $published_at;
    protected $summary_html;
    protected $tags;
    protected $template_suffix;
    protected $title;
    protected $updated_at;
    protected $user_id;

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     * @return Article
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBlogId()
    {
        return $this->blog_id;
    }

    /**
     * @param mixed $blog_id
     * @return Article
     */
    public function setBlogId($blog_id)
    {
        $this->blog_id = $blog_id;
        return $this;
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
     * @return Article
     */
    public function setBodyHtml($body_html)
    {
        $this->body_html = $body_html;
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
     * @return Article
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
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
     * @return Article
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return Article
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
     * @param \App\Skeleton\Shopify\Blog\Article\Image $image
     * @return Article
     */
    public function setImage( \App\Skeleton\Shopify\Blog\Article\Image $image)
    {
        $this->image = $image;
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
     * @param  \Skeleton\Shopify\AbstractMetafield  $metafields
     * @return Article
     */
    public function setMetafields( \Skeleton\Shopify\AbstractMetafield $metafields)
    {
        $this->metafields = $metafields;
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
     * @return Article
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
     * @return Article
     */
    public function setPublishedAt($published_at)
    {
        $this->published_at = $published_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSummaryHtml()
    {
        return $this->summary_html;
    }

    /**
     * @param mixed $summary_html
     * @return Article
     */
    public function setSummaryHtml($summary_html)
    {
        $this->summary_html = $summary_html;
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
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * @return Article
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     * @return Article
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }


}