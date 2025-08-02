<?php 

/**
 * Template Name: Blog
 */

get_header(); ?>

<main class="wrapper blog">
    <div class="ast-container">
        <section class="hero">
            <div class="hero__content">
                <div class="hero__content-img">
                    <img src="/wp-content/uploads/2025/01/blog-hero.svg" alt="Decorative Butterfly Image">
                </div>
                <div class="hero__content-title">
                    <h2>Butterfly Effect Blog</h2>
                </div>
            </div>
        </section> <!-- hero section -->
    

        <?php if ( have_posts() ) : ?>
                <section class="blog__items">
                    <p>We recognize the power of small actions in shaping larger life outcomes. Our blogs about how to successfully buy or sell a vet practice provide guidance on how to maximize value and ensure practice longevity.</p>
                    <?php while ( have_posts() ) : the_post(); ?>   
                        <article class="blog__post">
                            <div class="blog__post-image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            </div>

                            <div class="blog__post-content">
                                <a href="<?php the_permalink(); ?>">
                                    <h3 class="post__title"><?php the_title(); ?></h3>
                                </a>
                        
                                <?php echo wp_trim_words(get_the_content(), 20); ?>      

                                <a href="<?php the_permalink(); ?>" class="outlined-btn">Read More</a>
                            </div>
                        </article>  
                    <?php endwhile; wp_reset_postdata(); ?>

                    <div class="pagination">
                        <?php 
                           the_posts_pagination(
                               array(
                                   'mid_size' => 2,
                                   'prev_text' => __('&larr;', 'textdomain'),
                                   'next_text' => __('&rarr;', 'textdomain'),
                               )
                           );
                        ?>
                    </div>
                </section>
        <?php endif; ?>


        <section class="cta">
            <div class="cta__content">
                <div class="cta__content-text">
                    <h2>Attend Our Seminar on Practice Transition</h2>
                    <p>Join us at the next vet conference to learn the key steps to a successful vet practice sale</p>
                </div>

                <div class="cta__content-btn">
                    <a href="/events/" target="" class="outlined-btn">
                        Learn More
                    </a>
                </div>
            </div>
        </section>
    </div> <!-- .ast-container -->
</main>

<?php get_footer(); ?>