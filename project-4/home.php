<?php
/**
 * The template for displaying blog archive
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div class="blogs__archive">
        <section class="banner__section">
            <div class="banner__section--info">
                <h1>Blog</h1>

                <p>
                    Stay up to date with the latest advice and expertise from our<br> very own Due North employees. 
                </p>
            </div>
           
        </section>

        <?php if( have_posts() ) : ?>
        <section class="blog__posts">
            <?php while ( have_posts() ) : the_post();  ?>

                    <article class="blog__<?= the_ID(); ?> <?php echo $wp_query->current_post == 0 && !is_paged() ? 'latest':''?>">
                            <div class="blog__thumbnail">
                                <a href="<?= esc_url(the_permalink()); ?>">
                                    <?= the_post_thumbnail(); ?>
                                </a>
                            </div>
                            
                            <div class="blog__meta">
                                <div class="blog__date">
                                    <?= get_the_date(); ?>
                                </div>
                                
                                <div class="blog__title">
                                    <a href="<?= esc_url(the_permalink()); ?>">
                                        <h2>
                                            <?= esc_attr(the_title()); ?>
                                        </h2>
                                    </a>
                                </div>

                                <div class="blog__button">
                                    <a href="<?= esc_url(the_permalink()); ?>" class="btn btn-sm" role="button">Read more</a>
                                </div>
                            </div>

                        </article>
                <?php endwhile; ?> 
        </section>
        
        <section class="pagination my-4">
                <?php echo the_posts_pagination(); ?>
        </section>

        
        <?php else : ?>
            <section class="posts__not__found">
                <p class="my-4">
                    <strong>
                        <?php 
                            esc_html_e( 'Sorry, we could not find any post.' ); 
                        ?>
                    </strong>
                </p>
            </section>

        <?php  endif; ?>
	</div><!-- #primary -->


<?php get_footer(); ?>
