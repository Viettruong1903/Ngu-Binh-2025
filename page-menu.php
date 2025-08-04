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
    <h1>Menu1</h1>
    <p>I love my clients! I’m proud of the relationships I’ve built with my clients, as well as the websites I’ve built
      for them. My goal is to be the one-stop-shop solution for all my clients to go to whenever they need anything done
      to their websites.</p>
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
      $term = get_term_by('slug', 'appetizer', 'menu-categories');

      echo '<button data-term="' . esc_attr($term->slug) . '">';
      echo '<img src="' . get_template_directory_uri() . '/img/drink-svgrepo-com.svg" alt="Drink SVG image">';
      echo esc_html($term->name);
      echo '</button>';
      ?>

    </li>
    <li>
      <?php
      $term = get_term_by('slug', 'appetizer', 'menu-categories');

      echo '<button data-term="' . esc_attr($term->slug) . '">';
      echo '<img src="' . get_template_directory_uri() . '/img/drink-svgrepo-com.svg" alt="Drink SVG image">';
      echo esc_html($term->name);
      echo '</button>';
      ?>

    </li>
    <li>
      <?php
      $term = get_term_by('slug', 'appetizer', 'menu-categories');

      echo '<button data-term="' . esc_attr($term->slug) . '">';
      echo '<img src="' . get_template_directory_uri() . '/img/drink-svgrepo-com.svg" alt="Drink SVG image">';
      echo esc_html($term->name);
      echo '</button>';
      ?>

    </li>
    <li>
      <?php
      $term = get_term_by('slug', 'appetizer', 'menu-categories');

      echo '<button data-term="' . esc_attr($term->slug) . '">';
      echo '<img src="' . get_template_directory_uri() . '/img/drink-svgrepo-com.svg" alt="Drink SVG image">';
      echo esc_html($term->name);
      echo '</button>';
      ?>

    </li>
    <li>
      <?php
      $term = get_term_by('slug', 'appetizer', 'menu-categories');

      echo '<button data-term="' . esc_attr($term->slug) . '">';
      echo '<img src="' . get_template_directory_uri() . '/img/drink-svgrepo-com.svg" alt="Drink SVG image">';
      echo esc_html($term->name);
      echo '</button>';
      ?>

    </li>

  </ul>
</nav>


<div id="menu-items">

</div>





<section class="food-categories" aria-labelledby="food-filters">

  <div class="box">
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
  </div>
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
        //menuItems.innerHTML = '<p>Loading...</p>';

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