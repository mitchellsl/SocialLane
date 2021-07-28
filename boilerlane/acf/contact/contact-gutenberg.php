<?php
if( function_exists('acf_register_block_type') ):

    
    acf_register_block_type(array(
        'name' => 'contact',
        'title' => 'Block - contact',
        'description' => '',
        'category' => 'boilerlane',
        'keywords' => array(
            0 => 'contact',
        ),
        'post_types' => array(
            0 => 'post',
            1 => 'page',
        ),
        'mode' => 'preview',
        'align' => 'full',
        'align_content' => NULL,
        'render_template' => '/acf/contact/contact.php',
        'render_callback' => '',
        'enqueue_style' => '/wp-content/themes/boilerlane/acf/contact/contact.css',
        // 'enqueue_script' => '/wp-content/themes/boilerlane/acf/contact/contact.js',
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