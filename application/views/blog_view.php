<?php
/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 1/16/17
 * Time: 20:25
 */
?>

<h1> <?php echo $data->article['title'] ?> </h1>
<p><?php echo $data->article['date'] ?></p>
<p><?php echo $data->article['author'] ?></p>
<div>
  <?php echo $data->article['text'] ?>
</div>

