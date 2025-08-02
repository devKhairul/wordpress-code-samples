<?php

/**
 * Template Name: Parts & Component
 */

get_header();
?>

<main id="primary" class="site-main parts-component">

    <?php if ( get_field('hero_heading') || get_field('hero_subheading') ) : ?>
        <?php get_template_part( 'template-parts/hero' ); ?>
    <?php endif; ?>

    <div class="ast-container">
        <?php if ( get_field('intro_heading') || get_field('intro_copy') ) : ?>
            <?php get_template_part( 'template-parts/intro' ); ?>
        <?php endif; ?>

        <div class="photo-grid">
        <img src="/wp-content/uploads/2025/01/fuel-system-1.jpg" alt="Landing gear overhaul is precision work to support aircraft safety">
        <img src="/wp-content/uploads/2024/12/parts-leasing1.jpg" alt="Landing gear overhaul takes specialized aviation MRO expertise">
        </div>

        <div class="component-leasing">
            <?= get_field('content_text_1'); ?>
        </div>

        <?php get_template_part( 'template-parts/cta' ); ?>
    </div> <!-- .ast-container -->
</main>

<?php get_footer(); ?>