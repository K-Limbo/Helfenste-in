<?php


namespace App\helper;

// ---Path Finders---

function base_path(string $path = ""): string {
		return realpath(__DIR__ . "/../../{$path}");
}

function resource_path(string $path = ""): string {
		return base_path("resources/{$path}");
}

function app_path(string $path = ""): string {
		return base_path("app/{$path}");
}

function public_path(string $path = ""): string {
		return base_path("public/{$path}");
}

function templates_path(string $path = ""): string {
		return base_path("resources/templates/{$path}");
}

function helperFunctions_path(string $path = ""): string {
		return base_path("app/helper/{$path}");
}

function config_path(string $path =""):string {
		return base_path("app/config/{$path}");
}

