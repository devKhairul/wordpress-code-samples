<?php
/**
*   Template Name: Non Destructive Testing
*/

get_header(); ?>

<main id="primary" class="site-main ndt">

    <?php get_template_part( 'template-parts/hero' ); ?>

    <div class="ast-container">
        <?php get_template_part( 'template-parts/intro' ); ?>

    
        <section class="image-grid">
            <img src="/wp-content/uploads/2024/12/ndt_1.jpg" alt="Image of a testing device">
            <img src="/wp-content/uploads/2024/12/ndt_2.jpg" alt="A person performing tests">
        </section>

        <?php if ( get_field('content_title_1') || get_field('content_text_1') ) : ?>
            <section class="content">
                <?php if ( get_field('content_text_footnote') ) : ?>
                    <div class="content__footer">
                        <?php the_field('content_text_footnote'); ?>
                    </div>
                <?php endif; ?>

                <?php if ( get_field('content_title_1') || get_field('content_text_1') ) : ?>
                    <div class="content__row-1">
                        <h3><?php the_field('content_title_1'); ?></h3>
                        <p><?php the_field('content_text_1'); ?></p>
                    </div>
                <?php endif; ?>

                <?php if ( get_field('content_title_2') || get_field('content_text_2') ) : ?>
                    <div class="content__row-2">
                        <h3><?php the_field('content_title_2'); ?></h3>
                        <p><?php the_field('content_text_2'); ?></p>
                    </div>
                <?php endif; ?>

                <?php if ( get_field('content_title_3') || get_field('content_text_3') ) : ?>
                    <div class="content__row-3">
                        <h3><?php the_field('content_title_3'); ?></h3>
                        <p><?php the_field('content_text_3'); ?></p>
                    </div>
                <?php endif; ?>

            </section>
        <?php endif; ?>

        <?php get_template_part( 'template-parts/cta' ); ?>
    </div> <!-- .ast-container -->
</main>
    

<?php get_footer(); ?>