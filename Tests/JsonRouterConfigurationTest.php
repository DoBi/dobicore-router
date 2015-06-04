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

namespace DoBi\Core\Router;

require __DIR__ . DS . 'RouterConfigurationInterfaceTest.php';

class JsonRouterConfigurationTest extends RouterConfigurationInterfaceTest {

    public function getRouterConfiguration() {
        $jsonFile = __DIR__ .  DS . 'Files' . DS . 'ValidJsonConfiguration.json';
        return new JsonRouterConfiguration($jsonFile);
    }
}
