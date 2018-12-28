<?php

get_header();

while(have_posts()) {
  the_post(); ?>

  <!-- Full Page Intro -->
  <div class="page-bg">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-md-12 fm-peach-text mt-5">
            <h1 class="display-4 font-weight-bold mb-0 mt-md-5 mt-5 py-md-5 py-5 text-center"><?php the_title(); ?></h1>
            <h2 class="font-weight-bold"><?php the_field('subtitle'); ?></h2>
            <div class="generic-content">
              <?php the_content(); ?>
            </div>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->


  <?php }
  get_footer();
 ?>
