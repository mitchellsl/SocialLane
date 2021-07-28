<?php
register_sidebar( array(
    'name'          => esc_html__( 'Footer sponsor area', 'that-theme' ),
    'id'            => 'sidebar-footer',
    'description'   => esc_html__( 'Add sponsors here.', 'that-theme' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
) );

register_sidebar( array(
    'name'          => esc_html__( 'Blog Sidebar', 'that-theme' ),
    'id'            => 'sidebar-blog',
    'description'   => esc_html__( 'Blog stuff here.', 'that-theme' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
) );

register_sidebar( array(
    'name'          => esc_html__( 'Activiteiten Sidebar', 'that-theme' ),
    'id'            => 'sidebar-activiteiten',
    'description'   => esc_html__( 'Activiteiten stuff here.', 'that-theme' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
) );
?>