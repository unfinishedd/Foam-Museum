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