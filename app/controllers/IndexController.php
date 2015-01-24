<?php

class IndexController extends ControllerBase
{

    

 
   public function showAction(){
   	$users = Students::findFirst();

    $this->view->lastname = $users->lastname;
    $this->view->middlename = $users->middlename;
    $this->view->firstname =$users->firstname;

    $this->view->password = $users->password;

   }
 }