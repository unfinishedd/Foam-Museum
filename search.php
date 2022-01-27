<?php get_header(); ?>
<div class="min-h-screen flex flex-col justify-between">
    <main>
        
        <?php

        $term = $_GET['s'];

        $expTerm = explode(" ", $term);

        $search = "(";
        foreach ($expTerm as $ek => $ev) {
            if ($ek == 0) {
                $search .= " post_title LIKE '%" . $ev . "%' ";
            } else {
                $search .= " OR post_title LIKE '%" . $ev . "%'";
            }
        }
        $search .= ")";

        $query = $wpdb->get_results(" SELECT * FROM " . $wpdb->prefix . "posts WHERE post_status='publish' AND $search ");

        $allsearch = new WP_Query("s=$s&showposts=0");

        ?>
        <section class="bg-primary-100 h-96">
            <div class="pt-36 text-center">
                <h1 class="color-primary-0 text-5xl font-primary-italic"><?php if(isset($_GET['s'])){print $_GET['s'];} ?></h1>
                <h1 class="color-primary-0 text-lg mt-4 font-primary-normal"><?php echo $allsearch->found_posts . ' resultaten'; ?></h1>
            </div>
        </section>
        <?php

        /* build a position array for the term */
        $position = 101;
        $rate = [];

        for ($i = 0; $i <= 100; $i++) {
            $position = $position - 1; // first run will equal 100
            $rate[$i] = $position;
        }

        /* build the array based on type and position */
        /* loop through the query */
        $newArray = [];
        foreach ($query as $k => $v) {
            $title = $v->post_title;
            /* loop though each term */
            $calculate = 0;
            foreach ($expTerm as $tk => $tv) {
                if (strpos(strtolower($title), strtolower($tv)) !== false) {
                    $calculate = $calculate + strlen($tv);

                    $pos = strpos(strtolower($title), strtolower($tv));
                    $calculate = $calculate + $rate[$pos];
                } // end of if statement
            } // end of the for each term

            $newKey = $calculate . '.' . $v->ID;

            $newArray[$newKey] = $v;

            //print $newKey.'<br />';

        } // end of for each result or query

        /* sort in reverse DESC */
        krsort($newArray);


        foreach ($newArray as $qk => $qv) {
            $link = get_permalink($qv->ID);
        ?>
            <div>
                <a href="<?php echo $link; ?>">
                    <h3 class="color-primary-100"><?php echo $qv->post_title; ?></h3>
                </a>
                <p class="color-primary-100"><?php echo wp_trim_words($qv->post_content, 40, '... <a href="' . $link . '">Continue Reading</a>'); ?></p>
            </div>
        <?php

        }
        ?>

    </main>

    <?php get_footer(); ?>