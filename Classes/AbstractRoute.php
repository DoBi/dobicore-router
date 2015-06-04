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
 * The abstract route for all types of routes
 */
abstract class AbstractRoute {
    /**
     * The pattern
     *
     * @var string
     */
    protected $pattern;
    /**
     * The destination of the route
     *
     * @array
     */
    protected $destination;

    /**
     * Sets the route's pattern
     *
     * @param string $pattern
     * @return null
     */
    public function setPattern($pattern) {
        $this->pattern = $pattern;
    }

    /**
     * Gets the route pattern
     *
     * @return string The pattern
     */
    public function getPattern() {
        return $this->pattern;
    }

    /**
     * Checks if the given path matches this route
     *
     * @param string The requested path to check
     * @return bool
     */
    abstract public function match($request);
}
