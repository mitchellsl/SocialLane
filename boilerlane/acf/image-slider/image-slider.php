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
$id = 'image-slider-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'image-slider';
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
    
    <div class="image-slider-container">


    <?php 
    $images = get_field('slider');
    $size = 'full'; // (thumbnail, medium, large, full or custom size)
    if( $images ): ?>
      
            <?php foreach( $images as $image_id ): ?>
                <div class="slick-image">
                    <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                </div>
            <?php endforeach; ?>
        
    <?php endif; ?>


   



        
    </div>
    <?php
     $infinite = get_field( 'infinite' );
     $autoplay = get_field( 'autoplay' );
     $dots = get_field( 'dots' );
     $arrows = get_field( 'arrows' );
     $mobile_first = get_field( 'mobile_first' );
     $center_mode = get_field( 'center_mode' );
     $center_padding = get_field( 'center_padding' );
     $desktop_slides_to_show = get_field( 'desktop_slides_to_show' );
     $desktop_slides_to_slide = get_field('desktop_slides_to_slide');
     $small_desktop_slides_to_show = get_field('small_desktop_slides_to_show');
     $small_desktop_slides_to_slide = get_field('small_desktop_slides_to_slide');
     $tablet_slides_to_show = get_field('tablet_slides_to_show');
     $tablet_slides_to_slide = get_field('tablet_slides_to_slide');
     $mobile_slides_to_show = get_field('mobile_slides_to_show');
     $mobile_slides_to_slide = get_field('mobile_slides_to_slide');
     ?>
    <script>
    
    (function($){

        /**
         * initializeBlock
         *
         * Adds custom JavaScript to the block HTML.
         *
         * @date    15/4/19
         * @since   1.0.0
         *
         * @param   object $block The block jQuery element.
         * @param   object attributes The block attributes (only available when editing).
         * @return  void
         */


        var initializeBlock = function( $block ) {
            $block.find('.image-slider-container').slick({
                infinite:  <?php echo $infinite; ?>,
                autoplay: <?php echo $autoplay; ?>,
                autoplaySpeed: 3e3,
                slidesToShow: <?php echo $mobile_slides_to_show; ?>,
                dots: <?php echo $dots; ?>,
                arrows: <?php echo $arrows; ?>,
                mobileFirst: <?php echo $mobile_first; ?>,
                centerMode: <?php echo $center_mode; ?>,
                
                prevArrow: '<div class="slick-prev slick-arrow" style=""><i class="fas fa-chevron-left" aria-hidden="true"></i></div>',
                nextArrow: '<div class=" slick-next slick-arrow" style=""><i class="fas fa-chevron-right" aria-hidden="true"></i></div>',
                responsive: [
                { breakpoint: 2500, settings: { slidesToShow: <?php echo $desktop_slides_to_show; ?>, slidesToScroll: <?php echo $desktop_slides_to_slide; ?>, arrows: <?php echo $arrows; ?>,  } },
                { breakpoint: 1024, settings: { slidesToShow: <?php echo $small_desktop_slides_to_show; ?>, slidesToScroll: <?php echo $small_desktop_slides_to_slide; ?>, arrows: <?php echo $arrows; ?>, } },
                { breakpoint: 768, settings: { slidesToShow: <?php echo $tablet_slides_to_show; ?>, slidesToScroll: <?php echo $tablet_slides_to_slide; ?>,  } },
                { breakpoint: 567, settings: { slidesToShow: <?php echo $mobile_slides_to_show; ?>, slidesToScroll: <?php echo $mobile_slides_to_slide; ?>,  dots: false, arrows: true, } },
                { breakpoint: 320, settings: { slidesToShow: <?php echo $mobile_slides_to_show; ?>, slidesToScroll: <?php echo $mobile_slides_to_slide; ?>,  dots: false, arrows: true, } },
                ],
            });     
        }

        // Initialize each block on page load (front end).
        jQuery(document).ready(function(){
            jQuery('#<?php echo esc_attr($id); ?>').each(function(){
                initializeBlock( $(this) );
            });
        });

        // Initialize dynamic block preview (editor).
        if( window.acf ) {
            window.acf.addAction( 'render_block_preview/type=image-slider', initializeBlock );
        }

        })(jQuery);
    </script>
    
</section>

