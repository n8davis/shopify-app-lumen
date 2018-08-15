<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/11/18
 * Time: 2:33 PM
 */

namespace App\Skeleton\Shopify\Order;

class ClientDetail
{
    protected $accept_language;
    protected $browser_height;
    protected $browser_ip;
    protected $browser_width;
    protected $session_hash;
    protected $user_agent;

    /**
     * @return mixed
     */
    public function getAcceptLanguage()
    {
        return $this->accept_language;
    }

    /**
     * @param mixed $accept_language
     * @return ClientDetail
     */
    public function setAcceptLanguage($accept_language)
    {
        $this->accept_language = $accept_language;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBrowserHeight()
    {
        return $this->browser_height;
    }

    /**
     * @param mixed $browser_height
     * @return ClientDetail
     */
    public function setBrowserHeight($browser_height)
    {
        $this->browser_height = $browser_height;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBrowserIp()
    {
        return $this->browser_ip;
    }

    /**
     * @param mixed $browser_ip
     * @return ClientDetail
     */
    public function setBrowserIp($browser_ip)
    {
        $this->browser_ip = $browser_ip;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBrowserWidth()
    {
        return $this->browser_width;
    }

    /**
     * @param mixed $browser_width
     * @return ClientDetail
     */
    public function setBrowserWidth($browser_width)
    {
        $this->browser_width = $browser_width;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSessionHash()
    {
        return $this->session_hash;
    }

    /**
     * @param mixed $session_hash
     * @return ClientDetail
     */
    public function setSessionHash($session_hash)
    {
        $this->session_hash = $session_hash;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserAgent()
    {
        return $this->user_agent;
    }

    /**
     * @param mixed $user_agent
     * @return ClientDetail
     */
    public function setUserAgent($user_agent)
    {
        $this->user_agent = $user_agent;
        return $this;
    }


}