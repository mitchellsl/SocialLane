<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

    <div class="post-header">
        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'full', array( 'class' => 'backdrop' ) ); ?>
        <?php endif; ?>
		<h1>
			<?php the_title(); ?>
		</h1>
    </div>

	<div class="single_main_wrapper">
		
    	<div class="content-wrapper">		
			<div id="primary" class="content-area col-8">
				<main id="main" class="site-main">

					<?php

					// Start the Loop.
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content/content', 'single' );

						if ( is_singular( 'attachment' ) ) {
							// Parent post navigation.
							the_post_navigation(
								array(
									/* translators: %s: Parent post link. */
									'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentynineteen' ), '%title' ),
								)
							);
						} elseif ( is_singular( 'post' ) ) {

						}
					endwhile; // End the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->

			<?php
			get_sidebar();
			?>
		</div>
	</div>	
<?php
get_footer();
