<?php

/**
 * Template Name: Component Marketplace
 */

get_header(); ?>

<main id="primary" class="site-main component-marketplace">
    <?php get_template_part( 'template-parts/hero' ); ?>

    <div class="ast-container">
        <?php get_template_part( 'template-parts/intro' ); ?>
    
        <?php get_template_part( 'template-parts/cta' ); ?>
    </div>
    
</main>

<?php get_footer(); ?>