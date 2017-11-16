<?php

/* Template Name: Wait */

get_header();

?>

    <?php 


$posts_found = $GLOBALS['wp_query']->found_posts;
$posts_count = $GLOBALS['wp_query']->post_count;

if(have_posts()): ?>

    <?php while (have_posts()) : the_post(); ?>
    <br>
    <br>
    <h1 style="font-size:50px; text-align: center;">
        <?php the_content (); ?>
    </h1>
    <br>
    <br>
    <center>
        <?php the_post_thumbnail(); ?>
    </center>

    <?php endwhile; ?>

    <?php else: ?>



    <?php endif; ?>



    <?php wp_footer(); ?>
    </body>

    </html>