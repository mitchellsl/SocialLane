<?php
function boilerlane_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'boilerlane',
				'title' => __( 'Boilerlane', 'boilerlane' ),
			),
		)
	);
}
add_filter( 'block_categories', 'boilerlane_category', 10, 2);

add_theme_support( 'align-wide' );
add_theme_support( 'align-full' );
add_theme_support( 'custom-line-height' );
add_theme_support( 'editor-styles' );
add_editor_style( 'style-editor.css' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'wp-block-styles' );




function tabor_register_block_patterns() {

	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {

		register_block_pattern(
			'boilerlane/header',
			array(
				'title'       => __( 'Header', 'textdomain' ),
				'description' => _x( 'A ', 'Block pattern description', 'textdomain' ),
				'content'     => "<!-- wp:acf/header-new {\"id\":\"block_609540915339d\",\"name\":\"acf/header-new\",\"data\":{\"field_60780d5e0fd29\":\"\u003ch1\u003eLorem Ipsum Dolor\u003c/h1\u003e\",\"field_60780d700fd2a\":\"Lore Ipsum Dolor\",\"field_60780d7a0fd2b\":\"1\",\"field_60780dd90fd2d\":\"\",\"field_60780dea0fd2e\":\"\",\"field_60780df80fd2f\":\"695\",\"field_605df049e1fc8\":\"none\",\"field_6054b4199d64f\":{\"field_6054b419a62cb\":\"150\",\"field_6054b419a62d3\":\"150\"},\"field_6054b4199d65c\":{\"field_6054b419bbd79\":\"0\",\"field_6054b419bbd9c\":\"0\"},\"field_607968f5701ad\":\"\",\"field_60796910701af\":\"\",\"field_60796922701b0\":\"\",\"field_6079693d701b1\":\"389\",\"field_60796946701b2\":\"\",\"field_60796959701b3\":\"\",\"field_60796967701b5\":\"\"},\"align\":\"full\",\"mode\":\"preview\"} /-->",
				'categories'  => array( 'boilerlane' ),
			)
		);

	}

}
add_action( 'init', 'tabor_register_block_patterns' );

?>