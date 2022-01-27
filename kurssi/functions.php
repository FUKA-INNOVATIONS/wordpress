<?php

if ( ! isset( $content_width ) ) $content_width = 1000;


// Lisaa toiminnallisuuksia
function custom_theme_setup(){
    // Lisataan  Sivuston title tagi dynaamisesti
    add_theme_support('title-tag');

    // Lisataan tausta- kuvan/varin vaihto omniausuus
    // Tama edellyttaa etta lisataan headeriin vody elementtiin body_class(); funktion
    add_theme_support('custom-background');

    // Lisataan custom header
    add_theme_support('custom-header', array('width' => 1000, 'height' => 400));

    // Post thumbnail supportti
    add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'custom_theme_setup' );








// Rekisterodaan Valikko ( Ulkoasu/Valikko ) Admin paneeliin
function rekisteroi_menu(){
    register_nav_menu('reuna', 'Paavalikko');
}

// Suoritetaan valikko funktio
add_action('init', 'rekisteroi_menu');


function lisaa_kirjasto() {
    wp_enqueue_script(
        'custom-script',
        get_stylesheet_directory_uri() . '/js/app.js',
        array( 'jquery' )
    );
}

add_action( 'wp_enqueue_scripts', 'lisaa_kirjasto' );



add_action('wp_head', 'remove_widget_action', 1);

function remove_widget_action() {
    global $wp_widget_factory;

    #remove_action( 'wp_head', array($wp_widget_factory->widgets['WordpressPopularPosts'], 'wp_print_stylesheet') );
}



if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name' => 'vimpaimet',
        'id' => 'vimpaimet'
    ));
}

?>