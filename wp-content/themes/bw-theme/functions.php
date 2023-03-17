<?php
function add_scripts_and_styles()
{
  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', false, false, true);
  wp_enqueue_script('jquery');
  wp_enqueue_script('swiper-script', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), false, true);
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'swiper-script'), false, true);

  wp_enqueue_style('fontello', get_template_directory_uri() . '/assets/css/fontello.css');
  wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
  // get_stylesheet_uri() подключает, когда файл находится в корне
  wp_enqueue_style('style', get_stylesheet_uri(), array('fontello', 'swiper-style'));
}

add_action('wp_enqueue_scripts', 'add_scripts_and_styles');

add_theme_support('custom-logo');
