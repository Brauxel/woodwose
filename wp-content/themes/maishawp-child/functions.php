<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
    wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/fancybox.css' );
	
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/fancybox.js', array( 'jquery' ), '1.0' );
	wp_enqueue_script( 'core', get_template_directory_uri() . '/js/core.js', array( 'jquery' ), '1.0', true );
}