<?php


// Queue parent style followed by child/customized style
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', PHP_INT_MAX);

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );
}

register_nav_menus( array( 'primary' => esc_html__( 'Primary Menu', 'augustin' ) ) );