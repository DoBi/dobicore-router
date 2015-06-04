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

/**
 * A simple configuration class which reads the configuration from a json file
 */
class JsonRouterConfiguration implements RouterConfigurationInterface {

    /**
     * The decoded json string as php array
     */
    private $configurationArray;

    /**
     * Creates a new instance of the JsonRouterConfiguration
     *
     * @param $configurationFile The json file
     */
    public function __construct($configurationFile) {
        $jsonString = file_get_contents($configurationFile);

        $this->configurationArray = json_decode($jsonString, true);
    }

    /**
     * Retuns the configured routes as an array
     *
     * This array has to have this format:
     * array(
     *     "[NameRoute1]" => array(
     *         "Class"   => "[Classname]",
     *         "Method"  => "[Methodname]",
     *         "Pattern" => array(
     *             "Cli"  => "[CommandlinePattern]",
     *             "Http" => "[UrlPattern]"
     *         )
     *     ),
     *     [...]
     * )
     *
     * @return The routes as an array
     */
    public function getRoutes() {
        return $this->configurationArray;
    }
}
