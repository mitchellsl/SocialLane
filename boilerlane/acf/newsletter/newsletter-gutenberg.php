<?php
if( function_exists('acf_register_block_type') ):

    
    acf_register_block_type(array(
        'name' => 'newsletter',
        'title' => 'Block - Newsletter',
        'description' => '',
        'category' => 'boilerlane',
        'keywords' => array(
            0 => 'newsletter',
        ),
        'post_types' => array(
            0 => 'post',
            1 => 'page',
        ),
        'mode' => 'preview',
        'align' => 'full',
        'align_newsletter' => NULL,
        'render_template' => '/acf/newsletter/newsletter.php',
        'render_callback' => '',
        'enqueue_style' => '/wp-content/themes/boilerlane/acf/newsletter/newsletter.css',
        // 'enqueue_script' => '/wp-content/themes/boilerlane/acf/newsletter/newsletter.js',
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