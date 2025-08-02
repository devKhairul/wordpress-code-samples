<?php
/**
 * Template Name: Custom Merchandiser Page Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

    <div id="primary" <?php astra_primary_class(); ?>>

        <main class="wrapper custom__merchandisers">
            <!-- Banner -->
            <section class="banner__section" style="background-image: url('<?= get_the_post_thumbnail_url() ?>')">
                <h2 class="banner__section-title">
                    <?php the_title() ?>
                </h2>
                
                <?php the_content() ?>
            </section>

            <!-- Intro Section -->
            <section class="custom__merchandisers--intro mt-4">
                <h1 class="custom__merchandisers--intro-title mb-1">
                    <?= get_field('custom_merch_intro_title') ?>
                </h1>
                
                <?= get_field('custom_merch_intro_description') ?>
            </section>

            <?php if ( have_rows('merchandiser_features') ) : ?>
                <!-- Merchandiser Features -->
                <section class="custom__merch--features mt-2">
                    <?php while ( have_rows('merchandiser_features') ) : the_row();
                        $photo = get_sub_field('feature_photo');
                    ?>
                            <div class="features__box">
                                <img src="<?= $photo['url']; ?>" alt="<?= $photo['alt']; ?>">
                                
                                <h2>
                                    <?= get_sub_field('feature_title') ?>
                                </h2>
                    
                                <?= get_sub_field('feature_description') ?>
                               
                            </div>
                    <?php endwhile; ?>
                </section>
            <?php endif; ?>


            <!-- CTA -->
            <?php if ( get_field('cta_title') ) : ?>
                <section class="cta mt-4">
                    <?php get_template_part('template-parts/cta') ?>
                </section>
             <?php endif; ?>

             <!-- Merchandisers are Truly Custom -->
             <section class="truly__custom mt-4">
                <h2 class="title mb-1">
                    <?= get_field('truly_custom_title') ?>
                </h2>

                <?= get_field('truly_custom_description') ?>

                <?php if ( have_rows('truly_custom_features') ) : ?>
                    <div class="truly__custom--features mt-2">
                        <?php while ( have_rows('truly_custom_features') ) : the_row();
                            $photo = get_sub_field('tc_feature_photo');
                        ?>
                                <div class="features__box">
                                    <img src="<?= $photo['url']; ?>" alt="<?= $photo['alt']; ?>" width="">
                                    
                                    <h2>
                                        <?= get_sub_field('tc_feature_title') ?>
                                    </h2>
                        
                                    <?= get_sub_field('tc_feature_description') ?>
                                
                                </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
             </section>


            <!-- Custom Merchandiser Manufacturing Process -->
            <section class="custom__merch mt-4">
                <div class="custom__merch-title mb-1">
                    <h2 class="title">
                        <?= get_field('merchandiser_intro_title'); ?>
                    </h2>
                </div>
                
                <div class="custom__merch-description">
                    <?= get_field('merchandiser_intro_description'); ?>
                </div>

                <div class="custom__merch-contents my-4">
                    
                    <div class="contents__rcol">
                        <?php if ( have_rows('custom_merchandiser_facts') ) : $number = 1;?>
                            <?php while ( have_rows('custom_merchandiser_facts') ) : the_row(); ?>
                                <div class="content__box mb-2">
                                    <div class="rcol__image">
                                       <span><?= $number++ ?></span>
                                    </div>

                                    <div class="rcol__texts">
                                        <?= get_sub_field('custom_fact_content'); ?>
                                    </div>
                                </div>
                            <?php endwhile; endif; ?>
                        </div>

                    <div class="contents__lcol">
                        <?php $custom_merch_mockup = get_field('merchandiser_mockup'); ?>
                        <img src="<?= $custom_merch_mockup['url']; ?>" alt="<?= $custom_merch_mockup['alt']; ?>">
                    </div>
                    
                    <div class="contents__rcol">
                        <?php if ( have_rows('custom_merchandiser_facts_right_col') ) : $number2 = 4; ?>
                            <?php while ( have_rows('custom_merchandiser_facts_right_col') ) : the_row(); ?>
                                <div class="content__box mb-2">
                                    <div class="rcol__image">
                                       <span><?= $number2++ ?></span>
                                    </div>

                                    <div class="rcol__texts">
                                        <?= get_sub_field('custom_fact_content_right'); ?>
                                    </div>
                                </div>
                            <?php endwhile; endif; ?>
                    </div>
                </div>
            </section><!-- Custom Merchandiser Facts -->


            <!-- Info Section -->
            <?php if ( have_rows('custom_info_box') ) : ?>
                <section class="info__section mt-4">
                    <?php while ( have_rows('custom_info_box') ) :  the_row(); 
                        $icon = get_sub_field('custom_info_icon'); 
                    ?>
                        <div class="content__row">
                            <div class="icon">
                                <img src="<?= $icon['url']; ?>" alt="<?= $icon['alt']; ?>">
                            </div>
                            
                            <div class="content">
                                <?= get_sub_field('custom_info_content'); ?>
                            </div>
                        </div>
                    <?php endwhile ?>
                </section> <!-- Info Section -->
            <?php endif; ?>

            
                
            <!-- Slider -->
            <?php /* if ( have_rows('merchandiser_slider') ) : ?>
               <section class="merchandiser__slider my-4">
                    <div class="swiper merchandisers">
                        <div class="swiper-wrapper">
                            <?php 
                                while ( have_rows('merchandiser_slider') ) : the_row(); 

                                $slider_image = get_sub_field('slider_image');

                            ?>
                            <div class="swiper-slide">
                                <img src="<?= esc_url($slider_image['url']); ?>" alt="<?= $slider_image['alt']; ?>">
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <!-- Slider Navigation -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </section> <!-- Slider -->
            <?php endif; */ ?>
            

            <!-- CTA -->
            <?php if ( get_field('cta_title') ) : ?>
                <section class="cta mb-2 mt-4">
                    <?php get_template_part('template-parts/cta') ?>
                </section>
             <?php endif; ?>
            
        </main><!-- #primary -->

    </div>

	


<?php get_footer(); ?>
