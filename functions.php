<?php

/*  Menu Support
/* ------------------------------------ */ 

  add_action( 'init', 'my_custom_menus' );
    function my_custom_menus() {
       register_nav_menus(
          array(
        'primary-menu' => __( 'Primary Menu' ),
        'secondary-menu' => __( 'Secondary Menu' )
                  )
           );
    }

/*  Post Thumbnail Support
/* ------------------------------------ */ 
  add_theme_support( 'post-thumbnails' ); 

/*  Remove Admin Bar
/* ------------------------------------ */ 
  add_filter('show_admin_bar', '__return_false');

  /*  Enqueue scripts
/* ------------------------------------ */ 

  function jquery_enqueue() {
      wp_deregister_script('jquery');
      wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', false, null);
      wp_enqueue_script('jquery');
  }
  if (!is_admin()) add_action('wp_enqueue_scripts', 'jquery_enqueue', 11);

  function wpb_adding_scripts() {
    wp_register_script('mtvs_scripts', get_stylesheet_directory_uri() . '/js/mtvs_scripts.js');
    wp_register_script('arbitrary-anchor', get_stylesheet_directory_uri() . '/js/jquery.arbitrary-anchor.js');
    wp_enqueue_script('mtvs_scripts');
    wp_enqueue_script('arbitrary-anchor');

  }
  add_action( 'wp_footer', 'wpb_adding_scripts' ); 





?>