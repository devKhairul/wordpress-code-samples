<?php

/**
 * Template Name: Overview
 */

get_header(); ?>

<main id="primary" class="site-main overview">
    <?php get_template_part( 'template-parts/hero' ); ?>

    <?php get_template_part( 'template-parts/intro' ); ?>

    <div class="ast-container">
        <?php if ( get_field('content_title_1') || get_field('content_text_1') ) : ?>
            <section class="content">
                <?php if ( get_field('content_title_1') || get_field('content_text_1') ) : ?>
                    <div class="content__row-1">
                        <div class="content__row-1__text">
                            <h3><?php the_field('content_title_1'); ?></h3>
                            <p><?php the_field('content_text_1'); ?></p>
                        </div>

                        <div class="content__row-1__image">
                            <?php $image1 = get_field('content_image_1'); ?>
                            <img src="<?= $image1['url']; ?>" alt="">
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ( get_field('content_title_2') || get_field('content_text_2') ) : ?>
                    <div class="content__row-2">
                        <div class="content__row-2__image">
                            <?php $image2 = get_field('content_image_2'); ?>
                            <img src="<?= $image2['url']; ?>" alt="">
                        </div>
                        
                        <div class="content__row-2__text">
                            <h3><?php the_field('content_title_2'); ?></h3>
                            <p><?php the_field('content_text_2'); ?></p>
                        </div>
                        
                    </div>
                <?php endif; ?>
            </section>

        <?php endif; ?>

        <?php if ( get_field('content_text_3') ) : ?>
            <section class="capabilities">
                <?= get_field('content_text_3'); ?>
            </section>
        <?php endif; ?>
    </div> <!-- .ast-container -->

    <div class="ast-container">
        <?php get_template_part( 'template-parts/cta-blog' ); ?>
    </div>
</main>

<?php get_footer(); ?>