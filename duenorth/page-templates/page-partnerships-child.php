<?php
/**
 * Template Name: Partnerships Child Page Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

    <div id="primary" <?php astra_primary_class(); ?>>

        <main class="wrapper partnerships-child">
            <!-- Banner -->
            <section class="banner__section" style="background-image: url('<?= get_the_post_thumbnail_url() ?>')">
                <h2 class="banner__section-title">
                    <?php the_title() ?>
                </h2>
                
                <?php the_content() ?>
            </section>

            <!-- Intro -->
            <section class="partnerships-child__intro mt-4 mb-2">
                <?= get_field('partner_child_intro_description') ?>

                <div class="partnerships-child__highlighted mt-2">
                    <?= get_field('partner_highlighted_text') ?>
                </div>
                
            </section>

            <?php if ( have_rows('partner_products') ) : ?>
                <!-- Partner Products -->
                <section class="partnerships__blocks my-2">
                    <?php while (have_rows('partner_products') ) : the_row() ?>
                            <div class="partnerships-child__type-block">
                                <div class="product__intro">
                                    <h2>
                                        <?= get_sub_field('product_title'); ?>
                                    </h2>

                                    <?= get_sub_field('product_type_description'); ?>
                                </div>
                                    
                                <div class="product__content">
                                    <div class="product__content--photo">
                                        <?php $photo = get_sub_field('product_type_image') ?>
                                        <img src="<?= $photo['url'] ?>" alt="<?= $photo['alt'] ?>">
                                    </div>

                                    <div class="product__content--contents">
                                        <div class="product__content--features">
                                            <?= get_sub_field('product_features_&_benefits'); ?>
                                        </div>

                                        <div class="product__content--feature-list mt-4">
                                            <?= get_sub_field('product_feature_list'); ?>
                                        </div>
                                    </div>
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
