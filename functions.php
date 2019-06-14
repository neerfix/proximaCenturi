<?php

// Configuration du thème
require_once get_template_directory() . '/inc/config.php';
// Types de publication et taxonomies
require_once get_template_directory() . '/inc/post-types.php';
// Fonctionnalités
require_once get_template_directory() . '/inc/features.php';

register_nav_menus(array(
    'main' => 'Menu Principal',
    'footer' => 'Bas de page',
));

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar(array(
        'id' => 'sidebar-right',
        'name' => 'Sidebar-right',
        'before_widget' => '<div class="site__sidebar_right_widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="site__sidebar_right_widget__title">',
        'after_title' => '</h3>',
    ));
}

// ACF Custom Blocks **************************************************************************************
function register_acf_block_types() {

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'Testimonial',
        'title'             => __('Testimonial'),
        'description'       => __('A custom testimonial block.'),
        'render_template'   => 'parts/blocks/testimonial/testimonial.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
    ));
    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'Testimonial',
        'title'             => __('Testimonial'),
        'description'       => __('A custom testimonial block.'),
        'render_template'   => 'parts/blocks/testimonial/testimonial.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'testimonial', 'quote' ),
    ));
    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'Last-posts-newstyle',
        'title'             => __('Last Posts New Style'),
        'description'       => __('A custom testimonial block.'),
        'render_template'   => 'parts/blocks/lastposts/last-posts.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'post', 'list' ),
    ));
}
// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}

function enqueue_styles() {
    wp_enqueue_style( 'nicolasnotararigo', get_template_directory_uri() . '/css/style.css');

    // Déclarer jQuery
    wp_deregister_script( 'jquery' ); // On annule l'inscription du jQuery de WP
    wp_enqueue_script( // On déclare une version plus moderne
        'jquery',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',
        false,
        '3.3.1',
        true
    );
}

add_action('wp_enqueue_scripts', 'enqueue_styles');