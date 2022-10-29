<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use function App\helper\HTML_Response;

final class HomeController extends Controller
{
		private string $template;
		
		public function __construct(string $template="home/home.php") {
				$this->template = $template;
		}
		
		public function index(Request $request, Response $response): Response {
				
				return HTML_Response($response, "home/home.php", ["name" => http_build_query($_ENV,'',', '), "title" => "deineMum"]);
		}
}