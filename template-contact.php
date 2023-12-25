<?php 
  // Template Name: Contact Us Template
?>
<!DOCTYPE html>
<html lang="en">

<?php get_header(); ?>

<body>
  <?php include_once('navbar.php'); ?>
  <section class="contactus-main my-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6">
          <div class="map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20447.452445809624!2d72.23950626177884!3d25.81978515946038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3943e8d13ce86b51%3A0xc41d3acc5c3109dd!2sBalotra%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1701447133045!5m2!1sen!2sin"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="section-heading mb-4">
            <h2 class="fw-bold">Latest Episode</h2>
          </div>
          <p>
            Massa urna magnis dignissim id euismod porttitor vitae etiam viverra at adipiscing sit morbi aliquet
            mauris porttitor nisi, senectus pharetra, ac porttitor orci.
          </p>
          <div class="contact-info my-3">
            <div class="d-flex align-items-baseline gap-3">
              <i class="fa-solid fa-location-dot text-green"></i>
              <div>
                <span class="text-green">Address</span>
                <p>
                  1234 N Spring St, Los Angeles, CA 90012, United States.
                </p>
              </div>
            </div>
          </div>
          <div class="contact-info my-3">
            <div class="d-flex align-items-baseline gap-3">
              <i class="fa-solid fa-phone text-green"></i>
              <div>
                <span class="text-green">Phone</span>
                <p>
                  +01 - 123 456 7890
                </p>
              </div>
            </div>
          </div>
          <div class="contact-info my-3">
            <div class="d-flex align-items-baseline gap-3">
              <i class="fa-solid fa-envelope text-green"></i>
              <div>
                <span class="text-green">Email</span>
                <p>
                  mail@example.com
                </p>
              </div>
            </div>
          </div>
          <div class="mt-5">
            <p>Subscribe and listen on major platform</p>
            <div class="online-plateforms d-flex align-items-center justify-content-between gap-4">
              <a href="#" class="plateform p-3 rounded text-decoration-none">
                <i class="fa-solid fa-podcast text-green"></i>
                <div class="text-dark">Apple Podcast</div>
              </a>
              <a href="#" class="plateform p-3 rounded text-decoration-none">
                <i class="fa-brands fa-google text-green"></i>
                <div class="text-dark">Google Podcast</div>
              </a>
              <a href="#" class="plateform p-3 rounded text-decoration-none">
                <i class="fa-brands fa-spotify text-green"></i>
                <div class="text-dark">Spotify</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="contactus-form bg-gray py-5">
    <div class="container">
      <div class="w-50 m-auto">
        <div class="section-heading mb-5">
          <h2 class="fw-bold text-center">We Love to Hear from You</h2>
          <p class="w-75 m-auto text-center mt-4">Suspendisse mattis netus euismod commodo, aliquam integer enim
            imperdiet mauris.</p>
        </div>
        <form class="row g-3">
          <div class="col-md-6">
            <label for="firstname" class="form-label cursor-pointer">First Name</label>
            <input type="text" class="form-control" id="firstname">
          </div>
          <div class="col-md-6">
            <label for="lastname" class="form-label cursor-pointer">Last Name</label>
            <input type="text" class="form-control" id="lastname">
          </div>
          <div class="col-md-12">
            <label for="inputEmai" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmai">
          </div>
          <div class="col-md-12">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject">
          </div>
          <div class="col-12">
            <label for="message" class="form-label">Message or Comment</label>
            <textarea class="form-control" id="message" rows="5"></textarea>
          </div>
          <div class="col-12">
            <button type="submit" class="bg-green text-white rounded">Subscribe</button>
          </div>
        </form>
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
<!-- Bootstrap Js CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>