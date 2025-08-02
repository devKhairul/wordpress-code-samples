<?php

/**
 * Template Name: Brands Page
 * 
 * @author Khairul Alam
 */

get_header(); 

?>

<main class="brands">
    <div class="hero-bg">
        <div class="ast-container">
            <?php get_template_part('template-parts/content', 'hero'); ?>

            <?php get_template_part('template-parts/content', 'build-brand'); ?>
        </div> <!-- .ast-container -->
    </div> <!-- .hero-bg -->

    <!-- Work Steps -->
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
                    
                    <?php if ( have_rows('brands_logos') ) : ?>
                        <div class="brands__logos">
                            <?php while ( have_rows('brands_logos') ) : the_row(); 
                                $brand_logo = get_sub_field('brand_logo'); ?>

                                <img src="<?= $brand_logo['url'] ?>" alt="<?= $brand_logo['alt'] ?>" />
                            <?php endwhile; ?>
                        </div> <!-- .brands__logos -->
                    <?php endif; ?>
                </div> <!-- .brands__wrapper -->
            </div>        
        </section> <!-- .brands -->
    <?php endif ?>

    <!-- Testimonials -->
    <?php get_template_part('template-parts/content', 'testimonials'); ?>
</main>

<?php get_footer(); ?>