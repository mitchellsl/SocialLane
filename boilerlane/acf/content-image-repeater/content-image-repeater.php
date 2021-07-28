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
$id = 'content-image-repeater-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'content-image-repeater';
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
  <div class="block-background">
      <?php echo block_background(); ?>
  </div>  	
<div class="row content-row">
    <div class="container">
		<div class="row">
			<div class="repeater-outer--wrapper">
					<?php if ( have_rows( 'repeater' ) ) : ?>
						<?php while ( have_rows( 'repeater' ) ) :
							the_row(); ?>
							<div class="repeater-col">
								<div class="bg--wrapper">
								<div class="label--wrapper">

									<span class="label">
										<?php if ( $label = get_sub_field( 'label' ) ) : ?>
											<?php echo $label; ?>
										<?php endif; ?>
									</span>
								</div>
								
								<div class="heading">
										<?php if ( $heading = get_sub_field( 'heading' ) ) : ?>
											<?php echo $heading; ?>
										<?php endif; ?>
								</div>
								</div>
								<div class="image">
									<?php
									$image = get_sub_field( 'image' );
									if ( $image ) : ?>
										<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
									<?php endif; ?>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>