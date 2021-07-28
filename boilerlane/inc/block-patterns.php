<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package WordPress
 * @subpackage BoilerLane
 * @since 1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'boilerlane',
		array( 'label' => esc_html__( 'BoilerLane', 'boilerlane' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	// Content.
	register_block_pattern(
		'boilerlane/test',
		array(
			'title'         => esc_html__( 'Large text', 'boilerlane' ),
			'categories'    => array( 'boilerlane' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:columns --><div class="wp-block-columns"><!-- wp:column --><div class="wp-block-column"><!-- wp:image {"id":13,"sizeSlug":"large","linkDestination":"none"} --><figure class="wp-block-image size-large"><img src="http://localhost:8888/boilerlane/wp-content/uploads/2021/03/IMG_6539-1024x576.jpg" alt="" class="wp-image-13"/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph --><p>asffasfasf</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>asfa</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>sf</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link">Lorem Ipsum</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:column --></div><!-- /wp:columns -->',
		)
	);
	
	
}
