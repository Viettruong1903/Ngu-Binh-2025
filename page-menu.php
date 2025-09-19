<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;600;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<?php get_header(); ?>

<section class="menu-banner" aria-label="menu banner">
  <div class="heading-menu max-width-px">
    <h1>Ngự Bình Vietnamese Restaurant Menu</h1>
    <p class="inline-heading">
      Traditional Dishes in West Edmonton - Pho, Vermicelli, & More
      <span>
        <img src="<?php echo get_template_directory_uri(); ?>/img/soup-plate-svgrepo-com.svg"
          alt="Vietnamese Pho noodles soup icon">
      </span>
    </p>
  </div>
</section>


<nav id="menu-filters" class="filter-menu" aria-label="Filter Menu">
  <ul>
    <li>
      <?php
      $term = get_term_by('slug', 'drinks', 'menu-categories');

      echo '<button data-term="' . esc_attr($term->slug) . '">';
      echo '<img src="' . get_template_directory_uri() . '/img/drink-svgrepo-com.svg" alt="Drink SVG image">';
      echo esc_html($term->name);
      echo '</button>';
      ?>

    </li>

    <li>
      <?php
      $term = get_term_by('slug', 'appetizers', 'menu-categories');

      echo '<button data-term="' . esc_attr($term->slug) . '">';
      echo '<img src="' . get_template_directory_uri() . '/img/appetizers-svgrepo-com.svg" alt="Drink SVG image">';
      echo esc_html($term->name);
      echo '</button>';
      ?>

    </li>

  </ul>
</nav>

<section id="menu-items" class="food-categories" aria-labelledby="food-filters">

  <!-- <div class="box">
    <div class="category">
      <div class="meal">
        <div class="meal-image-profile">
          <img src="" alt="">
        </div>
        <div class="meal-text">
          <div class="heading-row">
            <h3>Pho Bo</h3>
            <p>Experience our signature Pho, a rich broth with fresh herbs and tender beef.</p>
          </div>
          <a href="#">See more</a>
        </div>
      </div>
      <div class="meal">
        <div class="meal-image-profile">
          <img src="" alt="">
        </div>
        <div class="meal-text">
          <div class="heading-row">
            <h3>Pho Bo</h3>
            <p>+50 dishes</p>
          </div>
          <p>Experience our signature Pho, a rich broth with fresh herbs and tender beef.</p>
          <a href="#">See more</a>
        </div>
      </div>
      <div class="meal">
        <div class="meal-image-profile">
          <img src="" alt="">
        </div>
        <div class="meal-text">
          <div class="heading-row">
            <h3>Pho Bo</h3>
            <p>+50 dishes</p>
          </div>
          <p>Experience our signature Pho, a rich broth with fresh herbs and tender beef.</p>
          <a href="#">See more</a>
        </div>
      </div>
      <div class="meal">
        <div class="meal-image-profile">
          <img src="" alt="">
        </div>
        <div class="meal-text">
          <div class="heading-row">
            <h3>Pho Bo</h3>
            <p>+50 dishes</p>
          </div>
          <p>Experience our signature Pho, a rich broth with fresh herbs and tender beef.</p>
          <a href="#">See more</a>
        </div>
      </div>
      <div class="meal">
        <div class="meal-image-profile">
          <img src="" alt="">
        </div>
        <div class="meal-text">
          <div class="heading-row">
            <h3>Pho Bo</h3>
            <p>+50 dishes</p>
          </div>
          <p>Experience our signature Pho, a rich broth with fresh herbs and tender beef.</p>
          <a href="#">See more</a>
        </div>
      </div>
      <div class="meal">
        <div class="meal-image-profile">
          <img src="" alt="">
        </div>
        <div class="meal-text">
          <div class="heading-row">
            <h3>Pho Bo</h3>
            <p>+50 dishes</p>
          </div>
          <p>Experience our signature Pho, a rich broth with fresh herbs and tender beef.</p>
          <a href="#">See more</a>
        </div>
      </div>
    </div>
  </div> -->
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Select all buttons inside #menu-filters
    const buttons = document.querySelectorAll('#menu-filters button');
    const menuItems = document.getElementById('menu-items');

    buttons.forEach(button => {
      button.addEventListener('click', function () {
        const term = this.dataset.term;

        // Show loading message
        menuItems.innerHTML = '<p>loading...</p>';

        // Make AJAX request to WordPress admin-ajax.php with your action and term
        fetch('<?php echo admin_url('admin-ajax.php'); ?>?action=filter_menu_items&term=' + term)
          .then(response => response.text())
          .then(html => {
            menuItems.innerHTML = html;
          })
          .catch(() => {
            menuItems.innerHTML = '<p>Error loading items.</p>';
          });
      });
    });
  });
</script>


<?php get_footer(); ?>