<?php

// adding CSS and JS files

function elcc_setup(){
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap.min.css' );
    wp_enqueue_style('style',get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script("jquery", get_theme_file_uri('/jquery-3.3.1.slim.min.js'), NULL, microtime(), true);
    wp_enqueue_script("bootstrap-js", get_theme_file_uri('/bootstrap.min.js'), NULL, microtime(), true);
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}
add_action( 'wp_enqueue_scripts', 'elcc_setup' );

// Adding theme support

    function elcc_init() {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('html5',
            array('comment-list', 'comment-form', 'search-form')
    );
    }

    add_action('after_setup_theme', 'elcc_init');

    // Product Post Type

    function elcc_custom_post_type() {
        register_post_type('product',
            array(
                'rewrite' => array('slug' => 'products'),
                'labels' => array(
                    'name' => 'Products',
                    'singular_name' => 'Product',
                    'add_new_item' => 'Add New Product',
                    'edit_item' => 'Edit Product'
                ),
                'menu-icon' => 'dashicons-clipboard',
                'public' => true,
                'has_archive' => true,
                'supports' => array(
                    'title', 'thumbnail', 'editor', 'excerpt', 'comments'
                )
            )
        );
    }

    add_action('init', 'elcc_custom_post_type');
?>