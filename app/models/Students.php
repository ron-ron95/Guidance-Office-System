<?php 


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

}

 ?>