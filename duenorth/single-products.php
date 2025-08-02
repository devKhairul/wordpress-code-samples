<?php

/**
 * The template for displaying a single product
 */

if ( !defined( 'ABSPATH') ) {
    exit; // Exit if accessed directly.
}

get_header();

?>

    <div id="primary" <?php astra_primary_class(); ?>>
        <div class="main single__product">
            
            <section class="breadcrumb mb-4">
                <?php 
                    $category = get_the_terms($post->ID, 'product-category');

                    if ($category && !is_wp_error($category)) {
                        $category = array_shift($category);
                        $category_name = $category->name;
                    }
                ?>
                <div class="breadcrumb__link">
                    <a href="/product-category/<?= $category->slug; ?>">
                        <?= $category->name; ?>
                    </a> <span> > <?= $post->post_title; ?> </span>
                </div>
            </section>

            <section class="product__details">

            


                <article class="single__product product__<?php echo the_ID(); ?>">
                    <div class="single__product-main">
                        <div class="single__product-lcol">
                                <div class="single__product-info">
                                    <?php echo get_the_post_thumbnail(); ?>

                                    <?php 
                                        $terms = get_the_terms($post->ID, 'product_brand');

                                        if ($terms && !is_wp_error($terms)) {
                                            $term = array_shift($terms);
                                            $term_slug = $term->slug;
                                        }
                                    ?>

                                    <?php if ($term->slug === 'minus-forty') { ?>
                                        <img src="/wp-content/uploads/2023/03/DN_MinusFortyl_Colour.svg" class="brand-logo" alt="minus forty">
                                    <?php } else if ($term->slug === 'qbd') { ?>
                                        <img src="/wp-content/uploads/2023/03/DN_QBD_Colour_notag.svg" class="brand-logo" alt="minus forty">
                                    <?php } ?>

                                    <p class="single__product-sku">
                                        <?= get_field('product_sku'); ?>
                                    </p>

                                    <h1 class="single__product-title">
                                        <?= get_the_title(); ?>
                                    </h1>

                                    <?= get_the_content(); ?>
                                </div>
                               
                                <?php $color_combo = get_field('color_combo'); ?> 

                                <?php if ($color_combo) : ?>
                                    <div class="product__color-options mt-2 mb-2">
                                        <h3>Color Options</h3>
                                        <p>This merchandiser has other color options available. You can see the options below and can click on the photo to view the merchandiser.</p>
                                            <table> 
                                                <tr>
                                                    <th>Exterior</th>
                                                    <th>Interior</th>
                                                    <th>Grill</th>
                                                    <th>Door</th>
                                                    <th>Photo</th>

                                                </tr> 
                                            
                                            <?php foreach($color_combo as $c) : ?>
                                                <tr>
                                                    <td><?= $c['exterior_color']; ?></td>
                                                    <td><?= $c['interior_color']; ?></td>
                                                    <td><?= $c['grill_color']; ?></td>
                                                    <td><?= $c['door_color'] ?></td>
                                                    <td>
                                                        <?php if ($c['merch_photo']) : ?>
                                                            <a 
                                                            href="<?= $c['merch_photo']['url']; ?>" 
                                                            data-lightbox="merch-photo">
                                                                <img class='merch-photo' src="<?= $c['merch_photo']['url']; ?>" width="40" alt="">
                                                             </a>
                                                        <?php endif; ?>
                                                        
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?> 
                                        </table> 
                                    </div>
                                <?php endif; ?>
                                
                                <?php


                               


                                

                                /*

                                
                                
                                    $ext_color = get_field('exterior_color'); 
                                    if ($ext_color) : ?>
                                        <div class="product__color-options my-2">
                                            <h3>Exterior Colour Options</h3>
                                            <ul>
                                                <?php 
                                                    
                                                    foreach($ext_color as $colour) : ?>
                                                        <li>
                                                            <img src="/wp-content/uploads/2023/08/<?= $colour['value']; ?>.png" title="<?= $colour['label']; ?>" alt="<?= $colour['label']; ?>">
                                                        </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                <?php endif; */ ?>

                                                               

                                <div class="product__download-buttons my-2">
                                    <ul>
                                        <?php if (get_field('spec_sheet') ) : ?>
                                            <li>
                                                <a href="<?= the_field('spec_sheet'); ?>" class="btn" target="_blank">Specification Sheet</a>
                                            </li>
                                        <?php endif; ?>
                                        
                                        <?php if (get_field('manual') ) : ?>
                                            <li>
                                                <a href="<?= the_field('manual'); ?>" class="btn" target="_blank">Manual</a>
                                            </li>   
                                        <?php endif; ?>
                                    </ul>
                                </div>

                                <a href="/accessories-and-parts/" class="product__accessories-link">
                                    + Accessories
                                </a>
                            
                        </div>


                        <div class="single__product-rcol">
                            <div class="single__product__tech">
                                <?php 
                                    $technologies = get_field('product_technology'); 
                                    foreach($technologies as $tech) : ?>
                                            
                                        <div class="single__product__tech-content">
                                            <img src="/wp-content/uploads/2023/08/<?= $tech['value']; ?>.svg" alt="<?= $tech['label']; ?>">
                                            <h3>
                                                <?= $tech['label']; ?>
                                            </h3>
                                        </div>
                                
                                <?php endforeach; ?>

                                <?php 
                                    $temperature = get_field('product_temperature');
                                ?>
                                <div class="single__product__tech-content">
                                    <img src="/wp-content/uploads/2023/09/temp-<?= $temperature['value']; ?>.svg" alt="Icon">
                                    <h3>
                                        <?= $temperature['label']; ?>
                                    </h3>
                                </div>
            
                            </div>

                            <?php $spec = get_field('product_specifications'); ?>

                            <?php if ($spec) : ?>
                                <div class="single__product-specs">
                                    <table class="mt-4">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Specifications</th>
                                            </tr>
                                        </thead>
                                        
                                        <?php if ($spec['cubic_ft'] ) : ?>
                                            <tr>
                                                <td>Cubic ft.</td>
                                                <td><?php echo $spec['cubic_ft']; ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    
                                        <?php if ($spec['width_in'] ) : ?>
                                            <tr>
                                                <td>Width (in)</td>
                                                <td><?php echo $spec['width_in']; ?></td>
                                            </tr>
                                        <?php endif; ?>

                                        <?php if ($spec['height_in'] ) : ?>
                                            <tr>
                                                <td>Height (in)</td>
                                                <td><?php echo $spec['height_in']; ?></td>
                                            </tr>
                                        <?php endif; ?>

                                        <?php if ($spec['depth_in'] ) : ?>
                                            <tr>
                                                <td>Depth (in)</td>
                                                <td><?php echo $spec['depth_in']; ?></td>
                                            </tr>
                                        <?php endif; ?>

                                        <?php if ($spec['voltage'] ) : ?>
                                            <tr>
                                                <td>Voltage</td>
                                                <td><?php echo $spec['voltage']; ?></td>
                                            </tr>
                                        <?php endif; ?>
                                      
                                        <?php if ($spec['amps'] ) : ?>
                                            <tr>
                                                <td>Amps</td>
                                                <td><?php echo $spec['amps']; ?></td>
                                            </tr>
                                        <?php endif; ?>                                        

                                        <?php if ($spec['weight_lbs'] ) : ?>
                                            <tr>
                                                <td>Weight (lbs)</td>
                                                <td><?php echo $spec['weight_lbs']; ?></td>
                                            </tr>
                                        <?php endif; ?>
                                       
                                        <?php if ($spec['electrical_requirements'] ) : ?>
                                            <tr>
                                                <td>Electrical Requirements</td>
                                                <td><?php echo $spec['electrical_requirements']; ?></td>
                                            </tr>
                                        <?php endif; ?>
                                        
                                    </table>
                                </div>
                            <?php endif; ?>
                        
                        </div>
                    </div>
                </article>
            </section>
            
            <section class="contact my-6">
                <h2 class="title">Contact us</h2>
                <p class="mb-4">Please click on the icon that best meets your needs.</p>
                <div class="contact__blocks">
                    <div class="contact__item mb-4">
                        <div class="contact__item--icon">
                            <img class="member__photo" src="/wp-content/uploads/2023/04/tech-support.svg" alt="" width="80">
                        </div>
                    
                        <div class="contact__item--title mt-1">
                            <h2 class="title">
                                Technical Support                    
                            </h2>
                        </div>

                        <div class="contact__item--button mt-2">
                            <a href="/technical-support/" class="btn btn-sm mt-6 pt-4">
                                Let us help                    
                            </a>
                        </div>    
                    </div>
                    
                    <div class="contact__item mb-4">
                        <div class="contact__item--icon">
                            <img class="member__photo" src="/wp-content/uploads/2023/04/speak-with-sales.svg" alt="" width="80">
                        </div>
                    
                        <div class="contact__item--title mt-1">
                            <h2 class="title">
                                Speak with Sales                    
                            </h2>
                        </div>

                        <div class="contact__item--button mt-2">
                            <a href="/speak-with-sales/" class="btn btn-sm mt-6 pt-4">
                                Let's talk                    
                            </a>
                        </div>    
                    </div>
                    
                    <div class="contact__item mb-4">
                        <div class="contact__item--icon">
                            <img class="member__photo" src="/wp-content/uploads/2023/04/order-parts.svg" alt="" width="80">
                        </div>
                    
                        <div class="contact__item--title mt-1">
                            <h2 class="title">
                                Order Parts                    
                            </h2>
                        </div>

                        <div class="contact__item--button mt-2">
                            <a href="/order-parts/" class="btn btn-sm mt-6 pt-4">
                                Get it now                    
                            </a>
                        </div>    
                    </div>
                    
                    <div class="contact__item mb-4">
                        <div class="contact__item--icon">
                            <img class="member__photo" src="/wp-content/uploads/2023/04/get-a-quote.svg" alt="" width="80">
                        </div>
                    
                        <div class="contact__item--title mt-1">
                            <h2 class="title">
                                Get a Quote                    
                            </h2>
                        </div>

                        <div class="contact__item--button mt-2">
                            <a href="/get-a-quote/" class="btn btn-sm mt-6 pt-4">
                                Ask us                    
                            </a>
                        </div>    
                    </div>
                </div>
            </section>
        </div>
    </div><!-- #primary -->


<?php

get_footer();
