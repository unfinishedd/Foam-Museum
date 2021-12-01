<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foam - Museum</title>
</head>

<body>
    <h1>Test Homepage</h1>
    <?php

    get_header();

    if (have_posts()) :
        while (have_posts()) : the_post(); ?>

            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
            <?php the_content() ?>

    <?php endwhile;

    else :
        echo '<p>There are no posts!</p>';

    endif;

    get_footer();

    ?>


</body>

</html>