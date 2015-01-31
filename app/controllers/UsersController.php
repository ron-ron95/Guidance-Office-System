<?php 

/**
 * Register users and login from the site was implemented with here
 * Action and necessary interaction is preform here g
 * 
*/

class usersController extends ControllerBase{

	public function initialize(){
		parent::initialize();
	 

	}

	public function indexAction(){
		$this->tag->appendTitle('-Student Login');
        $this->view->login = new LoginForm();
	}


//set a session variable 
	private function _registerSession(Users $users){
			 $this->session->set('auth', array(
            'id' => $users->id,
            'lastname'=>$users->lastname

        ));

		
			}

			//handling the request and stored in POST headers
	public function startAction(){

        $validation = new LoginForm();
		if($this->request->isPost()){

			$lastname = $this->request->getPost('lastname','string');
			$password = $this->request->getPost('password','int');
		
		$users = Users::findFirst(array(
                "lastname = :lastname: AND password = :password:",
                'bind' => array('lastname' => $lastname, 'password' =>sha1($password))
            ));

        if(!$validation->isValid($_POST)){
               foreach ($validation->getMessages() as $message) {
                echo $message;
               }
		        if ($users !=false) {
                $this->_registerSession($users);
                $this->view->email_address = $users->email_address;
                $this->view->lastname = $users->lastname;
             return $this->response->redirect('profile/index');
            }
        }
            else{

            $this->flash->error('Wrong email/password');
             return $this->response->redirect(array(
        		'controller'=>'users',
        		'action'=>'index'
        	  	));
          }
        }
        $this->view->login = new LoginForm(null);
 }
 //destory a session 
        public function logoutAction(){
        $this->session->remove('auth');
        	$this->flash->success('Goodbye!');
        return $this->response->redirect('users/index');
   	 }
		 
       
    }
      
 ?>