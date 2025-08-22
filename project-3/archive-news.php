<?php

get_header();
?>

<main class="news">
    <section class="hero-bg">
        <div class="ast-container">
            <section class="hero">
                <div class="hero__wrapper">
                    <div class="hero__content">
                        <h1>Influence6 News</h1>
                        <p>Big moves, fresh collabs, and moments worth sharing. This is where we keep our community in the loop and in the know.</p>
                    </div>
                    
                    <div class="hero__image">
                        <img src="/wp-content/uploads/2025/08/i6-news-hero.png" alt="Influence6 News">
                    </div>
                </div> <!-- .hero__wrapper -->
            </section> <!-- .hero -->
        </div> <!-- .ast-container -->
    </section> <!-- .hero-bg -->

    <section class="news-posts">
        <div class="ast-container">
            <div class="news-posts__wrapper">
                <?php while (have_posts()) : the_post(); ?>
                   
                    <article class="news-post">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="news-post__image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>

                        <div class="news-post__content">
                            <h2>
                                <?php the_title(); ?>
                            </h2>
                            
                            <?php 
                                the_excerpt(); 
                            ?>

                            <a href="<?php the_permalink(); ?>" class="news-post__button"><span>Read More</span></a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div> <!-- .news-posts__wrapper -->

            <div class="news-posts__pagination">
                <?php
                    the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => __('&laquo; Previous Page', 'textdomain'),
                        'next_text' => __('Next Page &raquo;', 'textdomain'),
                    ));
                ?>
            </div> <!-- .news-posts__pagination -->
        </div> <!-- .ast-container -->
    </section> <!-- .news-posts -->
</main>

<?php get_footer(); ?>