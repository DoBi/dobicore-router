<?php
/**
 * @author Dominik Bittner
 */


namespace DoBi\Core\Router;

/**
 * Provides a base test class for ensuring compliance with the
 * RouterConfigurationInterface
 */
abstract class RouterConfigurationInterfaceTest extends \PHPUnit_Framework_TestCase {
    /**
     * @return RouterConfigurationInterface
     */
    abstract public function getRouterConfiguration();

    public function testImplements() {
        $this->assertInstanceOf('DoBi\Core\Router\RouterConfigurationInterface', $this->getRouterConfiguration());
    }

    public function testRoutesFormat() {
        $routes = $this->getRouterConfiguration()->getRoutes();

        $this->assertGreaterThan(0, count($routes));

        foreach($routes as $name => $route) {
            $this->assertFalse(empty($name));

            $this->assertArrayHasKey('Class', $route);
            $this->assertFalse(empty($route['Class']));

            $this->assertArrayHasKey('Method', $route);
            $this->assertFalse(empty($route['Method']));

            $this->assertArrayHasKey('Pattern', $route);
            $this->assertFalse(empty($route['Pattern']));

            $this->assertArrayHasKey('Cli', $route['Pattern']);
            $this->assertArrayHasKey('Http', $route['Pattern']);

            // Http OR Cli could be empty, but not both of them
            $this->assertFalse(empty($route['Pattern']['Cli']) &&
                            empty($route['Pattern']['Http']));
        }
    }
}
