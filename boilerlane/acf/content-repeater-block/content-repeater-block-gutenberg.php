<?php
if( function_exists('acf_register_block_type') ):

    
    acf_register_block_type(array(
        'name' => 'content-repeater-block',
        'title' => 'Block - Content Repeater Block',
        'description' => '',
        'category' => 'boilerlane',
        'keywords' => array(
            0 => 'content-repeater-block',
        ),
        'post_types' => array(
            0 => 'post',
            1 => 'page',
        ),
        'mode' => 'preview',
        'align' => 'full',
        'align_content' => NULL,
        'render_template' => '/acf/content-repeater-block/content-repeater-block.php',
        'render_callback' => '',
        'enqueue_style' => '/wp-content/themes/boilerlane/acf/content-repeater-block/content-repeater-block.css',
        'enqueue_script' => '/wp-content/themes/boilerlane/acf/content-repeater-block/content-repeater-block.js',
        'enqueue_assets' => '',
        'icon' => '',
        'supports' => array(
            'align' => true,
            'mode' => true,
            'multiple' => true,
            'jsx' => false,
            'align_content' => false,
            'anchor' => true,
        ),
    ));
endif;
?>