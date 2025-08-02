<?php

get_header();

?>
<main class="site-main page">
    <div class="page__hero">
        <div class="ast-container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

    <div class="page__content">
        <div class="ast-container">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        </div>  
    </div>
</main>


<?php get_footer(); ?>