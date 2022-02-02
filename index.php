<?php get_header(); ?>
<div class="min-h-screen flex flex-col justify-between">
    <main>
        <!-- dit is een test -->


        
        <?php if (get_theme_mod('basic-customImage-callout-display') == 'Yes') { ?>
            <div class="justify-items-start">
                <div class="duration-700 transform -translate-x-full" id="yes">
                    <img class="pt-52 pl-20 z-20 absolute" src="<?php echo wp_get_attachment_url(get_theme_mod('basic-customImage-callout-image')) ?>" alt="Custom Image">
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
                                        <img class="z-auto" src="<?php the_post_thumbnail_url('large'); ?>" />
                                    </figure>
                                <?php endif ?>


                            </div>
                        </section>
                    </a>


            <?php endwhile;

            else :
                echo '<p>There are no posts!</p>';

            endif;

            ?>


            <!-- Lines -->
            <div class="redlight">
                <style>
                    .redlight {
                        position: absolute;
                        z-index: 0;
                        bottom: -220px;
                        width: 100%;
                    }

                    @media screen and (max-width: 600px) {
                        .redlight {
                            display: none;
                        }
                    }

                    ;
                </style>
                <svg id="Laag_1" data-name="Laag 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 22.65">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                                stroke: red;
                                stroke-miterlimit: 10;
                                stroke-width: 0.25px;
                            }
                        </style>
                    </defs>
                    <line class="cls-1" y1="0.10" x2="250" y2="0.10" />
                    <line class="cls-1" y1="6.10" x2="250" y2="6.10" />
                    <line class="cls-1" y1="12.10" x2="250" y2="12.10" />
                </svg>
            </div>

            <div class="redlight-vertical">
                <style>
                    .redlight-vertical {
                        position: absolute;
                        z-index: 1;
                        right: 150px;
                        max-width: 140px;
                    }

                    @media screen and (max-width: 900px) {
                        .redlight-vertical {
                            display: none;
                        }
                    }

                    ;
                </style>
                <svg id="Laag_1" data-name="Laag 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.25 250">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                                stroke: #e52421;
                                stroke-miterlimit: 10;
                                stroke-width: 0.25px;
                            }
                        </style>
                    </defs>
                    <line class="cls-1" x1="0.13" y1="250" x2="0.13" />
                    <line class="cls-1" x1="6.12" y1="250" x2="6.12" />
                    <line class="cls-1" x1="12.13" y1="250" x2="12.13" />
                    <line class="cls-1" x1="18.13" y1="250" x2="18.13" />
                </svg>
            </div>




            <!-- Content Post -->
            <section class="bg-primary-100 color-primary-0" style="margin-top: auto" ;>
                <div class="py-5">
                    <div class="float-child">
                        <h1 style="font-size: 77px;"> <?php the_title() ?> </h1>
                        <h2 style="font-size: 20px;"> <?php the_content() ?> </h2>
                    </div>
                </div>
                <div class="py-5">
                    <div class="float-child2">
                        <div class="rcorners2">
                        <h2 style="font-size: 20px;"> welcome </h2>
                    </div>
                </div>
            </section>
            <style>
                .float-child {
                    width: 50%;
                    padding: 5px;
                    left: 0px;
                }

                .float-child2 {
                    width: 50%;
                    right: 0px;
                }

                .rcorners2 {
                    border-radius: 25px;
                    border: 2px solid black;
                    padding: 20px;
                    width: 200px;
                    height: 150px;
                }
            </style>


    </main>


    <?php

    if (get_theme_mod('basic-author-callout-display') == 'Yes') { ?>
        <!-- <div> 
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
    </div>
<?php } ?>-->
        <!-- 
    <style>
        #ABC {
            background-color: blue;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        body {
            background: grey;
            margin: 0;
        }
    </style> -->

        <?php

        get_footer();

        ?>