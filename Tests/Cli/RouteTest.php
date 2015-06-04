<?php
/**
 * This file is part of dobicore-router.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 *
 * @copyright 2015 Dominik Bittner<DoBi-tyndur@gmx.net>
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD 3-Clause
 * @author    Dominik Bittner
 */

namespace DoBi\Core\Router\Cli;

class RouteTest extends \PHPUnit_Framework_TestCase {
    private $route;

    public function setUp() {
        $this->route = new Route();
    }

    public function testSetPattern() {
        $expectedPattern = 'Test:Function {id}';
        $this->assertEquals('', $this->route->getPattern());

        $this->route->setPattern($expectedPattern);

        $this->assertEquals($expectedPattern, $this->route->getPattern());
    }

    /**
     * @dataProvider matchingDataProvider
     */
    public function testMatch($string, $result) {
        $this->route->setPattern("Test:Function [1-9]{1,3}");

        $this->assertSame($result, $this->route->match($string));
    }

    public function matchingDataProvider() {
        return array(
            array("Test:Function 1", true),
            array("Test:Function 23", true),
            array("Test:Function 987", true),
            array("1", false),
            array("Test:Function 1234", false),
            array("Test: 1", false)
        );
    }
}
