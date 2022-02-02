<?php wp_footer() ?>
<footer class="bg-primary-100">
    <div class="max-w-6xl m-auto text-gray-800 flex flex-wrap justify-center">
        <div class="p-5 w-48 ">
            <div class="text-xs uppercase text-gray-500 font-medium">Pages</div>
            <?php wp_nav_menu(array('theme_location' => 'main-menu', 'menu_class' => '', 'walker' => new CustomMenuWalker_3(), 'items_wrap' => '<nav id="sub-menu-2" class="%2$s">%3$s</nav>')); ?>
            <?php wp_nav_menu(array('theme_location' => 'sub-menu', 'menu_class' => '', 'walker' => new CustomMenuWalker_3(), 'items_wrap' => '<nav id="sub-menu-2" class="%2$s">%3$s</nav>')); ?>
        </div>
        <div class="p-5 w-48 ">
            <div class="text-xs uppercase text-gray-500 font-medium">Social media</div>
            <?php wp_nav_menu(array('theme_location' => 'socials-menu', 'menu_class' => '', 'walker' => new CustomMenuWalker_3(), 'items_wrap' => '<nav id="socials-menu-2" class="%2$s">%3$s</nav>')); ?>
        </div>
        <div class="p-5 w-48 ">
            <div class="text-xs uppercase text-gray-500 font-medium">Contact ons</div>
            <a class="my-3 block" href="/contact">Keizersgracht 609, 1017 DS Amsterdam <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">info@foam.org <span class="text-teal-600 text-xs p-1"></span></a>
        </div>
    </div>
</footer>
</body>
</html>