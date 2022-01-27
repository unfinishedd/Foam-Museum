<?php get_header(); ?>

<!-- dit is een test -->



<!-- Programma -->
<?php
if (strpos(get_permalink(get_page_by_path('')), 'bedrijfsuitje') !== false) {
    if (get_theme_mod('basic-customImage-callout-display') == 'Yes') { ?>
        <div class="justify-items-start absolute">
            <div class="duration-700 transform -translate-x-full " id="yes">
                <h1 class="transition transform hover: motion-reduce:transition-none motion-reduce:transform-none hover:scale-110 z-10 mt-52 ml-20 text-8xl font-bold" style="color: white">bedrijfsuitje</h1>
            </div>
        </div>
<?php }
} ?>


<!-- Bezoek ons / Contact -->
<?php
if (strpos(get_permalink(get_page_by_path('')), 'koop-tickets') !== false) {
    if (get_theme_mod('basic-customImage-callout-display') == 'Yes') { ?>
        <div class="justify-items-start absolute">
            <div class="duration-700 transform -translate-x-full " id="yes">
                <h1 class="transition transform hover: motion-reduce:transition-none motion-reduce:transform-none hover:scale-110 z-10 mt-52 ml-20 text-9xl font-bold" style="color: white">tickets</h1>
            </div>
        </div>
<?php }
} ?>


<!-- Tickets -->
<?php
if (strpos(get_permalink(get_page_by_path('')), 'contact') !== false) {
    if (get_theme_mod('basic-customImage-callout-display') == 'Yes') { ?>
        <div class="justify-items-start absolute">
            <div class="duration-700 transform -translate-x-full z-10" id="yes">
                <h1 class="transition transform hover: motion-reduce:transition-none motion-reduce:transform-none mt-52 ml-20 text-8xl font-bold" style="color: white">contact</h1>
                <h2 class="mt-10 ml-20 text-4xl" style="color: white">Tel: (088) 225 56 03 <br>
                    Mail: foambusiness@gmail.nl <br>
                    Locatie: Keizersgracht 609, 1017 DS <br>
                    Amsterdam</h2>
            </div>
        </div>
<?php }
} ?>



<?php


if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <!-- the body -->


<?php endwhile;

else :
    echo '<p>There are no posts!</p>';

endif;

?>


<!-- redlight horizontal -->
<div class="redlight">
    <style>
        .redlight {
            position: absolute;
            z-index: 0;
            bottom: -220px;

        }

        @media screen and (max-width: 1080px) {
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

<!-- redlight vertical -->
<div class="redlight-vertical">
    <style>
        .redlight-vertical {
            position: absolute;
            z-index: 1;
            right: 150px;
            max-width: 140px;
        }

        @media screen and (max-width: 1080px) {
            .redlight {
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




<?php

get_footer();

?>
<?php get_footer(); ?>