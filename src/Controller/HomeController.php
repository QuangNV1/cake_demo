<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Controller\Component\AllBittrexComponent;

class HomeController extends AppController
{	
	public function initialize()
	{
		parent::initialize();
		$this->viewBuilder()->setLayout(false);
	}

	public function index()
	{	
		
	}

}