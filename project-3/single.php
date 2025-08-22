<?php

get_header();

$categories = get_the_category();
$post_type = get_queried_object()->post_type;

?>

<main class="single">
    <section class="hero-bg">
        <div class="ast-container">
            <div class="single__wrapper">
                <article class="single__post">
                    <div class="single__post-header">
                        <div>
                            <?php if ( $categories ) : ?>
                                <h4 class="<?= esc_attr($categories[0]->slug); ?>">
                                    <?= esc_html($categories[0]->name); ?>
                                </h4>
                            <?php endif; ?>

                            <h1>
                                <?php the_title(); ?>
                            </h1>

                            <?php if ($post_type === 'news') : ?>
                                <div class="single__post-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="single__featured-image">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="single__post-body">
                        <?php the_content(); ?>
                    </div> 
                </article> <!-- .single__post -->

                <?php if ( get_field('cta_text') ) : ?>
                    <section class="cta">
                        <div class="ast-container">
                            <div class="cta__wrapper">
                                <?php 
                                    $cta_image = get_field('cta_image');
                                    $cta_text = get_field('cta_text');
                                    $cta_url = get_field('cta_url');
                                ?>
                                <?php if ($cta_image) : ?>
                                    <img src="<?= $cta_image['url'] ?>" alt="<?= $cta_image['alt'] ?>">
                                <?php endif; ?>

                                <?php if ($cta_text) : ?>
                                    <?= $cta_text ?>
                                <?php endif; ?>

                                <?php if ($cta_url) : ?>
                                    <a href="<?= $cta_url['url'] ?>" class="<?= esc_attr($categories[0]->slug); ?>"><span><?= $cta_url['title'] ?></span></a>
                                <?php endif; ?>
                            </div> <!-- .cta__wrapper -->
                        </div> <!-- .ast-container -->
                    </section> <!-- .cta -->
                <?php endif; ?>
            </div> <!-- .single__wrapper -->
        </div> <!-- .ast-container -->
    </section> <!-- .hero-bg -->
</main>

<?php get_footer(); ?>