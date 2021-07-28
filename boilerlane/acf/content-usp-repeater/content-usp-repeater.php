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
$className = 'content-usp-repeater';
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

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container-fluid" style="<?php echo block_background(); ?> <?php echo advanced_acf_settings(); ?>">

  <div class="row">
	<div class="container">
	  <div class="row wrapper<?php the_field('content_style_class'); ?>">
	   	<div class="wrapper">
			<h2 class="heading">
				<?php if ( $heading = get_field( 'heading' ) ) : ?>
				<?php echo $heading; ?>
				<?php endif; ?>
			</h2>
			<div class="content--wrapper">
				<?php if ( $content = get_field( 'content' ) ) : ?>
					<?php echo $content; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="usp--wrapper">	
		<?php if ( have_rows( 'usp' ) ) : ?>
		<?php while ( have_rows( 'usp' ) ) :
            the_row(); ?>
			<div class="usp-content--wrapper">
					<?php
						$image = get_sub_field( 'image' );
						if ( $image ) : ?>
						<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
					<?php endif; ?>
						<?php if ( $usp = get_sub_field( 'usp' ) ) : ?>
						<?php echo $usp; ?>
					<?php endif; ?>
						</div>
			<?php endwhile; ?>
			<?php endif; ?>
			</div>
        </div>
	</div>
  </div>
</div>
</section>