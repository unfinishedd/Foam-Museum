<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body <?php body_class(); ?>>
    <nav class="flex flex-row bg-gray-800 p-2 md:max-w-md lg:max-w-lg md:mx-auto max-w-sm mx-auto">
        <div style="color: #fff;"><i class="fal fa-bars fa-lg"></i></div>
        <div>Foam Logo</div>
        <div style="color: #fff;"><i class="fal fa-search fa-md"></i></div>
    </nav>
    <div class="mx-auto">
        <div>HIHI</div>
        <div>GFGFFG</div>
        <div>GFGFFG</div>
    </div>
    <?php wp_nav_menu(array('theme_location' => 'Hoofdmenu', 'menu_class' => 'flex-row-reverse')); ?>



    