<?php

namespace YafUnit\Plugin;

final class View extends \Yaf\Plugin_Abstract {

    /**
     * 路由结束以后注册View
     */
    public function routerShutdown(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response) {
        \Yaf\Dispatcher::getInstance()->disableView();
        \Yaf\Dispatcher::getInstance()->setView( \YafUnit\View\Simple::getInstance() );
    }
}