<?php
/**
 * Template Name: Solutions Parent Page Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

    <div id="primary" <?php astra_primary_class(); ?>>

        <main class="wrapper solutions">
            <!-- Banner -->
            <section class="banner__section" style="background-image: url('<?= get_the_post_thumbnail_url() ?>')">
                <h2 class="banner__section-title">
                    <?php the_title() ?>
                </h2>
                
                <?php the_content() ?>
            </section>

            <!-- Intro -->
            <section class="solutions__intro mt-4">
                <h1 class="solutions__intro-title">
                    <?= get_field('solutions_p_intro_title') ?>
                </h1>
                
                <?= get_field('solutions_p_intro_description') ?>
            </section>

            <!-- Solution Types -->
            <?php if ( have_rows('solutions_type_blocks') ) : ?>
                <section class="solutions__blocks my-4">
                    <?php while (have_rows('solutions_type_blocks') ) : the_row() ?>
                            <div class="solutions__type-block">
                                <?php $icon = get_sub_field('solution_type_icon') ?>
                                
                                <img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>" class="mb-2">
                                
                                <h2 class="mb-2"><?= get_sub_field('solution_type_label') ?></h2>
                                
                                <a href="<?= get_sub_field('solution_type_url') ?>">
                                    Learn More
                                </a>
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
