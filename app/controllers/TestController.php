<?php

class TestController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$this->view->setVar("students",Students::find());

    	$this->persistent->name = 'heljhum';
    }

    public function welcomeAction(){
    	echo $this->persistent->name;
    }


}		