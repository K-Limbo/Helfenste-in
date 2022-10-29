<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use function App\helper\Redirect_Response;

final class IndexController extends Controller
{
		public function index(Request $request, Response $response): Response {
				return Redirect_Response($response, '/home');
		}
}