<!DOCTYPE html>
<html <?php language_attributes(); ?> class="full-height">

<head>
    <!-- Required meta tags always come first -->
    <meta charset= "<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?php bloginfo( 'name'); ?>
    </title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!--Main Navigation-->
<header>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <a class="navbar-brand d-flex w-25 mr-auto" href="<?php echo site_url(); ?>"><img class="fm-logo" src="<?php echo get_template_directory_uri(); ?>/dist/img/fm-logo-250px-rotated5.bmp" alt="Food Matters Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav justify-content-center w-75 smooth-scroll nav-font">
        <li class="nav-item <?php if (is_page('our-approach')) echo 'active' ?>">
          <a class="nav-link fm-peach-text" href="<?php echo site_url('/our-approach');?>">Our Approach<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?php if (is_page('our-work') or get_post_type() == 'work') echo 'active' ?>">
          <a class="nav-link fm-peach-text" href="<?php echo site_url('/our-work');?>">Our Work</a>
        </li>
        <li class="nav-item <?php if (is_page('case-studies') or get_post_type() == 'case-studies') echo 'active' ?>">
          <a class="nav-link fm-peach-text" href="<?php echo site_url('/case-studies');?>">Case Studies</a>
        </li>
        <li class="nav-item <?php if (is_page('resources')  or get_post_type() == 'resources') echo 'active' ?>">
          <a class="nav-link fm-peach-text" href="<?php echo site_url('/resources');?>">Resources</a>
        </li>
        <li class="nav-item <?php if (is_page('about-us')) echo 'active' ?>">
          <a class="nav-link fm-peach-text" href="<?php echo site_url('/about-us');?>">About Us</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link fm-peach-text" href="#">Vacancies</a>
        </li> -->
      </ul>
      <ul class="nav navbar-nav ml-lg-auto w-25 justify-content-end d-none d-lg-block">
        <li class="nav-item fm-peach-text">
            <i class="fas fa-envelope-square" aria-hidden="true"></i><span> info@foodmatters.org</span>
        </li>
        <li class="nav-item fm-peach-text">
          <i class="fas fa-mobile-alt" aria-hidden="true"></i><span> +44 (0)1273 431707</span>
        </li>
      </ul>
    </div>
  </nav>



</header>
<!--Main Navigation-->
