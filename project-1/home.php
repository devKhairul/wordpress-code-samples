<?php 

/**
 * Template Name: Blog
 */

get_header(); ?>

<main class="site-main blog">
    <section class="hero">
        <div class="ast-container">
            <div class="hero__content">
                <h1>Altitude Blog</h1>
                <p>the latest in aviation MRO guidance  to help you Fly More™</p>
            </div>
        </div>
    </section>

    <?php if ( have_posts() ) : ?>
        <div class="ast-container">
            <section class="blog__items">
                <h2>Most Recent</h2>
                <?php while ( have_posts() ) : the_post(); ?>   
                    <article class="blog__post">
                        <div class="blog__post-content">
                            <?php $categories = get_the_category(); ?>
                            
                            <?php if ( !empty($categories) ) : ?>
                                <span class="post__category">
                                    <?php echo $categories[0]->name; ?>
                                </span>
                            <?php endif; ?>
                            
                            
                            <a href="<?php the_permalink(); ?>">
                                <h3 class="post__title"><?php the_title(); ?></h3>
                            </a>
                       
                            
                            <?php echo wp_trim_words(get_the_content(), 20); ?>      
                        </div>
                        
                        <div class="blog__post-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                    </article>  
                <?php endwhile; ?>

                <div class="blog__pagination">
                    <?php echo paginate_links(); ?>
                </div>
            </section>
        </div> <!-- .ast-container -->
    <?php endif; ?>
</main>

<?php get_footer(); ?>