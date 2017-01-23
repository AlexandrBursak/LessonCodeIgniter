<?php

/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 1/23/17
 * Time: 20:42
 */
class Test extends My_Controller
{

  function index ()
  {
    echo 'Testing';
    $this->load->library('unit_test');

    $this->unit->run(my_button(), '<a href="/"> Button </a>', 'test function my_bytton expected string');

    echo $this->unit->report();

  }

}