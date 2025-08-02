<?php 


get_header(); ?>

<main class="wrapper news">
    <div class="ast-container">
        <section class="hero">
            <div class="hero__content">
                <div class="hero__content-img">
                    <img src="/wp-content/uploads/2025/01/blog-hero.svg" alt="Decorative Butterfly Image">
                </div>
                <div class="hero__content-title">
                    <h2>News</h2>
                </div>
            </div>
        </section> <!-- hero section -->
    

        <?php if ( have_posts() ) : ?>
                <section class="news__items">
                    <div classname="news__intro">
                        <p>lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                    </div>
                    
                    <div class="news__grid">
                        <?php while ( have_posts() ) : the_post(); ?>   
                            <article class="news__post">
                                <div class="news__post-image">
                                    <?php the_post_thumbnail(); ?>
                                </div>

                                <div class="news__post-content">
                                    <div class="post__title">
                                        <h3>
                                            <?php the_title(); ?>
                                        </h3> 
                                    </div>

                                    <div class="post__content">
                                        <?php echo wp_trim_words(get_the_content(), 50); ?>      
                                    </div>
                                </div>
                            </article>  
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                    

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