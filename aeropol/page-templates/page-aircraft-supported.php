<?php

/**
 * Template Name: Aircraft Supported
 */

get_header(); ?>

<main id="primary" class="site-main aircraft-supported">
    <?php get_template_part( 'template-parts/hero' ); ?>

    <div class="ast-container">
        <?php get_template_part( 'template-parts/intro' ); ?>

        <div class="aircraft-supported__grid">
            <div class="aircraft-supported__grid__row-1">
                <div class="aircraft-supported__card">
                    <img src="/wp-content/uploads/2024/12/Airbus.jpg" alt="Airbus Logo">
                </div>
                
                <div class="aircraft-supported__card">
                    <img src="/wp-content/uploads/2024/12/ATR.jpg" alt="ATR Logo">
                </div>

                <div class="aircraft-supported__card">
                    <img src="/wp-content/uploads/2024/12/Boeing.jpg" alt="Boeing Logo">
                </div>
            </div>
            
            <div class="aircraft-supported__grid__row-2"> 
                <div class="aircraft-supported__card">
                    <img src="/wp-content/uploads/2024/12/Bombardier.jpg" alt="Bombardier Logo">
                </div>

                <div class="aircraft-supported__card">
                    <img src="/wp-content/uploads/2024/12/Haviland.jpg" alt="Haviland Logo">
                </div>
                
                <div class="aircraft-supported__card">
                    <img src="/wp-content/uploads/2024/12/Embraer.jpg" alt="Embraer Logo">
                </div>

                <div class="aircraft-supported__card">
                    <img src="/wp-content/uploads/2024/12/MHIRJ.jpg" alt="MHIRJ Logo"> 
                </div>
            </div>
        </div>
    
        <?php get_template_part( 'template-parts/cta-blog' ); ?>
    </div>
    
</main>

<?php get_footer(); ?>