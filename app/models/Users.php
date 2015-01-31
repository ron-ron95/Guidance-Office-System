<?php 

use Phalcon\Mvc\Mode\Validator\Uniqueness;

class Users extends \Phalcon\Mvc\Model{


 public $id;

 public $lastname;

 public $firstname;

 public $password;

 public $email_address;

 public $student_id;



 public function initialize(){

 	$this->hasOne("id","Students","user_id");
 }

 


 
}

 ?>