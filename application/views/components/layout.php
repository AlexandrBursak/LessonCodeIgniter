<?php
/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 1/16/17
 * Time: 20:39
 */

$this->load->view('components/header', [ 'title' => $data->title ]);
$this->load->view( $data->template, [ 'data' => $data ] );
$this->load->view('components/footer' );