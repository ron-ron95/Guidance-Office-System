<?php 


class Location extends ControllerBase{

public $id;

public $present_address;

public $tel_number;

public $provincial_address;

public $mobile_number;

public $student_id;


public function initialize(){
		$this->belongsTo("student_id","Students","id");
}




}

 ?>