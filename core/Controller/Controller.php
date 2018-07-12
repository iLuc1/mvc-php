<?php
namespace Controller;

use Container\Container;

class Controller {
    private $container;

    public function __construct() {
        $this->container = new Container();
    }

    public function getService($service) {
        return $this->container->getService($service);
    }


}