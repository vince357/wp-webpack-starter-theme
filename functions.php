<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'my_public_assets', 99 );

function my_public_assets() {
  $dir = get_stylesheet_directory_uri() . '/dist';
  $css_ver = date("ymd-Gis", filemtime( $dir . '/app.css' ));
  wp_enqueue_style( 'my-app', $dir . '/app.css', false,   $css_ver );
}