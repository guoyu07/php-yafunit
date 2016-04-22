<?php
namespace YafUnit\View;

/**
 * Class Base
 * 通过模拟一个无法渲染无法读取模板的视图引擎获取视图中变量
 *
 * @package YafUnit\View
 * @author  Lancer He <lancer.he@gmail.com>
 */
trait Base {
    /**
     * @var null
     */
    protected static $_instance = null;

    /**
     * 初始化一个单例对象，不需要模板路径以及任何渲染参数，随意设置一个模板路径
     *
     * @return View object
     */
    public static function getInstance() {
        if ( ! self::$_instance ) {
            self::$_instance = new self(__DIR__, []);
        }
        return self::$_instance;
    }

    /**
     * 渲染为空
     *
     * @param  string $view_path 视图路径
     * @param  array  $tpl_vars  变量
     * @return false
     */
    public function render($view_path, $tpl_vars = null) {
        return false;
    }

    /**
     * 读取模板为空
     *
     * @param  string $view_path 视图路径
     * @param  array  $tpl_vars  变量
     * @return false
     */
    public function display($view_path, $tpl_vars = null) {
        return false;
    }

    /**
     * 继承Simple类的其他方法通过assign做验收测试
     */
    public function __call($name, $args) {
        $this->assign($name, $args);
    }
}

if ( ! defined('YAF_ENVIRON') ) {
    /**
     * Class Simple
     *
     * @package YafUnit\View
     * @author  Lancer He <lancer.he@gmail.com>
     */
    final class Simple extends \Yaf\View\Simple {
        use Base;
    }
} else {
    /**
     * Class Simple
     *
     * @package YafUnit\View
     * @author  Lancer He <lancer.he@gmail.com>
     */
    final class Simple extends \Yaf_View_Simple {
        use Base;
    }
}