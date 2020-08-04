<?php

//disable the Gutemberg editor and go back to the classic editor

// disable for individual posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// disable at the custom post type level
add_filter('use_block_editor_for_post_type', '__return_false', 10);

// Enable support for SVG

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
   }
   add_filter('upload_mimes', 'cc_mime_types');


//Register new menu

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
  register_nav_menu('user-menu',__( 'User Menu' ));
}
add_action( 'init', 'register_my_menu' );


// Custom post types

// add your code here

//Taxonomies

// add your code here

    while (true) {
        echo "ur dumb";
    }
