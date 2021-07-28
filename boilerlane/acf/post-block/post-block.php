<?php
/**
 * Image Slider Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'post-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'post-block';
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

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container" style="<?php echo advanced_acf_settings(); ?>">
    <div class="block-background">
        <?php echo block_background(); ?>
    </div>      
    <div class="row">
                <!-- <div class="label">
                <?php if ( have_rows( 'label_repeater' ) ) : ?>
                    <?php while ( have_rows( 'label_repeater' ) ) :
                        the_row(); ?>
                        
                        <?php if ( $label = get_sub_field( 'label' ) ) : ?>
                            <?php echo esc_html( $label ); ?>
                        <?php endif; ?>

                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
                <?php if ( $heading = get_field( 'heading' ) ) : ?>
                    <?php echo $heading; ?>
                <?php endif; ?>
                <?php if ( $content = get_field( 'content' ) ) : ?>
                    <?php echo $content; ?>
                <?php endif; ?> -->
            </div>
            <div class="row post-block-items">
                <?php
                    $post_type = get_field('post_type');
                    // WP_Query arguments
                    $args = array(
                        'post_type'              => array( $post_type ),
                        'posts_per_page'         => '6',
                    );

                    // The Query
                    $query = new WP_Query( $args );

                    // The Loop
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                        ?>
                            <div class="col-blog">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <div class="col-blog--wrapper">    
                                <h3>
                                        <?php the_title(); ?>
                                    
                                        <p class="excerpt">
                                            <?php the_excerpt(); ?>
                                        </p>
                                        <div class="button">
                                            Lees meer
                                        </div>
                                        </h3>
                                        </div>
                                    <?php
                                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                            the_post_thumbnail( 'full', array( 'class'  => 'backdrop' ) ); // show featured image
                                                } 
                                    ?>
                                </a>
                            </div>
                            <?php
                        }
                    } else {
                        // no posts found
                    }

                    // Restore original Post Data
                    wp_reset_postdata();
                ?>
            </div>
            <div class="row">
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
</section>