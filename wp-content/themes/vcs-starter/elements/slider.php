<section class="section">
    <div class="links">
        <div class="slider">
            <div class="slide-list">
                <div class="slide-wrap">
                    <?php  if( have_rows('st_sl_slides') ): ?>
                    <?php  while ( have_rows('st_sl_slides') ) : the_row(); ?>
                    <div class="slide-item">
                        <img src="<?php the_sub_field('st_sl_sl_photos'); ?>">
                        <span class="slide-title"><a href="<?php the_sub_field('st_sl_sl_links');?>"><?php the_sub_field('st_sl_sl_text');?></a></span>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
            <div name="prev" class="navy prev-slide"></div>
            <div name="next" class="navy next-slide"></div>
        </div>
    </div>
</section>