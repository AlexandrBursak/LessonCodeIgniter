<?php
/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 1/18/17
 * Time: 20:42
 */
?>

<h1> <?php echo $data->title; ?> </h1>
<style>
  label {
    display: block;
  }
</style>
<form method="post" action="/blog/save">
  <label> Title:
    <input type="text" name="title" value="<?= $data->article->title; ?>"/>
  </label><label> Author:
    <input type="text" name="author" value="<?= $data->article->author; ?>"/>
  </label><label> Date:
    <input type="text" name="date" value="<?= $data->article->date; ?>"/>
  </label><label> Text:
    <textarea name="text"><?= $data->article->text; ?></textarea>
  </label><label>
    <input type="hidden" name="id" value="<?= $data->article->id; ?>">
    <input type="submit" name="submit" value="Send">
  </label>
</form>
