<?php

use DI\ContainerBuilder;

use function App\helper\base_path;
use function App\helper\config_path;

$loadEnv = require_once(config_path('load-env.php'));
$loadEnv();

$containerBuilder = require_once(config_path("config-{$_ENV['MODE']}.php"));
$container = $containerBuilder->build();

return $container;