<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use function App\helper\HTML_Response;

final class EnvController extends Controller
{
		
		public function __construct($nothing = "") {

		}
		
		function index(Request $request, Response $response): Response {
				return HTML_Response($response, "env_test/env_test.php", ['title' => 'env', 'env' => $_ENV]);
		}
}