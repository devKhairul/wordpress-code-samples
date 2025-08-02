<?php

/**
 * Template Name: Buy A Practice
 */

get_header(); ?>

<main class="wrapper buy-practice">
    <div class="ast-container">
        
        <?php get_template_part( 'template-parts/hero' ); ?>

        <?php get_template_part( 'template-parts/intro' ); ?>

        <?php if ( have_rows('info_rows_2') ) : ?>
            <section class="info-row-2">
                <?php while ( have_rows('info_rows_2') ) : the_row(); ?>
                    <div class="info-row-2__item">
                        <div class="info-row-2__content">
                            <h3><?= get_sub_field('info_row_2_copy'); ?></h3>
                        </div>
                        
                        <?php $row_photo_2 = get_sub_field('info_row_2_photo'); ?>
                        <div class="info-row-2__photo">
                            <img src="<?= esc_url($row_photo_2['url']); ?>" alt="<?= esc_attr($row_photo_2['alt']); ?>">
                            <span><?= get_sub_field('info_row_2_photo_label'); ?></span>
                        </div>
                    </div>
                <?php endwhile; ?>  
            </section>
        <?php endif; ?>

        <?php if ( get_field( 'section_intro' ) ) : ?>
            <section class="highlighted-info">
                <?= get_field('section_intro'); ?>
                <?php if ( have_rows('section_grid') ) : ?>
                    <div class="highlighted-info__grid">
                        <?php while ( have_rows('section_grid') ) : the_row(); ?>
                            <div class="highlighted-info__grid-item">
                                <?= get_sub_field('section_grid_copy'); ?>
                            </div>
                        <?php endwhile; ?>  
                    </div>
                <?php endif; ?>
            </section>
        <?php endif; ?>

        <?php if ( have_rows('info_rows') ) : ?>
            <section class="info">
                <?php while ( have_rows('info_rows') ) : the_row(); ?>
                    <div class="info-row">
                        <div class="info-row__content">
                            <h3><?= get_sub_field('info_row_copy'); ?></h3>
                        </div>
                        
                        <?php $row_photo = get_sub_field('info_row_photo'); ?>
                        <div class="info-row__photo">
                            <img src="<?= esc_url($row_photo['url']); ?>" alt="<?= esc_attr($row_photo['alt']); ?>">
                            <span><?= get_sub_field('info_row_photo_caption'); ?></span>
                        </div>
                    </div>
                <?php endwhile; ?>
            </section>
        <?php endif; ?>


        <?php get_template_part( 'template-parts/video' ); ?>

        <section class="buyer-package">
            <?= get_field('buyer_package'); ?>
        </section>

        <?php get_template_part( 'template-parts/cta' ); ?>

        
    </div> <!-- ast-container -->
</main>

<?php get_footer(); ?>
