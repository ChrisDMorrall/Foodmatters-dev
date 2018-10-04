<?php get_header(); ?>


<!-- Intro Section -->
<section id="home">
  <div class="view intro-background jarallax" data-jarallax='{"speed": 0.2}'>
    <div class="full-bg-img">
      <div class="mask rgba-teal-strong flex-center">
        <div class="container text-center">
          <div>
            <h1 class="animated zoomIn slow">Avanti</h1>
            <h1 class="animated zoomIn slow mb-5">Logo Here</h1>
            <h4 class="animated fadeInDown slow delay-1s hero-text-1">Visualise</h4>
            <h4 class="animated fadeInLeft slow delay-2s hero-text-1">Formalise</h4>
            <h4 class="animated fadeInRight slow delay-3s hero-text-1">Realise</h4>
          </div>
          <div>
              <h1 class="animated fadeInUp slow delay-5s hero-text-1">Forward Thinking For The Digital Age</h1>
              <button class="btn btn-outline-white peach-gradient btn-rounded animated fadeInUp slow delay-5s">Request Quote</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Intro Section -->
<hr class="w-75 mt-5" id="services">
<!--Services Section-->
<section class="text-center my-5">
  <div class="container">
    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5 pt-3 wow zoomInUp slow" data-wow-offset="50">Our Services</h2>
    <!-- Section description -->
    <p class="text-center w-responsive mx-auto mb-5 wow zoomInUp slow" data-wow-delay="0.5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-6 col-md-6 mb-4 mb-md-0 px-5 wow zoomInUp slow" data-wow-delay="1s">

        <!-- Card -->
        <div class="card card-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/img/mountain-1.jpg');">

          <!-- Service card -->
          <div class="text-white text-center pricing-card d-flex align-items-center mask aqua-gradient-rgba py-3 px-3 rounded">

            <!-- Content -->
            <div class="card-body">

              <!-- Service -->
              <div class="pt-0">
                <h2 class="mb-0">Web</h2>
              </div>

              <ul class="striped mb-0">
                <li>
                  <p><strong>Web Design</strong></p>
                </li>
                <li>
                  <p><strong>Web Hosting</strong></p>
                </li>
                <li>
                  <p><strong>Domain Names</strong></p>
                </li>
                <li>
                  <p><strong>Email</strong></p>
                </li>
                <li>
                  <p><strong>Support</strong></p>
                </li>
              </ul>
              <a class="btn btn-outline-white btn-rounded waves-effect">Enquire</a>

            </div>
            <!-- Content -->

          </div>
          <!-- Service card -->

        </div>
        <!-- Card -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-6 col-md-6 mb-md-0 mb-4 px-5 wow zoomInUp slow" data-wow-delay="1s">

        <!-- Card -->
        <div class="card card-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/img/mountain-3.jpg');">

          <!-- Service card -->
          <div class="text-white text-center pricing-card d-flex align-items-center mask peach-gradient-rgba py-3 px-3 rounded">

            <!-- Content -->
            <div class="card-body">

              <!-- Service -->
              <div class="pt-0">
                <h2 class="mb-0">Marketing</h2>
              </div>

              <ul class="striped mb-0">
                <li>
                  <p><strong>SEO</strong></p>
                </li>
                <li>
                  <p><strong>Logo Design</strong></p>
                </li>
                <li>
                  <p><strong>Graphic Design</strong></p>
                </li>
                <li>
                  <p><strong>Social Media</strong></p>
                </li>
                <li>
                  <p><strong>Photography</strong></p>
                </li>
              </ul>
              <a class="btn btn-outline-white btn-rounded">Enquire</a>

            </div>
            <!-- Content -->

          </div>
          <!-- Service card -->

        </div>
        <!-- Card -->

      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->
  </div>
</section>
<!--Services Section-->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php the_content(); ?>

<?php endwhile;  endif;?>

<?php get_footer(); ?>
