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
		$this->view->lastname = $profile->lastname;
		$this->view->firstname = $profile->firstname;
 		$this->view->email_address = $profile->email_address;
		$this->view->student_id =$profile->student_id;

	}

	public function studentAction(){
		$this->tag->appendTitle('-Profile Student');

		$this->view->profile = new PersonalForm();

		 //$this->view->pick('profile/index');
	}



	public function saveAction(){

		$this->validation = new PersonalForm();




	$this->view->profile = new PersonalForm(null);

	}
	 
}

 ?>