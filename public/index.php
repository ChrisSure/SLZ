<?php

chdir(dirname(__DIR__));
require 'vendor/autoload.php'; //Загрузчик класів
require 'public/function.php'; //Довільні функції


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;

use Framework\Application;
use Framework\Logger;


try {
    ### Init Container and connect db
    $container = require 'config/container.php';
    $container->get('DB_CONNECT'); // ???

	### Request
	$request = Request::createFromGlobals();

	### Routes
	$routes = new RouteCollection();
	include_once "config/routes.php"; // Routes
	$matcher = new UrlMatcher($routes, new RequestContext($request->getPathInfo()));
	$result = $matcher->match($request->getPathInfo());

	### Run -> Response
	$response = new Response();
	(new Application())->run($response, $result, $container->get(Twig\Environment::class));
	$response->send();

} catch (\Exception $e) {
    (new Logger())->addLog($e, $container, $request);
    return (new \Framework\ErrorHandler())->run($e);
}

