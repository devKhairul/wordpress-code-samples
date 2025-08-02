<?php

/**
 * Template Name: Landing Gear
 */

get_header(); ?>

<main id="primary" class="site-main landing-gear">
    <?php get_template_part( 'template-parts/hero' ); ?>

    <div class="ast-container">
        <?php get_template_part( 'template-parts/intro' ); ?>
    
        <div class="content">
            <div class="content__row-1">
                <div class="content__row-1-photos">
                    <img src="/wp-content/uploads/2024/11/landing-gear-p1.jpg" alt="Landing gear overhaul is precision work to support aircraft safety">
                    <img src="/wp-content/uploads/2024/11/landing-gear-p2.jpg" alt="Landing gear overhaul takes specialized aviation MRO expertise">
                </div>

                <?php if ( get_field('content_title_1') || get_field('content_text_1') ) : ?>
                    <div class="content__row-1-text">
                        <h3>
                            <?= get_field('content_title_1'); ?>
                        </h3>

                        <?= get_field('content_text_1'); ?>
                    </div>
                <?php endif; ?>
            </div> <!-- row-1 -->

            <div class="content__row-2">
                <div class="content__row-2-photos">
                    <img src="/wp-content/uploads/2024/12/landing-gear3.jpg" alt="Our team at work repairing aircraft landing gear">
                </div>

                <?php if ( get_field('content_title_2') || get_field('content_text_2') ) : ?>
                    <div class="content__row-2-text">
                        <h3>
                            <?= get_field('content_title_2'); ?>
                        </h3>
                        
                        <?= get_field('content_text_2'); ?>
                    </div>
                <?php endif; ?>
            </div> <!-- row-2 -->

            <?php if ( get_field('content_text_footnote') ) : ?>
                <div class="content__row-3">
                    <?= get_field('content_text_footnote'); ?>
                </div>
            <?php endif; ?>
        </div> <!-- content -->

        <?php get_template_part( 'template-parts/cta' ); ?>
    </div> <!-- ast-container -->
</main>

<?php get_footer(); ?>