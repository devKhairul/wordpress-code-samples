<section class="hero">
    <div class="ast-container">
        <div class="hero__content">
            <?php if ( get_field('hero_heading') ) : ?>
                <h1><?php the_field('hero_heading'); ?></h1>
            <?php endif; ?>

            <?php if ( get_field('hero_subheading') ) : ?>
                <p><?php the_field('hero_subheading'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>