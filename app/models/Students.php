<?php

class Students extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $studentId;

    /**
     *
     * @var string
     */
    public $full_name;

    /**
     *
     * @var string
     */
    public $course;

    /**
     *
     * @var string
     */
    public $year;

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'studentId' => 'studentId', 
            'full_name' => 'full_name', 
            'course' => 'course', 
            'year' => 'year'
        );
    }

}
