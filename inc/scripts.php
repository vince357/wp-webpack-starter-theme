<?php
add_action( 'wp_enqueue_scripts', 'my_public_assets', 99 );
function my_public_assets() {
  $dir = get_stylesheet_directory_uri() . '/dist';
  $css_ver = date("ymd-H");
  wp_enqueue_style( 'my-app', $dir . '/app.css', false, $css_ver );
  wp_enqueue_script( 'navigation', get_stylesheet_directory_uri() . '/js/navigation.js', array('jquery'), '', true );
  // wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/js/slick-1.8.1/slick/slick.min.js', array('jquery'), '', true );
  // wp_enqueue_script( 'slick-js-home', get_stylesheet_directory_uri() . '/js/home-slick.js', array('jquery','slick-js'), '', true );
  
  /*
   * Script for a specific template. Uncomment et adapt for your needs
   */
  // if ( is_page_template('page-xxxx.php') ) {
  //   wp_enqueue_script('xxxx', get_stylesheet_directory_uri() . '/js/xxxx.js', '', '', true);
  // }
}


//Remove JQuery migrate
function remove_jquery_migrate( $scripts ) {
  if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
    $script = $scripts->registered['jquery'];
    if ( $script->deps ) { 
      // Check whether the script has any dependencies
      $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
    }
  }
}
add_action( 'wp_default_scripts', 'remove_jquery_migrate' );

// We load our scripts at bottom of page insteadOfd of within the <head>
function enqueue_scripts_in_footer() {
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', '/wp-includes/js/jquery/jquery.js', array(), false, true );
  wp_enqueue_script( 'jquery', '/wp-includes/js/jquery/jquery.js', array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_in_footer' );;