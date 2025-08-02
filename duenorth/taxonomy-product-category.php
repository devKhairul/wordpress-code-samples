<?php
    /**
     * The template for displaying single product category pages
     */

    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
    }

    $current_category = get_queried_object();
    $banner = get_field('category_banner', $current_category);

    $current_category_id = ($current_category) ? $current_category->term_id : 0;
    $product_cat = get_product_categories();
    $product_brands = get_product_brands($current_category);
    $product_temp = get_product_temp($current_category);
    $product_doors = get_product_doors($current_category);
    $product_height = get_product_height($current_category);
    $product_depth = get_product_depth($current_category);


?>

<?php get_header();  ?>

	<div class="product__category">
        <section class="banner" style="
            <?php if ($banner) { ?>
                 background:url('<?= $banner ?>');
            <?php } ?>">
            <h1>
                <?= single_term_title(); ?>
            </h1>
        </section>

        <section class="product my-4">
            <div class="product__filters">
                <?php if (!empty($product_cat)) : ?>
                    <h3 class="title">
                        Categories
                    </h3>
                    
                    <ul class="product__categories">
                        <?php foreach($product_cat as $cat) : ?>
                            <li>
                                <a class="category__link <?php echo ($cat->term_id === $current_category_id) ? 'active' : '' ?>" href="<?= get_term_link($cat->term_id) ?>">
                                    <?= $cat->name ?>
                                    (<?= $cat->count ?>)
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <form id="filters-form">
                    
                    <input hidden name="category[]" value="<?= $current_category_id ?>">
                    
                    
                    <?php if (!empty($product_brands)) : ?>
                        <h3 class="title mt-2">
                            Brand
                        </h3>
                        
                        <ul class="product__types">
                            <?php foreach($product_brands as $brand) : ?>  
                                <li>
                                    <label>
                                        <input type="radio" name="brand[]" value="<?= esc_attr($brand->term_id); ?>">
                                        <?= $brand->name ?>
                                    </label>
                                </li>
                            <?php endforeach; ?>
                        </ul> 
                    <?php endif; ?>

                    <?php if (!empty($product_temp)) : ?>                          
                            <h3 class="title mt-2">
                                Temperature
                            </h3>
                            
                            <ul class="product__types">
                                <?php foreach($product_temp as $temp) : ?>  
                                    <li>
                                        <label>
                                            <input type="radio" name="temp[]" value="<?= esc_attr($temp->term_id); ?>">
                                            <?= $temp->name ?>
                                        </label>
                                    </li>
                                <?php endforeach; ?>
                            </ul> 
                    <?php endif; ?>

                    <?php if (!empty($product_doors)) : ?>                          
                            <h3 class="title mt-2">
                                Doors
                            </h3>
                            
                            <ul class="product__types">
                                <?php foreach($product_doors as $doors) : ?>  
                                    <li>
                                        <label>
                                            <input type="radio" name="doors[]" value="<?= esc_attr($doors->term_id); ?>">
                                            <?= $doors->name ?>
                                        </label>
                                    </li>
                                <?php endforeach; ?>
                            </ul> 
                    <?php endif; ?>

                    <?php if (!empty($product_height)) : ?>                          
                            <h3 class="title mt-2">
                                Height
                            </h3>
                            
                            <ul class="product__types">
                                <?php foreach($product_height as $height) : ?>  
                                    <li>
                                        <label>
                                            <input type="radio" name="height[]" value="<?= esc_attr($height->term_id); ?>">
                                            <?= $height->name ?>
                                        </label>
                                    </li>
                                <?php endforeach; ?>
                            </ul> 
                    <?php endif; ?>

                    <?php if (!empty($product_depth)) : ?>                          
                            <h3 class="title mt-2">
                                Depth
                            </h3>
                            
                            <ul class="product__types">
                                <?php foreach($product_depth as $depth) : ?>  
                                    <li>
                                        <label>
                                            <input type="radio" name="depth[]" value="<?= esc_attr($depth->term_id); ?>">
                                            <?= $depth->name ?>
                                        </label>
                                    </li>
                                <?php endforeach; ?>
                            </ul> 
                    <?php endif; ?>

                    <div class="mt-2"></div>
                    
                    <a class="btn btn-sm reset" onclick="location.reload()">Reset Filter</a>
                </form>
            </div>

            <div id="products-container" class="product__container">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post() ?>
                    
                            <a class="product__link" href="<?= the_permalink() ?>">
                                <article class="product__<?= the_ID(); ?>">
                                    <?= the_post_thumbnail('post-thumbnail', ['class' => 'product__thumbnail']) ?>    
                                    <div class="product__meta">
                                        <span class="product__sku">
                                            <?= esc_html(get_field('product_sku')); ?>
                                        </span>
                                        
                                            <h2 class="product__title">
                                                <?= the_title(); ?>
                                            </h2>
                                        
                                    </div>
                                </article>
                            </a>
                            <?php endwhile; ?>
                
                            <?php  else : ?>
                                <div class="error__text">
                                    <p>
                                        <?php esc_html_e( 'Sorry, we could not find any product that matches your search criteria.' ); ?>
                                    </p>
                                </div>
                <?php endif; ?>
            </div>
        </section>
    </div><!-- #primary -->



<?php get_footer(); ?>
