<?php
use Slim\App;

use App\Controller\IndexController;
use App\Controller\HomeController;
use App\Controller\EnvController;

return function(App $app){
		$app->get('/', [IndexController::class, 'index']);
		
		$app->get('/home', [HomeController::class, 'index']);
		
		$app->get('/env', EnvController::class, 'index');
};