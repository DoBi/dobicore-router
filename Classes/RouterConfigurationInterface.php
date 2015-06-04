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
 * This interface descripts a class, which returns a valid router configuration
 */
interface RouterConfigurationInterface {
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
    public function getRoutes();
}
