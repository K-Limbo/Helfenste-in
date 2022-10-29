<?php

namespace App\controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Container\ContainerInterface;
use App\helper;

abstract class Controller
{
		abstract function index(Request $request, Response $response): Response;
}