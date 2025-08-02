<?php
/**
 * Template Name: Accessories Page Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

    <div id="primary" <?php astra_primary_class(); ?>>

        <main class="wrapper accessories">
            <!-- Banner -->
            <section class="banner__section" style="background-image: url('<?= get_the_post_thumbnail_url() ?>')">
                <h2 class="banner__section-title">
                    <?php the_title() ?>
                </h2>
                
                <?php the_content() ?>
            </section>

            <!-- Intro Section -->
            <section class="accessories--intro mt-4">
                <h2 class="accessories--intro-title mb-1">
                    <?= get_field('accessories_intro_title'); ?>
                </h2>
                
                <?= get_field('accessories_intro_description'); ?>
            </section>

            <!-- M40 Parts -->
            <?php if ( have_rows('minus_forty_accessories') ) : ?>
            <section class="m40__parts mb-4">
                <div class="m40__logo my-2">
                    <img src="/wp-content/uploads/2023/03/DN_MinusFortyl_Colour.svg" alt="Minus Forty Logo">
                </div>

                <div class="m40__parts__block">
                    <?php while ( have_rows('minus_forty_accessories') ) : the_row();
                            $m40_part_image = get_sub_field('m40_part_image');
                    ?>
                        
                            <div class="m40__parts__block-item">
                                <img src="<?= esc_url($m40_part_image['url']); ?>" alt="<?= esc_attr($m40_part_image['alt']); ?>">
                                <h2>
                                    <?= esc_attr(get_sub_field('m40_part_name')); ?>
                                </h2>
                            </div>
                        
                    <?php endwhile; ?>
                </div>
            </section>
            <?php endif; ?>


            <!-- QBD Parts -->
            <?php if ( have_rows('qbd_accessories') ) : ?>
            <section class="qbd__parts mt-10 mb-10">
                <div class="qbd__logo my-2">
                    <img src="/wp-content/uploads/2023/03/DN_QBD_Colour_notag.svg" alt="QBD Logo">
                </div>

                <div class="qbd__parts__block">
                    <?php while ( have_rows('qbd_accessories') ) : the_row();
                            $qbd_part_image = get_sub_field('qbd_part_image');
                    ?>
                        
                            <div class="qbd__parts__block-item">
                                <img src="<?= esc_url($qbd_part_image['url']); ?>" alt="<?= esc_attr($qbd_part_image['alt']); ?>">
                                <h2>
                                    <?= esc_attr(get_sub_field('qbd_part_name')); ?>
                                </h2>
                            </div>
                        
                    <?php endwhile; ?>
                </div>
            </section>
            <?php endif; ?>


            <!-- CTA -->
            <?php if ( get_field('cta_title') ) : ?>
                <section class="cta mb-6">
                    <?php get_template_part('template-parts/cta') ?>
                </section>
             <?php endif; ?>
            
        </main><!-- #primary -->

    </div>

    
<?php get_footer(); ?>
