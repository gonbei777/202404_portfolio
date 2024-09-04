<?php

/**
 * テーマサポート
 * 
 * @return void
 */
function my_theme_support()
{
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_support');
