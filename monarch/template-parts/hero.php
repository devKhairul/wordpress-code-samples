<section class="hero">
    <div class="hero__content">
        <?php $hero_image = get_field('hero_image'); 
        
            if( !empty($hero_image) ): ?>
                <div class="hero__content-img">
                    <img src="<?= esc_url($hero_image['url']); ?>" alt="<?= esc_attr($hero_image['alt']); ?>">
                </div>
            <?php endif; ?>

            <?php $hero_heading = get_field('hero_heading'); ?>

            <?php if( $hero_heading ): ?>
                <div class="hero__content-title">
                    <h2><?= $hero_heading; ?></h2>
                </div>
            <?php endif; ?>
    </div>
</section> <!-- hero section -->