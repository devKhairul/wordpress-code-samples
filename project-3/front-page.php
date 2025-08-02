<?php

/**
 * Template Name: Front Page
 * 
 * @author Khairul Alam
 *
 */ 


get_header(); ?>
    
    <main class="front-page">
        <div class="hero-bg">
            <div class="ast-container">
                <?php get_template_part('template-parts/content', 'hero'); ?>
                
                <?php if ( have_rows('info_cards') ) : ?>
                    <section class="about">
                        <div class="about__wrapper">
                            <?php while ( have_rows('info_cards') ) : the_row(); ?>
                                <div class="about__card">
                                    
                                <?php
                                    $card_image = get_sub_field('col_image');
                                    $card_url = get_sub_field('col_url');
                                    $card_text = get_sub_field('col_text'); ?>
                                    
                                    <?php if ($card_image) : ?>
                                        <img src="<?= $card_image['url'] ?>" alt="<?= $card_image['alt'] ?>">
                                    <?php endif; ?>

                                    <?php if ($card_text) : ?>
                                        <?= get_sub_field('col_text') ?>
                                    <?php endif; ?>

                                    <?php if ($card_url) : ?>
                                        <a href="<?= $card_url['url'] ?>" class="about__button"><span><?= $card_url['title'] ?></span></a>
                                    <?php endif; ?>
                                </div> <!-- .about__card -->
                            <?php endwhile; ?>
                        </div> <!-- .about__wrapper -->
                    </section> <!-- .about -->
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
                            <a href="<?= $two_col_url_1['url'] ?>" class="our-difference__button"><span><?= $two_col_url_1['title'] ?></span></a>
                        </div>
                    </div> <!-- .our-difference__wrapper -->
                </div>
            </section> <!-- .our-difference -->
        <?php endif; ?>

        <?php if ( have_rows('brands_logos') ) : ?>
            <section class="brands">
                <div class="ast-container">
                    <div class="brands__wrapper">
                        <?php if (get_field('brands_content')) : ?>
                            <div class="brands__content">
                                <?= get_field('brands_content') ?>
                            </div>
                        <?php endif; ?> 

                        <div class="brands__logos">
                            <?php while ( have_rows('brands_logos') ) : the_row(); 
                                $brand_logo = get_sub_field('brand_logo'); ?>

                                <img src="<?= $brand_logo['url'] ?>" alt="<?= $brand_logo['alt'] ?>" />
                            <?php endwhile; ?>
                        </div> <!-- .brands__logos -->
                    </div> <!-- .brands__wrapper -->
                </div>        
            </section> <!-- .brands -->
        <?php endif; ?>

        <?php if (get_field('two_col_text_2')) : ?>
            <section class="collaborate">
                <div class="ast-container">
                    <div class="collaborate__wrapper">
                        <?php
                            $two_col_text_2 = get_field('two_col_text_2');
                            $two_col_image_2 = get_field('two_col_image_2');
                            $two_col_url_2 = get_field('two_col_url_2'); ?>

                        <div class="collaborate__content">
                            <?= $two_col_text_2 ?>

                            <a href="<?= $two_col_url_2['url'] ?>" class="collaborate__button"><span><?= $two_col_url_2['title'] ?></span></a>
                        </div>

                        <div class="collaborate__image">
                            <img src="<?= $two_col_image_2['url'] ?>" alt="<?= $two_col_image_2['alt'] ?>" />
                        </div>
                    </div> <!-- .collaborate__wrapper -->
                </div>
            </section> <!-- .collaborate -->
        <?php endif; ?>

        <?php get_template_part('template-parts/content', 'featured-creators'); ?>
        
    </main> <!-- .front-page -->

<?php get_footer(); ?>