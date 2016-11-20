<?php

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

show_admin_bar(false);

function section_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Секция'),
        'id'            => 'sec',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
        'before_widget' => '',
        'after_widget'  => ''
    ) );
}

add_action( 'widgets_init', 'section_widgets_init' );

require_once(get_stylesheet_directory() . '/theme-options.php');