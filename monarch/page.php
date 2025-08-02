<?php

get_header(); ?>

<main class="wrapper default-page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="ast-container">

            <?php get_template_part('template-parts/hero'); ?>

            <div class="default-page__content">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>