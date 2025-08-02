<?php

/**
 * Template Name: AOG Support
 */

get_header(); ?>

<main id="primary" class="site-main aog-support">
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
                
            </div>
            <div class="card__col-2">
                <h2>AOG Support</h2>
                <p>Thank you for contacting Aeropol. For AOG service, please provide us with relevant information about your request. We'll respond promptly.</p>
                <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>