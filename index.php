<?php get_header(); ?>

<!-- dit is een test -->
<?php

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <!-- the body -->
        <a href="<?php the_permalink() ?>">
            <section class="bg-primary-0 text-white">
                <div class="container mx-auto text-white">
                    <?php if (has_post_thumbnail()) : ?>
                        <figure class="flex justify-end">
                            <img class="img-small text-white" src="<?php the_post_thumbnail_url('smallest'); ?>" />
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


if (get_theme_mod('basic-author-callout-display') == 'Yes') { ?>
    <div class="row row-padding author text-white">
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
<?php } 


get_footer();

?>
<?php get_footer(); ?>