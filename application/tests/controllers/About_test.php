<?php

/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 1/23/17
 * Time: 20:54
 */
class About_test extends TestCase
{

  function test_index () {
    $output = $this->request('GET', 'About');
    $this->assertContains('About Us page', $output);
  }

}