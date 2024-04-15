<?php

if ( ! function_exists( 'pssh_setup' ) ) {
	function pssh_setup() {

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );

		register_nav_menus( array(
			'header'   => __( 'Header', 'Menu that appears at the top of every page.' ),
			'footer' => __( 'Footer', 'Menu that appears at the bottom of every page.' ),
			'registration' => __( 'Registration', 'Dropdown registration menu in the header.' ),
		) );

	}
}

add_action( 'after_setup_theme', 'pssh_setup' );

function pssh_enqueue() {
	wp_enqueue_style('itjf_style', get_stylesheet_uri());
	// wp_enqueue_script(
	// 	'google_maps', 
	// 	'https://polyfill.io/v3/polyfill.min.js?features=default', 
	// 	array(),
	// 	'1.0.0',
	// 	array(
	// 		'in_footer' => true
	// 	)
	// );
    // wp_enqueue_script(
	// 	'itjf_script', 
	// 	'/wp-content/themes/it-job-fair/itjf-scripts.js', 
	// 	array(),
	// 	'1.0.0',
	// 	array(
	// 		'in_footer' => true
	// 	)
	// );
}

add_action('wp_enqueue_scripts', 'pssh_enqueue');

?>