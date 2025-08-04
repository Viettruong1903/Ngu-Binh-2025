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
    <h1>The Traditional Vietnamese restaurant in West Edmonton, AB</h1>
    <p>Experience the best Vietnamese restaurant in West Edmonton, bringing the true taste of Vietnam with every dish.
      From pho and noodles to spring rolls, enjoy an unforgettable culinary journey that celebrates tradition and rich
      flavors.</p>
    <div class="cta-buttons">
      <a class="primary-btn mobile-btn-primary" href="<?php echo get_permalink(get_page_by_path('menu')); ?>">Menu</a>
      <!-- <a href="<?php echo get_page_link(get_page_by_path('about')); ?>">About</a> -->
    </div>
  </div>
</section>

<section class="about">
  <div class="wrap">
    <div class="about-text">
      <h2>A New Chapter for Your Favorite - Vietnamese Restaurant in West Edmonton</h2>
      <p>Ngự Bình Vietnamese restaurant in West Edmonton has proudly reopened under the same ownership. We continue to
        serve the authentic flavors and traditional dishes our community loves, delivering the true taste of Vietnam
        with every meal. </p>
      <img src="<?php echo get_template_directory_uri(); ?>/img/old-ngu-binh-vietnamese-restaurant.jpg"
        alt="Old Ngu Binh Vietnamese Restaurant" loading="lazy">
      <a class="primary-btn mobile-btn-primary" href="<?php echo get_permalink(get_page_by_path('about')) ?>"
        aria-label="About Us">About Us</a>
    </div>
    <div class="image-column">
      <img src="<?php echo get_template_directory_uri(); ?>/img/old-ngu-binh-vietnamese-restaurant.jpg"
        alt="Old Ngu Binh Vietnamese Restaurant" loading="lazy">
    </div>
  </div>
</section>

<section class="menu">
  <div class="box">
    <h2>Discover Vietnamese Cuisine at Our Restaurant in West Edmonton</h2>
    <p>Our menu highlights the richness of Vietnamese food with both traditional and modern options.</p>
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
    <h2>Ngự Bình Vietnamese Restaurant West Edmonton</h2>
    <address>17014 107 Ave NW, Edmonton, AB T5S 1L8</address>
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