<?php 

use Phalcon\Mvc\Mode\Validator\Uniqueness;

class Users extends \Phalcon\Mvc\Model{


 public $id;

 public $full_name;

 public $password;

 public $email_address;

 public  $student_id;



 public function initialize(){

 	$this->hasOne("id","Students","user_id");
 }

/* public function validation(){


 	  $this->validate(new Uniqueness(
            array(
                "field"   => "email",
                "message" => "The email is will be unique"
            )
        ));

 	  	return $this->validationHasFailed() != true;
 }*/



 
}

 ?>