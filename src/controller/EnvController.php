<?php

namespace App\Controller;

use DI\Container;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use function App\helper\HTML_Response;

final class EnvController extends Controller
{
		private Container $container;
		
		public function __construct(Container $container) {
				$this->container = $container;
		}
		
		/**
		 * @throws \DI\DependencyException
		 * @throws \DI\NotFoundException
		 */
		function index(Request $request, Response $response): Response {
				return HTML_Response($response, "env_test/env_test.php", ['env' => $this->container->get('env')]);
		}
}