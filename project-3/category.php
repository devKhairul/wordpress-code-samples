<?php

/**
 * Template Name: Blog Posts
 */

get_header();

$categories = get_the_category();
$category = get_queried_object();
$color_class = ($category->slug === 'for-brands') ? 'color-lightYellow' : (($category->slug === 'for-creators') ? 'color-darkOrange' : 'color-darkPurple');
?>



<main class="category">
    <section class="hero-bg">
        <div class="ast-container">
            <section class="hero">
                <div class="hero__wrapper">
                    <h1 class="<?= $color_class; ?>">
                        <?= $category->name; ?>
                    </h1>
                </div> <!-- .hero__wrapper -->
            </section> <!-- .hero -->
        </div> <!-- .ast-container -->
    </section> <!-- .hero-bg -->

    <section class="category-posts">
        <div class="ast-container">
            <div class="category-posts__wrapper">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="category-post">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="category-post__image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( $categories ) : ?>
                            <div class="category-post__category_<?= $category->slug; ?>">
                                <?php the_category(', '); ?>
                            </div>
                        <?php endif; ?>

                        <div class="category-post__content">
                            <h2><?php the_title(); ?></h2>
                            
                            <?php the_excerpt();  ?>

                            <a href="<?php the_permalink(); ?>" class="category-post__button_<?= $category->slug; ?>"><span>Read More</span></a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div> <!-- .category-posts__wrapper -->

            <div class="category-posts__pagination">
                <?php
                    the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => __('&laquo; Previous Page', 'textdomain'),
                        'next_text' => __('Next Page &raquo;', 'textdomain'),
                    ));
                ?>
            </div> <!-- .category-posts__pagination -->
        </div> <!-- .ast-container -->
    </section> <!-- .category-posts -->
</main>

<?php get_footer(); ?>