<?php

use DI\Bridge\Slim\Bridge as SlimAppFactory;

$container = require_once('app/config/Config.php');

$app = SlimAppFactory::create($container);

$errorMiddleware = require_once("app/bootstrap/errorMiddleware.php");
$errorMiddleware($app);

$routes = require_once("app/bootstrap/routes.php");
$routes($app);

$middleware = require_once("app/bootstrap/middleware.php");
$middleware($app);

return $app;