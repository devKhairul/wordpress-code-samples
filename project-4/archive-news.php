<?php
/**
 * The template for displaying news archive
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div class="news__archive">
        <section class="banner__section">
            <div class="banner__section--info">
                <h1>
                    In The News
                </h1>

                <p>
                    Keep up with our latest announcements and innovations!
                </p>
            </div>
        </section>

        <?php if( have_posts() ) : ?>
        <section class="news__posts">
            <?php while ( have_posts() ) : the_post();  ?>

                        <article class="news__<?= the_ID(); ?> <?php echo $wp_query->current_post == 0 && !is_paged() ? 'latest':''?>">
                            <div class="news__thumbnail">
                                <a href="<?= esc_url(the_permalink()); ?>">
                                    <?= the_post_thumbnail(); ?>
                                </a>
                            </div>
                            
                            <div class="news__meta">
                                <div class="news__date">
                                    <?= get_the_date(); ?>
                                </div>
                                
                                <div class="news__title">
                                    <a href="<?= esc_url(the_permalink()); ?>">
                                        <h2>
                                            <?= esc_attr(the_title()); ?>
                                        </h2>
                                    </a>
                                </div>

                                <div class="news__button">
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
