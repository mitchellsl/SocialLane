<?php

if( function_exists('acf_register_block_type') ):

acf_register_block_type(array(
    'name' => 'full-width-image',
    'title' => 'Full Width Image',
    'description' => '',
    'category' => 'boilerlane',
    'keywords' => array(
    ),
    'post_types' => array(
        0 => 'post',
        1 => 'page',
    ),
    'mode' => 'preview',
    'align' => 'full',
    'align_content' => NULL,
    'render_template' => '/acf/full-width-image/full-width-image.php',
    'render_callback' => '',
    'enqueue_style' => '/wp-content/themes/boilerlane/acf/full-width-image/full-width-image.css',
    // 'enqueue_script' => '/wp-content/themes/boilerlane/acf/full-width-image/full-width-image.js',
    'enqueue_assets' => 'full-width-image',
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