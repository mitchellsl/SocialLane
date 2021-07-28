<?php
if( function_exists('acf_register_block_type') ):

    
    acf_register_block_type(array(
        'name' => 'cta',
        'title' => 'Block - Call to Action',
        'description' => '',
        'category' => 'boilerlane',
        'keywords' => array(
            0 => 'cta',
        ),
        'post_types' => array(
            0 => 'post',
            1 => 'page',
        ),
        'mode' => 'preview',
        'align' => 'full',
        'align_content' => NULL,
        'render_template' => '/acf/cta/cta.php',
        'render_callback' => '',
        'enqueue_style' => '/wp-content/themes/boilerlane/acf/cta/cta.css',
        // 'enqueue_script' => '/wp-content/themes/boilerlane/acf/cta/cta.js',
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