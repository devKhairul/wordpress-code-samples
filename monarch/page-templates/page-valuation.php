<?php

/**
 * Template Name: Valuation
 */

get_header(); ?>

<main class="wrapper valuation">
    <div class="ast-container">
        
        <?php get_template_part( 'template-parts/hero' ); ?>

        <?php get_template_part( 'template-parts/intro' ); ?>

        <?php get_template_part( 'template-parts/video' ); ?>

        <section class="form">
            <div class="form__container">
                <?php echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true"]'); ?>
            </div>
        </section>
    </div> <!-- ast-container -->
</main>

<?php get_footer(); ?>
