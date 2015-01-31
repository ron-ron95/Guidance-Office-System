<?php 

 
use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Submit;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Check;
use Phalcon\Forms\Element\Radio;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\Regex;
use Phalcon\Validation\Validator\Identical;
use Phalcon\Validation\Validator\StringLength;
use Phalcon\Validation\Validator\Confirmation;


class PersonalForm extends Form {


	public function initialize() {

		$email = new Text('email', array(
            'placeholder' => 'Email Address',
            'class'=>'form-inline '
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


        $lastname = new Text('lastname',array(
        		'placeholder'=>'Last Name',
        		'class'=>'form-inline '
        	));

       $lastname->addValidators(array(
       		new PresenceOf(array(
       			'message'=>'Full name is required'
       			)),
       		new Regex(array(
       			'pattern'=>'/^[A-Za-z]+$/',
       			'message'=>'Full name cannot contain numbers'
       			))
       	));

       $this->add($lastname);

           $middlename = new Text('middlename',array(
        		'placeholder'=>'Middle Name',
        		'class'=>'form-inline '
        	));

       $middlename->addValidators(array(
       		new PresenceOf(array(
       			'message'=>'Middle name is required'
       			)),
       		new Regex(array(
       			'pattern'=>'/^[A-Za-z]+$/',
       			'message'=>'Middle name cannot contain numbers'
       			))
       	));

       $this->add($middlename);

       $firstname = new Text('firstname',array(
          'placeholder'=>'First Name',
          'class'=>'form-inline '
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

      $nickname = new Text('nickname',array(
      		'placeholder'=>'Nick Name',
      		'class'=>'form-inline '

      	));

        $nickname->addValidators(array(
          new PresenceOf(array(
            'message'=>'First name is required'
            )),
          new Regex(array(
            'pattern'=>'/^[A-Za-z]+$/',
            'message'=>'First name cannot contain numbers'
            ))
        ));

        $this->add($nickname);


        $course = new Select('course',array(
        	'Choose your Course',
        	'Nursing'=>'College of Nursing',
        	'Computer Studies'=>'College of Computer Studies',
        	'Education'=>'College of Education',
        	'Criminology'=>'College of Criminology',
        	),array(
        	'class'=>'form-inline '
        	));

         $course->addValidators(array(
          new PresenceOf(array(
            'message'=>'First name is required'
            ))
        ));

         $this->add($course);

         $year = new Select('year',array(
         	'1'=>'1',
         	'2'=>'2',
         	'3'=>'3',
         	'4'=>'4'
         	),array(
         	'class'=>'form-inline'
         	));

         $course->addValidators(array(
         	new PresenceOf(array(
         		'message'=>'Please select a year'
         		))
         	));
         $this->add($year);


        $age =new Text('age',array(
        	'placeholder'=>'Enter Age',
        	'class'=>'form-inline'
        	));
        $age->addValidators(array(
        	new  PresenceOf(array(
        		'messages'=>'Ages is cannot been empty'
        		))
        	));
        $this->add($age);

       $gender = new Select('gender',array(
       		'Choose your gender',
       		'male'=>'male',
       		'female'=>'female'
       	),array(
       		'class'=>'form-inline'
       	));

       $gender->addValidators(array(
       		new PresenceOf(array(
       			'message'=>'Gender is required'
       			))
       	));

       $this->add($gender);

	}
	
}


 ?>