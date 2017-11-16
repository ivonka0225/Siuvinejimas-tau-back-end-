<footer>
    <div class="combo">
        <div class="copy">
            &copy;
            <?php echo date('Y')?>
            <?php bloginfo('name');?>
        </div>
        <?php if( $partners = get_field('st_p_partners','option')): ?>
        <div class="partners">
            <?php echo $partners; ?>
        </div>
        <?php endif; ?>
    </div>
</footer>