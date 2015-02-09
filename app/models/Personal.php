<?php

use Phalcon\Mvc\Model\Validator\Email as Email;

class Personal extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $nick_name;

    /**
     *
     * @var string
     */
    public $upload_picture;

    /**
     *
     * @var string
     */
    public $birth_date;

    /**
     *
     * @var string
     */
    public $birth_place;

    /**
     *
     * @var integer
     */
    public $age;

    /**
     *
     * @var string
     */
    public $gender;

    /**
     *
     * @var string
     */
    public $present_address;

    /**
     *
     * @var integer
     */
    public $telno_a1;

    /**
     *
     * @var string
     */
    public $provincial_address;

    /**
     *
     * @var integer
     */
    public $telno_a2;

    /**
     *
     * @var string
     */
    public $mobile_number;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var string
     */
    public $nationality;

    /**
     *
     * @var string
     */
    public $religion;

    /**
     *
     * @var integer
     */
    public $height;

    /**
     *
     * @var integer
     */
    public $weight;

    /**
     *
     * @var integer
     */
    public $studentId;
    public function validation()
    {

        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );
        if ($this->validationHasFailed() == true) {
            return false;
        }
    }
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'nick_name' => 'nick_name', 
            'upload_picture' => 'upload_picture', 
            'birth_date' => 'birth_date', 
            'birth_place' => 'birth_place', 
            'age' => 'age', 
            'gender' => 'gender', 
            'present_address' => 'present_address', 
            'telno_a1' => 'telno_a1', 
            'provincial_address' => 'provincial_address', 
            'telno_a2' => 'telno_a2', 
            'mobile_number' => 'mobile_number', 
            'email' => 'email', 
            'nationality' => 'nationality', 
            'religion' => 'religion', 
            'height' => 'height', 
            'weight' => 'weight', 
            'studentId' => 'studentId'
        );
    }

}
