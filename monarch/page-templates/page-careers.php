<?php

/**
 * Template Name: Careers
 */

get_header(); ?>

<main class="wrapper careers">
    <div class="ast-container">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php if ( have_rows('home_carousel') ) : ?>
                    <?php while ( have_rows('home_carousel') ) : the_row(); ?>           
                        <div class="swiper-slide">
                            <div class="hero">
                                <div class="hero__content">
                                    <div class="hero__content-img">
                                        <?php $c_photo = get_sub_field('carousel_photo'); ?>
                                        <img src="<?= esc_url($c_photo['url']); ?>" alt="<?= esc_attr($c_photo['alt']); ?>">
                                    </div>
                                    <div class="hero__content-text">
                                        <div class="hero__content-text-quote-container">
                                            <div class="hero__content-text-quote">        
                                                <?= get_sub_field('carousel_quote'); ?>
                                            </div>

                                            <div class="hero__content-text-quote-author">
                                                <?= get_sub_field('carousel_author'); ?>
                                            </div>

                                            <?php if ( get_sub_field('carousel_link') ) : ?>
                                                <a href="<?= get_sub_field('carousel_link'); ?>" class="outlined-btn">Learn More</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- hero  -->
                        </div> <!-- swiper-slide -->
                    <?php endwhile; ?>
                <?php endif; ?>
            </div> <!-- swiper-wrapper -->
        </div> <!-- swiper -->

        <?php get_template_part( 'template-parts/intro' ); ?> <!-- intro section -->

        <section class="talent">
            <div class="talent__content">
                <?= get_field('section_intro'); ?>
            </div>


            <?php if ( have_rows('section_grid') ) : ?> 
                <div class="talent__benefits">
                    <h2>What we offer</h2>
                        <div class="talent__benefits-grid">
                            <?php while ( have_rows('section_grid') ) : the_row(); ?>
                                <div>
                                    <?= get_sub_field('section_grid_copy'); ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                </div>
            <?php endif; ?>
        </section> <!-- talent section -->

        <?php get_template_part( 'template-parts/cta' ); ?> <!-- cta section -->

    </div> <!-- ast-container -->
</main>

<?php get_footer(); ?>
