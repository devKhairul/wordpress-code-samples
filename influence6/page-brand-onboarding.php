<?php

/**
 * Template Name: Brand Onboarding Page
 * 
 * @author Khairul Alam
 *
 */ 


get_header(); ?>
    
    <main class="brand-onboarding">
        <div class="hero-bg">
            <div class="ast-container">
                <div class="form__wrapper">
                    <h1>For <span class="color-darkYellow">Brands</span></h1>
                    <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
                </div>
            </div> <!-- .ast-container -->
        </div> <!-- .hero-bg -->
    </main> <!-- .front-page -->

<?php get_footer(); ?>