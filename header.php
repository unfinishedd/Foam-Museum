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
    <div class="sticky top-0">
        <nav class="flex flex-row bg-primary-200 p-2 md:max-w-md lg:max-w-lg md:mx-auto max-w-sm mx-auto">
            <div class="flex-none color-primary-100"><i class="fal fa-grip-lines fa-lg"></i></div>
            <div class="flex-grow">
                <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    
                    if ( has_custom_logo() ) {
                        echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"class="mx-auto max-h-6">';
                    } else {
                        echo '<p class="text-center font-primary-bold capitalize color-primary-100">' . get_bloginfo('name') . '</p>';
                    }
                ?>
            </div>
            <div class="flex-none color-primary-100"><i class="fal fa-search fa-md"></i></div>
        </nav>
    </div>
    <?php wp_nav_menu(array('theme_location' => 'Hoofdmenu', 'menu_class' => 'flex-row-reverse')); ?>