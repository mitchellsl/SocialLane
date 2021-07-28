<?php
// Register Custom Post Type
function logos_post_type() {

	$labels = array(
		'name'                  => _x( 'Logos', 'Post Type General Name', 'boilerlane' ),
		'singular_name'         => _x( 'Logos', 'Post Type Singular Name', 'boilerlane' ),
		'menu_name'             => __( 'Logos', 'boilerlane' ),
		'name_admin_bar'        => __( 'Logos', 'boilerlane' ),
		'archives'              => __( 'Logos Archives', 'boilerlane' ),
		'attributes'            => __( 'Logos Attributes', 'boilerlane' ),
		'parent_item_colon'     => __( 'Parent Logos :', 'boilerlane' ),
		'all_items'             => __( 'All Logos', 'boilerlane' ),
		'add_new_item'          => __( 'Add New Logos', 'boilerlane' ),
		'add_new'               => __( 'Add New Logos', 'boilerlane' ),
		'new_item'              => __( 'New Logos', 'boilerlane' ),
		'edit_item'             => __( 'Edit Logos', 'boilerlane' ),
		'update_item'           => __( 'Update Logos', 'boilerlane' ),
		'view_item'             => __( 'View Logos', 'boilerlane' ),
		'view_items'            => __( 'View Logos', 'boilerlane' ),
		'search_items'          => __( 'Search Logos', 'boilerlane' ),
		'not_found'             => __( 'Not found', 'boilerlane' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'boilerlane' ),
		'featured_image'        => __( 'Featured Image', 'boilerlane' ),
		'set_featured_image'    => __( 'Set featured image', 'boilerlane' ),
		'remove_featured_image' => __( 'Remove featured image', 'boilerlane' ),
		'use_featured_image'    => __( 'Use as featured image', 'boilerlane' ),
		'insert_into_item'      => __( 'Insert into Logos', 'boilerlane' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Logos', 'boilerlane' ),
		'items_list'            => __( 'Logos list', 'boilerlane' ),
		'items_list_navigation' => __( 'Logos list navigation', 'boilerlane' ),
		'filter_items_list'     => __( 'Filter Logos list', 'boilerlane' ),
	);
	$args = array(
		'label'                 => __( 'Logos', 'boilerlane' ),
		'description'           => __( 'Logos', 'boilerlane' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields', 'thumbnail'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-archive',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'logos', $args );

}
add_action( 'init', 'logos_post_type', 0 );


?>
