<!DOCTYPE html>
<html <?php language_attributes(); ?> class="overflow-hidden">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body <?php body_class('bg-primary-0'); ?>>
    <div class="h-screen w-full flex flex-col justify-center absolute z-40 bg-primary-0" id="loadingDiv">
        <div class="relative mx-auto sm:text-6xl lg:text-5xl" id="textDiv">
            <i class="font-primary-normal opacity-0 color-primary-100" id="photography">photography,</i>
            <i class="font-primary-normal opacity-0 color-primary-100" id="learn">learn</i>
            <i class="font-primary-normal opacity-0 color-primary-100" id="all">all</i>
            <i class="font-primary-normal opacity-0 color-primary-100" id="about">about</i>
            <i class="font-primary-normal opacity-0 color-primary-100" id="it">it</i>
        </div>
    </div>
    <div class="sticky top-0">
        <nav class="bg-primary-200 lg:h-fit p-2 lg:max-w-lg lg:mx-auto max-w-full py-3 mx-4 mt-4 lg:mt-0" id="main-menu">
            <div class="flex flex-row">
                <div class="flex-none color-primary-100"><button id="menu-button" class="transition transform hover: motion-reduce:transition-none motion-reduce:transform-none hover:scale-x-125"><i id="menu-icon-open" class="fal fa-grip-lines fa-lg"></i></button></div>
                <div class="flex-grow">
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                    if (has_custom_logo()) {
                        echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"class="mx-auto text-center max-h-6">';
                    } else {
                        echo '<p class="text-center font-primary-bold capitalize color-primary-100">' . get_bloginfo('name') . '</p>';
                    }
                    ?>
                </div>
                <div class="flex-none color-primary-100"><button class="transition transform hover: motion-reduce:transition-none motion-reduce:transform-none hover:scale-110"><i class="fal fa-search fa-md"></i></button></div>
            </div>
            <div id="menu-open">
                <div class="flex flex-row justify-center">
                    <div class="border rounded-full hover:rounded-none my-4 px-4 py-1 text-sm font-primary-normal color-primary-100">open vandaag 10:00-17:00</div>
                </div>
                <nav class="mx-6 py-12">
                    <a><div class="color-primary-100 my-4"><span class="menu-change-font text-4xl">programma</span><i class="fal fa-info-circle fa-lg p-1 ml-1"></i></div></a>
                    <a><div class="color-primary-100 my-4"><span class="menu-change-font text-4xl">tebjdsfudius</span><i class="fal fa-info-circle fa-lg p-1 ml-1"></i></div></a>
                    <a><div class="color-primary-100 my-4"><span class="menu-change-font text-4xl">jkdjkdkj</span><i class="fal fa-info-circle fa-lg p-1 ml-1"></i></div></a>
                </nav>
                <nav class="flex flex-row justify-center py-8">
                    <a><div class="color-primary-100 hover:border"><i class="fab fa-facebook fa-md mx-4 my-2"></i></div></a>
                    <a><div class="color-primary-100 hover:border"><i class="fab fa-twitter fa-md mx-4 my-2"></i></div></a>
                    <a><div class="color-primary-100 hover:border"><i class="fab fa-youtube fa-md mx-4 my-2"></i></div></a>
                    <a><div class="color-primary-100 hover:border"><i class="fab fa-instagram fa-md mx-4 my-2"></i></div></a>
                    <a><div class="color-primary-100 hover:border"><i class="fab fa-tiktok fa-md mx-4 my-2"></i></div></a>
                </nav>
            </div>
        </nav>
        <?php wp_nav_menu(array('theme_location' => 'sub-menu', 'menu_class' => 'flex flex-row pt-1 lg:max-w-lg lg:mx-auto max-w-full mx-4 lg:mt-0 color-primary-100', 'walker' => new CustomMenuWalker(), 'items_wrap' => '<nav id="%1$s" class="%2$s">%3$s</nav>')); ?>
    </div>
    <?php wp_nav_menu(array('theme_location' => 'Hoofdmenu', 'menu_class' => 'flex-row-reverse')); ?>