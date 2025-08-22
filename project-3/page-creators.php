<?php

/**
 * Template Name: Creators Page
 * 
 * @author Khairul Alam
 */ 


get_header(); ?>
    
    <main class="creators">
        <div class="hero-bg">
            <div class="ast-container">
                <?php get_template_part('template-parts/content', 'hero'); ?>

                <?php if ( have_rows('info_cards') ) : ?>
                    <section class="about" id="howWeWork">
                        <div class="about__header">
                            <?= get_field('info_header') ?>
                        </div>
                        
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

                        <?php if ( get_field('info_section_url') ) : ?>
                            <?php $info_section_url = get_field('info_section_url'); ?>
                            <div class="about__footer">
                                <a href="<?= $info_section_url['url'] ?>" class="about__button"><span><?= $info_section_url['title'] ?></span></a>
                            </div>
                        <?php endif; ?>
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
                        </div>
                    </div> <!-- .our-difference__wrapper -->
                </div>
            </section> <!-- .our-difference -->
        <?php endif; ?>

        <?php if ( get_field('refer_text') ) : ?>
            <div class="refer" id="refer">
                <div class="ast-container">
                    <div class="refer__wrapper">
                        <?php
                            $refer_text = get_field('refer_text');
                            $refer_image = get_field('refer_image');
                            $refer_url = get_field('refer_link'); ?>
                        
                        <?php if ($refer_image) : ?>
                            <div class="refer__image">
                                <img src="<?= $refer_image['url'] ?>" alt="<?= $refer_image['alt'] ?>">
                            </div>
                        <?php endif; ?>

                        <?php if ($refer_text) : ?>
                            <div class="refer__content">
                                <?= $refer_text ?>

                                <a href="<?= $refer_url['url'] ?>" class="refer__button"><span><?= $refer_url['title'] ?></span></a>
                            </div>
                        <?php endif; ?>
                    </div> <!-- .refer__wrapper -->
                </div> <!-- .ast-container -->
            </div> <!-- .refer -->
        <?php endif; ?>

        <?php get_template_part('template-parts/content', 'cta'); ?>

        <?php get_template_part('template-parts/content', 'featured-creators'); ?>
    </main> <!-- .front-page -->

<?php get_footer(); ?>