<?php

if( function_exists('acf_register_block_type') ):

acf_register_block_type(array(
    'name' => 'image-slider',
    'title' => 'Image Slider',
    'description' => '',
    'category' => 'boilerlane',
    'keywords' => array(
    ),
    'post_types' => array(
        0 => 'post',
        1 => 'page',
    ),
    'mode' => 'edit',
    'align' => 'full',
    'align_content' => NULL,
    'render_template' => '/acf/image-slider/image-slider.php',
    // 'render_callback' => '/wp-content/themes/boilerlane/acf/image-slider/image-slider.js',
    'enqueue_style' => '/wp-content/themes/boilerlane/acf/image-slider/image-slider.css',
    'enqueue_assets' 	=> function(){
        wp_enqueue_style( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1' );
        wp_enqueue_style( 'slick-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1' );
        wp_enqueue_script( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true );

        wp_enqueue_style( 'block-slider', get_template_directory_uri() . '/acf/image-slider/image-slider.css', array(), '1.0.0' );
        // wp_enqueue_script( 'block-slider', get_template_directory_uri() . '/acf/image-slider/image-slider.js', array(), '1.0.0', true );
      },
    'icon' => '',
    'supports' => array(
        'align' => array(
            0 => 'left',
            1 => 'right',
            2 => 'full',
        ),
        'mode' => true,
        'multiple' => true,
        'jsx' => false,
        'align_content' => false,
        'anchor' => true,
    ),
));

endif;
?>