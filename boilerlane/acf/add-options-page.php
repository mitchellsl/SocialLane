<?php

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'general-settings',
		'capability'	=> 'edit_posts',
		'position'		=> '1',
		'redirect'		=> false
	));

	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Header Options',
	// 	'menu_title'	=> 'Header',
	// 	'parent_slug'	=> 'general-settings',
	// ));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Company Information',
		'menu_title'	=> 'Company Information',
		'parent_slug'	=> 'general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Copyright',
		'menu_title'	=> 'Copyright',
		'parent_slug'	=> 'general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Social Media',
		'menu_title'	=> 'Social Media',
		'parent_slug'	=> 'general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'general-settings',
	));

}



 ?>
