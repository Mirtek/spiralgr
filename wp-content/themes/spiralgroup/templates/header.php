<?php use Roots\Sage\Assets; ?>
<!--<header class="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>-->
<header>
    <div class="content-wrapper">
      <div class="logo-container">
        <div class="logo">
          <a href="<?= esc_url(home_url('/')); ?>"></a>
        </div>
        <div class="slogan">
          Brand Marketing For Emerging Technology Companies
        </div>
      </div>
      <div class="menu-button">
        <i class="ico fa fa-bars" aria-hidden="true"></i>
      </div>
    </div>
    <div class="menu-block">
      <div class="menu-block-close-btn">
        <i class="fa fa-times" aria-hidden="true"></i>
      </div>      
      <?php wp_nav_menu(); ?>
      <!-- <li class="menu-item">
        <a href="">Services</a>
      </li>
      <li class="menu-item">
        <a href="">Results</a>
      </li>
      <li class="menu-item">
        <a href="">About Us</a>
      </li>
      <li class="menu-item">
        <a href="">Insights</a>
      </li>
      <li class="menu-item">
        <a href="">Contact Us</a>
      </li> -->
    </div> 
  </header>
