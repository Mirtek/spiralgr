<footer>
  <div class="content-wrapper">
    <div class="logo-container">
      <a href="<?= esc_url(home_url('/')); ?>"></a>
    </div>
    <div class="contact-us-container">
      <div class="title">
        Contact Us
      </div>
      <div class="address-container">
        <p>350 Townsend Street</p>
        <p>Suite 777</p>
        <p>San Francisco, CA 94107</p>
        <p>415-869-8579</p>
        <p class="email"><a href="mailto:info@spiralgroup.com">info@spiralgroup.com</a></p>
      </div>
    </div>
    <div class="footer-menu-container">
      <?php wp_nav_menu( array('menu' => 'footer_menu' )); ?>
    </div>
    <div class="footer-social-links-container">
      <ul class="social-links">
        <li class="social-links-item">
          <a href="">
            Twitter 
          </a>
        </li>
        <li class="social-links-item">
          <a href="">
            Facebook
          </a>
        </li>
        <li class="social-links-item">
          <a href="">
            LinkedIn
          </a>
        </li>
      </ul>
    </div>
  </div>    
</footer>
