<?php
/**
 * Simple View Test
 * @author Lancer He <lancer.he@gmail.com>
 * @since  2015-09-16
 */

namespace YafUnit\Tests\View;

use YafUnit\View\Simple;

class SimpleTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function getInstance() {
        $View = Simple::getInstance();
        $this->assertEquals('YafUnit\View\Simple', get_class($View));
    }

    /**
     * @test
     */
    public function render() {
        $View = new Simple(__DIR__, []);
        $this->assertFalse( $View->render('test/index') );
    }

    /**
     * @test
     */
    public function display() {
        $View = new Simple(__DIR__, []);
        $this->assertFalse( $View->display('test/index') );
    }
}
