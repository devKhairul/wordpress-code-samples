<?php

get_header(); 

$categories = get_the_category();


?>




<main class="site-main blog-single">

    <section class="hero">
        <div class="ast-container">
            <div class="hero__content">
                <?php the_post_thumbnail(); ?>

                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </section>

    <div class="ast-container">
        <section>
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="post">
                    <div class="post__meta">
                        <span class="post__shared">
                            <?php echo do_shortcode('[shared_counts]'); ?>
                        </span>
                    </div>
                    <div class="post__content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>  
        </section>
    </div>

    <?php $similarPosts = get_similar_posts_by_category($categories[0]->term_id, get_the_ID());
    

    ?>

    <?php if ( $similarPosts->have_posts() )  : ?>
        <section class="similar__posts">
            <div class="similar__posts-content">
                <h2>Similar Posts</h2>
                <p>Read the latest in aviation MRO guidance from Aeropol, helping you Fly More™.</p>
            </div>
            <div class="ast-container">
                <div class="similar__posts-grid">
                    <?php while ( $similarPosts->have_posts() ) : $similarPosts->the_post(); ?>
                        <article class="similar__posts-card">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                            
                            <a href="<?php the_permalink(); ?>">
                                <h3>
                                    <?php the_title(); ?>
                                </h3>
                            </a>
                            
                            <p>
                                <?php echo wp_trim_words(get_the_content(), 20); ?>
                            </p>
                            
                        </article>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>



<?php get_footer(); ?>