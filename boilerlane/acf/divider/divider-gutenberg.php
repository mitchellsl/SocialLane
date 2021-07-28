<?php

if( function_exists('acf_register_block_type') ):

acf_register_block_type(array(
    'name' => 'divider',
    'title' => 'Divider',
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
    'render_template' => '/acf/divider/divider.php',
    'render_callback' => '',
    'enqueue_style' => '/wp-content/themes/boilerlane/acf/divider/divider.css',
    // 'enqueue_script' => '/wp-content/themes/boilerlane/acf/divider/divider.js',
    'enqueue_assets' => 'divider',
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