<?php
/**
 * \YafUnit\Request_Abstract 模拟Request抽象类
 * \Yaf\Request\Http 可被继承
 * @author Lancer He <lancer.he@gmail.com>
 * @since  2015-09-17
 */

namespace YafUnit\Request;

trait Base {

    protected $_get    = [];

    protected $_post   = [];

    protected $_cookie = [];

    protected $_files  = [];

    protected $_server = [];

    protected $_env    = [];

    public function setMethod($method) {
        $this->method = $method;
    }

    public function getQuery($name = null) {
        if (is_null($name)) return $this->_get;
        return isset($this->_get[$name]) ? $this->_get[$name] : null;
    }

    public function getPost($name = null) {
        if (is_null($name)) return $this->_post;
        return isset($this->_post[$name]) ? $this->_post[$name] : null;
    }

    public function getCookie($name = null) {
        if ( is_null($name) ) return $this->_cookie;
        return isset($this->_cookie[$name]) ? $this->_cookie[$name] : null;
    }

    public function getServer($name, $default = null) {
        if (is_null($name)) return $this->_server;
        return isset($this->_server[$name]) ? $this->_server[$name] : $default;
    }

    public function getEnv($name, $default = null) {
        if (is_null($name)) return $this->_env;
        return isset($this->_env[$name]) ? $this->_env[$name] : $default;
    }

    public function getFiles() {
        return $this->_files;
    }

    public function setPost($name, $value) {
        $this->setMethod('post');
        $this->_post[$name] = $value;
    }

    public function setQuery($name, $value) {
        $this->_get[$name] = $value;
    }

    public function setCookie($name, $value) {
        $this->_cookie[$name] = $value;
    }

    public function setServer($name, $value) {
        $this->_server[$name] = $value;
    }

    public function setFiles($files) {
        $this->_files = $files;
    }

    public function setEnv($name, $value) {
        $this->_env[$name] = $value;
    } 
}