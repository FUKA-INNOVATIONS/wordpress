<?php



if ( ! isset( $content_width ) ) $content_width = 1110;


// Lisaa toiminnallisuuksia
function custom_theme_setup(){
    // Lisataan  Sivuston title tagi dynaamisesti
    add_theme_support('title-tag');

    // Lisataan tausta- kuvan/varin vaihto omniausuus
    // Tama edellyttaa etta lisataan headeriin vody elementtiin body_class(); funktion
    add_theme_support('custom-background');

    // Lisataan custom header
    add_theme_support('custom-header', array('width' => 1110, 'height' => 350));

    // Post thumbnail supportti
    add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'custom_theme_setup' );




function load_stylesheet() {

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_stylesheet');




function include_jquery(){
    wp_deregister_script( 'jquery' );
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', '', 1, true);
    add_action('wp_enqueue_scripts', 'jquery');
}

add_action('wp_enqueue_scripts', 'include_jquery');



function loadjs() {
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'loadjs');



add_theme_support('menus');
register_nav_menus(
    array(
        'top-menu' => __('Top menu', 'theme'),
        'footer-menu' => __('Footer menu', 'theme'),
        'side-menu' => __('Side menu', 'theme')
    )
    );

    
    

