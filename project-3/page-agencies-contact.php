<?php

/**
 * Template Name: Agencies Contact Page
 *
 */ 


get_header(); ?>
    
    <main class="contact-agencies">
        <div class="hero-bg">
            <div class="ast-container">
                <div class="form__wrapper">
                    <h1>For <span class="color-darkYellow">Agencies</span></h1>
                    <?php echo do_shortcode('[gravityform id="4" title="false" description="false" ajax="true"]'); ?>
                </div>
            </div> <!-- .ast-container -->
        </div> <!-- .hero-bg -->
    </main> <!-- .front-page -->

<?php get_footer(); ?>