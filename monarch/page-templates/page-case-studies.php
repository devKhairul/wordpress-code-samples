<?php

/**
 * Template Name: Case Studies
 */

get_header(); ?>

<main class="wrapper case-studies">
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

        <?php get_template_part( 'template-parts/video' ); ?> <!-- video 1 section -->

        <?php get_template_part( 'template-parts/cta' ); ?> <!-- cta section -->

        <?php if ( get_field('video_copy_2') ) : ?>
            <section class="video">
                <div class="video__content">
                    <div class="video__content-text">
                        <?= get_field('video_copy_2'); ?>
                    </div>

                    <div class="video__content-video">
                        <?= get_field('video_embed_2'); ?>
                    </div>    
                </div>
            </section> <!-- video 2 section -->
        <?php endif; ?>

        <section class="cta">
            <div class="cta__content">
                <div class="cta__content-text">
                    <h2>Ready to Sell Your Practice?</h2>
                    <p>Contact Monarch today to start your journey with a partner who understands your goals and works tirelessly to achieve them.</p>
                </div>

                <div class="cta__content-btn">
                    <a href="/contact/" target="" class="outlined-btn">
                        Let's Talk 
                    </a>
                </div>
            </div>
        </section>

        

    </div> <!-- ast-container -->
</main>

<?php get_footer(); ?>
