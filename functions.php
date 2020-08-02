<?php
if ( ! function_exists( 'o2_setup' ) ) :

function o2_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    
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


}
add_action( 'widgets_init', 'o2_widgets_init' );
endif;// o2_widgets_init



if ( ! function_exists( 'o2_customize_register' ) ) :

function o2_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.


}
add_action( 'customize_register', 'o2_customize_register' );
endif;// o2_customize_register


if ( ! function_exists( 'o2_enqueue_scripts' ) ) :
    function o2_enqueue_scripts() {


    wp_deregister_style( 'o2-style' );
    wp_enqueue_style( 'o2-style', get_template_directory_uri() . '/css/style.css', false, null, 'all');

    wp_deregister_style( 'o2-style-1' );
    wp_enqueue_style( 'o2-style-1', get_bloginfo('stylesheet_url'), false, null, 'all');


    }
    add_action( 'wp_enqueue_scripts', 'o2_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }

?>
