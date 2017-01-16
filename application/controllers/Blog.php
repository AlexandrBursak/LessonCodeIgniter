<?php

/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 1/16/17
 * Time: 20:22
 */
class Blog extends My_Controller
{

  function __construct()
  {
    parent::__construct();

  }

  function index() {

    $this->data->template = 'blog';
    $this->data->title = 'Blog 1';

    $sql_args = array('active' => 1);
    $this->db->order_by('id', 'DESC');
    $query = $this->db->get_where('articles', $sql_args);

    $this->data->articles = [];

    foreach( $query->result() as $article ) {
      array_push($this->data->articles, [
        'id' => $article->id,
        'title' => $article->title,
        'author' => $article->author,
        'date' => $article->date,
        'text' => $article->text
      ]);
    }

    $this->load->view('components/layout', [ 'data' => $this->data ]);

  }

  function view($id) {

    if (empty($id)) {
      header('Location: /blog/');
      return;
    }

    $this->data->template = 'blog_view';

    $sql_args = array('id' => $id, 'active' => 1);
    $query = $this->db->get_where('articles', $sql_args);
    $this->data->article = [];
    if ( $this->db->affected_rows() == 0 ) {
      header('Location: /blog/');
      return;
    }

    foreach( $query->result() as $article ) {
      $this->data->title = $article->title;
      $this->data->article = [
        'title' => $article->title,
        'author' => $article->author,
        'date' => $article->date,
        'text' => $article->text
      ];
    }
    $this->load->view('components/layout', [ 'data' => $this->data ]);

  }

}