<?php

/**
 * Template Name: FAQ Page
 * 
 * @author Khairul Alam
 *
 */ 


get_header(); ?>
    
    <main class="faq">
        <div class="hero-bg">
            <div class="ast-container">
                <?php get_template_part('template-parts/content', 'hero'); ?>

                <section class="faq">
                    <div class="faq__wrapper">
                        <?php if ( have_rows('hww_faqs') ) : ?>
                            <div class="faq__section">
                                <div class="faq__header">
                                    <h2>How We Work</h2>
                                </div>
                            
                                <div class="faq__content">
                                    <?php while ( have_rows('hww_faqs') ) : the_row(); ?>
                                        <div class="faq__item">
                                            <h3 class="faq__question accordion-toggle">
                                                <span><?php the_sub_field('hww_faq_question'); ?></span>
                                                <i class="fas fa-chevron-down accordion-icon"></i>
                                            </h3>
                                            <div class="faq__answer accordion-content"><?php the_sub_field('hww_faq_answer'); ?></div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php endif; ?> <!-- End of How We Work FAQs -->

                        <?php if ( have_rows('creator_faqs') ) : ?>
                            <div class="faq__section">
                                <div class="faq__header">
                                    <h2>For <span class="color-darkOrange">Creators</span></h2>
                                </div>
                                
                                <div class="faq__content">
                                    <?php while ( have_rows('creator_faqs') ) : the_row(); ?>
                                        <div class="faq__item">
                                            <h3 class="faq__question accordion-toggle">
                                                <span><?php the_sub_field('creator_faq_question'); ?></span>
                                                <i class="fas fa-chevron-down accordion-icon"></i>
                                            </h3>
                                            <div class="faq__answer accordion-content"><?php the_sub_field('creator_faq_answer'); ?></div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php endif; ?> <!-- End of Creator FAQs -->

                         <?php if ( have_rows('brand_faqs') ) : ?>
                            <div class="faq__section">
                                <div class="faq__header">
                                    <h2>For <span class="color-darkYellow">Brands</span></h2>
                                </div>
                                
                                <div class="faq__content">
                                    <?php while ( have_rows('brand_faqs') ) : the_row(); ?>
                                        <div class="faq__item">
                                            <h3 class="faq__question accordion-toggle">
                                                <span><?php the_sub_field('brand_faq_question'); ?></span>
                                                <i class="fas fa-chevron-down accordion-icon"></i>
                                            </h3>
                                            <div class="faq__answer accordion-content"><?php the_sub_field('brand_faq_answer'); ?></div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php endif; ?> <!-- End of Brand FAQs -->

                        <?php if ( have_rows('agencies_faqs') ) : ?>
                            <div class="faq__section">
                                <div class="faq__header">
                                    <h2>For <span class="color-darkPurple">Agencies</span></h2>
                                </div>
                                
                                <div class="faq__content">
                                    <?php while ( have_rows('agencies_faqs') ) : the_row(); ?>
                                        <div class="faq__item">
                                            <h3 class="faq__question accordion-toggle">
                                                <span><?php the_sub_field('agencies_faq_question'); ?></span>
                                                <i class="fas fa-chevron-down accordion-icon"></i>
                                            </h3>
                                            <div class="faq__answer accordion-content"><?php the_sub_field('agencies_faq_answer'); ?></div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php endif; ?> <!-- End of Agencies FAQs -->

                        <?php if ( have_rows('gs_faqs') ) : ?>
                            <div class="faq__section">
                                <div class="faq__header">
                                    <h2>Get Started</h2>
                                </div>
                                
                                <div class="faq__content">
                                    <?php while ( have_rows('gs_faqs') ) : the_row(); ?>
                                        <div class="faq__item">
                                            <h3 class="faq__question accordion-toggle">
                                                <span><?php the_sub_field('gs_faq_question'); ?></span>
                                                <i class="fas fa-chevron-down accordion-icon"></i>
                                            </h3>
                                            <div class="faq__answer accordion-content"><?php the_sub_field('gs_faq_answer'); ?></div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php endif; ?> <!-- Get Started FAQs -->
                    </div> <!-- .faq__wrapper -->
                </section> <!-- .faq -->

                <?php get_template_part( 'template-parts/content', 'cta' ); ?>
            </div> <!-- .ast-container -->
        </div> <!-- .hero-bg -->
    </main> <!-- .front-page -->

<?php get_footer(); ?>