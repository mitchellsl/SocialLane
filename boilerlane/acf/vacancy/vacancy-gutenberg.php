<?php
if( function_exists('acf_register_block_type') ):

    
    acf_register_block_type(array(
        'name' => 'vacancy',
        'title' => 'Block - Vacancy',
        'description' => '',
        'category' => 'boilerlane',
        'keywords' => array(
            0 => 'vacancy',
        ),
        'post_types' => array(
            0 => 'post',
            1 => 'page',
        ),
        'mode' => 'preview',
        'align' => 'full',
        'align_content' => NULL,
        'render_template' => '/acf/vacancy/vacancy.php',
        'render_callback' => '',
        'enqueue_style' => '/wp-content/themes/boilerlane/acf/vacancy/vacancy.css',
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