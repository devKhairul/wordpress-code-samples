<?php

/**
 * The template for displaying all single posts
 */

if ( !defined( 'ABSPATH') ) {
    exit; // Exit if accessed directly.
}

get_header();

?>

    <div id="primary" <?php astra_primary_class(); ?>>
        <div class="main">
            <?php echo yoast_breadcrumb(); ?>
            <article class="post">
                
                <h1 class="post__title">
                    <?= the_title(); ?>
                </h1>
                
                <div class="post__date">
                    <?= get_the_date(); ?>
                </div>
                
                <div class="post__image">
                    <?= 
                        get_the_post_thumbnail( get_the_ID(), 'full' ); 
                    ?>
                </div>
                
                <div class="post__content">
                    <?= 
                        the_content(); 
                    ?>
                </div>

                <div class="newsletter__form mt-4">
                    <h2>Stay up-to-date</h2>
                    <p>To keep up with the latest on retail refrigeration, be sure to visit our blog regularly and subscribe to our newsletter to receive news and expert advice every month.</p>

                    <?php echo do_shortcode("[gravityform id='1' title='false' description='false' ajax='true']"); ?>
                </div>

            </article>
        </div>
    </div><!-- #primary -->


<?php

get_footer();
