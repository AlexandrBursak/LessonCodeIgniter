<?php

/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 1/20/17
 * Time: 20:23
 */
class Migrate extends My_Controller
{

  function index ( )
  {
    $this->load->library('migration');

    if ( $this->input->get('version_m') ) {

      $rollback = $this->input->get('version_m');

      $this->migration->version($rollback);

    } else {

      echo 'Current version: ' . $this->migration->latest();

    }

  }

}