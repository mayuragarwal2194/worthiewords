<!DOCTYPE html>
<html lang="en">
<?php 
  get_header();
  the_post();
?>
<body>
  <?php include_once('navbar.php'); ?>
  <div class="container">
    <div class="default-title">
      <?php the_title() ?>
    </div>  
    <div class="default-content">
      <?php the_content(); ?>
    </div>
    <div class="featured-image">
      <?php the_post_thumbnail('medium'); ?>
    </div>
  </div>
  <?php get_footer(); ?>
</body>
</html>