<?php
/**
 * Header Image Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'header-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'header';
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
    <?php if ( $video_full = get_field( 'video_full' ) ) : ?>
        <video width="100%" height="100%" muted autoplay loop>
            <source src=" <?php echo esc_url( $video_full ); ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    <?php endif; ?>
       
    
<div class="row">
    <div class="container">
        <div class="row">
        <?php if ( get_field( 'image' ) ): ?>

            <div class="col-6 heading-content">

        <?php else: // field_name returned false ?>

            <div class="col-12 heading-content">

        <?php endif; // end of if field_name logic ?>

                <div class="heading">
                    <?php if ( $heading = get_field( 'heading' ) ) : ?>
                        <?php echo $heading; ?>
                    <?php endif; ?>
                </div>
                <div class="content">
                    <?php if ( $content = get_field( 'content' ) ) : ?>
                        <?php echo $content; ?>
                    <?php endif; ?>
                </div>
                <div class="button-wrapper">
                    <?php
                        $link = get_field( 'link' );
                        if ( $link ) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>
            </div>

            <?php
                $image = get_field( 'image' );
                if ( $image ) : ?>
                <div class="col-6 heading-image">
                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                </div>
                <?php endif; ?>
        </div>
    </div>
</div>
</section>
