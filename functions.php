<?php
//基本設定
function my_theme_support()
{
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'my_theme_support');

//ファイルの読み込み
function add_files()
{
  $today = date('Ymd'); //ファイルバーション管理用日付
  //共通CSS
  // wp_enqueue_style('slick-style', get_theme_file_uri('/asset/plugin/bundle/swiper-bundle.min.css'), array(), NULL);
  wp_enqueue_style('common-style', get_theme_file_uri('/asset/css/style.css'), array(), NULL);
  // 共通のJS
  // wp_enqueue_script('bundle-min', get_theme_file_uri('/asset/plugin/bundle/swiper-bundle.min.js'), array(), NULL, true);
  wp_enqueue_script('common-script', get_theme_file_uri('/asset/js/common.js'), array(), $today, true);
}
add_action('wp_enqueue_scripts', 'add_files');

// タイトルの文字数制限
function get_flexible_title($number)
{
  $value = get_the_title();
  $value = wp_trim_words($value, $number, '...');
  return $value;
}
//コンテント文字数制限
function get_flexible_content($number)
{
  $value = get_the_content();
  $value = wp_trim_words($value, $number, '...');
  return $value;
}
//投稿の表示数
function my_page_conditions($query)
{
  if (is_admin() || !$query->is_main_query())
    return;
  if (is_home()) {
    $query->set('posts_per_page', 3);
    return;
  }
}
add_action('pre_get_posts', 'my_page_conditions');

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true; // リライトを有効にする
    $args['has_archive'] = 'post'; // 任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);