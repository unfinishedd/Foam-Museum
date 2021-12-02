<?php

function foam_theme_assets()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/css/main-theme.css');
}

add_action('wp_enqueue_scripts', 'foam_theme_assets');

function foam_init_theme() {
    register_nav_menu('main-menu',  __('Hoofdmenu'));
}

add_action('init', 'foam_init_theme');

function foam_custom_logo() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}

	
add_theme_support( 'post-thumbnails' );
add_image_size( 'smallest', 300, 300, true );

add_action( 'after_setup_theme', 'foam_custom_logo' );