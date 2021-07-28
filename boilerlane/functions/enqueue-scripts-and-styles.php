<?php
function boilerlane_scripts() {
	wp_enqueue_style('app-css', get_stylesheet_directory_uri() . '/resources/app.css');
	// wp_enqueue_style('style-css', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('slick-css', get_stylesheet_directory_uri() . '/inc/css/slick-theme.css');
	wp_enqueue_style('slick-css', get_stylesheet_directory_uri() . '/inc/css/slick.css');
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', '', '5.8.1', 'all');
	// wp_enqueue_style('fancybox', get_stylesheet_directory_uri() . '/acf/block-repeater/fancybox.css');

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.js', [], null, false);
	wp_enqueue_script( 'boilerlane-slick-slider', get_template_directory_uri() . '/inc/js/slick.min.js', [], null, false);
	wp_enqueue_script( 'boilerlane-app-js', get_template_directory_uri() . '/inc/js/app.js', [], null, false);

}
add_action( 'wp_enqueue_scripts', 'boilerlane_scripts' );
?>