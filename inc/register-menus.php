<?php
function wodrpress_webpack_starter_theme_setup() {
  // This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'webpack' ) );
}
add_action( 'after_setup_theme', 'wodrpress_webpack_starter_theme_setup' );