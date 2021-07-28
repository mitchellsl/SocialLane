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
$id = 'blog-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'blog';
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

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container-fluid" style="<?php echo block_background(); ?><?php echo advanced_acf_settings(); ?>">
  <?php $blog_style = get_field('blog_style'); ?>
  <?php if( get_field('blog_style') == $blog_style ): ?>
      <?php include 'blog-parts/blog-'. $blog_style .'.php'; ?>
  <?php endif; ?>
  <?php if ( get_field( 'blog_style' ) == 'sidebar' ) : ?>
            <?php  get_sidebar(); ?>
        <?php endif; ?>
        <?php if ( get_field( 'blog_style' ) == 'sidebar-pagination' ) : ?>
            <?php  get_sidebar(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>