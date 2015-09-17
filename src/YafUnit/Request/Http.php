<?php
/**
 * \YafUnit\Request\Http 模拟URL路径Request对象
 * \Yaf\Request\Http 可被继承
 * @author Lancer He <lancer.he@gmail.com>
 * @since  2014-04-18
 */

namespace YafUnit\Request;

use YafUnit\RequestAbstract;
use YafUnit\View\Simple as View;

final class Http extends \Yaf\Request\Http {

    use Base;

    public function __construct($request_uri = null, $base_uri = null) {
        parent::__construct($request_uri, $base_uri);

        // 解析Url的GET参数
        $this->_initParseRequestUri($request_uri);

        // 默认使用GET请求
        $this->setMethod('Get');

        // 手动分配路由，若已经继承Yaf\Request\Http类，不需要手动路由;
        // \Yaf\Dispatcher::getInstance()->getRouter()->route($this);

        // 初始化一个新的测试请求时，清空模板
        View::getInstance()->clear();
    }

    protected function _initParseRequestUri($request_uri) {
        $url_info = parse_url( $request_uri );
        if ( ! isset($url_info['query']) ) return;

        parse_str( $url_info['query'], $query);
        if ( empty($query) ) return;

        foreach ($query as $key => $value) {
            $this->setQuery($key, $value);
        }
    }
}