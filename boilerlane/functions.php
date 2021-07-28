<?php

/**
 * Index Template BoilerLane Functions
 * 
 * 1. require
 * 2. Gutenberg
 * 3. Theme Support
 * 4. Regiser Navigations
 * 5. Sidebars
 * 6. Enqueue scripts and styles
 * 7. Register and enqueue a custom stylesheet in the WordPress admin
 * 8. Menu functions and filters
 */
add_filter('show_admin_bar', '__return_true');
/**
 * Add slick settings to footer
 */
require get_template_directory() . '/inc/slick.php';

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/auto-fill-image-alt.php';

// Menu functions and filters
require get_template_directory() . '/inc/menu-functions.php';

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// SVG Icons class.
require get_template_directory() . '/classes/class-boilerlane-svg-icons.php';

/*Gutenberg*/
require get_template_directory() . '/functions/gutenberg-functions.php';

/*Theme Support*/
require get_template_directory() . '/functions/theme-support.php';

/*Theme Support*/
require get_template_directory() . '/functions/ajax-load-more-blog.php';

/*Regiser Navigations*/
require get_template_directory() . '/functions/register-navigations.php';

/*Regiser Sidebars*/
require get_template_directory() . '/functions/register-sidebars.php';

/*Enqueue scripts and styles*/
require get_template_directory() . '/functions/enqueue-scripts-and-styles.php';

/*Register and enqueue a custom stylesheet in the WordPress admin*/
require get_template_directory() . '/functions/enqueue-admin-scripts-and-styles.php';

/*Add FontAwesome*/
require get_template_directory() . '/functions/add-fontawesome.php';

/*Add ACF settings*/
require get_template_directory() . '/functions/advanced-acf.php';

//Predifinied Color Swatches
require get_template_directory() . '/functions/predifiened-color-swatches.php';

//Custom Nav Walker
require get_template_directory() . '/functions/custom-nav-walker.php';

/*Add gutenberg blocks*/
require get_template_directory() . '/acf/add-gutenberg-blocks.php';

/*Add gutenberg blocks*/
require get_template_directory() . '/acf/add-options-page.php';

/*Add CPT*/
require get_template_directory() . '/cpt/cpt.php';

/*Customizer*/
require get_template_directory() . '/inc/customizer.php';





function is_blog () {
	if ( (is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag()) ) {
		return true;
	}
	else {
		return false; 
	}
}
?>