<?php

/**
 * Template Name: Front Page
 */

get_header();
?>

<main id="primary" class="site-main front-page">
    <?php get_template_part( 'template-parts/hero' ); ?>

    <div class="ast-container">
        
        <?php get_template_part( 'template-parts/intro' ); ?>

        <?php if ( get_field('content_title_1') || get_field('content_title_2') ) : ?>
            <section class="card-grid">
                <?php $content_image_1 = get_field('content_image_1'); ?>
                
                <div class="card industry">
                    <?php if ( $content_image_1 ) : ?>
                        <img src="<?= $content_image_1['url']; ?>" alt="<?= $content_image_1['alt']; ?>">
                    <?php endif; ?>

                    <?php if ( get_field('content_title_1') ) : ?>
                        <h3><?= get_field('content_title_1'); ?></h3>
                    <?php endif; ?>
                    
                    <?php if ( get_field('content_text_1') ) : ?>
                        <?= get_field('content_text_1'); ?>
                    <?php endif; ?>
                    
                    <?php $content_url_1 = get_field('content_url_1'); ?>
                    
                    <?php if ( $content_url_1 ) : ?>
                        <a href="<?= $content_url_1['url'];?>" target="<?= $content_url_1['target']; ?>" class="btn-link">
                            <?php echo $content_url_1['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>
                   
                <?php $content_image_2 = get_field('content_image_2'); ?>
                
                <div class="card certifications">
                    <?php if ( $content_image_2 ) : ?>
                        <img src="<?= $content_image_2['url']; ?>" alt="<?= $content_image_2['alt']; ?>">
                    <?php endif; ?>

                    <?php if ( get_field('content_title_2') ) : ?>
                        <h3><?= get_field('content_title_2'); ?></h3>
                    <?php endif; ?>
                    
                    <?php if ( get_field('content_text_2') ) : ?>
                        <?= get_field('content_text_2'); ?>
                    <?php endif; ?>
                    
                    <?php $content_url_2 = get_field('content_url_2'); ?>
                    
                    <?php if ( $content_url_2 ) : ?>
                        <a href="<?= $content_url_2['url'];?>" target="<?= $content_url_2['target']; ?>" class="btn-link">
                            <?php echo $content_url_2['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>

        <?php get_template_part( 'template-parts/cta' ); ?>
    </div>


    <?php $blogs = get_recent_blogs(); ?>

    <?php if ( $blogs->have_posts() ) : ?>
        <section class="blogs">
            <div class="ast-container">
                <div class="blogs__content">
                    <h2>Altitude Blog</h2>
                    <p>Read the latest in aviation MRO guidance from Aeropol, helping you Fly More™.</p>
                </div>

                <div class="blogs__grid">
                    <?php while ( $blogs->have_posts() ) : $blogs->the_post(); ?>
                        <div class="blog-card">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                            
                            <div class="blog-card__content">
                                
                                <a href="<?php the_permalink(); ?>">
                                    <h3><?php the_title(); ?></h3>
                                </a>
                                
                                <p>
                                    <?php echo wp_trim_words(get_the_content(), 20); ?>
                                </p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>


<?php get_footer(); ?>