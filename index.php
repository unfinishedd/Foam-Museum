<?php get_header(); ?>
<div class="min-h-screen flex flex-col justify-between">
<main>
    <!-- dit is een test -->




    <!-- <div class="duration-700 transform -translate-x-full" id="yes">
        <img src="images/MicrosoftTeams-image (3).png" alt="Foam image">
    </div> -->


    <?php if (get_theme_mod('basic-customImage-callout-display') == 'Yes') { ?>
        <div class="justify-items-start absolute">
            <div class="duration-700 transform -translate-x-full" id="yes">
                <img class="transition transform hover: motion-reduce:transition-none motion-reduce:transform-none hover:scale-110 z-10" src="<?php echo wp_get_attachment_url(get_theme_mod('basic-customImage-callout-image')) ?>" alt="Custom Image">
            </div>
        </div>
    <?php } ?>



    <?php


    if (have_posts()) :
        while (have_posts()) : the_post(); ?>

            <!-- the body -->
            <a href="<?php the_permalink() ?>">
                <section class="bg-primary-0 text-white">
                    <div class="container mx-auto text-white">
                        <?php if (has_post_thumbnail()) : ?>
                            <figure class="flex justify-end">
                                <img class="img-small transition transform hover: motion-reduce:transition-none motion-reduce:transform-none hover:scale-110 z-0" src="<?php the_post_thumbnail_url('medium_large'); ?>" />
                            </figure>
                        <?php endif ?>
                        <h2 class="text-white"><?php the_title() ?></h2>
                        <?php the_content() ?>
                        <hr>
                    </div>
                </section>
            </a>

    <?php endwhile;

    else :
        echo '<p>There are no posts!</p>';

    endif;

    ?>










    <?php

    if (get_theme_mod('basic-author-callout-display') == 'Yes') { ?>
        <div class="row row-padding author">
            <div class="col-6 author-image">
                <img src="<?php echo wp_get_attachment_url(get_theme_mod('basic-author-callout-image')) ?>" alt="Author Image">
            </div>
            <div class="col-6 author-content">
                <?php
                $authorText = get_theme_mod('basic-author-callout-text');
                if ($authorText != '') {
                    echo wpautop($authorText);
                } else {
                    echo "Edit this by going to your Dashboard -> Appearance -> Customise -> Author Editor";
                }
                ?>
            </div>
        </div>
    <?php } ?>

</main>

<?php get_footer(); ?>