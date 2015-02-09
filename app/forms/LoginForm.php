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
				'placeholder'=>'Enter your Full Name',
				'class'=>'form-control ',
			));
		$full_name->addValidators(array( 
			new PresenceOf(array(
				'message'=>'Full Name is required'
				)),
			new Regex(array(
				'pattern'=>'/^[a-zA-Z,.!? ]*$/',
				'message'=>'Full Name must not contain numbers'
				))
			));
		$this->add($full_name);


		$studentId = new Password('studentId',array(
				'placeholder'=>'Enter your Student Id',
				'class'=>'form-control'
				));

		  $studentId->addValidators(array(
          new PresenceOf(array(
            'message'=>'Student Id is required'
            )),
          new StringLength(array(
            'max'=>9,
            'messageMaximum'=>'Student Id is only 8 digit'
            )),
          new Regex(array(
              'pattern'=>'/^[0-9]*$/',
              'message'=>'The student id must contain numbers only'
            ))
        ));
		$this->add($studentId);



	}
}

 ?>