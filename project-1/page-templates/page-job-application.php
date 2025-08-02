<?php

/**
 * Template Name: Job Application
 */

get_header(); ?>

<main id="primary" class="site-main job-application">
    <?php get_template_part( 'template-parts/hero' ); ?>    

    <div class="ast-container">
        <div class="card">
            <div class="card__col-1">
                <h3>Confidently Better MRO</h3>

                <div>
                    <h4>Aeropol Aviation Services Corporation</h4>
                    <p>7505 Bath Rd.</p>
                    <p>Mississauga, ON L4T 4C1</p>
                    <p>Canada</p>
                </div>

                <div>
                    <h4>Phone</h4>
                    <p><a href="tel:9056721364">905.672.1364</a></p>
                </div>

                <div>
                    <h4>Email</h4>
                    <p><a href="mailto:careers@aeropol.com">careers@aeropol.com</a></p>
                </div>

                
            </div>
            <div class="card__col-2">
                <h2>Join Aeropol</h2>
                <p>Are you passionate about aviation? We want to hear from you.</p>
                <?php echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true"]'); ?>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>