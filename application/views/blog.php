<?php
/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 1/16/17
 * Time: 20:25
 */
?>

<h1> <?php echo $data->title ?> </h1>

<ul>
  <?php foreach ( $data->articles as $article ) : ?>
    <li><b><?php echo $article['date'] ?></b>: <a href="/blog/view/<?php echo $article['id'] ?>"><?php echo $article['title'] ?></a></li>
  <?php endforeach; ?>
</ul>

