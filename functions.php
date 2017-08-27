<?php

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1000, 500);

// Load Theme CSS
function alfmin_styles() {	

	wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.css' );
    wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'normalize_css', 'http://fonts.googleapis.com/css?family=Lora|Open+Sans:100,400,italic' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );	

}
add_action( 'wp_enqueue_scripts', 'alfmin_styles' );

?>