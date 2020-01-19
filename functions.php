<?php

/**
*  ============================
*  Setup CSS and JS
*  ============================
*/

function campfire_scripts()
{
	wp_enqueue_style( 'nunito', 'https://fonts.googleapis.com/css?family=Nunito+Sans:400,700,900');
	wp_register_style( 'campfire', get_template_directory_uri() . '/assets/css/campfire.css');
	wp_enqueue_style( 'campfire');

	wp_register_script( 'campfire', get_template_directory_uri() . '/assets/js/campfire.js', array(), false, true);
	wp_enqueue_script( 'campfire');
}
add_action( 'wp_enqueue_scripts', 'campfire_scripts');
