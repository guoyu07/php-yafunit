<?php
namespace YafUnit\Request;

use YafUnit\RequestAbstract;
use YafUnit\View\Simple as View;

/**
 * Class HttpTrait
 * 模拟URL路径Request对象
 *
 * @package YafUnit\Request
 * @author  Lancer He <lancer.he@gmail.com>
 */
trait HttpTrait {
    /**
     * @param $request_uri
     */
    protected function _initParseRequestUri($request_uri) {
        $url_info = parse_url( $request_uri );
        if ( ! isset($url_info['query']) ) return;

        parse_str( $url_info['query'], $query);
        if ( empty($query) ) return;

        foreach ($query as $key => $value) {
            $this->setQuery($key, $value);
        }

        $this->setMethod('Get');

        // 手动分配路由，若已经继承Yaf\Request\Http类，不需要手动路由;
        // \Yaf\Dispatcher::getInstance()->getRouter()->route($this);

        // 初始化一个新的测试请求时，清空模板
        View::getInstance()->clear();
    }
}
if ( ! defined('YAF_ENVIRON') ) {
    /**
     * Class Http
     *
     * @package YafUnit\Request
     * @author  Lancer He <lancer.he@gmail.com>
     */
    final class Http extends \Yaf\Request\Http {
        use HttpTrait;
        use Base;

        /**
         * Http constructor.
         *
         * @param null $request_uri
         * @param null $base_uri
         */
        public function __construct($request_uri = null, $base_uri = null) {
            parent::__construct($request_uri, $base_uri);

            $this->_initParseRequestUri($request_uri);
        }
    }

} else {
    /**
     * Class Http
     *
     * @package YafUnit\Request
     * @author  Lancer He <lancer.he@gmail.com>
     */
    final class Http extends \Yaf_Request_Http {
        use HttpTrait;
        use Base;

        /**
         * Http constructor.
         *
         * @param null $request_uri
         * @param null $base_uri
         */
        public function __construct($request_uri = null, $base_uri = null) {
            parent::__construct($request_uri, $base_uri);

            $this->_initParseRequestUri($request_uri);
        }
    }
}
