<header class="header">
    <div class="top">
        <nav class="menu">
            <?php  wp_nav_menu(array(
    'container' => 'nav',
    'menu_class' => 'menu',
    'theme_location' => 'primary-navigation',
    'menu' => 'primary-navigation')); ?>
        </nav>
        <div class="search">
        </div>
    </div>
    <div class="center">
        <div class="name">
            <h1>
                <?php bloginfo('name');?>
            </h1>
        </div>
        <ul class="logo">
            <?php if( have_rows('st_sn_social') ):
                        while ( have_rows('st_sn_social') ) : the_row();?>
            <?php $icon = get_sub_field('st_sn_s_icon'); ?>
            <li><a href="<?php the_sub_field('st_sn_s_ulr'); ?>"><span class="icon-<?php echo $icon;?>"><?php echo do_shortcode('[wp-svg-icons icon="icon- echo $icon;" wrap="span"]'); ?></span></a></li>
            <?php endwhile; endif; ?>
        </ul>
    </div>
</header>