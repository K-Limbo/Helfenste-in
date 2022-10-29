<?php

use Slim\App;
use Zeuxisoo\Whoops\Slim\WhoopsMiddleware;

return function(App $app){
		
		$app->add(new WhoopsMiddleware([
				'enable' => true,
				'editor' => 'sublime',
				'title'  => 'Helfenste.in - WHOOPS',
		]));
		
};
