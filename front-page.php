<?php get_header(); ?>


<!-- Intro Section -->
<section id="home">
  <div class="view intro-2" style="">
    <div class="full-bg-img">
      <div class="mask rgba-teal-strong flex-center">
        <div class="container text-center">
          <div>
            <h4 class="animated fadeInDown slow delay-1s hero-text-1">Visualise</h4>
            <h4 class="animated fadeInLeft slow delay-2s hero-text-1">Formalise</h4>
            <h4 class="animated fadeInRight slow delay-3s hero-text-1">Realise</h4>
          </div>
          <div>
              <h1 class="animated fadeInUp slow delay-5s hero-text-1">Forward Thinking For The Digital Age</h1>
              <button class="btn peach-gradient btn-rounded animated fadeInUp slow delay-5s">Peach</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Intro Section -->

<!--Main Layout-->
<main class="text-center py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
          ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
          voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet,
          consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
          enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
          nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
          mollit anim id est laborum.</p>

      </div>
    </div>
  </div>

</main>
<!--Main Layout-->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php the_content(); ?>

<?php endwhile;  endif;?>

<?php get_footer(); ?>
