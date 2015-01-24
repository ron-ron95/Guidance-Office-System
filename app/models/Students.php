<?php 

use Phalcon\Mvc\Model\Validator\Uniqueness;
use Phalcon\Mvc\Model\Validator\Email;
/*students model where data of the students will be stored*/

class Students extends \Phalcon\Mvc\Model{

public $id;

public $birthdate;

public $place_birth;
 
public $date_today;

public $user_id;



/**
 * return the users table from the database
 * where users is belongs to a students
*
*/

public function initialize(){

	$this->belongsTo("user_id","Users","id");

}
 /**
     * Validate that emails are unique across users
     */
    public function validation()
    {
        $this->validate(new Uniqueness(array(
            "field" => "email",
            "message" => "The email is already registered"
        )));
        $this->validate(new Email(array(
            "field"=>"email",
            "message"=>"Email is required"
            )));

        return $this->validationHasFailed() != true;
    }

}

 ?>