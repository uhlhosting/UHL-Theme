<?php
if ( ! function_exists( 'o2_setup' ) ) :

function o2_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'o2', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'o2' ),
        'social'  => __( 'Social Links Menu', 'o2' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // o2_setup

add_action( 'after_setup_theme', 'o2_setup' );


if ( ! function_exists( 'o2_init' ) ) :

function o2_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // o2_setup

add_action( 'init', 'o2_init' );


if ( ! function_exists( 'o2_custom_image_sizes_names' ) ) :

function o2_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'o2_custom_image_sizes_names' );
endif;// o2_custom_image_sizes_names



if ( ! function_exists( 'o2_widgets_init' ) ) :

function o2_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'o2_widgets_init' );
endif;// o2_widgets_init



if ( ! function_exists( 'o2_customize_register' ) ) :

function o2_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'o2_customize_register' );
endif;// o2_customize_register


if ( ! function_exists( 'o2_enqueue_scripts' ) ) :
    function o2_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'o2-style' );
    wp_enqueue_style( 'o2-style', get_template_directory_uri() . '/css/style.css', false, null, 'all');

    wp_deregister_style( 'o2-style-1' );
    wp_enqueue_style( 'o2-style-1', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'o2_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";

    /* Pinegrow generated Include Resources End */
?>