<?php

namespace AdministrationApi\Group;

require_once __DIR__ . "/Resources/Routing.php";
require_once __DIR__ . "/Resources/Services.php";

use AdministrationApi\Group\Resources\Routing;
use AdministrationApi\Group\Resources\Services;
use Common\BaseBundle;

class Bundle extends BaseBundle
{

    protected $bundle_root = __DIR__;
    protected $bundle_namespace = __NAMESPACE__;
    protected $routes = [];
    protected $services = [];

    public function init()
    {
        $routing = new Routing();
        $this->routes = $routing->getRoutes();
        $this->routing_prefix = $routing->getRoutesPrefix();
        $this->initRoutes();

        $this->services = (new Services())->getServices();
        $this->initServices();
    }
}