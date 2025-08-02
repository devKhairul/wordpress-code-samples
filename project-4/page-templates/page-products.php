<?php
/**
 * Template Name: Products Page Template
 * 
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); 

?>

<div id="primary" <?php astra_primary_class(); ?>>
        <main class="wrapper products">
            <!-- Banner -->
            <section class="banner__section" style="background:url('<?= get_the_post_thumbnail_url(); ?>')">
                    <h2 class="banner__section-title">
                        <?= the_title(); ?>
                    </h2>
                    
                    <?php the_content() ?>
            </section>

            <!-- Intro -->
            <section class="intro mt-4">
                <div class="intro__title">
                    <h1 class="title mb-1">
                        <?= get_field('pp_intro_title'); ?>
                    </h1>

                    <div class="intro__descriptions">
                        <?= get_field('pp_intro_description'); ?>
                    </div>
                    
                </div>
            </section>

            
            <section class="products__categories">
                <?php
                    $taxonomies = get_taxonomies( array(
                        'name' => 'product-category',
                        'public'   => true,
                    ), 'objects' );

                    foreach ( $taxonomies as $taxonomy ) {
                        $terms = get_terms( array(
                            'taxonomy' => $taxonomy->name,
                            'parent' => 0,
                            'hide_empty' => false,
                            'order' => 'ASC',
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

                                <div class="products__explore my-2">
                                    <a href="<?= get_term_link( $term ) ?>">
                                        Explore
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; 
                        
                    }
                }
            ?>
            <div class='products__categories__block'>
                <div class="products__thumb">
                    <img src="/wp-content/uploads/2023/12/custom-merchandiser.png" alt="Custom Merchandiser">
                </div>
                
                <div class="products__term my-1">
                    <a href="/custom-merchandisers/">Custom Merchandisers</a>
                </div>

                <div class="products__explore my-2">
                    <a href="/custom-merchandisers/">
                        Explore
                    </a>
                </div>
            </div>

            <div class='products__categories__block'>
                <div class="products__thumb">
                    <img src="/wp-content/uploads/2023/11/products-accessories-parts.jpg" alt="SmartConnect">
                </div>
                
                <div class="products__term my-1">
                    <a href="/accessories-and-parts/">Accessories & Parts</a>
                </div>

                <div class="products__explore my-2">
                    <a href="/accessories-and-parts/">
                        Explore
                    </a>
                </div>
            </div>
        </section>
                
        <!-- CTA -->
        <?php if ( get_field('cta_title') ) : ?>
            <section class="cta my-6">
                <?php get_template_part('template-parts/cta') ?>
            </section>
        <?php endif; ?>
           
        </main>    
	</div><!-- #primary -->

<?php get_footer(); ?>
