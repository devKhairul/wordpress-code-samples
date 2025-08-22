<?php if ( get_field('hero_text') ) : ?>
    <section class="hero">
        <?php $hero_image = get_field('hero_image'); ?>
        
        <div class="hero__wrapper">
            <?php if ($hero_image) : ?>
                <div class="hero__image">
                    <img src="<?= $hero_image['url'] ?>" alt="<?= $hero_image['alt'] ?>" />
                </div>
            <?php endif; ?>


            <?php if ( get_field('hero_text') ) : ?>
                <div class="hero__content">
                    <?= get_field('hero_text') ?>
                    
                    <?php $hero_page_link = get_field('hero_page_link'); ?>
                    <?php if ($hero_page_link) : ?>
                        <a href="<?= $hero_page_link['url'] ?>" target="<?= $hero_page_link['target'] ?>" class="hero__button"><span><?= $hero_page_link['title'] ?></span></a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div> <!-- .hero__wrapper -->
    </section> <!-- .hero -->
<?php endif; ?>