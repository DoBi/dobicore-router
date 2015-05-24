<?php
/**
 * The RouterConfigurationInterface
 *
 * @author Dominik Bittner
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
