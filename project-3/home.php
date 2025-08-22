<?php

/**
 * Template Name: Blog Posts
 */


get_header();

?>

<main class="blog">
    <section class="hero-bg">
        <div class="ast-container">
            <section class="hero">
                <div class="hero__wrapper">
                    <div class="hero__content">
                        <h1>Influence × Anywhere</h1>
                        <p>The ideas, wins, and creator stories that keep brands culturally fluent — and ahead.</p>
                    </div>
                    
                    <div class="hero__image">
                        <img src="/wp-content/uploads/2025/08/i6-blog-hero.png" alt="Influence6 Blogs">
                    </div>
                </div> <!-- .hero__wrapper -->
            </section> <!-- .hero -->
        </div> <!-- .ast-container -->
    </section> <!-- .hero-bg -->

    <section class="blog-posts">
        <div class="ast-container">
            <div class="blog-posts__wrapper">
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                        $categories = get_the_category();
                        $category_class = '';
                        if ( ! empty( $categories ) ) {
                            $category_class = 'category-' . $categories[0]->slug;
                        }
                    ?>
                    <article class="blog-post <?php echo esc_attr( $category_class ); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="blog-post__image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( $categories ) : ?>
                            <div class="blog-post__category">
                                <?php the_category(', '); ?>
                            </div>
                        <?php endif; ?>

                        <div class="blog-post__content">
                            <h2>
                                <?php the_title(); ?>
                            </h2>
                            
                            <?php 
                                the_excerpt(); 
                            ?>

                            <a href="<?php the_permalink(); ?>" class="blog-post__button"><span>Read More</span></a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div> <!-- .blog-posts__wrapper -->

            <div class="blog-posts__pagination">
                <?php
                    the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => __('&laquo; Previous Page', 'textdomain'),
                        'next_text' => __('Next Page &raquo;', 'textdomain'),
                    ));
                ?>
            </div> <!-- .blog-posts__pagination -->
        </div> <!-- .ast-container -->
    </section> <!-- .blog-posts -->
</main>

<?php get_footer(); ?>