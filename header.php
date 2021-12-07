<!DOCTYPE html>
<html <?php language_attributes(); ?> class="overflow-hidden">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body <?php body_class('bg-primary'); ?>>
    <div class="h-screen w-full flex flex-col justify-center absolute z-40 bg-primary" id="loadingDiv">
        <div class="relative mx-auto text-1xl md:text-2xl lg:text-5xl" id="textDiv">
            <i class="font-primary opacity-0 color-primary-100" id="photography">photography,</i>
            <i class="font-primary opacity-0 color-primary-100" id="learn">learn</i>
            <i class="font-primary opacity-0 color-primary-100" id="all">all</i>
            <i class="font-primary opacity-0 color-primary-100" id="about">about</i>
            <i class="font-primary opacity-0 color-primary-100" id="it">it</i>
        </div>
    </div>
    <div class="sticky top-0">
        <nav class="flex flex-row bg-primary-200 p-2 md:max-w-md lg:max-w-lg md:mx-auto max-w-sm mx-auto py-3">
            <div class="flex-none color-primary-100"><button id="menu-button"><i id="menu-icon-lines" class="fal fa-grip-lines fa-lg"></i></button></div>
            <div class="flex-grow">
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                if (has_custom_logo()) {
                    echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"class="mx-auto max-h-6">';
                } else {
                    echo '<p class="text-center font-primary-bold capitalize color-primary-100">' . get_bloginfo('name') . '</p>';
                }
                ?>
            </div>
            <div class="flex-none color-primary-100"><button><i class="fal fa-search fa-md"></i></button></div>
        </nav>
        <nav class="flex flex-row pt-1 md:max-w-md lg:max-w-lg md:mx-auto max-w-sm mx-auto">
            <div class="flex justify-center font-primary w-2/6 bg-primary color-primary-100 border-gray-500 border py-2.5 hover:border-white">
                <button>programma<i class="fal fa-calendar fa-xs p-1 ml-1"></i></button>
            </div>
            <div class="flex justify-center font-primary w-2/6 bg-primary color-primary-100 border-gray-500 border py-2.5 hover:border-white">
                <button>bezoek ons<i class="fal fa-info-circle fa-xs p-1 ml-1"></i></button>
            </div>
            <div class="flex justify-center font-primary w-2/6 bg-primary color-primary-100 border-gray-500 border py-2.5 hover:border-white">
                <button>koop tickets<i class="fal fa-ticket fa-xs p-1 ml-1" style="transform: rotate(160deg);"></i></button>
            </div>
        </nav>
    </div>
    <?php wp_nav_menu(array('theme_location' => 'Hoofdmenu', 'menu_class' => 'flex-row-reverse')); ?>
    <?php wp_nav_menu(array('theme_location' => 'sub-menu', 'container' => 'nav', 'container_class' => 'flex flex-row pt-1 md:max-w-md lg:max-w-lg md:mx-auto max-w-sm mx-auto')); ?>