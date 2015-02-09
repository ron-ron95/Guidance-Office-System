<?php 



class StudentsController extends ControllerBase{


	public function initialize(){
		parent::initialize();
	}


	public function indexAction(){

	 	$this->tag->appendTitle('-Student Login');
        $this->view->login = new LoginForm();
	}

	//set a session variable 
	private function _registerSession(Students $students){
			 $this->session->set('auth', array(
            'id' => $students->id,
            'full_name'=>$students->full_name

        ));

		
			}

	//handling the request and stored in POST headers
	public function startAction(){

        $validation = new LoginForm();
		if($this->request->isPost()){

			$full_name = $this->request->getPost('full_name','string');
			$studentId = $this->request->getPost('studentId','int');
		
		$students = Students::findFirst(array(
                "full_name = :full_name: AND studentId = :studentId:",
                'bind' => array('full_name' => $full_name, 'studentId' =>$studentId)
            ));

        if(!$validation->isValid($_POST)){
               foreach ($validation->getMessages() as $message) {
                  $this->flash->error($message);
               }

               return $this->dispatcher->forward(array(
                  'controller'=>'students',
                  'action'=>'index'
                ));
             }
		        if ($students !=false) {
                $this->_registerSession($students);
          $this->flash->success('succesfully login');
            return $this->dispatcher->forward(array(
                'controller'=>'profile',
                'action' =>'index'
                ));
            }
     
            else{

      $this->flash->error('Wrong email/studentId');
             return $this->dispatcher->forward(array(
        		'controller'=>'students',
        		'action'=>'index'
        	  	));
          }
        }
        $this->view->login = $validation;
 }
}

 ?>