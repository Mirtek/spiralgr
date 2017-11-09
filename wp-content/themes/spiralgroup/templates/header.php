<?php use Roots\Sage\Assets; ?>

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
  </div> 
</header>
