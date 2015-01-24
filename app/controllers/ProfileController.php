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

	}

	public function uploadAction(){
		
	}

	 
}

 ?>