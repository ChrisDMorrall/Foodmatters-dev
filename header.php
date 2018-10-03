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
    <a class="navbar-brand d-flex w-20 mr-auto" href="#"><strong>Avanti Web Solutions</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav justify-content-center w-100">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
      </ul>
      <ul class="nav navbar-nav ml-auto w-25 justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="#">Right</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Right</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Right</a>
        </li>
      </ul>
    </div>
  </nav>

  

</header>
<!--Main Navigation-->
