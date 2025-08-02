<?php

/**
 * Template Name: About Us Page
 * 
 * @author Khairul Alam
 *
 */ 


get_header(); ?>
    
    <main class="about-us">
        <div class="hero-bg">
            <div class="ast-container">
                <?php get_template_part('template-parts/content', 'hero'); ?>

                <?php if ( have_rows('info_cards') ) : ?>
                    <section class="info">
                        <div class="info__wrapper">
                            <?php while ( have_rows('info_cards') ) : the_row(); ?>
                                <div class="info__card">        
                                    <?php
                                        $card_image = get_sub_field('col_image');
                                        $card_url = get_sub_field('col_url');
                                        $card_text = get_sub_field('col_text'); ?>
                                    
                                    <?php if ($card_image) : ?>
                                        <div class="info__card-image">
                                            <img src="<?= $card_image['url'] ?>" alt="<?= $card_image['alt'] ?>">
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($card_text) : ?>
                                        <div class="info__card-content">
                                            <?= get_sub_field('col_text') ?>

                                            <?php if ($card_url) : ?>
                                                <a href="<?= $card_url['url'] ?>" class="info__button"><span><?= $card_url['title'] ?></span></a>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>

                                    
                                </div> <!-- .info__card -->
                            <?php endwhile; ?>
                        </div> <!-- .info__wrapper -->
                    </section> <!-- .info -->
                <?php endif; ?>
            </div> <!-- .ast-container -->
        </div> <!-- .hero-bg -->

        <?php if (get_field('two_col_text_1')) : ?>
            <section class="our-difference">
                <div class="ast-container">
                    <div class="our-difference__wrapper">
                        <?php
                            $two_col_text_1 = get_field('two_col_text_1');
                            $two_col_image_1 = get_field('two_col_image_1');
                            $two_col_url_1 = get_field('two_col_url_1'); ?>
                            

                        <div class="our-difference__image">
                            <img src="<?= $two_col_image_1['url'] ?>" alt="<?= $two_col_image_1['alt'] ?>" />
                        </div>
                        
                        <div class="our-difference__content">
                            <?= $two_col_text_1 ?>
                        </div>
                    </div> <!-- .our-difference__wrapper -->
                </div>
            </section> <!-- .our-difference -->
        <?php endif; ?>

        
        <?php get_template_part('template-parts/content', 'cta'); ?>

        <?php get_template_part('template-parts/content', 'leadership-team'); ?>

        <?php get_template_part('template-parts/content', 'testimonials'); ?>

    </main> <!-- .front-page -->

<?php get_footer(); ?>