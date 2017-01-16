<?php

/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 1/16/17
 * Time: 17:13
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_any extends CI_Migration
{

  public function up()
  {
    $this->dbforge->add_field(array(
      'id' => array(
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => TRUE,
        'auto_increment' => TRUE
      ),
      'title' => array(
        'type' => 'VARCHAR',
        'constraint' => '100'
      ),
      'description' => array(
        'type' => 'TEXT',
        'null' => TRUE
      )
    ));
    $this->dbforge->add_key('id', TRUE);
    $this->dbforge->create_table('any');
  }

  public function down()
  {
    $this->dbforge->drop_table('any');
  }

}