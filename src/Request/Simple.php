<?php
namespace LancerHe\YafUnit\Request;

use LancerHe\YafUnit\View\Simple as View;

/**
 * Class SimpleTrait
 * \LancerHe\YafUnit\Request\Simple 通过模块/控制器/方法等模拟一个Request对象
 *
 * @package YafUnit\Request
 * @author  Lancer He <lancer.he@gmail.com>
 */
trait SimpleTrait {
    /**
     * 初始化
     *
     * @param string $method     方法POST GET PUT...
     * @param string $module     模块
     * @param string $controller 控制器
     * @param string $action     方法
     * @param array  $params     参数
     */
    public function __construct($method, $module, $controller, $action, $params = []) {
        $this->method     = $method;
        $this->module     = $module;
        $this->controller = $controller;
        $this->action     = $action;
        $this->params     = $params;
        // 初始化一个新的测试请求时，清空模板
        View::getInstance()->clear();
    }
}

if ( ! defined('YAF_ENVIRON') ) {
    /**
     * Class Simple
     *
     * @package YafUnit\Request
     * @author  Lancer He <lancer.he@gmail.com>
     */
    final class Simple extends \Yaf\Request_Abstract {
        use SimpleTrait;
        use Base;
    }
} else {
    /**
     * Class Simple
     *
     * @package YafUnit\Request
     * @author  Lancer He <lancer.he@gmail.com>
     */
    final class Simple extends \Yaf_Request_Abstract {
        use SimpleTrait;
        use Base;
    }
}
