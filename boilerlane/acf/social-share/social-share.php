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
$id = 'social-share-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'social-share';
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
      <div class="row <?php the_field('content_style_class'); ?>">
      <div class="social-share--wrapper">
          <?php if ( $heading = get_field( 'heading' ) ) : ?>
            <?php echo $heading; ?>
          <?php endif; ?>
          <div class="social-inner--wrapper">
		<div class="socials">
			<?php $i = 1; $d = 1;?>
			<?php if($social = get_field('social_media', 'options')): foreach($social as $channel): ?>
				<a aria-label="<?php echo $channel['sm_platform']; ?>" rel="noreferrer" href="<?php echo $channel['link']; ?>" class="social-div-<?php echo $i++; ?>" target="_blank">
						<i class="fab <?php echo $channel['sm_platform']; ?>"><div class="hide"><?php echo "Click to go to the social media page social-"; echo $i++; ?></div></i>
				</a>
			<?php endforeach; endif; ?>
      </div>
			</div>
		</div>
    </div>
  </div>
</section>