<?php

/**
 * Template Name: Main Contact Page
 * 
 * @author Khairul Alam
 *
 */ 


get_header(); ?>
    
    <main class="contact">
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
    </main> <!-- .front-page -->

<?php get_footer(); ?>