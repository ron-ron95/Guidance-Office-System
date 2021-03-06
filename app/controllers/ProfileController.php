<?php 

class ProfileController extends ControllerBase{

	public function indexAction(){
		
	/*	$students = Students::findFirst(15);
		$this->view->full_name = $students->full_name;
		$this->view->year = $students->year;
		$this->view->students_id = $students->studentId;
		$this->view->course = $students->course;*/

			$this->view->setVar('profile',$this->session->get('auth'));
			$this->view->profile = new PersonalForm();	
	}

	public function saveAction(){

	$validation  = new PersonalForm();
		if($this->request->isPost()){

			$personal = new Personal();

			$personal->nick_name = $this->request->getPost('nick_name','string');
			$personal->upload_picture =$this->request->getPost('upload_picture');
			$personal->gender = $this->request->getPost('gender','string');
			$personal->email = $this->request->getPost('email','email');
			$personal->age = $this->request->getPost('age');
			$personal->birth_place = $this->request->getPost('birth_place','string');
			$personal->birth_date = $this->request->getPost('birth_date');
			$personal->present_address = $this->request->getPost('present_address','string');
			$personal->provincial_address = $this->request->getPost('provincial_address','string');
			$personal->telno_a1 = $this->request->getPost('telno_a1');
			$personal->telno_a2 = $this->request->getPost('telno_a2');
			$personal->mobile_number = $this->request->getPost('mobile_number','int');
			$personal->nationality = $this->request->getPost('nationality');
			$personal->religion = $this->request->getPost('religion');
			$personal->height = $this->request->getPost('height');
			$personal->weight = $this->request->getPost('weight');
 
		    if (!$validation->isValid($_POST)) {
            foreach ($validation->getMessages() as $message) {
                $this->flash->error($message);
            }
            return $this->dispatcher->forward(array(
            		'controller'=>'profile',
            		'action'=>'student'
            	));
        }
        if ($personal->save() == false) {
            foreach ($personal->getMessages() as $message) {
                $this->flash->error($message);
            }
            return $this->dispatcher->forward(array(
            		'controller'=>'profile',
            		'action'=>'index'
            	));
        }

    

        $this->flash->success("Students was created successfully");
        return $this->dispatcher->forward(array(
        		'controller'=>'profile',
        		'action'=>'index'
        	));
		}
        $this->view->profile = $validation;
	}

	public function studentAction(){
	$this->view->profile = new PersonalForm();	
	 
	}

}

 ?>