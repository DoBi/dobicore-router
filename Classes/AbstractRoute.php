<?php
/**
 * The abstract route for all types of routes
 *
 * @author Dominik Bittner
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
