<?php

namespace App\Controllers;

use Framework\Controller;
use App\Middleware\UserMiddleware;


class IndexController extends Controller
{

	public function before()
	{
		parent::before();
		return new UserMiddleware();
	}

	public function index()
	{
		return $this->response->setContent($this->template->render('index.html'));
	}

}