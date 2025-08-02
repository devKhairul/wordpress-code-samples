<?php

/**
 * Template Name: Agencies Page
 * 
 * @author Khairul Alam
 * 
 */

get_header(); 

?>

<main class="agencies">
    <div class="hero-bg">
        <div class="ast-container">
            <?php get_template_part('template-parts/content', 'hero'); ?>

            <?php get_template_part('template-parts/content', 'build-brand'); ?>    
        </div> <!-- .ast-container -->
    </div> <!-- .hero-bg -->

    <!-- Steps -->
    <?php get_template_part('template-parts/content', 'steps'); ?>

    <!-- CTA -->
    <?php get_template_part('template-parts/content', 'cta'); ?>

    <?php if ( get_field('brands_content') ) : ?>
        <section class="brands" id="proof">
            <div class="ast-container">
                <div class="brands__wrapper">
                    <div class="brands__header">
                        <?= get_field('brands_content') ?>
                    </div>

                    <div class="brands__image">
                        <img src="/wp-content/uploads/2025/07/blurred-logos.png" alt="Blurred Client Logos Image">    
                    </div>
                    
                </div> <!-- .brands__wrapper -->
            </div>        
        </section> <!-- .brands -->
    <?php endif ?>

    <!-- Testimonials -->
    <?php get_template_part('template-parts/content', 'testimonials'); ?>
</main>

<?php get_footer(); ?>

