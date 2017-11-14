<?php
/**
 * Memberlite [Podcast] Child Theme functions and definitions
 *
 * @package Memberlite 2.0
 * @subpackage Memberlite Podcast 1.0
 */

//Define constants
define( 'MEMBERLITE_PODCAST_DIR', get_stylesheet_directory() );
 
//Enqueue scripts and styles.
function memberlite_podcast_enqueue_styles() {
    
    wp_enqueue_style( 'memberlite', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'memberlite_podcast_enqueue_styles' );
