<?php
add_action( 'wp_enqueue_scripts', function() {
	wp_dequeue_style( 'global-styles' );
	wp_deregister_style( 'global-styles' );
	wp_dequeue_style( 'wp-block-library' );
	wp_deregister_style( 'wp-block-library' );
}, 100000 );
