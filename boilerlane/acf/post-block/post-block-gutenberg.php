<?php

if( function_exists('acf_register_block_type') ):

acf_register_block_type(array(
    'name' => 'post-block',
    'title' => 'Post Block',
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
    'render_template' => '/acf/post-block/post-block.php',
    'render_callback' => '',
    'enqueue_style' => '/wp-content/themes/boilerlane/acf/post-block/post-block.css',
    'enqueue_script' => '/wp-content/themes/boilerlane/acf/post-block/post-block.js',
    'enqueue_assets' => 'post-block',
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

add_filter('acf/load_field/name=post_type', 'acf_load_post_types');

function acf_load_post_types($field)
{
    foreach ( get_post_types( '', 'names' ) as $post_type ) {
       $field['choices'][$post_type] = $post_type;
    }

    // return the field
    return $field;
}
?>