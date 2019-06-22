<?php

use Symfony\Component\Routing\Route;
// @this RouteCollection

$routes->add('index', new Route('/', array('_controller' => 'App\Controllers\IndexController', '_method' => 'index')));

$routes->add('page', new Route('/page', array('_controller' => 'App\Controllers\PageController', '_method' => 'index')));