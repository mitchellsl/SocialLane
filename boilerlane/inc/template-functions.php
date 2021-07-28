<?php
function boilerlane_get_icon_svg( $group, $icon, $size = 24 ) {
	return Boilerlane_SVG_Icons::get_svg( $group, $icon, $size );
}
	// Include file if function doesn't exist.
	if ( ! function_exists( 'boilerlane_generate_css' ) ) {
		require_once get_theme_file_path( 'inc/custom-css.php' ); // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
	}

	function add_file_types_to_uploads($file_types){
		$new_filetypes = array();
		$new_filetypes['svg'] = 'image/svg+xml';
		$file_types = array_merge($file_types, $new_filetypes );
		return $file_types;
		}
		add_filter('upload_mimes', 'add_file_types_to_uploads');
		

	function themename_custom_logo_setup() {
		$defaults = array(
			'height'               => 100,
			'width'                => 400,
			'flex-height'          => true,
			'flex-width'           => true,
			'header-text'          => array( 'site-title', 'site-description' ),
			'unlink-homepage-logo' => true, 
		);
	 
		add_theme_support( 'custom-logo', $defaults );
	}
	
?>