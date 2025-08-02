<?php

get_header(); 

?>

<main class="wrapper blog-single">
    <div class="ast-container">
        <section class="hero" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
        </section>

        <section class="post__container">
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="post">
                    <h1 class="post__title">
                        <?php the_title(); ?>
                    </h1>  
                    
                    <div class="post__content">
                        <?php the_content(); ?>
                    </div>

                    <?php if ( get_field('post_footnote') ) : ?>
                        <div class="post__footnote">
                            <?= get_field('post_footnote'); ?>
                        </div>
                    <?php endif; ?>
                </article>
            <?php endwhile; ?>  
        </section>

        <section class="cta">
            <div class="cta__content">
                <div class="cta__content-text">
                    <h2>Ready to start preparing for the future?</h2>
                    <p>Contact us to discuss your practice’s potential and begin your journey toward a successful sale.</p>
                </div>
                
                <div class="cta__content-btn">
                    <a href="/contact/" target="_self" class="outlined-btn">
                        Learn More
                    </a>
                </div>
            </div>
        </section> 
    
    </div> <!-- ast-container -->
</main>

<?php get_footer(); ?>