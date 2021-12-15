<?php get_header(); ?>

<!-- dit is een test -->
<?php

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <!-- the body -->
        <a href="<?php the_permalink() ?>">
            <section class="bg-primary text-white">
                <div class="container mx-auto text-white">
                    <?php if (has_post_thumbnail()) : ?>
                        <figure class="w-full flex justify-end">
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
get_footer();

?>
<?php get_footer(); ?>