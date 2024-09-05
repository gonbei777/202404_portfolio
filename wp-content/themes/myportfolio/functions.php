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


/**
 * 抜粋文の省略記号を変更
 * 
 * @return string 省略記号
 */
function my_excerpt_ellipsis()
{
  return ' ...';
}
add_filter('excerpt_more', 'my_excerpt_ellipsis');
