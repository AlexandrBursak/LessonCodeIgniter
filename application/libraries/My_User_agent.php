<?php

/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 12/21/16
 * Time: 21:26
 */
class My_User_agent extends CI_User_agent
{

  function __construct()
  {
    parent::__construct();
    echo 'Hello';
  }

}