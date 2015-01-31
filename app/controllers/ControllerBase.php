<?php

use Phalcon\Mvc\Controller;
 

class ControllerBase extends Controller
{

public function initialize(){
	$this->tag->setTitle('SPCFI Guidance Office');

	$this->flash->output();
}

public function indexAction(){
 	
	}
}
