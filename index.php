<?php get_header(); ?>


<!-- the body -->
<section class="bg-yellow-400">
    <div class="container mx-auto">
    <?php if (has_post_thumbnail()): ?>
            <img class="img-small" src="<?php the_post_thumbnail_url('smallest'); ?>"/>
        <?php endif ?>
        <h1>daddy foam x600px yes </h1>
    </div>
</section>


<!-- dit is een test -->
<?php

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <h2 class="underline"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <?php the_content() ?>
        <a href="<?php the_permalink() ?>">Lees Meer</a>
        <hr>

<?php endwhile;

else :
    echo '<p>There are no posts!</p>';

endif;
get_footer();

?>
<?php get_footer(); ?>