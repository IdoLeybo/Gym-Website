<?php

function gymfitness_menus() {
    //wordpress function
    register_nav_menus(array(
        'main-menu' => 'Main Menu',
    ));
}

// Hook
add_action('init','gymfitness_menus');

// Adds StyleSheets and JS Files
function gymfitness_scripts() {
    //Normalize CSS
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    // Google Font
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap', array(), '1.0.0');

    // Slicknav CSS
    wp_enqueue_style('slicknavcss', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10');

    //Main StyleSheet
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefont'), '1.0.0');

    wp_enqueue_script('jquery');
    // Load JS Files
    wp_enqueue_script('slicknavjs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);

    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.10', true);


}

add_action('wp_enqueue_scripts', 'gymfitness_scripts');

function gymfitness_setup() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'gymfitness_setup');