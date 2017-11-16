<main class="main">
    <div class="wrapper">
        <div class="logo">
            <img src="<?php the_field('st_sl_logo')?>" alt="logo">
        </div>
        <?php
$post_data = get_post( 107 );
global $post;
$post = $post_data;
setup_postdata($post); ?>
            <div class="text">
                <?php the_content (); ?>
                <h2>
                    <?php the_title(); ?>
                </h2>
            </div>
            <?php  wp_reset_postdata();?>
    </div>
</main>