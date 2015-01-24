<?php 

class RegisterController extends ControllerBase {


public function indexAction(){
$this->view->form = new SignUpForm();
}
 //register a user
	public function registerAction(){
		$this->tag->appendTitle('-Register Student');

	$validation = new SignUpForm();			

		if($this->request->isPost()){

			$full_name = $this->request->getPost('full_name','string' );
			$student_id = $this->request->getPost('student_id','string');
			$email_address = $this->request->getPost('email','email');
			$password =$this->request->getPost('password','int');

		$users = new Users();
		$users->full_name = $full_name;
		$users->email_address =$email_address;
		$users->student_id = $student_id;
		$users->password =sha1($password);
			    if ($users->save() == false) {
                	foreach ($users->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else{
            	 
                 $this->dispatcher->forward(array(
                 				'controller'=>'users',
                 				'action'=>'index'
                 	         	));
                  Tag::resetInput();
            }
			
		}
		$this->view->form = new SignUpForm(null);
}

}


  ?>