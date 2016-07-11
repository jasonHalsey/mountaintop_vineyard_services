<?php
/*
 * @package WordPress
 * @subpackage mtvms  

 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <title><?php wp_title( '|', true, 'right' ); ?>Mountaintop Vineyard Services</title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link href='https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto:400,700' rel='stylesheet' type='text/css'>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>

</head>

<body <?php body_class('Site'); ?> "cd-container">

<header class="centered-navigation navigation_fixed" role="banner">
  <div class="centered-navigation-wrapper">
    <a href="javascript:void(0)" class="mobile-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/mtvs_logo.svg" alt="Mountaintop Vineyard Services">
    </a>
    <a href="javascript:void(0)" id="js-centered-navigation-mobile-menu" class="centered-navigation-mobile-menu">MENU</a>
    <nav role="navigation">
      <ul id="js-centered-navigation-menu" class="centered-navigation-menu show">
        <li class="nav-link"><a href="##farming|500">Farming</a></li>
        <li class="nav-link"><a href="javascript:void(0)">Development</a></li>
        <li class="nav-link"><a href="javascript:void(0)">About Us</a></li>
        <li class="nav-link"><a href="javascript:void(0)">Contact</a></li>
      </ul>
    </nav>
    <div class="logo_container">
      <a href="javascript:void(0)" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mtvs_logo.svg" alt="Mountaintop Vineyard Services">
      </a>
    </div>
  </div>
</header>

