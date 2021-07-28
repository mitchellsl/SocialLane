<?php
if( function_exists('acf_register_block_type') ):

    
    acf_register_block_type(array(
        'name' => 'info-blocks',
        'title' => 'Block - Info Blocks',
        'description' => '',
        'category' => 'boilerlane',
        'keywords' => array(
            0 => 'info-blocks',
        ),
        'post_types' => array(
            0 => 'post',
            1 => 'page',
        ),
        'mode' => 'preview',
        'align' => 'full',
        'align_info-blocks' => NULL,
        'render_template' => '/acf/info-blocks/info-blocks.php',
        'render_callback' => '',
        'enqueue_style' => '/wp-content/themes/boilerlane/acf/info-blocks/info-blocks.css',
        // 'enqueue_script' => '/wp-content/themes/boilerlane/acf/content/content.js',
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