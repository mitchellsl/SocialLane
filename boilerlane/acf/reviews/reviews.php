<?php
/**
 * Content Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'reviews-' . $block['id'];
if( !empty($block['anchor']) ) {
		$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'reviews';
if( !empty($block['className']) ) {
		$className .= ' ' . $block['className'];
}
// if( !empty($block['align']) ) {
//     $className .= ' align' . $block['align'];
// }
if( $is_preview ) {
	$className .= ' is-admin';
}
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container-fluid" style="<?php echo advanced_acf_settings(); ?>">
	<div class="row content-row">
		<div class="container">
			<div class="row <?php the_field('content_style_class'); ?>">
			<div class="review--heading">
				<h3>
					<?php if ( $heading = get_field( 'heading' ) ) : ?>
						<?php echo $heading; ?>
					<?php endif; ?>
				</h3>	
			</div>
			<div class="review--outer">
				<?php if ( have_rows( 'reviews' ) ) : ?>
					<?php while ( have_rows( 'reviews' ) ) :
						the_row(); ?>
						<div class="review--wrapper" style="<?php echo block_background(); ?>">
								<div class="image--wrapper">
								<?php
								$image = get_sub_field( 'image' );
								if ( $image ) : ?>
									<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
								<?php endif; ?>
								</div>
								<div class="content--wrapper">
									<?php if ( $content = get_sub_field( 'content' ) ) : ?>
										<?php echo $content; ?>
									<?php endif; ?>
									<div class="review-subline--wrapper">
										<?php if ( $subline = get_sub_field( 'subline' ) ) : ?>
											<?php echo $subline; ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
					<?php endwhile; ?>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>