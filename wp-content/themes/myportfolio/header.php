<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body>

  <header>

    <h1><?php bloginfo('title'); ?></h1>

    <nav>
      <?php
      wp_nav_menu([
        'menu' => 'global-nav',
        'container' => '',
        'menu_class' => 'nav-list',
        'items_wrap' => '<ul id="my-id" class="my-class">%3$s</ul>'
      ]);
      ?>
    </nav>

  </header>