<?php
function site_files() {
  wp_enqueue_style('Website_main_styles', get_theme_file_uri('/build/style.css'));
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}

add_action('wp_enqueue_scripts', 'site_files', 999);


// function test_files() {
//   wp_enqueue_style('Website_main_styles', get_theme_file_uri('/build/style.css'));
// }
// add_action('wp_enqueue_scripts', 'test_files', 9999);

function website_features() {
  add_theme_support('title-tag');
}

add_theme_support( 'post-thumbnails' );
add_action('after_setup_theme', 'website_features');

// function footer_add_chart_style() {
//   wp_enqueue_style('chartjs_css', get_theme_file_uri() . '/build/style.css');
// };
// add_action( 'get_footer', 'footer_add_chart_style' );