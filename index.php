<!DOCTYPE html>
<html lang="en">

<?php get_header(); ?>

<body>
  <?php include_once('navbar.php'); ?>
  <section class="blog py-5 bg-gray">
    <div class="container">
      <div class="section-heading mb-5">
        <h2 class="fw-bold text-center">All Blogs</h2>
        <div class="section-heading-underline m-auto rounded"></div>
      </div>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php 
          while(have_posts()) { 
            the_post();
             $imagepath= wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
        ?>
        <div class="col">
          <div class="card h-100 border-0">
            <div class="blog-card-image">
              <img src="<?php echo $imagepath[0]?>" class="card-img-top rounded h-100 w-100" alt="...">
            </div>
            <div class="card-body bg-gray px-0 pb-0 d-flex align-items-start gap-3">
              <div>
                <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                  <div
                    class="play-btn-circle d-flex align-items-center justify-content-center rounded-circle cursor-pointer">
                      <i class="fa-solid fa-play text-green"></i>
                  </div>
                </a>
              </div>
              <div>
                <h5 class="card-title fw-bold">
                  <?php the_title(); ?>
                </h5>
                <?php the_excerpt(); ?>
              </div>
            </div>
          </div>
        </div>
        <?php }?>
      </div>
      <div class="pagination mt-4 p-3">
        <?php echo wp_pagenavi(); ?>
      </div>
      <!-- <button class="read-more-btn bg-transparent rounded mt-4 d-block m-auto mt-5">Load More</button> -->
    </div>
  </section>
  <section class="collage-section my-5">
    <div class="container">
      <div class="section-heading mb-5">
        <h2 class="fw-bold text-center">Latest Episode</h2>
        <div class="section-heading-underline m-auto rounded"></div>
      </div>
      <div class="row align-items-center">
        <div class="col-12 col-md-6">
          <div class="collage-image w-100">
            <img src="<?php echo bloginfo('template_directory'); ?>/images/podcaster-template-latest-episode-podcast.jpg" class="w-100 h-100" alt="">
          </div>
        </div>
        <div class="col-12 col-md-6">
          <h1 class="banner-head fw-bold mb-3 w-75">
            Typography Mistake Every Designer Have Did in Life.
          </h1>
          <p class="w-75">
            We are the team of content writers who put your thoughts into words and make your ideas come to life.
          </p>
          <div class="pen-nib d-flex align-items-center justify-content-center rounded-circle cursor-pointer">
            <a href="#">
              <i class="fa-solid fa-pen-nib text-green"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="newsletter-section py-5">
    <div class="container">
      <div class="section-heading">
        <h2 class="fw-bold text-center mb-3 w-50 m-auto">Join Our Mailing List for the Latest News and Updates.</h2>
        <div class="section-heading-underline m-auto rounded"></div>
      </div>
      <div class="mt-5">
        <form action="">
          <div class="d-flex align-items-center justify-content-center gap-4">
            <input type="email" placeholder="Email">
            <button type="submit" class="bg-green text-white rounded">Subscribe</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>
</body>

</html>
<!-- Bootstrap Js CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>