<?php

// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );


// Load in our CSS
function fcdtemplate_enqueue_styles() {
  wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
  wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/css/style.css', [], time(), 'all' );
  wp_enqueue_style( 'fonts', get_stylesheet_directory_uri() . '/css/fonts/stylesheet.css', [], time(), 'all' );
}



add_action( 'wp_enqueue_scripts', 'fcdtemplate_enqueue_styles' );


// Load in our JavaScript

function fcdtemplate_enqueue_js() {
  wp_enqueue_script( 'bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), true);
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js' );

//  https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js
}


 add_action( 'wp_enqueue_scripts', 'fcdtemplate_enqueue_js');

 //function register_navwalker(){
 //	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
 //}

 //add_action( 'after_setup_theme', 'register_navwalker' );




/*

// Register Menu Locations
register_nav_menus( [
  'main-menu' => esc_html__( 'main-menu', 'fullcircle' ),
  'learn-more' => esc_html__( 'learn-more', 'fullcircle' ),
  'studio' => esc_html__( 'studio', 'fullcircle' ),
  'team' => esc_html__( 'team', 'fullcircle' ),
  'lab' => esc_html__( 'lab', 'fullcircle' ),
]);
*/
?>
