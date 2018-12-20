<?php get_header(); ?>


<!-- Intro Section -->
<section id="home">
  <!-- Commented out sections remove carousel slides to only have 1 slide as the section content. Remove comments for carousel items to turn back into a carousel. N.B. Carousel Background images are also commented out in style.scss  -->
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="8000">
    <div class="carousel-inner">
      <!-- <div class="carousel-item active">
        <div class="view">
          <div class="full-bg-img flex-center mask rgba-black-light white-text">
            <ul class="animated fadeInUp col-md-12 list-unstyled list-inline">
              <li>
                <h1 class="font-weight-bold text-uppercase fm-peach-text">Our Approach One Lorem Ipsum</h1>
              </li>
              <li>
                <h4 class="fonte-weight-bold text-uppercase fm-peach-text py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, asperiores!</h4>
              </li>
              <li>
                <a href="#" class="btn btn-lg btn-rounded btn-pink mr-0 waves-effect waves-light">Find Out More</a>
              </li>
            </ul>
          </div>
        </div>
      </div> -->
      <div class="carousel-item active">
        <div class="view">
          <div class="full-bg-img flex-center mask rgba-black-light white-text">
            <ul class="animated fadeInUp col-md-12 list-unstyled list-inline">
              <li>
                <h1 class="font-weight-bold text-uppercase fm-peach-text">Our Approach</h1>
              </li>
              <li>
                <h4 class="text-uppercase fm-peach-text py-4"><?php
                      $post_id = 6;
                      echo get_post_meta($post_id, 'subtitle', true);
                ?></h4>
              </li>
              <li>
                <a href="<?php echo site_url('/our-approach');?>" class="btn btn-lg btn-rounded btn-pink mr-0 waves-effect waves-light">Find Out More</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- <div class="carousel-item">
        <div class="view">
          <div class="full-bg-img flex-center mask rgba-black-light white-text">
            <ul class="animated fadeInUp col-md-12 list-unstyled list-inline">
              <li>
                <h1 class="font-weight-bold text-uppercase fm-peach-text">Our Approach Three Lorem Ipsum</h1>
              </li>
              <li>
                <h4 class="fonte-weight-bold text-uppercase fm-peach-text py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, asperiores!</h4>
              </li>
              <li>
                <a href="#" class="btn btn-lg btn-pink btn-rounded mr-0 waves-effect waves-light">Find Out More</a>
              </li>
            </ul>
          </div>
        </div>
      </div> -->
      <!-- <div class="carousel-item">
        <div class="view">
          <div class="full-bg-img flex-center mask rgba-black-light white-text">
            <ul class="animated fadeInUp col-md-12 list-unstyled list-inline">
              <li>
                <h1 class="font-weight-bold fm-peach-text text-uppercase">Our Approach Four Lorem Ipsum</h1>
              </li>
              <li>
                <h4 class="font-weight-bold fm-peach-text text-uppercase py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, asperiores!</h4>
              </li>
              <li>
                <a href="#" class="btn btn-lg btn-rounded btn-pink mr-0 waves-effect waves-light">Find Out More</a>
              </li>
            </ul>
          </div>
        </div>
      </div> -->
    </div>
    <!-- Commented Out Carousel Controls - remove comments to turn front page Our Approach section into a carousel -->
    <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a> -->
</div>
</section>
<!-- Intro Section -->
<hr class="w-75 mt-5">
<!--Our Work Section-->
<section class="text-center xf-hidden" id="work">
  <div class="container" >
    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5 pt-3">What We Do</h2>
    <!-- Section description -->
    <p class="text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p>

    <!-- Grid row -->
    <div class="row pb-4">
      <?php
        $homepageWork = new WP_Query(array(
          'posts_per_page' => 6,
          'post_type' => 'work',
          'order' => 'ASC'
        ));

        while($homepageWork->have_posts()) {
          $homepageWork->the_post(); ?>
            <div class="col-lg-6 my-4 px-5">
              <div class="card card-image wider" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/work-img-1.jpg;">
                <!-- Content -->
                  <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div class="content-height">
                      <h3 class="card-title fm-peach-text pt-2"><strong><?php the_title(); ?></strong></h3>
                      <p class="fm-peach-text"><?php the_field('our_work_description'); ?></p>
                      <a href="<?php the_permalink(); ?>" class="btn btn-pink btn-rounded btn-bottom">Read More</a>
                    </div>
                  </div>
              </div>
            </div>
          <?php
        }
      ?>
    </div>
    <!-- Grid row -->

  </div>
</section>
<!--Our Work Section-->
<hr class="w-75 my-5">
<!-- Case Studies Section -->
<section class="xf-hidden" id="case-studies">
  <div class="resources-background jarallax" data-jarallax='{"speed": 0.2}'>
    <div class="full-bg-img">
      <div class="mask peach-gradient-rgba">
        <div class="container">
            <h1 class="text-center h1-responsive font-weight-bold text-white py-5">Case Studies</h1>
            <p class="text-center text-white w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p>
            <!-- Grid row -->
            <div class="row pb-4">
              <div class="col-lg-6 my-3 px-4">
                <div class="card card-image wider" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/report.jpg;">
                  <!-- Content -->
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                      <div>
                        <h3 class="card-title pt-2"><strong>Case Study One</strong></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis velit, placeat aliquid est excepturi fuga aut similique dolorum.  Non, voluptatibus.</p>
                        <a href="#" class="btn btn-pink btn-rounded">Read More</a>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-lg-6 my-3 px-4">
                <div class="card card-image wider" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/toolkit.jpg;">
                  <!-- Content -->
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                      <div>
                        <h3 class="card-title pt-2"><strong>Case Study Two</strong></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae dolor perferendis deleniti dolore inventore fuga nihil consectetur nam cumque excepturi.</p>
                        <a href="#" class="btn btn-pink btn-rounded">Read More</a>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- Grid row -->
            <div class="row pb-4">
              <div class="col-lg-6 my-3 px-4">
                <div class="card card-image wider" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/toolkit.jpg;">
                  <!-- Content -->
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                      <div>
                        <h3 class="card-title pt-2"><strong>Case Study Three</strong></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum aliquid sunt, quisquam! Atque facilis officia enim in inventore. Non, voluptatibus.</p>
                        <a href="#" class="btn btn-pink btn-rounded">Read More</a>
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-lg-6 my-3 px-4">
                <div class="card card-image wider" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/toolkit.jpg;">
                  <!-- Content -->
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                      <div>
                        <h3 class="card-title pt-2"><strong>Case Study Four</strong></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo repudiandae doloremque harum dolorem fugit quis fugiat cum tempora suscipit modi.</p>
                        <a href="#" class="btn btn-pink btn-rounded">Read More</a>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- Grid row -->

        </div>
      </div>
    </div>
  </div>
</section>
<!-- Case Studies Section -->
<hr class="w-75 my-5">
<!-- Resources Section -->
<section class="xf-hidden" id="resources">
  <div class="container">
      <h1 class="text-center h1-responsive font-weight-bold py-5">Resources</h1>
      <p class="text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p>
      <!-- Grid row -->
      <div class="row pb-4">
        <div class="col-lg-6 my-4 px-5">
          <div class="card card-image wider" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/report.jpg;">
            <!-- Content -->
              <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div>
                  <h3 class="card-title pt-2 fm-peach-text"><strong>Food Matters Reports</strong></h3>
                  <p class="fm-peach-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                    optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                    Odit sed qui, dolorum!.</p>
                  <a href="#" class="btn btn-pink btn-rounded">Read More</a>
                </div>
              </div>
          </div>
        </div>
        <div class="col-lg-6 my-4 px-5">
          <div class="card card-image wider" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/toolkit.jpg;">
            <!-- Content -->
              <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div>
                  <h3 class="card-title fm-peach-text pt-2"><strong>Food Matters Toolkits</strong></h3>
                  <p class="fm-peach-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                    optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                    Odit sed qui, dolorum!.</p>
                  <a href="#" class="btn btn-pink btn-rounded">Read More</a>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!-- Grid row -->

  </div>
</section>
<!-- Resources Section -->

<hr class="w-75 mt-5" id="about">

<!--About Us Section-->
<section class="xf-hidden text-center">
  <div class=" aboutus-background jarallax" data-jarallax='{"speed": 0.2}'>
    <div class="full-bg-img">
      <div class="mask peach-gradient-rgba">
        <div class="container">
          <!-- Section heading -->
          <h2 class="h1-responsive font-weight-bold text-center text-white my-5 pt-3">About Us</h2>
          <!-- Section description -->
          <h4 class="text-center text-white w-responsive mx-auto mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, odit.</h4>
          <a href="#" class="btn btn-pink btn-rounded mb-5">Read More</a>

          <!-- Grid row -->
          <div class="row pb-4">
            <!-- Card deck -->
            <div class="card-deck card-deck-width">

            <?php
              $homepageTeam = new WP_Query(array(
                'posts_per_page' => 3,
                'post_type' => 'team',
                'order' => 'ASC'
              ));

              while($homepageTeam->have_posts()) {
                $homepageTeam->the_post(); ?>


              <!-- Card -->
              <div class="card testimonial-card">

                <!-- Background color -->
                <div class="card-up team-card"></div>

                  <!-- Avatar -->
                  <div class="avatar mx-auto white">
                    <img src="<?php the_post_thumbnail_url('staffPortrait'); ?>" class="rounded-circle" alt="woman avatar">
                  </div>

                  <!-- Content -->
                  <div class="card-body">
                    <!-- Name -->
                    <h4 class="card-title"><?php the_title(); ?></h4>
                    <!-- Subtitle -->
                    <h5 class="blue-text pb-2"><strong><?php the_field('title'); ?></strong></h5>
                    <!-- Email  -->
                    <p><?php the_field('email') ?></p>
                  </div>

              </div>
              <!-- Card -->
              <?php } ?>
            </div>
            <!-- Card deck -->
          </div>
          <!-- Grid row -->
        <div class="row pb-4">
          <div class="card-deck card-deck-width">
            <?php
              $homepageTeam = new WP_Query(array(
                'posts_per_page' => 3,
                'offset' => 3,
                'post_type' => 'team',
                'order' => 'ASC'
              ));

              while($homepageTeam->have_posts()) {
                $homepageTeam->the_post(); ?>


              <!-- Card -->
              <div class="card testimonial-card">

                <!-- Background color -->
                <div class="card-up team-card"></div>

                  <!-- Avatar -->
                  <div class="avatar mx-auto white">
                    <img src="<?php the_post_thumbnail_url('staffPortrait'); ?>" class="rounded-circle" alt="woman avatar">
                  </div>

                  <!-- Content -->
                  <div class="card-body">
                    <!-- Name -->
                    <h4 class="card-title"><?php the_title(); ?></h4>
                    <!-- Subtitle -->
                    <h5 class="blue-text pb-2"><strong><?php the_field('title'); ?></strong></h5>
                    <!-- Email  -->
                    <p><?php the_field('email') ?></p>
                  </div>

              </div>
              <!-- Card -->
              <?php } ?>
          </div>
        </div>
        <!-- Board Members -->
        <h2 class="h2-responsive font-weight-bold text-center text-white my-5 pt-3">Our Board</h2>
        <!-- Section description -->
        <ul class="list-unstyled text-white pb-3">
          <li><h5>Colin Havard - Independent Community Development Consultant</h5><p>Project management, staff management, financial and funding expertise, organisational issues.</p></li>
          <li><h5>Tim Marsh - Independent Public Health Policy consultant</h5><p>Obesity, Food Poverty and Agricultural policy impact on Public Health.</p></li>
          <li><h5>Kath Dalmeny - Sustain, the alliance for better food and farming</h5><p>Understanding of sustainability issues, environment and food policy.  Project management, media and communications expertise.</p></li>
          <li><h5>Charlie Powell - Federation of City Farms & Community Gardens</h5><p>Campaigning development and strategy expertise, knowledge about food policy, and animal welfare and humane and sustainable agriculture.</p></li>
          <li><h5>Lindy Sharpe - Writer and Researcher</h5><p>Expertise in the policy and governance of the food supply, sustainability (especially the social dimensions of sustainability), the food industry.</p></li>
        </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<hr class="w-75 my-5">
<!--About Us Section-->

<?php get_footer(); ?>
