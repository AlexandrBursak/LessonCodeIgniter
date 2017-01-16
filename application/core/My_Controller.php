<?php

/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 12/21/16
 * Time: 03:33
 */
class My_Controller extends CI_Controller
{

  protected $data;

  function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->data = new stdClass();
    $this->load->helper( ['own_helper', 'second_helper'] );
  }
}