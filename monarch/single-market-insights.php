<?php

get_header(); 

?>

<main class="wrapper mi-single">
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
                    <h2>What’s your vet practice worth?</h2>
                    <p>A professional valuation and assessment of your practice is the first step in unlocking value.</p>
                </div>
                
                <div class="cta__content-btn">
                    <a href="/valuation/" target="_self" class="outlined-btn">
                        Let's Talk 
                    </a>
                </div>
            </div>
        </section> 
    
    </div> <!-- ast-container -->
</main>

<?php get_footer(); ?>