<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package boilerlane
 */

get_header();
?>

	<header class="page-header">
		<?php
			$term = get_queried_object();
		
			$cat_header_image = get_field( 'cat_header_image', $term); 

			if ( $cat_header_image ) : 
				?>
					<img class="backdrop" src="<?php echo esc_url( $cat_header_image['url'] ); ?>" alt="<?php echo esc_attr( $cat_header_image['alt'] ); ?>" />
				<?php 
			endif; 
		?>					
	</header><!-- .page-header -->
	<div class="single_main_wrapper">
		<div class="corner-images">
			<?php echo corner_image_archive(); ?>
		</div> 
    	<div class="content-wrapper">
			<main id="primary" class="site-main col-8">

				<?php if ( have_posts() ) : ?>

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

			</main><!-- #main -->

			<?php
			get_sidebar();
			?>
		</div>
	</div>
	<?php
get_footer();
