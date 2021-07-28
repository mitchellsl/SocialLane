<?php
if( function_exists('acf_register_block_type') ):

    
    acf_register_block_type(array(
        'name' => 'social-share',
        'title' => 'Block - Social Share',
        'description' => '',
        'category' => 'boilerlane',
        'keywords' => array(
            0 => 'social-share',
        ),
        'post_types' => array(
            0 => 'post',
            1 => 'page',
        ),
        'mode' => 'preview',
        'align' => 'full',
        'align_content' => NULL,
        'render_template' => '/acf/social-share/social-share.php',
        'render_callback' => '',
        'enqueue_style' => '/wp-content/themes/boilerlane/acf/social-share/social-share.css',
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