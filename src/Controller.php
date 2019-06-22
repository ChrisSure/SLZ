<?php

namespace Framework;

use Symfony\Component\HttpFoundation\Response;



abstract class Controller
{

    //Об'єкт Response
	protected $response;

    //Об'єкт Twig_Environment
	protected $template;

	//Дія
	private $action;


    /**
     * Конструктор встановлює об'єкти Response, Twig та дію контроллера
     *
     * @param Response $response
     * @param Twig_Environment $twig
     * @param string $action
     *
     * @return void
     */
	public function __construct(Response $response, \Twig_Environment $twig, string $action)
	{
		$this->response = $response;
		$this->template = $twig;
		$this->action = $action;
	}

    /**
     * Метод визивається перед осеовною дією контроллера
     *
     * @return mixed
     */
	public function before()
	{
		$action = $this->action;
		return $this->$action();
	}


} 