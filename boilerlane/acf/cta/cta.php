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
$id = 'cta-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'cta';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
if( $is_preview ) {
    $className .= ' is-admin';
}

?>


 <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container-fluid"  style="<?php echo advanced_acf_settings(); ?>">
    <div class="block-background">
        <?php echo block_background(); ?>
    </div> 
    <?php $cta_style = get_field('cta_style'); ?>
    <?php if( get_field('cta_style') == $cta_style ): ?>
        <?php include 'cta-parts/cta-'. $cta_style .'.php'; ?>
    <?php endif; ?>
</section>
