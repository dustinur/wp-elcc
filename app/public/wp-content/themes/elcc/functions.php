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

?>