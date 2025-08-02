<?php

/**
 * Template Name: Contact
 */

get_header(); ?>

<main class="wrapper contact">
    <div class="ast-container">
        
        <?php get_template_part( 'template-parts/hero' ); ?>

        <section class="form">
            <div class="form__container">
                <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
            </div>
        </section>
    </div> <!-- ast-container -->
</main>

<?php get_footer(); ?>
