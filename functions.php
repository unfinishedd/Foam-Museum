<?php
require __DIR__ . '/includes/CustomMenuWalker.php';
require get_stylesheet_directory() . '/includes/preloader-customizer.php';
new Preloader_Customizer();

// Customizer Settings
require get_stylesheet_directory() . 'wp-content\themes\foam-theme\includes\theminimalist-customizer2.php';
new TheMinimalist_Customizer2();


function foam_theme_assets()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/css/main-theme.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('script', get_template_directory_uri() . '/js/main-theme.js');
}

add_action('wp_enqueue_scripts', 'foam_theme_assets');

function foam_init_theme()
{
    register_nav_menu('main-menu',  __('Hoofdmenu'));
    register_nav_menu('sub-menu',  __('Sub-Menu'));
    register_nav_menu('socials-menu',  __('Socials-Menu'));
}

add_action('init', 'foam_init_theme');

function theme_custom_logo()
{
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );

    add_theme_support('custom-logo', $defaults);
}

add_theme_support('post-thumbnails');
add_image_size('smallest', 300, 300, true);

add_action('after_setup_theme', 'theme_custom_logo');


