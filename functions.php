<?php

function mytheme_setup()
{
  add_theme_support('custom-logo', array(
    'height' => 100,
    'width' => 300,
    'flex-height' => true,
    'flex-width' => true
  ));

  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'mytheme_setup');

function register_my_custom_menu()
{
  register_nav_menu('main-menu', __('Main Navigation'));
}

add_action('after_setup_theme', 'register_my_custom_menu');

function theme_enqueue_styles()
{
  // Enqueue main theme stylesheer
  wp_enqueue_style('theme-style', get_stylesheet_uri());

  // Enqueue Google Fonts
  wp_enqueue_style(
    'be-vietnam-font',
    'https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;600;700&display=swap',
    false
  );

}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function mytheme_enqueue_scripts()
{
  wp_enqueue_script(
    'custom-script',
    get_template_directory_uri() . '/js/script.js',
    array(),
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');


?>