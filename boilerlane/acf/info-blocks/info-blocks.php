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
$className = 'info-blocks';
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
      <div class="row<?php the_field('content_style_class'); ?>">
        <?php if ( $content = get_field( 'content' ) ) : ?>
          <?php echo $content; ?>
        <?php endif; ?>
		<?php if ( have_rows( 'repeater' ) ) : ?>
		<?php while ( have_rows( 'repeater' ) ) :
			the_row(); ?>
			<div class="content">
			<div class="heading">
		<h3>
		<?php if ( $heading = get_sub_field( 'heading' ) ) : ?>
			<?php echo $heading; ?>
		<?php endif; ?>
		</h3>
		</div>

		<div class="content-inner">
		<?php if ( $content = get_sub_field( 'content' ) ) : ?>
			<?php echo $content; ?>
		<?php endif; ?>
		</div>

		<div class="link-wrapper">
		<?php if ( $url = get_sub_field( 'url' ) ) : ?>
			<?php echo esc_url( $url ); ?>
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