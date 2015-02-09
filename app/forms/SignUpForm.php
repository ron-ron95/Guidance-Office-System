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
            )),
            new Regex(array(
              'pattern'=>'/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/',
              'message'=>'Email is not in valid format'
              ))
        ));

        $this->add($email);


        $lastname = new Text('lastname',array(
        		'placeholder'=>'Last Name',
        		'class'=>'form-control'
        	));

       $lastname->addValidators(array(
       		new PresenceOf(array(
       			'message'=>'Last name is required'
       			)),
       		new Regex(array(
       			'pattern'=>'/^[A-Za-z]+$/',
       			'message'=>'Last name cannot contain numbers'
       			))
       	));

       $this->add($lastname);

       $firstname = new Text('firstname',array(
          'placeholder'=>'First Name',
          'class'=>'form-control'
        ));

    $firstname->addValidators(array(
          new PresenceOf(array(
            'message'=>'First name is required'
            )),
          new Regex(array(
            'pattern'=>'/^[A-Za-z]+$/',
            'message'=>'First name cannot contain numbers'
            ))
        ));

      $this->add($firstname);

/*
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
            )),
          new Regex(array(
              'pattern'=>'/^[0-9]*$/',
              'message'=>'The student id must contain numbers only'
            ))
        ));

      $this->add($student_id);*/
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