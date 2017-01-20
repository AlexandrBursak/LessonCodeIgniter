<?php

/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 1/20/17
 * Time: 20:06
 */
class Migration_Add_table_comment extends CI_Migration
{

  static $table = 'comments';

  function up ()
  {

    $this->dbforge->add_field(
      [
        'id' => [
          'type' => 'int',
          'constraint' => 11,
          'unsigned' => true,
          'auto_increment' => true
        ],
        'article_id' => [
          'type' => 'int',
          'constraint' => 11
        ],
        'message' => [
          'type' => 'varchar',
          'constraint' => 256
        ],
        'author' => [
          'type' => 'varchar',
          'constraint' => 128
        ],
        'date' => [
          'type' => 'date'
        ],
        'active' => [
          'type' => 'tinyint',
          'constraint' => '1'
        ]
      ]
    );
    $this->dbforge->add_key( 'id', true );
    $this->dbforge->create_table( static::$table );

  }

  function down ()
  {

    $this->dbforge->drop_table( static::$table );

  }

}