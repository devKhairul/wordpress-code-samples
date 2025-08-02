<?php
/**
 * Template Name: Innovations Child Page Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

    <div id="primary" <?php astra_primary_class(); ?>>

        <main class="wrapper innovations-child">
            <!-- Banner -->
            <section class="banner__section" style="background-image: url('<?= get_the_post_thumbnail_url() ?>')">
                <h2 class="banner__section-title">
                    <?php the_title() ?>
                </h2>
                
                <?php the_content() ?>
            </section>

            <!-- Intro -->
            <section class="innovations-child__intro mt-4">
                <h1 class="innovations-child__intro-title">
                    <?= get_field('inno_intro_title') ?>
                </h1>
                
                <?= get_field('inno_intro_description') ?>
            </section>

            <?php if ( have_rows('innovation_types') ) : ?>
                <section class="innovations__blocks my-2">
                    <?php while (have_rows('innovation_types') ) : the_row() ?>
                            <div class="innovations-child__type-block">

                                <div class="block__content">
                                    <h2>
                                        <?= get_sub_field('inno_type_title'); ?>
                                    </h2>
                                    
                                    <?= 
                                        get_sub_field('inno_type_text'); 
                                    ?>

                                    <?php if ( get_sub_field('inno_type_url') ) : ?>
                                        <a href="<?= get_sub_field('inno_type_url') ?>" class="btn btn-sm">
                                            Learn More
                                        </a>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="block__photo">
                                    <?php $photo = get_sub_field('inno_type_image') ?>
                                    
                                    <img src="<?= $photo['url'] ?>" alt="<?= $photo['alt'] ?>">
                                </div>
                                
                                
                            </div>
                    <?php endwhile; ?>
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
