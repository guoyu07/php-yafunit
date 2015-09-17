<?php
/**
 * \YafUnit\Request_Abstract 模拟Request抽象类
 * \Yaf\Request\Http 可被继承
 * @author Lancer He <lancer.he@gmail.com>
 * @since  2015-09-17
 */

namespace YafUnit\Request;

trait Base {

    public function setMethod($method) {
        $this->method = $method;
    }

    public function getQuery($name = null) {
        if (is_null($name)) return $_GET;
        return isset($_GET[$name]) ? $_GET[$name] : null;
    }

    public function getPost($name = null) {
        if (is_null($name)) return $_POST;
        return isset($_POST[$name]) ? $_POST[$name] : null;
    }

    public function getCookie($name = null) {
        if ( is_null($name) ) return $_COOKIE;
        return isset($_COOKIE[$name]) ? $_COOKIE[$name] : null;
    }

    public function getFiles($name = null) {
        if (is_null($name)) return $_FILES;
        return isset($_FILES[$name]) ? $_FILES[$name] : null;
    }

    public function getServer($name, $default = null) {
        if (is_null($name)) return $_SERVER;
        return isset($_SERVER[$name]) ? $_SERVER[$name] : null;
    }

    public function getEnv($name, $default = null) {
        if (is_null($name)) return $_ENV;
        return isset($_ENV[$name]) ? $_ENV[$name] : null;
    }

    public function setPost($name, $value) {
        $this->setMethod('post');
        $_POST[$name] = $value;
    }

    public function setQuery($name, $value) {
        $_GET[$name] = $value;
    }

    public function setCookie($name, $value) {
        $_COOKIE[$name] = $value;
    }

    public function setServer($name, $value) {
        $_SERVER[$name] = $value;
    }

    public function setEnv($name, $value) {
        $_ENV[$name] = $value;
    } 
}