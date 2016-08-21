<?php
namespace LancerHe\YafUnit\Request;

/**
 * Class Base
 *
 * @package YafUnit\Request
 * @author  Lancer He <lancer.he@gmail.com>
 */
trait Base {
    /**
     * @var array
     */
    protected $_get = [];
    /**
     * @var array
     */
    protected $_post = [];
    /**
     * @var array
     */
    protected $_cookie = [];
    /**
     * @var array
     */
    protected $_files = [];
    /**
     * @var array
     */
    protected $_server = [];
    /**
     * @var array
     */
    protected $_env = [];

    /**
     * @param $method
     */
    public function setMethod($method) {
        $this->method = $method;
    }

    /**
     * @param null $name
     * @return array|null
     */
    public function getQuery($name = null) {
        if (is_null($name)) return $this->_get;
        return isset($this->_get[$name]) ? $this->_get[$name] : null;
    }

    /**
     * @param null $name
     * @return array|null
     */
    public function getPost($name = null) {
        if (is_null($name)) return $this->_post;
        return isset($this->_post[$name]) ? $this->_post[$name] : null;
    }

    /**
     * @param null $name
     * @return array|null
     */
    public function getCookie($name = null) {
        if ( is_null($name) ) return $this->_cookie;
        return isset($this->_cookie[$name]) ? $this->_cookie[$name] : null;
    }

    /**
     * @param      $name
     * @param null $default
     * @return array|null
     */
    public function getServer($name, $default = null) {
        if (is_null($name)) return $this->_server;
        return isset($this->_server[$name]) ? $this->_server[$name] : $default;
    }

    /**
     * @param      $name
     * @param null $default
     * @return array|null
     */
    public function getEnv($name, $default = null) {
        if (is_null($name)) return $this->_env;
        return isset($this->_env[$name]) ? $this->_env[$name] : $default;
    }

    /**
     * @return array
     */
    public function getFiles() {
        return $this->_files;
    }

    /**
     * @param $name
     * @param $value
     */
    public function setPost($name, $value) {
        $this->setMethod('post');
        $this->_post[$name] = $value;
    }

    /**
     * @param $name
     * @param $value
     */
    public function setQuery($name, $value) {
        $this->_get[$name] = $value;
    }

    /**
     * @param $name
     * @param $value
     */
    public function setCookie($name, $value) {
        $this->_cookie[$name] = $value;
    }

    /**
     * @param $name
     * @param $value
     */
    public function setServer($name, $value) {
        $this->_server[$name] = $value;
    }

    /**
     * @param $files
     */
    public function setFiles($files) {
        $this->_files = $files;
    }

    /**
     * @param $name
     * @param $value
     */
    public function setEnv($name, $value) {
        $this->_env[$name] = $value;
    }
}