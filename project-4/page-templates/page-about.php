<?php
/**
 * Template Name: About Page Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

    <div id="primary" <?php astra_primary_class(); ?>>

        <main class="wrapper about">
            <!-- Banner -->
            <section class="banner__section" style="background-image: url('<?= get_the_post_thumbnail_url() ?>')">
                <h1 class="banner__section-title">
                    <?php the_title() ?>
                </h1>
                
                <?php the_content() ?>
            </section>

            <!-- Intro Section -->
            <section class="about--intro mt-4">
                <h2 class="about--intro-title mb-1">
                    <?= get_field('about_intro_title') ?>
                </h2>
                
                <?= get_field('about_intro_description') ?>
            </section>

            <!-- Info Section -->
            <section class="info__section mt-4">
              <?php $infographic = get_field('about_infographic'); ?>                
              <img src="<?= $infographic['url']; ?>" alt="<?= $infographic['alt']; ?>">
            </section> <!-- Info Section -->

            <!-- Markets Section -->
            <section class="markets mt-6">
                <div class="markets__intro">
                    <?= the_field('about_markets') ?>


                    <?php if ( have_rows('solution_types') ) : ?>
                        <div id="solutions" class="solutions mt-4">
                           
                            <div class="solutions__type">
                                <?php 
                                        while (have_rows('solution_types')) : the_row();  
                                        
                                        $solution_type_icon = get_sub_field('solution_type_image');
                                        $solution_type_name = get_sub_field('solution_type_name');
                                        $solution_type_url = get_sub_field('solution_type_url');
                                        
                                ?>
                                        <div class="type__col">
                                            <div class="type__icon">
                                                <img src="<?= $solution_type_icon['url']; ?>" alt="<?= $solution_type_icon['alt']; ?>" />
                                            </div>
                                            <span>
                                                <a href="<?= $solution_type_url; ?>">
                                                    <?= $solution_type_name; ?>
                                                </a>
                                            </span>
                                        </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endif; ?>


                </div>
            </section> <!-- Markets Section -->

            <!-- Products Section -->
            <section class="products mt-6">
                <div class="products__intro">
                    <div class="card">
                        <?= the_field('products_box_1') ?>
                    </div>

                    <div class="card">
                        <?= the_field('products_box_2') ?>
                    </div>
                </div>

                <div class="products__box_3">
                    <?= the_field('products_box_3') ?>
                </div>
            </section> <!-- Products Section -->

        </main><!-- #primary -->

    </div>

	


<?php get_footer(); ?>
