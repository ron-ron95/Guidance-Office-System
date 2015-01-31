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

	 
    $this->hasOne("id","Users","user_id");
    $this->belongsTo("user_id","Users","id",array(
        "foreignKey"=>true
        ));

}
  

 ?>