<?php
/**
 * Simple Request Test
 * @author Lancer He <lancer.he@gmail.com>
 * @since  2015-09-16
 */

namespace YafUnit\Tests\Request;

use YafUnit\Request\Http;

class HttpTest extends \PHPUnit_Framework_TestCase {

    public $Request;

    public function setUp() {
        $this->Request = new \YafUnit\Request\Http("/module/controller/action?id=2&sex=1");
    }

    /**
     * @test
     */
    public function constructMethod() {
        $this->assertEquals("Get", $this->Request->getMethod());
    }

    /**
     * @test
     */
    public function getQuery() {
        $this->assertEquals('2', $this->Request->getQuery('id'));
        $this->assertEquals('1', $this->Request->getQuery('sex'));
    }
}