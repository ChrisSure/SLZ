<?php

namespace Tests\Src;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Framework\Controller;
use Framework\Application;



class ApplicationTest extends TestCase
{
  
    /**
    * Тест перевіряє метод Application::run - запуск додатку
    *
    * @return void
    */
    public function testRun(): void
    {
        $request = Request::create('/moke', 'GET');
        $routes = new RouteCollection();
        $routes->add('moke', new Route('/moke', array('_controller' => 'Tests\Src\MokeController', '_method' => 'index')));
        $matcher = new UrlMatcher($routes, new RequestContext($request->getPathInfo()));
        $result = $matcher->match($request->getPathInfo());

        $response = new Response();
        (new Application())->run($response, $result);
        self::assertEquals("Test Ok", $response->getContent());
    }


    /**
    * Тест перевіряє метод Application::run - запуск додатку на некоректність (неіснує класу)
    *
    * @expectedException Framework\Exception\NotClassOrMethodException
    * @expectedExceptionMessage Даного класу Tests\Src\MokesController не існує !
    *
    * @return void
    */
    public function testIncorectRunNoClass(): void
    {
        $request = Request::create('/moke', 'GET');
        $routes = new RouteCollection();
        $routes->add('moke', new Route('/moke', array('_controller' => 'Tests\Src\MokesController', '_method' => 'index')));
        $matcher = new UrlMatcher($routes, new RequestContext($request->getPathInfo()));
        $result = $matcher->match($request->getPathInfo());

        $response = new Response();
        (new Application())->run($response, $result);
    }

    /**
    * Тест перевіряє метод Application::run - запуск додатку на некоректність (неіснує методу)
    *
    * @expectedException Framework\Exception\NotClassOrMethodException
    * @expectedExceptionMessage Даного методу indexd класу Tests\Src\MokeController не існує !
    *
    * @return void
    */
    public function testIncorectRunNoMethod(): void
    {
        $request = Request::create('/moke', 'GET');
        $routes = new RouteCollection();
        $routes->add('moke', new Route('/moke', array('_controller' => 'Tests\Src\MokeController', '_method' => 'indexd')));
        $matcher = new UrlMatcher($routes, new RequestContext($request->getPathInfo()));
        $result = $matcher->match($request->getPathInfo());

        $response = new Response();
        (new Application())->run($response, $result);
    }


}


class MokeController extends Controller
{
    
    public function index()
    {
        return $this->response->setContent("Test Ok");
    }
    
} 