<?php if ( get_field('process_header') ) : ?>
    <section class="our-steps">
        <div class="ast-container">
            <div class="our-steps__wrapper">
                <div class="our-steps__header">
                    <?= get_field('process_header') ?>
                </div>

                <?php if ( have_rows('process_steps') ) : ?>
                    <div class="our-steps__content">
                        <?php while( have_rows('process_steps') ) : the_row(); ?>
                            <div class="our-steps__content-row">
                                <?php
                                    $step_image = get_sub_field('step_image');
                                    $step_text = get_sub_field('step_text'); ?>
                                <div class="our-steps__content-image">
                                    <img src="<?= $step_image['url'] ?>" alt="<?= $step_image['alt'] ?>">
                                </div>
                                <div class="our-steps__content-copy">
                                    <?= $step_text ?>
                                </div>
                            </div> <!-- .our-steps__content-row -->
                        <?php endwhile ?>
                    </div> <!-- .our-steps__content -->
                <?php endif; ?>
            </div> <!-- .our-steps__wrapper -->
        </div> <!-- .ast-container -->
    </section> <!-- .our-steps -->
<?php endif; ?>