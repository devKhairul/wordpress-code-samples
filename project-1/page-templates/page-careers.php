<?php

/**
 * Template Name: Careers
 */

get_header(); ?>

<main id="primary" class="site-main careers">
    <?php get_template_part( 'template-parts/hero' ); ?>

    <div class="ast-container">
        <?php get_template_part( 'template-parts/intro' ); ?>

    
        <?php if ( get_field('content_title_1') || get_field('content_text_1') ) : ?>
            <section class="content">
                <?php if ( get_field('content_title_1') || get_field('content_text_1') ) : ?>
                    <div class="content__row-1">
                        <div>
                            <h3><?php the_field('content_title_1'); ?></h3>
                            <p><?php the_field('content_text_1'); ?></p>
                        </div>
                        <?php $image1 = get_field('content_image_1'); ?>
                        <img src="<?= $image1['url']; ?>" alt="">
                    </div>
                <?php endif; ?>

                <?php if ( get_field('content_title_2') || get_field('content_text_2') ) : ?>
                    <div class="content__row-2">
                        <div>
                            <h3><?php the_field('content_title_2'); ?></h3>
                            <p><?php the_field('content_text_2'); ?></p>
                        </div>
                        <?php $image2 = get_field('content_image_2'); ?>
                        <img src="<?= $image2['url']; ?>" alt="">
                    </div>
                <?php endif; ?>

                <div class="content__row-3">
                    <h2>
                        <?= get_field('opportunities_heading'); ?>
                    </h2>
                </div>
            </section>
        <?php endif; ?>
    </div> <!-- .ast-container -->

    <div class="opportunities-section" id="opportunities">
        <div class="ast-container">
            <div class="opportunities">
                <img src="/wp-content/uploads/2024/12/opportunities.jpg" alt="Aeropol aviation MRO technicians working on aircraft component repair and overhaul">
                
                <?= get_field('opportunities_intro'); ?>
                <div class="opportunities__list">
                    <?php echo get_field('open_positions'); ?>
                </div>
            </div> <!-- .opportunities -->
        </div> <!-- .ast-container -->
    </div>

    <div class="ast-container">
        <div class="widget">
            <h2>Can you deliver Confidently Better MRO?</h2>
            <a href="/join-aeropol/" class="btn">Apply Now</a>
        </div> <!-- .widget -->
    </div> <!-- .ast-container -->
</main>

<?php get_footer(); ?>