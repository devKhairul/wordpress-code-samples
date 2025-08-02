
<section class="intro">     
    <?php if ( get_field('intro_heading') ) : ?>
        <h2><?php the_field('intro_heading'); ?></h2>
    <?php endif; ?>
    
    <?php if ( get_field('intro_copy') ) : ?>
        <?php the_field('intro_copy'); ?>
    <?php endif; ?>
</section>
