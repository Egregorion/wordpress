<?php 

function montheme_setup() {
    add_theme_support( 'post-thumbnails' );
}

function mon_theme_scripts() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', [], false, true);
}

add_action('after_setup_theme', 'montheme_setup');
add_action('wp_enqueue_scripts', 'mon_theme_scripts');