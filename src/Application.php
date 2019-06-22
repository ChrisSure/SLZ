<?php

namespace Framework;

use Symfony\Component\HttpFoundation\Response;
use Framework\Exception\NotClassOrMethodException;



class Application
{

	/**
	 * Метод запускає додаток
	 * @param Response $response
	 * @param array $result
     *
     * @return Controller
	 */
	public function run(Response $response, array $result, \Twig_Environment $template)
	{
		$controller = $result['_controller'];
		$action = $result['_method'];

		if (!class_exists($controller)) {
			throw new NotClassOrMethodException('Даного класу ' . $controller . ' не існує !');
		} else if (!method_exists($controller, $action)) {
			throw new NotClassOrMethodException('Даного методу ' . $action . ' класу ' . $controller . ' не існує !');
		}
		return (new $controller($response, $template, $action))->before();
	}

}