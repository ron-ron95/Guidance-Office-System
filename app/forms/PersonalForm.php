<?php 

 
use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\File;
use Phalcon\Forms\Element\Date;
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

    $upload_picture = new File('upload_picture',array(
        'class'=>'form-control'
      ));
    $upload_picture->addValidators(array(
        new PresenceOf(array(
          'message'=>'Your Picture is required'
          ))
      ));

    $this->add($upload_picture);

    $birth_date = new Date('birth_date',array(
      'class'=>'form-control'
      ));

    $birth_date->addValidators(array(
        new PresenceOf(array(
          'message' =>'Your birth day is required'
          ))
      ));
    $this->add($birth_date);



		$email = new Text('email', array(
            'placeholder' => 'Enter your Email Address',
            'class'=>'form-control '
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

      $nick_name = new Text('nick_name',array(
      		'placeholder'=>'Enter your Nick Name',
      		'class'=>'form-control '

      	));

        $nick_name->addValidators(array(
          new PresenceOf(array(
            'message'=>'Nick Name is required'
            )),
          new Regex(array(
            'pattern'=>'/^[A-Za-z]+$/',
            'message'=>'Nick name cannot contain numbers'
            ))
        ));

        $this->add($nick_name);

 
        $age =new Text('age',array(
        	'placeholder'=>'Enter your Age',
        	'class'=>'form-control'
        	));
        $age->addValidators(array(
        	new  PresenceOf(array(
        		'messages'=>'Ages is cannot been empty'
        		)),
          new Regex(array(
            'message'=>'Age cannot contain letters',
            'pattern'=>'/^[0-9]*$/'
            ))
        	));
        $this->add($age);

       $gender = new Select('gender',array(
       		'Choose your gender',
       		'male'=>'male',
       		'female'=>'female'
       	),array(
       		'class'=>'form-control'
       	));

       $gender->addValidators(array(
       		new PresenceOf(array(
       			'message'=>'Gender is required'
       			))
       	));

       $this->add($gender);

       $birth_place = new Text('birth_place',array(
          'class'=>'form-control',
          'placeholder' =>'Enter your birth place'
        ));


       $birth_place->addValidators(array(
          new PresenceOf(array(
              'message' =>'Birth Place is required'
            ))
        ));

       $this->add($birth_place);


      



      $present_address = new Text('present_address',array(
          'class'=>'form-control',
          'placeholder' =>'Enter your present Address'
        ));

      $present_address->addValidators(array(
          new PresenceOf(array(
            'message'=>'Present Address is required'
            ))
        ));

      $this->add($present_address);

      $telno_a1 = new Text('telno_a1',array(
          'class'=>'form-control',
          'placeholder'=>'Enter your Telephone number'
        ));

      $telno_a1->addValidators(array(
        new PresenceOf(array(
          'message' =>'Telephone Number is required'
          )),
        new Regex(array(
            'message'=>'Telephone Number cannot contain letters',
            'pattern'=>'/^[0-9]*$/'            
          ))
        ));

      $this->add($telno_a1);


        $provincial_address = new Text('provincial_address',array(
          'class'=>'form-control',
          'placeholder' =>'Enter your Provincial Address'
        ));

      $provincial_address->addValidators(array(
          new PresenceOf(array(
            'message'=>'Provincial Address is required'
            ))
        ));


      $this->add($provincial_address);

         $telno_a2 = new Text('telno_a2',array(
          'class'=>'form-control',
          'placeholder'=>'Enter your Telephone number'
        ));

      $telno_a2->addValidators(array(
        new PresenceOf(array(
          'message' =>'Telephone Number is required'
          )),
        new Regex(array(
            'message'=>'Telephone Number cannot contain letters',
            'pattern'=>'/^[0-9]*$/'            
          ))
        ));

      $this->add($telno_a2);


   $mobile_number = new Text('mobile_number',array(
          'class'=>'form-control',
          'placeholder'=>'Enter your Mobile number'
        ));

      $mobile_number->addValidators(array(
        new PresenceOf(array(
          'message' =>'Mobile Number is required'
          )),
        new Regex(array(
            'message'=>'Mobile Number cannot contain letters',
            'pattern'=>'/^[0-9]*$/'            
          ))
        ));

      $this->add($mobile_number);

     $nationality = new Text('nationality',array(
            'placeholder'=>'Enter your Nationality',
            'class'=>'form-control'
          ));

       $nationality->addValidators(array(
          new PresenceOf(array(
            'message'=>'Nationality is required'
            )),
          new Regex(array(
            'pattern'=>'/^[A-Za-z]+$/',
            'message'=>'Nationality cannot contain numbers'
            ))
        ));

       $this->add($nationality);

        $religion = new Text('religion',array(
            'placeholder'=>'Enter your Religion',
            'class'=>'form-control'
          ));

       $religion->addValidators(array(
          new PresenceOf(array(
            'message'=>'Religion is required'
            ))
        ));

       $this->add($religion);

        $height = new Text('height',array(
        'placeholder'=>'Enter your Height',
        'class'=>'form-control ',
      ));
    $height->addValidators(array(  
      new PresenceOf(array(
        'message'=>'Height is required'
        )) 
      ));

    $this->add($height);

      $weight = new Text('weight',array(
        'placeholder'=>'Enter your Weight',
        'class'=>'form-control ',
      ));
    $weight->addValidators(array( 
      new PresenceOf(array(
        'message'=>'Weight is required'
        )) 
      ));

    $this->add($weight);


 
	}

}


 ?> 