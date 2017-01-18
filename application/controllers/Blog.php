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
    $this->load->model('article_model', 'article');
  }

  function index() {

    $this->data->template = 'blog';
    $this->data->title = 'Blog 1';

    $result = $this->article->get();

    $this->data->articles = [];

    foreach( $result as $article ) {
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

  function view($id)
  {

    if ( empty( $id ) )
    {
      header( 'Location: /blog/' );

      return;
    }

    $this->data->template = 'blog_view';


    $article = $this->article->get_by_id( $id );

    if ( !$article )
    {
      header('Location: /blog/');
    }

    $this->data->title = $article->title;
    $this->data->article = [
        'id' => $article->id,
        'title' => $article->title,
        'author' => $article->author,
        'date' => $article->date,
        'text' => $article->text
      ];

    $this->load->view('components/layout', [ 'data' => $this->data ]);

  }

  function add ()
  {
    $this->data->article = $this->article->get_new();
    $this->data->template = 'blog_form';
    $this->data->title = 'Add';
    $this->load->view('components/layout', [ 'data' => $this->data ]);
  }

  function edit ( $id = null )
  {
    if ( empty($id) )
    {
      header( 'Location: /blog/' );
    }

    $this->data->article = $this->article->get_by_id($id);
    $this->data->template = 'blog_form';
    $this->data->title = 'Edit';
    $this->load->view('components/layout', [ 'data' => $this->data ]);
  }

  function save ()
  {
    if ( $this->input->post() ) {
      $rules = $this->article->rules;
      $this->load->library('form_validation');
      $this->form_validation->set_rules($rules);
      if ( $this->form_validation->run() == true ) {

        $id = $this->article->save_article( $this->input->post() );

        header( 'Location: /blog/view/'.$id );

      } else
      {
        header( 'Location: /blog/' );
      }
    } else
    {
      header( 'Location: /blog/' );
    }
  }

}