<?php

use App\Controller\HomeController;

return [
	HomeController::class => DI\create()->constructor("home/home.php"),
];