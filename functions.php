<?php

function vlog_scripts() {
	// Theme stylesheet
	wp_enqueue_style('theme-style', get_stylesheet_uri());

	// Add home-style, used in the home stylesheet
	wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/css/home.css');

    // Add main-style, used in the main stylesheet
	wp_enqueue_style('contact-style', get_template_directory_uri() . '/assets/css/contact.css');

	// Theme javascript
	wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js');
}
add_action('wp_enqueue_scripts', 'vlog_scripts' ); 

