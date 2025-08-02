<?php
/**
 * The template for displaying events archive
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div class="events__archive">
        <section class="events__banner__section">
            <div class="events__banner__section--info">
                <h1>
                    EVENTS
                </h1>

                <p>
                    Come out and see us in person!
                </p>
            </div>
        </section>

        <section class="events__intro my-4">
            <h2>
                EVENTS
            </h2>
            <p>
                The best way to understand the many advantages of choosing Due North retail merchandisers, is to see them in person. Come out to see us at one of the many events we attend, year-round.  
            </p>
        </section>


        <?php if( have_posts() ) : ?>
        <section class="events__posts mb-4">
            <?php while ( have_posts() ) : the_post();  
            
                $venue = get_field('event_venue');
                $start_date = get_field('event_start_date');
                $end_date = get_field('event_end_date');
            ?>

                        <article class="events__<?= the_ID(); ?>">
                           <div class="events__content">
                                <div class="events__date">
                                    <?php if (!empty($end_date)) : ?>
                                        <?= date('d', strtotime($start_date)) . '-'. date('d', strtotime($end_date));  ?>
                                    <?php else : echo date('d', strtotime($start_date)); endif;  ?>
                                    <div class="events__date--month">
                                        <?= date('M Y', strtotime($start_date)); ?>
                                    </div>
                                </div>
                                
                                <div class="events__details">
                                    <h2 class="title">
                                        <?= esc_attr(the_title()); ?>
                                    </h2>

                                    <h3 class="pb-1">
                                        <?= $venue; ?>
                                    </h3>

                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </article>
            
                
                <?php endwhile; else : ?>
                    <p class="py-4">
                        <strong>
                            <?php esc_html_e( 'Sorry, there is no upcoming event.' ); ?>
                        </strong>
                    </p>
                
        </section>
        <?php endif; ?>
	</div><!-- #primary -->


<?php get_footer(); ?>
