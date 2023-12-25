<!DOCTYPE html>
<html lang="en">

<?php get_header(); ?>

<body>
  <?php include_once('navbar.php'); ?>
  <section class="blog-detail-main-section py-5">
    <div class="container">
      <div class="d-flex align-items-center gap-5 mb-5">
        <?php 
          while(have_posts()) { 
            the_post();
             $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
        ?>
          <div class="single-image">
            <img src="<?php echo $imagepath[0] ?>" alt="">
          </div>
        <?php } ?>
        <div>
          <h1 class="mb-4">
            <?php the_title(); ?>
          </h1>
          <div>
            <a href="#" class="text-decoration-none text-dark">Leave a Comment / </a>
            By <a href="#" class="text-decoration-none text-dark">worthiewords</a>
          </div>
        </div>
      </div>
      <div>
        <!-- <h1 class="block-head fw-bold pt-4">Introduction:</h1>
        <p class="block-description">
          Hello, lovely readers! Join me, Reena, on a rollercoaster journey from knowing zilch about content writing to
          conquering the realm as an expert SEO-content writer. Let’s dive into the whirlwind of my three-year odyssey! -->
          <?php the_content(); ?> 
        </p>
      </div>
    </div>
  </section>
  <section class="comment-section">
    <div class="container">
      <div class="bg-gray py-5">
      <div class="w-50 m-auto">
        <div class="section-heading mb-5">
          <h2 class="fw-bold text-center">Leave a Comment</h2>
          <p class="w-75 m-auto text-center mt-4">Your email address will not be published. Required fields are marked *
            imperdiet mauris.</p>
        </div>
        <?php comment_form(); ?>
      </div>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>
</body>

</html>