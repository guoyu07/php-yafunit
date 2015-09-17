<?php
/**
 * \YafUnit\View 通过模拟一个无法渲染无法读取模板的视图引擎获取视图中变量
 * 子类\Yaf\View\Simple
 * @author Lancer He <lancer.he@gmail.com>
 * @since  2014-04-18
 * @update 2015-07-10
 */

namespace YafUnit\View;

final class Simple extends \Yaf\View\Simple {

    protected static $_instance = null;

    /**
     * 初始化一个单例对象，不需要模板路径以及任何渲染参数，随意设置一个模板路径
     * @return View object
     */
    public static function getInstance() {
        if ( ! self::$_instance) {
            self::$_instance = new self( __DIR__, [] );
        }
        return self::$_instance;
    }


    /**
     * 渲染为空
     * @param  string $view_path 视图路径
     * @param  array  $tpl_vars  变量
     * @return false
     */
    public function render( $view_path, $tpl_vars = null ) {
        return false;
    }


    /**
     * 读取模板为空
     * @param  string $view_path 视图路径
     * @param  array  $tpl_vars  变量
     * @return false
     */
    public function display( $view_path, $tpl_vars = null) {
        return false;
    }
}