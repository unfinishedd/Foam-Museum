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
    <div class="fixed top-0 z-40 w-full">
        <nav class="bg-primary-200 p-2 lg:max-w-lg lg:mx-auto max-w-full py-3 mx-4 mt-4 lg:mt-0" id="main-menu">
            <div class="flex flex-row">
                <div class="flex-none color-primary-100"><button id="menu-button" class="transition transform hover: motion-reduce:transition-none motion-reduce:transform-none hover:scale-x-125 w-4"><i id="menu-icon-open" class="fal fa-grip-lines fa-lg"></i></button></div>
                <div class="flex-grow w-10">
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
                <div class="flex-none color-primary-100"><button id="menu-search-button" class="transition transform hover: motion-reduce:transition-none motion-reduce:transform-none hover:scale-110 w-4"><i id="menu-search-open" class="fal fa-search fa-md"></i></button></div>
            </div>
            <div class="transition-all ease-out duration-1000 h-0" id="menu-open">
                <div class="hidden flex flex-row justify-center" id="time-menu">
                    <div class="border rounded-full hover:rounded-none my-4 px-4 py-1 text-sm font-primary-normal color-primary-100">open vandaag 10:00-17:00</div>
                </div>
                <?php wp_nav_menu(array('theme_location' => 'sub-menu', 'menu_class' => 'hidden mx-6 py-4', 'walker' => new CustomMenuWalker_2(), 'items_wrap' => '<nav id="sub-menu-1" class="%2$s">%3$s</nav>')); ?>
                <?php wp_nav_menu(array('theme_location' => 'main-menu', 'menu_class' => 'hidden mx-6 py-2', 'walker' => new CustomMenuWalker_2(), 'items_wrap' => '<nav id="sub-menu-2" class="%2$s">%3$s</nav>')); ?>
                <?php wp_nav_menu(array('theme_location' => 'socials-menu', 'menu_class' => 'hidden flex flex-row justify-center py-8', 'walker' => new CustomMenuSocials(), 'items_wrap' => '<nav id="socials-menu-1" class="%2$s">%3$s</nav>')); ?>
            </div>
            <div class="transition-all ease-out duration-400 h-0" id="menu-open-search">
                <div class="py-4 text-3xl hidden" id="search-element">
                    <form method="get" action="<?php print site_url(); ?>">
                        <input class="w-full bg-transparent border-none focus:outline-none color-primary-100" type="text" placeholder="search anything..." name="s" value="<?php if(isset($_GET['s'])){print $_GET['s'];} ?>">
                        <input type="submit" value="Search" class="hidden">
                    </form>
                </div>
            </div>
        </nav>
        <?php wp_nav_menu(array('theme_location' => 'sub-menu', 'menu_class' => 'flex flex-row pt-1 lg:max-w-lg lg:mx-auto max-w-full mx-4 lg:mt-0 color-primary-0', 'walker' => new CustomMenuWalker(), 'items_wrap' => '<nav id="sub-menu-3" class="%2$s">%3$s</nav>')); ?>
    </div>