<?php
/**
 * The Cli Route
 *
 * @author Dominik Bittner
 */


namespace DoBi\Core\Router\Cli;

use DoBi\Core\Router\AbstractRoute;

/**
 * The commandline route
 */
class Route extends AbstractRoute {
    /**
     * Checks if the given path matches this route
     *
     * @param string The requested path to check
     * @return bool
     */
    public function match($request) {
        return (preg_match('/^' . $this->pattern . '$/', $request) === 1);
    }
}
