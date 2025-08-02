<?php

get_header(); 

?>

<main class="wrapper events-single">
    <div class="ast-container">
        <section class="events-single__header">
            <h6>Unwind in Style at One of Our</h6>
            <h1>Exclusive Practice Owner’s Retreats</h1>
            <div class="hero" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
            </div>
        </section>

        <section class="post__container">
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="post">
                    
                    <div class="post__info">
                        <h2>
                            <?= the_title(); ?>
                        </h2>

                        <?= get_field('event_additional_info'); ?>
                    </div>  
                    
                    <div class="post__highlights">
                        <span>
                            <?= get_field('event_date'); ?>
                        </span>
                        
                        <?= get_field('event_highlights'); ?>
                    </div>

                </article>
            <?php endwhile; ?>  
        </section>    
    </div> <!-- ast-container -->


    <?php $terms = get_the_terms( $post->ID, 'event-category' ); ?>
    
    <?php if ( $terms && $terms[0]->slug === 'exclusive' ) : ?>
        <section class="form-container">
            <div class="ast-container">
                <div class="form-container__form">
                    <?php echo do_shortcode('[gravityform id="4" title="false" description="false" ajax="true"]'); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    
</main>

<?php get_footer(); ?>