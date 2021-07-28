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
$id = 'content-' . $block['id'];
if( !empty($block['anchor']) ) {
		$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'services';
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
	<!-- <div class="block-background">
		<?php echo block_background(); ?>
	</div> -->
		<div class="container">
			<div class="row <?php the_field('content_style_class'); ?>">
		<div class="card--outer">
			<?php if ( have_rows( 'card' ) ) : ?>
			<?php while ( have_rows( 'card' ) ) :
								the_row(); ?>
			<div class="card--wrapper">
				<div class="card--image">
					<?php
								$image = get_sub_field( 'image' );
								if ( $image ) : ?>
					<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
					<?php endif; ?>
				</div>
				<div class="card-content--wrapper">
					<div class="card--heading">
						<?php if ( $heading = get_sub_field( 'heading' ) ) : ?>
						<?php echo $heading; ?>
						<?php endif; ?>
					</div>
					<div class="card--content">
						<?php if ( $content = get_sub_field( 'content' ) ) : ?>
						<?php echo $content; ?>
						<?php endif; ?>
					</div>
					<div class="card--button">
						<?php
									$link = get_sub_field( 'button' );
									if ( $link ) :
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
						<a class="button" href="<?php echo esc_url( $link_url ); ?>"
							target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
</section>