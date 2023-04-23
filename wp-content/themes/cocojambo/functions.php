<?php

add_action('wp_enqueue_scripts', 'cocojambo_require_scripts');
function cocojambo_require_scripts() {
	wp_enqueue_style('cocojambo-style-bootstrap',
		get_template_directory_uri() . '/assets/css/bootstrap.css');
	var_dump(get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style('cocojambo-style', get_stylesheet_uri());

	wp_enqueue_script('cocojambo-script-bootstrap',
		get_template_directory_uri() . '/assets/js/bootstrap.js');
}

