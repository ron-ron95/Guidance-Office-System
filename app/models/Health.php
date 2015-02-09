<?php

class Health extends \Phalcon\Mvc\Model
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
    public $post_illness;

    /**
     *
     * @var string
     */
    public $present_illness;

    /**
     *
     * @var string
     */
    public $previous_hospitalization;

    /**
     *
     * @var string
     */
    public $physical_disability;

    /**
     *
     * @var string
     */
    public $relative_illness;

}
