<?php
namespace LancerHe\YafUnit\Tests\Request;

use LancerHe\YafUnit\Request\Http;

/**
 * Class HttpTest
 *
 * @package LancerHe\YafUnit\Tests\Request
 * @author  Lancer He <lancer.he@gmail.com>
 */
class HttpTest extends \PHPUnit_Framework_TestCase {
    /**
     * @var Http
     */
    public $Request;

    /**
     *
     */
    public function setUp() {
        $this->Request = new Http("/module/controller/action?id=2&sex=1");
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