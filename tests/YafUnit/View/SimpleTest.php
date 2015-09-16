<?php
/**
 * AES Library Test
 * @author Lancer He <lancer.he@gmail.com>
 * @since  2014-10-27
 */

namespace YafUnit\Tests\View;

use YafUnit\View\Simple;

class SimpleTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function render() {
        new \YafUnit\View\Simple(__DIR__, array() );
    }
}
