<?php
function wpdocs_enqueue_custom_admin_style() {
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/resources/bootstrap/bootstrap-grid.css', false, '1.0.0' );
	wp_enqueue_style( 'bootstrap' );
	wp_register_style( 'editormain', get_template_directory_uri() . '/resources/GUTENBERG/editor-main.css', false, '1.0.0' );
	wp_enqueue_style( 'editormain' );
	wp_register_style( 'colorsadmin', get_template_directory_uri() . '/resources/GUTENBERG/colors.css', false, '1.0.0' );
	wp_enqueue_style( 'colorsadmin' );
	wp_register_style( 'buttonsadmin', get_template_directory_uri() . '/resources/GUTENBERG/button.css', false, '1.0.0' );
	wp_enqueue_style( 'buttonsadmin' );
	// wp_register_script('jquery-3-5-1', 'https://code.jquery.com/jquery-3.5.1.js', [], null, false);
    // wp_enqueue_script( 'jquery-3-5-1' );

	wp_register_script( 'boilerlane-slick-slider', get_template_directory_uri() . '/inc/js/slick.min.js', false );
    wp_enqueue_script( 'boilerlane-slick-slider' );

}
add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_style' );
?>