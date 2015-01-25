<?php 

 
use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Submit;
use Phalcon\Forms\Element\Check;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\Regex;
use Phalcon\Validation\Validator\Identical;
use Phalcon\Validation\Validator\StringLength;
use Phalcon\Validation\Validator\Confirmation;


class LoginForm extends Form{


	public function initialize(){

		$full_name = new Text('full_name',array(
				'placeholder'=>'Enter your Fullname',
				'class'=>'form-control',
			));
		$full_name->addValidators(array(
			new PresenceOf(array(
				'message'=>'Full name is required'
				)),
			new Regex(array(
				'pattern'=>'/^[A-Za-z]+$/',
				'message'=>'Full name must not containe letters'
				))
			));
		$this->add($full_name);


		$password = new Password('password',array(
				'placeholder'=>'Enter your Password',
				'class'=>'form-control'
				));

		$password->addValidators(array(
				new PresenceOf(array(
					'message'=>'Password is cannot be empty'
					))
			));
		$this->add($password);


		 
	}
}

 ?>