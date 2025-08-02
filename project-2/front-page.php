<?php

/**
 * Template Name: Front Page
 */

get_header(); ?>

<main class="wrapper front-page">
    <div class="ast-container">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php if ( have_rows('home_carousel') ) : ?>
                    <?php while ( have_rows('home_carousel') ) : the_row(); ?>           
                        <div class="swiper-slide">
                            <div class="hero">
                                <div class="hero__content">
                                    <div class="hero__content-img">
                                        <?php $c_photo = get_sub_field('carousel_photo'); ?>
                                        <img src="<?= esc_url($c_photo['url']); ?>" alt="<?= esc_attr($c_photo['alt']); ?>">
                                    </div>
                                    <div class="hero__content-text">
                                        <div class="hero__content-text-quote-container">
                                            <div class="hero__content-text-quote">        
                                                <?= get_sub_field('carousel_quote'); ?>
                                            </div>

                                            <div class="hero__content-text-quote-author">
                                                <?= get_sub_field('carousel_author'); ?>
                                            </div>

                                            <?php if ( get_sub_field('carousel_link') ) : ?>
                                                <a href="<?= get_sub_field('carousel_link'); ?>" class="outlined-btn">Learn More</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- hero  -->
                        </div> <!-- swiper-slide -->
                    <?php endwhile; ?>
                <?php endif; ?>
            </div> <!-- swiper-wrapper -->
            
            <div class="swiper-pagination"></div>
        </div> <!-- swiper -->

        <section class="intro">
            <?php $intro_content = get_field('intro_content'); 
            
            if( $intro_content ) : ?>
                <div class="intro__content">
                    <?= $intro_content; ?>
                </div>               
            <?php endif; ?>

            <?php if ( have_rows('section_grid') ) : ?>
                <div class="intro__grid">
                    <?php while ( have_rows('section_grid') ) : the_row(); ?>
                        <div class="intro__grid-item">
                            <div class="intro__grid-item-text">
                                <h3><?= get_sub_field('section_grid_copy'); ?></h3>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </section> <!-- intro section -->

        <?php get_template_part('template-parts/video'); ?> <!-- video section -->  


        <?php get_template_part('template-parts/cta'); ?> <!-- cta section -->
    </div> <!-- ast-container -->

    <?php
        $recent_posts = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'post',
            'order' => 'DESC',
            'orderby' => 'date',
            'post_status' => 'publish'
        ));
    ?>

    <?php if ( $recent_posts->have_posts() ) : ?>
        <section class="blogs">
        <div class="ast-container">
            <div class="blogs__content">
                <h2>Butterfly Effect Blog</h2>
                <p>We recognize the power of small actions in shaping larger life outcomes. Our blogs about how to successfully buy or sell a vet practice provide guidance on how to maximize value and ensure practice longevity.</p>
            </div>

            <div class="blogs__grid">
                <?php while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
                    <div class="blogs__grid-item">
                        <div class="blogs__grid-item-img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="blogs__grid-item-text">
                            <h3><?php the_title(); ?></h3>
                            <?php echo wp_trim_words(get_the_content(), 20); ?>
                            <a href="<?php the_permalink(); ?>" class="outlined-btn">Read More</a> 
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        </section> <!-- blogs section -->
    <?php endif; ?>
</main>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.swiper', {
        autoplay: {
            delay: 5000,
        },
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});

</script>

<?php get_footer(); ?>
