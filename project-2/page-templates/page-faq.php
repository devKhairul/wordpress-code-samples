<?php

/**
 * Template Name: FAQ
 */

get_header(); ?>

<main class="wrapper faq-page">
    <div class="ast-container">
        
        <?php get_template_part( 'template-parts/hero' ); ?>


        <?php if ( have_rows('faq_items') )  : ?>
            <section id="faq" class="faq">
                <div class="faq__container">
                    <?php while ( have_rows('faq_items') ) : the_row(); ?>
                        <div class="faq__item" x-data="{ open: false }">
                            <div class="faq__title" @click="open = !open">
                                <h3><?= the_sub_field('faq_title'); ?></h3>
                                <!-- Plus/Minus Icon -->
                                <span x-text="open ? '-' : '+'">+</span>
                            </div>

                            <div class="faq__text" x-show="open" style="display: none;">
                                <p><?= the_sub_field('faq_copy'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>      
                </div>
            </section> <!-- faq section -->
        <?php endif; ?>
    </div> <!-- ast-container -->
</main>

<?php get_footer(); ?>



                