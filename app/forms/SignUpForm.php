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


class SignUpForm extends Form {

	
	public function initialize(){

		  $email = new Text('email', array(
            'placeholder' => 'Email Address',
            'class'=>'form-control'
        ));

        $email->addValidators(array(
            new PresenceOf(array(
                'message' => 'The e-mail is required'
            )),
            new Email(array(
                'message' => 'The e-mail is not valid'
            ))
        ));

        $this->add($email);


        $full_name = new Text('full_name',array(
        		'placeholder'=>'Full Name',
        		'class'=>'form-control'
        	));

       $full_name->addValidators(array(
       		new PresenceOf(array(
       			'message'=>'Full name is required'
       			)),
       		new Regex(array(
       			'pattern'=>'/^[A-Za-z]+$/',
       			'message'=>'Full name cannot contain numbers'
       			))
       	));

       $this->add($full_name);


      $student_id = new Text('student_id',array(
          'placeholder'=>'Student ID',
          'class'=>'form-control'
        ));

      $student_id->addValidators(array(
          new PresenceOf(array(
            'message'=>'Student ID is required'
            )),
          new StringLength(array(
            'max'=>8,
            'messageMaximum'=>'Student ID is only 8 digit'
            ))
        ));

      $this->add($student_id);

      $password = new Password('password',array(
            'placeholder'=>'Password',
            'class'=>'form-control'
          ));

      $password->addValidators(array(
          new PresenceOf(array(
            'message'=>'Password is required'
            ))
        ));

      $this->add($password);
	}
}

 ?>