<?php
/**
 * Content Image Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'block-repeater-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-repeater';
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
 <div class="row">
        <div class="container">
            <div class="row">
                <?php if( get_field('heading') ): ?>
                    <h3 class="heading"><?php the_field('heading'); ?></h3>
                    <?php the_field('icon'); ?>
                <?php endif; ?>
            </div>
            <div class="row">
                <?php if ( have_rows( 'repeater' ) ) : ?>
                    <?php $lightboxname = 1; ?>
                    <?php while ( have_rows( 'repeater' ) ) :
                        the_row(); ?>
                        
                            <?php
                            $image = get_sub_field( 'image' );
                            if ( $image ) : ?>
                            <a href="<?php echo esc_url( $image['url'] ); ?>" class="col" data-lightbox="instagram" name="feed-<?php echo $lightboxname++; ?>">
                                    <div class="hide"><?php echo esc_attr( $image['alt'] ); ?></div>
                            <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                            </a>
                            <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?php if ( $hashtag = get_field( 'hashtag' ) ) : ?>
                <div class="row">
                <div class="col-hashtag">
                   <h3 class="heading"><div class="hashtag-icon-1"></div><div class="hashtag-icon-2"></div><?php echo esc_html( $hashtag ); ?></h3>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>