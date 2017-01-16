<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 12/19/16
 * Time: 21:18
 */
class About extends My_Controller
{

  function index ( $id = 0 )
  {
    $this->data->id = $id;
    $this->data->title = 'About Us page';
    $this->data->description = 'Hello World';
    $this->data->template = 'about_us';

    $this->load->view('components/layout', [ 'data' => $this->data ]);
  }

  function view ( $params, $id, $arg1 = 0, $arg2 = 0, $arg3 = 0, $arg4 = 0 )
  {
    $this->data->params = $params;
    $this->data->id = $id;
    $this->data->title = 'About Us View page';
    $this->data->description = 'Hello on the View page';
    $this->data->template = 'about_us_view';

    $this->load->view('components/layout', [ 'data' => $this->data ]);
  }

}