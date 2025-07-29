<body>
  <div id="mobile-nav-menu-js" class="mobile-nav-menu">

    <div id="hamburger-closed-button-js" class="hamburger-closed-button">
      <div class="slice slice1"></div>
      <div class="slice slice2"></div>
      <div class="slice slice3"></div>
    </div>

    <nav>
      <ul>
        <li><a href="<?php echo get_permalink(get_page_by_path('home')) ?>">Home</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('menu')) ?>">Menu</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('reservation')) ?>">Reservation</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('about')) ?>">About</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('contact')) ?>">Contact</a></li>
      </ul>
    </nav>
  </div>
  <header>
    <div class="header-container max-width-px">
      <?php
      if (function_exists('the_custom_logo') && has_custom_logo()) {
        the_custom_logo();
      } else {
        $home_url = get_permalink(get_page_by_path('home'));
        echo '<a href="' . esc_url($home_url) . '" class="logo">' . get_bloginfo('name') . '</a>';
      }
      ?>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'menu_class' => 'nav-menu', ///ul class
        'container' => 'nav', /// default div
        'container_class' => 'main-nav', //nav class
      ));
      ?>
      <div id="hamburger-button-js" class="hamburger-button">
        <div class="slice slice1"></div>
        <div class="slice slice2"></div>
        <div class="slice slice3"></div>
      </div>
    </div>


  </header>