<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php
          echo gt_get_the_title().' | '.get_bloginfo();
        ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<header class="gt-header">
  <div class="gt-container">
    <p>header</p>
  </div>
</header>
