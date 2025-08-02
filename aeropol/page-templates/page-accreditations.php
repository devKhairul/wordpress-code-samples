<?php

/**
 * Template Name: Accreditations
 */

get_header(); ?>

<main id="primary" class="site-main accreditations">
    <?php get_template_part( 'template-parts/hero' ); ?>

    <div class="ast-container">

        <?php get_template_part( 'template-parts/intro' ); ?>

    
        <?php if ( get_field('certificate_list') ) : ?>
            <section class="certificates">
                <?php echo the_field('certificate_list'); ?>
            </section>
        <?php endif; ?>

        <?php if ( get_field('content_text_footnote') ) : ?>
            <section class="footnote">
                <?php the_field('content_text_footnote'); ?>
            </section>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>