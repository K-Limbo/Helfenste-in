<?php

namespace App\helper;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;

// ---Response Emitters---
function HTML_Response(Response $response, $template, $data = []): Response {
		$renderer = new PhpRenderer(templates_path());
		$renderer->setLayout("app.base.layout.php");
		
		try {
				return $renderer->render($response, $template, $data);
		} catch (\Slim\Views\Exception\PhpTemplateNotFoundException $e) {
				$response->getBody()->write("FAIL: ".$e->getMessage());
		}
		
		return $response;
}

function JSON_Response(Response $response): Response {
		
		//TODO: Implement JSON_Response function
		
		return $response;
}

function Redirect_Response(Response $response, string $location): Response{
		$response = $response->withStatus(302);
		return $response->withHeader('Location', $location);
}

function http_404_Response(Request $request): Response {
		
		//TODO: Implement 404 Content not found myResponse
		
		return $request;
}

function http_401_Response(Request $request): Response {
		
		//TODO: Implement 401 Unauthorised
		
		return $request;
}

