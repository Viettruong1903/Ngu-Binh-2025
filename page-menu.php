<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;600;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<?php get_header(); ?>

<section class="banner">
  <div class="content max-width-px">
    <h1>Menu</h1>
    <p>I love my clients! I’m proud of the relationships I’ve built with my clients, as well as the websites I’ve built
      for them. My goal is to be the one-stop-shop solution for all my clients to go to whenever they need anything done
      to their websites.</p>
  </div>
</section>

<section>
  <?php
  $query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 5,
  ));

  if ($query->have_posts()):
    while ($query->have_posts()):
      $query->the_post();
      ?>

      <h2><?php the_title(); ?></h2>

      <?php
    endwhile;
    wp_reset_postdata();
  else:
    echo 'No post';
  endif;
  ?>
</section>



<?php get_footer(); ?>