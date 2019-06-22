<?php

namespace App\Middleware;


class UserMiddleware
{

	public function __construct()
	{
		$user = true;
		if ($user) {
			return;
		}
		die("Error");
	}

}