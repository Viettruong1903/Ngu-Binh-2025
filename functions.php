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

function ajax_filter_menu_items()
{
  $term = sanitize_text_field($_GET['term'] ?? '');

  $args = [
    'post_type' => 'menu-item',
    'post_status' => 'publish',
    'tax_query' => [
      [
        'taxonomy' => 'menu-categories',
        'field' => 'slug',
        'terms' => $term,
      ]
    ],
  ];

  $query = new WP_Query($args);

  // if ($query->have_posts()) {
  //   while ($query->have_posts()) {
  //     $query->the_post();
  //     echo '<div class="menu-item">';
  //     if (has_post_thumbnail()) {
  //       the_post_thumbnail('thumbnail');
  //     }
  //     echo '<h3>' . get_the_title() . '</h3>';
  //     echo '<p>' . get_the_excerpt() . '</p>';
  //     echo '</div>';}

  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      echo '<section class="food-categories" aria-labelledby="food-filters">';
      echo '<div class="box">';
      echo ' <div class="category">';
      echo '<div class="meal">';
      echo '<div class="meal-image-profile">';
      $image = get_field('meal_image');
      if ($image) {
        echo '<img src=" ' . esc_url($image['url']) . ' " alt="' . esc_attr($image['alt']) . '">';
      }
      echo '</div>';
      echo '<div class="meal-text">';

      echo '<div class="heading-row">';
      echo '<h3>' . get_the_title() . '</h3>';
      echo '<p>' . get_field('brief_description') . '</p>';
      echo '</div>';

      echo '<p class="price">$<span>' . get_field('price') . '</span> </p>';

      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</section>';
    }
  } else {
    echo '<p>No menu items found for this category.</p>';
  }

  wp_die(); // important for AJAX
}

add_action('wp_ajax_filter_menu_items', 'ajax_filter_menu_items');
add_action('wp_ajax_nopriv_filter_menu_items', 'ajax_filter_menu_items');

?>