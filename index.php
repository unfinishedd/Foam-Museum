<?php get_header(); ?>
<h1 class="p-5">Test Homepage</h1>
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