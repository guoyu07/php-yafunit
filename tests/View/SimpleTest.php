<?php
namespace LancerHe\YafUnit\Tests\View;

use LancerHe\YafUnit\View\Simple;

/**
 * Class SimpleTest
 *
 * @package LancerHe\YafUnit\Tests\View
 * @author  Lancer He <lancer.he@gmail.com>
 */
class SimpleTest extends \PHPUnit_Framework_TestCase {
    /**
     * @test
     */
    public function getInstance() {
        $View = Simple::getInstance();
        $this->assertEquals('LancerHe\YafUnit\View\Simple', get_class($View));
    }

    /**
     * @test
     */
    public function render() {
        $View = new Simple(__DIR__, []);
        $this->assertFalse($View->render('test/index'));
    }

    /**
     * @test
     */
    public function display() {
        $View = new Simple(__DIR__, []);
        $this->assertFalse($View->display('test/index'));
    }
}
