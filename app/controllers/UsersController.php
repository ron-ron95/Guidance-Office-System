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
	}


//set a session variable 
	private function _registerSession(Users $users){
			 $this->session->set('auth', array(
            'id' => $users->id,
            'full_name'=>$users->full_name

        ));

		
			}

			//handling the request and stored in POST headers
	public function startAction(){

		if($this->request->isPost()){

			$full_name = $this->request->getPost('full_name','string');
			$password = $this->request->getPost('password','int');
		
		$users = users::findFirst(array(
                "full_name = :full_name: AND password = :password:",
                'bind' => array('full_name' => $full_name, 'password' =>sha1($password))
            ));
		        if ($users !=false) {
                $this->_registerSession($users);
                $this->view->email_address = $users->email_address;
                $this->view->full_name = $users->full_name;
             return $this->response->redirect('profile/index');
            }
            else{

            $this->flash->error('Wrong email/password');
             return $this->response->redirect(array(
        		'controller'=>'users',
        		'action'=>'index'
        	  	));
          }
        }
 }
 //destory a session 
        public function logoutAction(){
        $this->session->remove('auth');
        	$this->flash->success('Goodbye!');
        return $this->response->redirect('users/index');
   	 }
		 
       
    }
      
 ?>