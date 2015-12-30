<?php
namespace YafUnit\Plugin;

if ( ! defined('YAF_ENVIRON') ) {
    /**
     * Class View
     *
     * @package YafUnit\Plugin
     * @author  Lancer He <lancer.he@gmail.com>
     */
    final class View extends \Yaf\Plugin_Abstract {
        /**
         * 路由结束以后注册View
         */
        public function routerShutdown(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response) {
            \Yaf\Dispatcher::getInstance()->disableView();
            \Yaf\Dispatcher::getInstance()->setView( \YafUnit\View\Simple::getInstance() );
        }
    }
} else {
    /**
     * Class View
     *
     * @package YafUnit\Plugin
     * @author  Lancer He <lancer.he@gmail.com>
     */
    final class View extends \Yaf_Plugin_Abstract {
        /**
         * 路由结束以后注册View
         */
        public function routerShutdown(\Yaf_Request_Abstract $request, \Yaf_Response_Abstract $response) {
            \Yaf_Dispatcher::getInstance()->disableView();
            \Yaf_Dispatcher::getInstance()->setView( \YafUnit\View\Simple::getInstance() );
        }
    }
}