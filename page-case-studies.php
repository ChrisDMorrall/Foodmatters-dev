<?php

get_header();

?>

  <!-- Full Page Intro -->
  <div class="page-bg">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-md-12 mt-5 pt-4 fm-peach-text">
            <h1 class="display-4 font-weight-bold mb-0 mt-md-5 mt-5 pt-md-5 pt-5 text-center"><?php the_title(); ?></h1>
            <h2 class="font-weight-bold py-5 text-"><?php the_field('subtitle'); ?></h2>
            <div class="container" >
              <!-- Section heading -->
              <!-- <h2 class="h1-responsive font-weight-bold text-center my-5 pt-3">What We Do</h2>
              <p class="text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p> -->

              <!-- Grid row -->
              <div class="row pb-4">
                <?php
                  $homepageCaseStudies = new WP_Query(array(
                    'posts_per_page' => 6,
                    'post_type' => 'case_studies',
                    'order' => 'ASC'
                  ));

                  while($homepageCaseStudies->have_posts()) {
                    $homepageCaseStudies->the_post();
                    $thumb_id = get_post_thumbnail_id();
                    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium', true);
                    $thumb_url = $thumb_url_array[0];
                     ?>
                      <div class="col-lg-6 my-4 px-5">
                        <div class="card card-image wider" style="background-image: url(<?php echo $thumb_url; ?>)">
                          <!-- Content -->
                            <div class="fm-peach-text text-center rgba-black-strong py-3 px-4">
                              <div class="content-height card-body flex-column d-flex align-items-center">
                                <h3 class="card-title pt-2"><strong><?php the_title(); ?></strong></h3>
                                <p class=""><?php the_field('case_study_description'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-pink btn-rounded mt-auto">Read More</a>
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


  <?php
  get_footer();
 ?>
