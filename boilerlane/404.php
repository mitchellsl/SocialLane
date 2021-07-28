<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package boilerlane
 */

get_header();
?>

	<main id="primary" class="site-main">

	<section class="error-404 not-found container" style="padding:150px 0px;display:flex;flex-wrap:wrap;justify-content:center;align-items:center;">
			<header class="page-header">
				<h1 style="color:#000;" class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'boilerlane' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content" style="display:flex;flex-direction:column;justify-content:center;align-items:center;">
				<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'boilerlane' ); ?></p>
				<a class="button" href="<?php echo get_site_url(); ?>">Home</a>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
