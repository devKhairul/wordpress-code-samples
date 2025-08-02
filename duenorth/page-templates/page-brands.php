<?php 

/*
Template Name: Brands  Page Template
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


get_header(); ?>

    <div id="primary" <?php astra_primary_class(); ?>>
        <main class="wrapper brands">
            <!-- Banner -->
            <section class="banner__section" style="background-image:url('<?= get_the_post_thumbnail_url(); ?>')">
                    <h1 class="banner__section-title">
                        <?= the_title(); ?>
                    </h1>
            </section>

            <!-- Intro -->
            <section class="intro mt-4">
                <div class="intro__title">
                    <h2 class="title mb-1">
                        <?= get_field('brands_intro_title'); ?>
                    </h2>
                </div>

                <div class="intro__descriptions">
                    <?= get_field('brands_intro_description'); ?>
                </div>
            </section>


            <?php if ( have_rows('all_brands') ) : ?>
                
                  <!-- All Brands -->
                  <section class="brands__content">
                    <?php while ( have_rows('all_brands') ) : the_row(); ?>
                        <?php 
                            $brand_image = get_sub_field('brand_image'); 
                            $brand_logo = get_sub_field('brand_logo');
                        
                        ?>
                        
                        <div class="brands__row" id="<?php echo $brand_image['title']; ?>">
                            <img src="<?= $brand_logo['url']; ?>" alt="<?= $brand_logo['alt']; ?>" class="brand-logo">
                            
                            <div class="brands__row-image">
                                <img src="<?= $brand_image['url']; ?>" alt="<?= $brand_image['alt']; ?>" class="brand-image">
                            </div>

                            <div class="brands__row-content">
                                <?= get_sub_field('brand_description') ?> 
                            </div>
                        </div>

                    <?php endwhile;  ?>
                </section> <!-- All Brands -->
            <?php endif;  ?>
            


            
        </main>    
	</div><!-- #primary -->

<?php get_footer(); ?>
