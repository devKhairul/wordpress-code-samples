<?php 

get_header(); ?>

<main class="site-main events">
    <section class="hero">
        <div class="ast-container">
            <div class="hero__content">
                <h1>Industry Events</h1>
                <p>Meet up with our team at aviation industry events across the globe</p>
            </div>
        </div>
    </section>

    <?php if ( have_posts() ) : ?>
        <div class="ast-container">
            <section class="events__items">
                <h2>Upcoming Events</h2>
                <?php while ( have_posts() ) : the_post(); ?>   
                    <article class="events__post">
                        <div class="events__post-content">
                            
                            <?php if ( get_field('event_location') ) : ?>
                                <p class="events__post-location">
                                    <?php echo get_field('event_location'); ?>
                                </p>
                            <?php endif; ?>

                            <h3 class="events__post-title">
                                <?php the_title(); ?>
                            </h3>
                       
                            <?php the_content(); ?>

                            <p class="events__post-date">
                                <?php echo get_field('event_date'); ?>
                            </p>
                        </div>
                        
                        <div class="events__post-image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    </article>  
                <?php endwhile; ?>

                <div class="events__pagination">
                    <?php echo paginate_links(); ?>
                </div>
            </section>
        </div> <!-- .ast-container -->
    <?php endif; ?>
</main>

<?php get_footer(); ?>