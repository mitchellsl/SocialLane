<?php
/**
 * Contact Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'contact-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'contact';
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
     <div class="container">
        <div class="row contact-holder">
            <div class="col contact-details">
                <div class="inner">
                    <h2><?php the_field('heading'); ?></h2>
                    <div class="content">
                      <?php the_field('content'); ?>
                    </div>
                    <ul>
                    <li>
                      <span class="icon"><i class="far fa-envelope"></i></span>
                      <a href="mailto:<?php the_field('email', 'options'); ?>"><?php the_field('email', 'option'); ?></a>
                    </li>
                      <li>
                        <span class="icon"><i class="fas fa-mobile-alt"></i></span>
                        <a href="tel:<?php the_field('tel', 'options'); ?>"><?php the_field('tel', 'option'); ?></a>
                      </li>
                    </ul>
                </div>
            </div>
            <div class="col contact-form">
                <div class="inner">
                    <?php
                    echo do_shortcode('[gravityform id=1 title=false description=false ajax=true]');
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid">

  <div class="row">
    <?php
$link = get_field( 'google_maps_link', 'options' );
if ( $link ) :
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'] ? $link['target'] : '_self';
	?>
	<a class="" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
    <?php
    $google_maps = get_field('google_maps', 'options');
    if( !empty( $google_maps ) ): ?>
        <img src="<?php echo esc_url($google_maps['url']); ?>" alt="<?php echo esc_attr($google_maps['alt']); ?>" />
    <?php endif; ?>
  </a>
<?php endif; ?>

  </div>
</div>
