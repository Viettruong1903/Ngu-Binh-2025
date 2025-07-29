<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;600;700&display=swap" rel="stylesheet">


  <?php wp_head(); ?>
</head>

<?php get_header(); ?>

<section class="hero-section">
  <div class="hero-img">
    <img
      src="https://images.unsplash.com/photo-1712432136657-517fcb044ccb?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
      alt="2 bowls of Bun Bo Hue">
  </div>
  <div class="hero-text">
    <h1>Best Vietnamese Food in Edmonton, AB</h1>
    <p>Experience the true taste of Vietnam with every dish, crafted to bring you an unforgettable culinary journey
      that celebrates tradition and flavor.</p>
    <div class="cta-buttons">
      <a class="primary-btn mobile-btn-primary" href="<?php echo get_permalink(get_page_by_path('menu')); ?>">Menu</a>
      <!-- <a href="<?php echo get_page_link(get_page_by_path('about')); ?>">About</a> -->
    </div>
  </div>
</section>

<section class="about">
  <div class="wrap">
    <div class="about-text">
      <h2>Experience the True Taste of Tradition</h2>
      <p>At Ngu Binh, we are committed to delivering genuine culinary experiences that celebrate authentic flavors and
        cultural heritage. </p>
      <div class="image">
        <img src="" alt="">
      </div>
      <a class="primary-btn mobile-btn-primary" href="<?php echo get_permalink(get_page_by_path('about')) ?>"
        aria-label="Read about our history">Learn
        more</a>
    </div>
    <div class="image-column">
      <img src="" alt="">
    </div>
  </div>
</section>

<section class="menu">
  <div class="box">
    <h2>Ngu Binh: Savor Authentic Vietnamese Flavors</h2>
    <p>Explore our diverse menu showcasing traditional and modern dishes.</p>
    <div class="menu-dishes">
      <div class="dishes">
        <div class="dish-image-profile">
          <img src="" alt="">
        </div>
        <div class="dish-text">
          <div class="heading-row">
            <h3>Pho Bo</h3>
            <p>+50 dishes</p>
          </div>
          <p>Experience our signature Pho, a rich broth with fresh herbs and tender beef.</p>
          <a href="#">See more</a>
        </div>
      </div>
      <div class="dishes">
        <div class="dish-image-profile">
          <img src="" alt="">
        </div>
        <div class="dish-text">
          <div class="heading-row">
            <h3>Pho Bo</h3>
            <p>+50 dishes</p>
          </div>
          <p>Experience our signature Pho, a rich broth with fresh herbs and tender beef.</p>
          <a href="#">See more</a>
        </div>
      </div>
      <div class="dishes">
        <div class="dish-image-profile">
          <img src="" alt="">
        </div>
        <div class="dish-text">
          <div class="heading-row">
            <h3>Pho Bo</h3>
            <p>+50 dishes</p>
          </div>
          <p>Experience our signature Pho, a rich broth with fresh herbs and tender beef.</p>
          <a href="#">See more</a>
        </div>
      </div>
      <div class="dishes">
        <div class="dish-image-profile">
          <img src="" alt="">
        </div>
        <div class="dish-text">
          <div class="heading-row">
            <h3>Pho Bo</h3>
            <p>+50 dishes</p>
          </div>
          <p>Experience our signature Pho, a rich broth with fresh herbs and tender beef.</p>
          <a href="#">See more</a>
        </div>
      </div>
      <div class="dishes">
        <div class="dish-image-profile">
          <img src="" alt="">
        </div>
        <div class="dish-text">
          <div class="heading-row">
            <h3>Pho Bo</h3>
            <p>+50 dishes</p>
          </div>
          <p>Experience our signature Pho, a rich broth with fresh herbs and tender beef.</p>
          <a href="#">See more</a>
        </div>
      </div>
      <div class="dishes">
        <div class="dish-image-profile">
          <img src="" alt="">
        </div>
        <div class="dish-text">
          <div class="heading-row">
            <h3>Pho Bo</h3>
            <p>+50 dishes</p>
          </div>
          <p>Experience our signature Pho, a rich broth with fresh herbs and tender beef.</p>
          <a href="#">See more</a>
        </div>
      </div>
    </div>
    <a class="primary-btn mobile-btn-primary" href="<?php echo get_permalink(get_page_by_path('menu')); ?>">Full
      Menu</a>
  </div>
</section>

<section class="location">
  <div class="location-box">
    <h2>Ngu Binh Vietnamese Restaurant kitchen</h2>
    <address>9831 159st NW, Edmonton AB T5P 2Z9</address>
    <div class="location-hours">
      <h3>Hours of Operation</h3>
      <ul>
        <li>Monday – Sunday: 11 AM – 8 PM</li>
        <li>Tuesday: <strong>Closed</strong></li>
      </ul>
    </div>
    <p><strong>Call us:</strong>
      <a href="tel:+17806042490">780-604-2490</a>
    </p>
  </div>
</section>

<!-- <section class="call-to-action">
    <div class="call-to-action-text">
      <h2>Authentic Flavors of Vietname Await</h2>
      <p>Discover the rich tastes and book your unforgettable dining experience today.</p>
    </div>
    <div class="call-to-action-button">
      <a href="">Discover more</a>
    </div>
  </section> -->

<!-- <section class="testimonial">
    <p>wordpress plugin</p>
  </section> -->

<div id="overlay-js" class="overlay"></div>

<!-- footer.php -->
<?php get_footer(); ?>