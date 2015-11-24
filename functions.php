<?php

function theme_enqueue_styles() {
	// "Your child theme's stylesheet will usually be loaded automatically.
	//  If it is not, you will need to enqueue it as well. Setting 'parent-style' as
	//  a dependency will ensure that the child theme stylesheet loads after it."
	// See https://codex.wordpress.org/Child_Themes
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style )
	);
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function favicon_link() {
	echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'favicon_link' );
