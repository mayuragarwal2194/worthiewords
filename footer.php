<footer class="my-5">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between">
        <?php 
          $logoimg = get_header_image();
        ?>
        <div class="logo">
          <a href="<?php echo site_url(); ?>">
            <div class="logo-image">
              <img src="<?php echo $logoimg; ?>" class="w-100 h-100">
            </div>
          </a>
        </div>
        <div class="footer-menu nav-menu">
          <!-- <ul class="list-unstyled d-flex align-items-center gap-4 mb-0 text-uppercase">
            <li><a href="index.html" class="text-decoration-none">Home</a></li>
            <li><a href="blogs.html" class="text-decoration-none">Blogs</a></li>
            <li><a href="about.html" class="text-decoration-none">About Us</a></li>
            <li><a href="contactus.html" class="text-decoration-none">Contact Us</a></li>
          </ul> -->
          <?php
            wp_nav_menu(array(
              'theme_location'=>'secondary-menu',
              'menu_class'=>'nav-menu'
            ))
          ?>
        </div>
        <div class="footer-socials d-flex align-items-center gap-4">
          <i class="fa-solid fa-podcast"></i>
          <i class="fa-brands fa-google"></i>
          <i class="fa-brands fa-spotify"></i>
        </div>
      </div>
      <div class="copyright-section text-center mt-4 py-3">
        Copyright © 2023 Worthie Words
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>