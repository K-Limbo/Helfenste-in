<?php

use DI\ContainerBuilder;

use function App\helper\config_path;
use function App\helper\base_path;

$builder = new ContainerBuilder();

$builder->enableCompilation(base_path('/tmp')); //Production Only

return $builder;
