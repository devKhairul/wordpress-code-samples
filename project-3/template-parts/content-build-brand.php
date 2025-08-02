<?php if ( have_rows('section_cards') ) : ?>
    <section class="we-build-brand" id="howWeWork">
        <div class="we-build-brand__wrapper">
            <h2><?= get_field('section_title') ?></h2>

            <?php if (get_field('section_cards')) : ?>
                <div class="we-build-brand__container">
                    <div class="we-build-brand__content">
                        <?php while ( have_rows('section_cards') ) : the_row();  ?>
                            <div class="we-build-brand__card">
                                <?= get_sub_field('card_text') ?>
                            </div>
                        <?php endwhile ?>
                    </div>

                    <?php $section_url = get_field('section_url'); ?>
                    
                    <?php if ($section_url) : ?>
                        <div class="we-build-brand__footer">
                            <a href="<?= $section_url['url'] ?>"><span><?= $section_url['title'] ?></span></a>
                        </div> 
                    <?php endif; ?>
                </div> <!-- .we-build-brand__container -->
            <?php endif; ?>
        </div>
    </section> <!-- .we-build-brand -->
<?php endif; ?>