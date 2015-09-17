<?php
/**
 * Simple Request Test
 * @author Lancer He <lancer.he@gmail.com>
 * @since  2015-09-16
 */

namespace YafUnit\Tests\Request;

use YafUnit\Request\Simple;

class SimpleTest extends \PHPUnit_Framework_TestCase {

    public $Request;

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
}
