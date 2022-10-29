<?php

use DI\ContainerBuilder;

$builder = new ContainerBuilder();
$builder->enableCompilation(__DIR__ . '/tmp');

$builder->addDefinitions('app/config/config-dev.php');

$container = $builder->build();

return $container;