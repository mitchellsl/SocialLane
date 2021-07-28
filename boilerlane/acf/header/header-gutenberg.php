<?php
if( function_exists('acf_register_block_type') ):

    acf_register_block_type(array(
        'name' => 'header',
        'title' => 'Header',
        'description' => '',
        'category' => 'boilerlane',
        'keywords' => array(
        ),
        'post_types' => array(
        ),
        'mode' => 'preview',
        'align' => 'full',
        'align_content' => NULL,
        'render_template' => '/acf/header/header.php',
        'render_callback' => '',
        'enqueue_style' => '/wp-content/themes/boilerlane/acf/header/header.css',
        'enqueue_script' => '/wp-content/themes/boilerlane/acf/header/header.js',
        'enqueue_assets' => '',
        'icon' => '',
        'supports' => array(
            'align' => array(
                0 => 'full',
                1 => 'left',
                2 => 'right',
            ),
            'width' => array(
                0 => 'full',
                1 => 'left',
                2 => 'right',
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