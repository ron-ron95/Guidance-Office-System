<?php 

/**
* 
*/
class ProfileController extends ControllerBase
{
	
	public function initialize(){
		parent::initialize();
	}
	public function indexAction(){
		$this->tag->appendTitle('-Profile Data');

		$profile = Users::findFirst();
		$this->view->full_name = $profile->full_name;
		$this->view->email_address = $profile->email_address;
		$this->view->student_id =$profile->student_id;

	}

	public function studentAction(){
		$this->tag->appendTitle('-Profile Student');
	}


	 
}

 ?>