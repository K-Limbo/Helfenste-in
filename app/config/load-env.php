<?php

use Psr\Container\ContainerInterface;

use function App\helper\base_path;

return function(){
		$dotenv = \Dotenv\Dotenv::createImmutable(base_path());
		$array = $dotenv->load();
		
		$dotenv->required(['MODE', 'DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS']);
};