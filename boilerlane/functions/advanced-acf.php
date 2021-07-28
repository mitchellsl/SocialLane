<?php

function advanced_acf_settings(){
        
    if ( have_rows( 'padding_options' ) ) :
        while ( have_rows('padding_options')):
            the_row();?><?php if ( $padding_top = get_sub_field( 'padding_top' ) ) : echo "padding-top:"; echo $padding_top; echo "px;"; endif; ?><?php if ( $padding_bottom = get_sub_field( 'padding_bottom' ) ) : echo "padding-bottom:"; echo $padding_bottom; echo "px;"; endif; ?><?php
        endwhile;
    endif;
    if ( have_rows( 'margin_options' ) ) :
        while ( have_rows('margin_options')):
            the_row();?><?php if ( $margin_top = get_sub_field( 'margin_top' ) ) : echo "margin-top:"; echo $margin_top; echo "px;"; endif; ?><?php if ( $margin_bottom = get_sub_field( 'margin_bottom' ) ) : echo "margin-bottom:"; echo $margin_bottom; echo "px;"; endif; ?><?php
        endwhile;
    endif;
    if ( get_field( 'background_style' ) == 'Gradient' ) : ?>background: -moz-linear-gradient(<?php the_field('gradient_degree'); ?>deg, <?php the_field('left_color'); ?> <?php the_field('left_color_percentage'); ?>%, <?php the_field('right_color'); ?>  <?php the_field('right_color_percentage'); ?>%);background: -webkit-linear-gradient(<?php the_field('gradient_degree'); ?>deg, <?php the_field('left_color'); ?> <?php the_field('left_color_percentage'); ?>%, <?php the_field('right_color'); ?> <?php the_field('right_color_percentage'); ?>%);background: linear-gradient(<?php the_field('gradient_degree'); ?>deg, <?php the_field('left_color'); ?> <?php the_field('left_color_percentage'); ?>%, <?php the_field('right_color'); ?> <?php the_field('right_color_percentage'); ?>%);
    <?php
     endif;
     if ( get_field( 'background_style' ) == 'Color' ) : 
        $background_color = get_field( 'background_color_advanced' ); ?>
        background:<?php echo esc_html( $background_color ); ?>;
    <?php
     endif;
    }

    function advanced_acf_settings_divider(){
        
        if ( have_rows( 'padding_options' ) ) :
            while ( have_rows('padding_options')):
                the_row();?><?php if ( $padding_top = get_sub_field( 'padding_top' ) ) : echo "padding-top:"; echo $padding_top; echo "px;"; endif; ?><?php if ( $padding_bottom = get_sub_field( 'padding_bottom' ) ) : echo "padding-bottom:"; echo $padding_bottom; echo "px;"; endif; ?><?php
            endwhile;
        endif;
        if ( have_rows( 'margin_options' ) ) :
            while ( have_rows('margin_options')):
                the_row();?><?php if ( $margin_top = get_sub_field( 'margin_top' ) ) : echo "margin-top:"; echo $margin_top; echo "px;"; endif; ?><?php if ( $margin_bottom = get_sub_field( 'margin_bottom' ) ) : echo "margin-bottom:"; echo $margin_bottom; echo "px;"; endif; ?><?php
            endwhile;
        endif;
        }

    function block_background(){
        $background_image = get_field( 'background_image' );
        if ( $background_image ) {
            ?>background: url('<?php the_field( 'background_image' ); ?>');background-size:cover;background-position:center;<?php
        };

    }

/**
 * Responsive Image Helper Function
 *
 * @param string $image_id the id of the image (from ACF or similar)
 * @param string $image_size the size of the thumbnail image or custom image size
 * @param string $max_width the max width this image will be shown to build the sizes attribute 
 * Example: <img class="my_class" <?php awesome_acf_responsive_image(get_field( 'image_1' ),'thumb-640','640px'); ?>  alt="text" /> 
 */

function awesome_acf_responsive_image($image_id,$image_size,$max_width){

	// check the image ID is not blank
	if($image_id != '') {

		// set the default src image size
		$image_src = wp_get_attachment_image_url( $image_id, $image_size );

		// set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );

        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);

		// generate the markup for the responsive image
		echo 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'" alt="'.$image_alt.'"';

	}
}

add_filter( 'max_srcset_image_width', 'awesome_acf_max_srcset_image_width', 10 , 2 );

// set the max image width 
function awesome_acf_max_srcset_image_width() {
	return 1200;
}





function divider_color(){ ?>
    <?php if ( $shape_color = get_field( 'shape_color' ) ) : ?>fill:<?php echo esc_html( $shape_color ); ?> !important;<?php endif; ?>
<?php }

?>