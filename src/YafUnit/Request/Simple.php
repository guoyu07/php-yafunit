<?php
/**
 * \YafUnit\Request\Simple 通过模块/控制器/方法等模拟一个Request对象
 * \Yaf\Request\Simple final不可被继承
 * @author Lancer He <lancer.he@gmail.com>
 * @since  2014-04-18
 */

namespace YafUnit\Request;

final class Simple extends \Yaf\Request_Abstract {

    /**
     * 初始化
     * @param string $method     方法POST GET PUT...
     * @param string $module     模块
     * @param string $controller 控制器
     * @param string $action     方法
     * @param array  $params     参数
     */
    public function __construct($method, $module, $controller, $action, $params = array()) {
        $this->method     = $method;
        $this->module     = $module;
        $this->controller = $controller;
        $this->action     = $action;
        $this->params     = $params;
        // 初始化一个新的测试请求时，清空模板
        \YafUnit\View::getInstance()->clear();
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
    }

    public function getEnv($name, $default = null) {
    }

    public function setPost($name, $value) {
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
}
