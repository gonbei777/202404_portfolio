<?php

/**
 * テーマサポート
 * 
 * @return void
 */
function my_theme_support()
{
  add_theme_support('post-thumbnails'); //アイキャッチ画像
  add_theme_support('menus'); //メニュー（ナビゲーション）
  add_theme_support('title-tag'); //いい感じのtitleタグを出力
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



function my_enqueue_scripts()
{
  // スタイル
  wp_enqueue_style(
    'my-style',
    get_template_directory_uri() . '/assets/css/style.css',
    [],
    filemtime(get_template_directory() . '/assets/css/style.css')
  );

  // スクリプト
  wp_enqueue_script('jquery');
  wp_enqueue_script(
    'my-script',
    get_template_directory_uri() . '/assets/js/script.js',
    ['jquery'],
    filemtime(get_template_directory() . '/assets/js/script.js'),
    [
      'strategy' => 'defer',
      // 'in_footer' => true // wp_footerの実行時に読み込まれる
    ]
  );
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');
