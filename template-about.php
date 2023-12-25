<?php 
  // Template Name: About Us Template
?>
<!DOCTYPE html>
<html lang="en">

<?php get_header(); ?>

<body>
  <?php include_once('navbar.php'); ?>
  <section class="Hero-banner-section my-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6">
          <div class="banner-image about-banner-image">
            <img src="<?php echo bloginfo('template_directory'); ?>/images/podcaster-template-about-page-header-img.jpg" class="h-100 w-100" alt="">
          </div>
        </div>
        <div class="col-12 col-md-6">
          <h1 class="banner-head fw-bold mb-3">
            About
          </h1>
          <p class="w-75">
            We are the team of content writers who put your thoughts into words and make your ideas come to life.
          </p>
          <div class="letest-blog-button mb-3">
            <a href="<?php the_permalink(1274) ?>" class="text-decoration-none d-flex align-items-center gap-2">
              <span>Latest Blogs</span>
              <div><i class="fa-solid fa-arrow-right-long"></i></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="our-story-section">
    <div class="container">
      <div class="section-heading mb-5">
        <h2 class="fw-bold text-center w-50 mx-auto">The Story Behind Ursus Dolor Quis Et Ipsum.</h2>
        <div class="section-heading-underline m-auto rounded"></div>
      </div>
      <p class="text-center w-75 m-auto mb-2">
        Egestas gravida erat enim ac morbi at malesuada arcu habitant blandit pulvinar tellus consectetur mi at suscipit
        sit sit pulvinar amet convallis imperdiet pretium, egestas scelerisque imperdiet duis aenean turpis dui
        scelerisque sit massa semper risus, vitae volutpat sodales eget donec auctor scelerisque orci sed id ac turpis
        tristique consectetur lorem. Sed
      </p>
      <p class="text-center w-75 m-auto">
        dis iaculis nunc, augue dictum et vitae risus sed eget ac, penatibus ultrices fames quisque suspendisse lobortis
        quis aliquam odio egestas non urna eu tincidunt pharetra mauris, nulla tincidunt nisi, semper eu turpis non nunc
        arcu netus venenatis tristique feugiat ac habitasse.scelerisque sit massa semper risus, vitae volutpat sodales
        eget donec auctor scelerisque orci sed id ac turpis
        tristique consectetur lorem. Sed
      </p>
    </div>
  </section>
  <section class="about-video-section my-5">
    <div class="container">
      <video autoplay="" loop="" controls="" height="480" class="w-100">
        <source type="video/mp4"
          src="https://endtest-videos.s3-us-west-2.amazonaws.com/documentation/endtest_data_driven_testing_csv.mp4">
      </video>
    </div>
  </section>
  <section class="host-section py-5">
    <div class="container">
      <div class="section-heading mb-5">
        <h2 class="fw-bold text-center w-50 mx-auto">Meet Your Host</h2>
        <div class="section-heading-underline m-auto rounded"></div>
      </div>
      <div class="d-md-flex align-items-center justify-content-center gap-5 mb-5">
        <div class="w-50">
          <p class="text-justify">
            Adipiscing congue a vitae consequat egestas adipiscing amet aliquet ornare tristique tellus vel accumsan
            tortor blandit erat interdum congue.
            Faucibus enim tellus bibendum mi tincidunt ut risus accumsan bibendum venenatis odio aliquet ac sit sed
            porta
            et amet sit neque vulputate velit in porttitor quis elit tortor aliquet nullam malesuada nunc, sodales
            mattis
            integer varius quam et sem turpis lacus tellus cursus aliquam, ac at congue enim.
          </p>
          <h1 class="fw-bold">Mark Campbell</h1>
          <div class="about socials d-flex align-items-center gap-4">
            <a href="" class="text-dark"> 
              <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="" class="text-dark"> 
              <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="" class="text-dark"> 
              <i class="fa-brands fa-youtube"></i>
            </a>
            <a href="" class="text-dark"> 
              <i class="fa-brands fa-instagram"></i>
            </a>
          </div>
        </div>
        <div class="">
          <img src="<?php echo bloginfo('template_directory'); ?>/images/podcaster-template-host-img-1.jpg" class="" alt="">
        </div>
      </div>
      <div class="d-md-flex align-items-center justify-content-center gap-5">
        <div class="">
          <img src="<?php echo bloginfo('template_directory'); ?>/images/podcaster-template-host-img-2.jpg" class="" alt="">
        </div>
        <div class="w-50">
          <p class="text-justify">
            Adipiscing congue a vitae consequat egestas adipiscing amet aliquet ornare tristique tellus vel accumsan
            tortor blandit erat interdum congue.
            Faucibus enim tellus bibendum mi tincidunt ut risus accumsan bibendum venenatis odio aliquet ac sit sed
            porta
            et amet sit neque vulputate velit in porttitor quis elit tortor aliquet nullam malesuada nunc, sodales
            mattis
            integer varius quam et sem turpis lacus tellus cursus aliquam, ac at congue enim.
          </p>
          <h1 class="fw-bold">Ben Johnson</h1>
          <div class="about socials d-flex align-items-center gap-4">
            <a href="" class="text-dark"> 
              <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="" class="text-dark"> 
              <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="" class="text-dark"> 
              <i class="fa-brands fa-youtube"></i>
            </a>
            <a href="" class="text-dark"> 
              <i class="fa-brands fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>
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
  <?php get_footer(); ?>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>