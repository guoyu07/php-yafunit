<?php
/**
 * \YafUnit\Request\Simple 通过模块/控制器/方法等模拟一个Request对象
 * \Yaf\Request\Simple final不可被继承
 * @author Lancer He <lancer.he@gmail.com>
 * @since  2014-04-18
 */

namespace YafUnit\Request;

use YafUnit\Request\Base;

final class Simple extends \Yaf\Request_Abstract {

    use Base;

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
        \YafUnit\View\Simple::getInstance()->clear();
    }
}
