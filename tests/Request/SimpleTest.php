<?php
namespace LancerHe\YafUnit\Tests\Request;

use LancerHe\YafUnit\Request\Simple;

/**
 * Class SimpleTest
 *
 * @package LancerHe\YafUnit\Tests\Request
 * @author  Lancer He <lancer.he@gmail.com>
 */
class SimpleTest extends \PHPUnit_Framework_TestCase {
    /**
     * @var Simple
     */
    public $Request;

    /**
     *
     */
    public function setUp() {
        $this->Request = new Simple('get', 'module', 'controller', 'action', ["id" => 2, "name" => "lancer"]);
    }

    /**
     * @test
     */
    public function getQuery() {
        $this->Request->setQuery('age', 27);
        $this->assertEquals(27, $this->Request->getQuery('age'));
    }

    /**
     * @test
     */
    public function getPost() {
        $this->Request->setPost('age', 27);
        $this->assertEquals(27, $this->Request->getPost('age'));
    }

    /**
     * @test
     */
    public function getPostMethod() {
        $this->Request->setPost('sex', '1');
        $this->assertEquals('post', $this->Request->getMethod());
    }

    /**
     * @test
     */
    public function getFiles() {
        $this->Request->setFiles(['age' => '2']);
        $this->assertEquals(['age' => '2'], $this->Request->getFiles());
    }

    /**
     * @test
     */
    public function getCookie() {
        $this->Request->setCookie('age', 27);
        $this->assertEquals(27, $this->Request->getCookie('age'));
    }

    /**
     * @test
     */
    public function getServer() {
        $this->Request->setServer('age', 27);
        $this->assertEquals(27, $this->Request->getServer('age'));
    }

    /**
     * @test
     */
    public function getEnv() {
        $this->Request->setEnv('age', 27);
        $this->assertEquals(27, $this->Request->getEnv('age'));
    }
}
