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

?>