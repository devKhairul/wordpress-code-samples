<?php 

/*
Template Name: Solutions Child  Page Template
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


get_header(); ?>

    <div id="primary" <?php astra_primary_class(); ?>>
        <main class="wrapper solutions">
            <!-- Banner -->
            <section class="banner" style="background-image:url('<?= get_the_post_thumbnail_url(); ?>')">
                <div class="banner__content">
                    <h1 class="title">
                        <?= the_title(); ?>
                    </h1>
                    
                    <?php 
                        the_content(); 
                    ?>
                </div>
            </section>

            <!-- Intro -->
            <section class="intro mt-4">
                <div class="intro__title">
                    <h1 class="title mb-1">
                        <?= get_field('solutions_intro_title'); ?>
                    </h1>

                    <div class="intro__descriptions">
                        <?= get_field('solutions_intro_description'); ?>
                    </div>
                    
                </div>
            </section>

            <!-- Our Customers -->
            <section class="customers mt-4">
                <div class="customers__info">
                    <h2 class="title mb-1">
                        <?= get_field('solutions_customer_section_title'); ?>
                    </h2>

                    <div class="description">
                        <?= get_field('solutions_customer_section_description'); ?>
                    </div>

                    <div class="customers__logos">
                        <?php 
                            $customer_logos = get_field('solutions_customer_logo'); 
                            
                            foreach($customer_logos as $logo) :                        
                        ?>

                            <img src="<?= $logo['s_customer_logo']['url']; ?>" alt="<?= $logo['s_customer_logo']['alt']; ?>">

                        <?php endforeach; ?>

                    </div>

                    <?php if (get_field('customer_section_link')) : ?>
                        <div class="customers__link pt-2">
                            <a href="<?= get_field("customer_section_link"); ?>" class="btn btn-sm">Learn More</a>
                        </div>
                    <?php endif; ?>
                </div>
                
                <div class="customers__graphics">

                    <?php $cus_featured_image = get_field('solutions_customer_section_image');  ?>

                    <img src="<?= $cus_featured_image['url']; ?>" alt="<?= $cus_featured_image['alt']; ?>">
                </div>
            </section>


             <!-- Our Products -->
             <section class="products">
                <div class="products__graphics">
                    <?php $prod_featured_image = get_field('solutions_product_section_image');  ?>
                    
                    <img src="<?= $prod_featured_image['url']; ?>" alt="<?= $prod_featured_image['alt']; ?>">
                </div>

                <div class="products__info">
                    <h3 class="title mb-1">
                        <?= get_field('solutions_product_section_title'); ?>
                    </h3>

                    <div class="descriptions pb-1">
                        <?= get_field('solutions_product_section_description'); ?>
                    </div>

                    <div class="products__link">
                        <a href="<?= get_field("solutions_product_section_link"); ?>" class="btn btn-sm">Learn More</a>
                    </div>
                </div>
            </section>

            <!-- CTA -->
            <section class="cta my-4">
                <?php get_template_part( 'template-parts/cta' ); ?>
            </section>
        </main>    
	</div><!-- #primary -->

<?php get_footer(); ?>
