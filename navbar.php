<section class="navbar-section">
  <div class="container">
    <nav class="py-3 d-flex align-items-center justify-content-between border-bottom">
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
      <!-- <div class="nav-menu">
        <ul class="list-unstyled d-flex align-items-center gap-4 mb-0 text-uppercase">
          <li><a href="index.html" class="text-decoration-none">Home</a></li>
          <li><a href="blogs.html" class="text-decoration-none">Blogs</a></li>
          <li><a href="about.html" class="text-decoration-none">About Us</a></li>
          <li><a href="contactus.html" class="text-decoration-none">Contact Us</a></li>
        </ul>
      </div> -->
      <?php
        wp_nav_menu(array(
          'theme_location'=>'primary-menu',
          'menu_class'=>'nav-menu'
        ))
      ?>
    </nav>
  </div>
</section>