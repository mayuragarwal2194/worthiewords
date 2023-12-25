<?php 
  // Template Name: Home Template
?>
<!DOCTYPE html>
<?php 
  // echo get_template_directory_uri();
  // echo bloginfo("template_directory");
?>
<html lang="en">

<?php get_header(); ?>

<body>
  <?php include_once('navbar.php'); ?>
  <section class="Hero-banner-section my-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6">
          <div class="banner-image">
            <img src="<?php echo bloginfo('template_directory'); ?>/images/pexels-pavel-danilyuk-6764187-scaled.jpg" class="h-100 w-100" alt="">
          </div>
        </div>
        <div class="col-12 col-md-6">
          <h1 class="banner-head fw-bold mb-3">
            At Worthie Words- It's Worth Every Word You Read
          </h1>
          <p class="w-75">
            We are the team of content writers who put your thoughts into words and make your ideas come to life.
          </p>
          <div class="letest-blog-button mb-3">
            <a href="<?php the_permalink(1274); ?>" class="text-decoration-none d-flex align-items-center gap-2">
              <span>Latest Blogs</span>
              <div><i class="fa-solid fa-arrow-right-long"></i></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about-us-section my-5 py-5">
    <div class="container">
      <div class="section-heading">
        <h2 class="fw-bold text-center">The Story Of Founder</h2>
        <div class="section-heading-underline m-auto rounded"></div>
      </div>
      <div class="aboutus-section-description text-center w-50 m-auto pt-5">
        <p>
          I started my journey four years ago with writing general captions for social media posts, but I was always
          passionate about writing.
        </p>
        <p>
          From writing journals in childhood to becoming an amazing SEO-content writer, it was never easy neither
          impossible.
        </p>
        <a href="<?php the_permalink(1272) ?>">
          <button class="read-more-btn bg-transparent rounded mt-4">Read More</button>
        </a>
      </div>
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
  <section class="blog mt-5 py-5 bg-gray">
    <div class="container">
      <div class="section-heading mb-5">
        <h2 class="fw-bold text-center">Recent Blog Posts</h2>
        <div class="section-heading-underline m-auto rounded"></div>
      </div>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card h-100 border-0">
            <img src="<?php echo bloginfo('template_directory'); ?>/images/podcaster-template-podcast-cover-img-1.jpg" class="card-img-top rounded" alt="...">
            <div class="card-body bg-gray px-0 pb-0 d-flex align-items-start gap-3">
              <div>
                <div
                  class="play-btn-circle d-flex align-items-center justify-content-center rounded-circle cursor-pointer">
                  <a href="#">
                    <i class="fa-solid fa-play text-green"></i>
                  </a>
                </div>
              </div>
              <div>
                <h5 class="card-title fw-bold">
                  Lacus sollicitudin pellen
                </h5>
                <p class="card-text">Elisa Miles - Author</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 border-0">
            <img src="<?php echo bloginfo('template_directory'); ?>/images/podcaster-template-podcast-cover-img-2.jpg" class="card-img-top rounded" alt="...">
            <div class="card-body bg-gray px-0 pb-0 d-flex align-items-start gap-3">
              <div>
                <div
                  class="play-btn-circle d-flex align-items-center justify-content-center rounded-circle cursor-pointer">
                  <a href="#">
                    <i class="fa-solid fa-play text-green"></i>
                  </a>
                </div>
              </div>
              <div>
                <h5 class="card-title fw-bold">
                  Diam amet donec volutpat
                </h5>
                <p class="card-text">James Fox - Founder</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 border-0">
            <img src="<?php echo bloginfo('template_directory'); ?>/images/podcaster-template-podcast-cover-img-3.jpg" class="card-img-top rounded" alt="...">
            <div class="card-body bg-gray px-0 pb-0 d-flex align-items-start gap-3">
              <div>
                <div
                  class="play-btn-circle d-flex align-items-center justify-content-center rounded-circle cursor-pointer">
                  <a href="#">
                    <i class="fa-solid fa-play text-green"></i>
                  </a>
                </div>
              </div>
              <div>
                <h5 class="card-title fw-bold">
                  Est auctor tincid posuere
                </h5>
                <p class="card-text">Irene Foxx - Director</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 border-0">
            <img src="<?php echo bloginfo('template_directory'); ?>/images/podcaster-template-podcast-cover-img-1.jpg" class="card-img-top rounded" alt="...">
            <div class="card-body bg-gray px-0 pb-0 d-flex align-items-start gap-3">
              <div>
                <div
                  class="play-btn-circle d-flex align-items-center justify-content-center rounded-circle cursor-pointer">
                  <a href="#">
                    <i class="fa-solid fa-play text-green"></i>
                  </a>
                </div>
              </div>
              <div>
                <h5 class="card-title fw-bold">
                  Lacus sollicitudin pellen
                </h5>
                <p class="card-text">Elisa Miles - Author</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="<?php the_permalink(1274) ?>" class="text-decoration-none">
      <button class="read-more-btn bg-transparent rounded mt-4 d-block m-auto mt-5">View All Blogs</button></a>
    </div>
  </section>
  <section class="testimonial-section">
    <div class="w-100">
      <div class="testimonial-bg">
        <div class="container py-5">
          <div class="section-heading">
            <h2 class="fw-bold text-center text-white mb-3">What People Say</h2>
            <div class="section-heading-underline m-auto rounded bg-white"></div>
          </div>
          <div class="testimonial-cards mt-5 pt-4">
            <div class="row row-cols-1 row-cols-md-3 g-5">
              <div class="col">
                <div class="card h-100 bg-transparent border-white">
                  <div class="card-body text-white">
                    <p class="card-text">
                      “At the starting days of our brand, founder Reena helped us with social media posts and she never
                      missed a single trend. Thanks for supporting our Small Business dear.”
                    </p>
                    <div class="d-flex align-items-center gap-3">
                      <img src="<?php echo bloginfo('template_directory'); ?>/images/podcaster-template-reviewer-1.jpg" class="rounded-circle" alt="">
                      <div>
                        <div class="name">Color Nirvana</div>
                        <div class="address">Rajasthani Apparel Brand</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 bg-transparent border-white">
                  <div class="card-body text-white">
                    <p class="card-text">
                      “Even on the most complicated blog topics, Worthie words manage to rank on #1 in Google SERPs, you
                      guys did your job great as you always do! Keep it up guys”
                    </p>
                    <div class="d-flex align-items-center gap-3">
                      <img src="<?php echo bloginfo('template_directory'); ?>/images/podcaster-template-reviewer-2.jpg" class="rounded-circle" alt="">
                      <div>
                        <div class="name">Bhanupriya Yadav</div>
                        <div class="address">CEO, B.P. Tech Solutions</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 bg-transparent border-white">
                  <div class="card-body text-white">
                    <p class="card-text">
                      “She started her journey with us, and in very small span of time, she impressed our clients with
                      our words. And now with Worthie words, team is doing amazing work for us as well.”
                    </p>
                    <div class="d-flex align-items-center gap-3">
                      <img src="<?php echo bloginfo('template_directory'); ?>/images/podcaster-template-reviewer-3.jpg" class="rounded-circle" alt="">
                      <div>
                        <div class="name">Twinkle Chandan</div>
                        <div class="address">Founder, The SEO Punch</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 bg-transparent border-white">
                  <div class="card-body text-white">
                    <p class="card-text">
                      “As a traveling blogging website owner, we need great stories, best keywords, and a good writers
                      team! The support we got from your team is constantly superb.”
                    </p>
                    <div class="d-flex align-items-center gap-3">
                      <img src="<?php echo bloginfo('template_directory'); ?>/images/podcaster-template-reviewer-4.jpg" class="rounded-circle" alt="">
                      <div>
                        <div class="name">Kavish Sethi</div>
                        <div class="address">CEO, Explorecozy</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 bg-transparent border-white">
                  <div class="card-body text-white">
                    <p class="card-text">
                      “Etiam hendrerit urna neque diam fames semper vel feugiat auctor arcu lectus dolor enim tortor dui
                      netus ornare donec dis.”
                    </p>
                    <div class="d-flex align-items-center gap-3">
                      <img src="<?php echo bloginfo('template_directory'); ?>/images/podcaster-template-reviewer-5.jpg" class="rounded-circle" alt="">
                      <div>
                        <div class="name">Rodrigo Alonso</div>
                        <div class="address">Designer</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 bg-transparent border-white">
                  <div class="card-body text-white">
                    <p class="card-text">
                      “Eget interdum id nunc at diam pellentesque tortor eros aliquet sed pretium, fermentum, nulla
                      ornare diam.”
                    </p>
                    <div class="d-flex align-items-center gap-3">
                      <img src="<?php echo bloginfo('template_directory'); ?>/images/podcaster-template-reviewer-6.jpg" class="rounded-circle" alt="">
                      <div>
                        <div class="name">Mila Jackson</div>
                        <div class="address">Designer</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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