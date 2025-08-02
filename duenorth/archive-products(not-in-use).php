<?php
/**
 * The template for displaying products archive
 * NOT IN USE
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); 


?>

	<div class="products__archive">
        <section class="banner__section">
            <h2 class="banner__section-title">Explore our merchandisers</h2>
            <p class="banner__section-description">
                A wide range for all your retail needs
            </p>
        </section>

        <section class="products__intro mt-4">
            <h1 class="products__intro-title">Refrigerator and freezer merchandisers that align with your growth requirements</h1>
            
            <p class="products__intro-description mt-1">We design, engineer and manufacture retail refrigerated merchandising solutions to provide a visionary food and beverage retail experience. Our focus is on delivering business efficiency, enhanced customer service, quality-assurance compliance and better profitability to business owners.</p>

        </section>

        <section class="products__categories">
            <?php
                    $taxonomies = get_taxonomies( array(
                    'name' => 'product-category',
                    'public'   => true,
                    '_builtin' => false,
                    'orderby' => 'name',
                    'order' => 'DESC',
                    ), 'objects' );


                    print_r($taxonomies);

                    foreach ( $taxonomies as $taxonomy ) {
                        $terms = get_terms( array(
                            'taxonomy' => $taxonomy->name,
                            'parent' => 0,
                            'hide_empty' => false,
                        ) );

                
                    if ( $terms ) {
                        
                        foreach ( $terms as $term ) : 
                            $thumb = get_field('category_thumb', $term);
                        
                        ?>
                            <div class='products__categories__block'>
                                <div class="products__thumb">
                                    <?php if ($thumb) : ?>
                                        <img src="<?= $thumb['url']; ?>" alt="<?= $thumb['alt']; ?>">
                                    <?php endif; ?>
                                </div>
                                
                                <div class="products__term my-1">
                                    <a href="<?= get_term_link( $term ) ?>">
                                        <?= $term->name; ?>
                                    </a>
                                </div>

                                <div class="products__explore my-4">
                                    <a href="<?= get_term_link( $term ) ?>">
                                        Explore Products
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; 
                        
                    }
                }
            ?>
        </section>
                
        <section class="cta mb-6">
            <div class="cta__title">
                <h2 class="title">Get a quote or speak with a sales specialist</h2>
            </div>

            <div class="cta__description py-1">
                <p>Find out how a Due North retail refrigerated customized merchandiser program can help your business. </p>
            </div>

            <div class="cta__button">
                <a href="/speak-with-sales/" role="button" class="btn btn-sm">
                    Let's talk
                </a>
            </div>
        </section>

        
        
	</div><!-- #primary -->


<?php get_footer(); ?>
