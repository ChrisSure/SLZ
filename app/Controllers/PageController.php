<?php

namespace App\Controllers;

use Framework\Controller;
use App\Models\Posts;



class PageController extends Controller
{


	public function index()
	{
		$posts = Posts::all();
		return $this->response->setContent($this->template->render('page.html', ['posts' => $posts]));
	}

}