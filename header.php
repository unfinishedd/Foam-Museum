<!DOCTYPE html>
<html <?php language_attributes(); ?> class="overflow-hidden">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body <?php body_class('bg-primary-0'); ?>>
    <?php if (get_theme_mod('basic-preloader-callout-display') == 'Yes') { ?>
        <div class="h-screen w-full flex flex-col justify-center absolute z-50 bg-primary-0" id="loadingDiv">
            <div class="relative mx-auto sm:text-6xl lg:text-5xl" id="textDiv">
                <?php
                $Text_1 = get_theme_mod('basic-preloader-callout-text');
                $Text_2 = get_theme_mod('basic-preloader-callout-text-2');
                $Text_3 = get_theme_mod('basic-preloader-callout-text-3');
                $Text_4 = get_theme_mod('basic-preloader-callout-text-4');
                $Text_5 = get_theme_mod('basic-preloader-callout-text-5');
                

                if ($Text_1 != '') {
                    echo "<i class='font-primary-normal opacity-0 color-primary-100' id='photography'>" . $Text_1 . "</i> ";
                    if ($Text_2 != '') {
                        echo "<i class='font-primary-normal opacity-0 color-primary-100' id='learn'>" . $Text_2 . "</i> ";
                    }
                    if ($Text_3 != '') {
                        echo "<i class='font-primary-normal opacity-0 color-primary-100' id='all'>" . $Text_3 . "</i> ";
                    }
                    if ($Text_4 != '') {
                        echo "<i class='font-primary-normal opacity-0 color-primary-100' id='about'>" . $Text_4 . "</i> ";
                    }
                    if ($Text_5 != '') {
                        echo "<i class='font-primary-normal opacity-0 color-primary-100' id='it'>" . $Text_5 . "</i> ";
                    }
                } else {
                    echo "Edit this by going to your Dashboard -> Appearance -> Customise -> Preloader Editor";
                }
                ?>
            </div>
        </div>
    <?php } ?>
    <div class="sticky top-0 z-40">
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
                <?php wp_nav_menu(array('theme_location' => 'sub-menu', 'menu_class' => 'mx-6 py-4', 'walker' => new CustomMenuWalker_2(), 'items_wrap' => '<nav id="%1$s" class="%2$s">%3$s</nav>')); ?>
                <?php wp_nav_menu(array('theme_location' => 'main-menu', 'menu_class' => 'mx-6 py-2', 'walker' => new CustomMenuWalker_2(), 'items_wrap' => '<nav id="%1$s" class="%2$s">%3$s</nav>')); ?>
                <?php wp_nav_menu(array('theme_location' => 'socials-menu', 'menu_class' => 'flex flex-row justify-center py-8', 'walker' => new CustomMenuSocials(), 'items_wrap' => '<nav id="%1$s" class="%2$s">%3$s</nav>')); ?>
            </div>
        </nav>
        <?php wp_nav_menu(array('theme_location' => 'sub-menu', 'menu_class' => 'flex flex-row pt-1 lg:max-w-lg lg:mx-auto max-w-full mx-4 lg:mt-0 color-primary-0', 'walker' => new CustomMenuWalker(), 'items_wrap' => '<nav id="%1$s" class="%2$s">%3$s</nav>')); ?>
    </div>