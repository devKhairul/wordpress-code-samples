<?php 

get_header(); ?>

<main class="wrapper events">
    <div class="ast-container">
        <section class="hero">
            <div class="hero__content">
                <div class="hero__content-img">
                    <img src="/wp-content/uploads/2025/01/mic.svg" alt="A microphone drawing with a butterfly on it">
                </div>
                <div class="hero__content-title">
                    <h2>Events</h2>
                </div>
            </div>
        </section> <!-- hero section -->


        <!-- Exclusive Events -->
        <?php echo do_shortcode('[mbc_exclusive_events]'); ?>
    

        <!-- Upcoming Events -->
        
        <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            
            $args = array(
                'post_type' => 'events',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'event-category',
                        'field'    => 'slug',
                        'terms'    => 'exclusive',
                        'operator' => 'NOT IN'
                    )
                ),
                'paged' => $paged,
                'posts_per_page' => 10 // Adjust this number as needed
            );
            
            $query = new WP_Query( $args );
        ?>

        <?php if ( $query->have_posts() ) : ?>
            <section class="events__items">
                <h2>Upcoming Events & Conferences</h2>
                
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>   
                    <article class="events__post">
                        <div class="events__post-content">
                            <h2>
                                <?php the_title(); ?>
                            </h2>
                            
                            <?php if ( get_field('event_date') ) : ?>
                                <div class="events__post-date">
                                    <h3>Date</h3>
                                    <?= get_field('event_date'); ?>
                                </div>
                            <?php endif; ?>

                            <?php if ( get_field('event_location') ) : ?>
                                <div class="events__post-location">
                                    <h3>Location</h3>
                                    <?= get_field('event_location'); ?>
                                </div>
                            <?php endif; ?>

                            <?php if ( get_field('event_additional_info') ) : ?>
                                <div class="events__post-additional">
                                    <?= get_field('event_additional_info'); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="events__post-image">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else : ?>
                                <img src="/wp-content/uploads/2025/01/generic-events.png" alt="Generic event image">
                            <?php endif; ?>
                        </div>
                    </article>  
                <?php endwhile; wp_reset_postdata(); ?>

                <div class="pagination">
                        <?php 
                            $big = 999999999; 
                            echo paginate_links( array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, $paged ),
                                'total' => $query->max_num_pages,
                                'prev_text' => __('&larr;', 'textdomain'),
                                'next_text' => __('&rarr;', 'textdomain'),
                                'mid_size' => 2
                            ) );
                            
                        ?>
                    </div>
            </section>
        <?php endif; ?>
    </div> <!-- .ast-container -->
</main>

<?php get_footer(); ?>