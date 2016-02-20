<?php

	// load parent style
	function enqueue_parent_theme_styles() {
	   // wp_enqueue_style( 'sensationred', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'owee-style',
	        get_stylesheet_directory_uri() . '/style.css',
	        array( 'default_stylesheet' ) // load this stylesheet after the parent css is loaded
	    );
	} add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_styles' );


	
?>