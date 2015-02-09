<?php 
use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\Submit;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Regex;
use Phalcon\Validation\Validator\StringLength;
 
class OrganizationForm extends Form {

public function initialize(){
$position = new Text('position',array(
		'class'=>'form-control',
		'placeholder'=>'Enter your Position of the Organization'
	));

$position->addValidators(array(
	new PresenceOf(array(
			'message'=>'Position is required'
		))
	));

$this->add($position);


$name_org = new Text('name_org',array(
		'class'=>'form-control',
		'placeholder'=>'Enter your Name of Organization'
	));

$name_org->addValidators(array(
	new PresenceOf(array(
		'message'=>'Name of the Organization is required'
		))
	));

$this->add($name_org);

$year = new Text('year',array(
	'class'=>'form-control',
	'placeholder'=>'Enter the year of the organization'
	));

$year->addValidators(array(
		new PresenceOf(array(
			'message'=>'Year of the Organization is required'
			))
	));

$this->add($year);
 
$studentId = new Text('studentId',array(
		'class'=>'form-control',
		'placeholder'=>'Enter your student id'
	));
$studentId->addValidators(array(
		new PresenceOf(array(
			'message'=>'Student Id is required'
			))
	));

$this->add($studentId);


 
}
}

 ?>