<?php

/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 1/20/17
 * Time: 20:06
 */
class Migration_Add_column_to_comment extends CI_Migration
{

  static $table = 'comments';

  function up()
  {

    $this->dbforge->add_column( static::$table, [
      'modified_date' => [
        'type' => 'date'
      ]
    ] );

    $this->additional_function();

    $this->db->query('ALTER TABLE `comments` ADD INDEX `IndArtId` (`article_id`);');
  }

  function down()
  {

    $this->dbforge->drop_column( static::$table, 'modified_date' );
    $this->db->query('ALTER TABLE `comments` DROP INDEX `IndArtId`;');

  }

  function additional_function ()
  {

  }

}