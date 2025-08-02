<?php
/**
 * The template for displaying front page.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

    <div id="primary" <?php astra_primary_class(); ?>>
        
        <main class="ast-container">
            <!-- Slider -->
            <?php if ( have_rows('main_slider') ) : ?>
               <section id="slider" class="slider">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <?php 
                                while ( have_rows('main_slider') ) : the_row(); 

                                $slider_image = get_sub_field('main_slider_image');
                                $slider_text = get_sub_field('main_slider_text');
                            ?>
                            <div class="swiper-slide main__slide" style="background:url('<?= esc_url($slider_image['url']); ?>')">
                                <h2>
                                    <?= $slider_text; ?>
                                </h2>
                            </div>
                            <?php endwhile; ?>
                        </div>

                        <!-- Slider Navigation -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </section> <!-- Slider -->
            <?php endif; ?>

            <section id="intro" class="intro mt-4">
                <div class="intro__title">
                    <h1 class="title"><?= the_field('intro_title'); ?></h1>
                </div>

                <div class="intro__description">
                    <?= the_field('intro_description'); ?>
                </div>
            </section>

            <!-- Brands Section -->
            <?php
                // brands logo custom fields
                $logo1 = get_field('logo_1');
                $logo2 = get_field('logo_2');
                
                // brands images custom fields
                $image1 = get_field('image_1');
                $image2 = get_field('image_2');
                
            ?>


            <section id="brands" class="brands mt-4">
                <div class="brands__identity mt-4">
                    <div class="identity__col_1">
                        <div class="identity__logo">
                            <img src="<?= esc_url($logo1['url']); ?>" alt="<?= esc_attr($logo1['alt']); ?>" loading="lazy" width="240" height="auto" />    
                        </div>
                        
                        <div class="identity__image">
                            <img src="<?= esc_url($image1['url']); ?>" alt="<?= esc_attr($image1['alt']); ?>" loading="lazy" height="auto" />
                            
                            <a href="/our-brands/#minusforty" class="btn btn-sm">Learn more</a>
                        </div>
                    </div>

                    <div class="identity__col_2">
                        <div class="identity__logo">
                            <img src="<?= esc_url($logo2['url']); ?>" alt="<?= esc_attr($logo2['alt']); ?>" loading="lazy" width="240" height="auto" />
                        </div>

                        <div class="identity__image">
                            <img src="<?= esc_url($image2['url']); ?>" alt="<?= esc_attr($image2['alt']); ?>" loading="lazy" height="auto" />

                            <a href="/our-brands/#minusforty" class="btn btn-sm">Learn more</a>
                        </div>
                    </div>

                </div>
            </section> 
            <!-- Brands Section -->


            <?php 
                // products type images custom fields
                $product_type_image1 = get_field('product_type_image_1');
                $product_type_image2 = get_field('product_type_image_2');
                $product_type_image3 = get_field('product_type_image_3');
                $product_type_image4 = get_field('product_type_image_4');
                $product_type_image5 = get_field('product_type_image_5');
            ?>

            <!-- Products Display Section -->
            <section id="products" class="products mt-6">
                <div class="products__title">
                    <h2 class="title"><?= the_field('products_section_title'); ?></h2>
                </div>

                <div class="products__description pb-2 px-10">
                    <?= the_field('products_section_description'); ?>
                </div>

                <div class="products__display">
                    <div class="display__col__1">
                        <div class="display__image">
                            <img src="<?= esc_url($product_type_image1['url']); ?>" alt="<?= esc_attr($product_type_image1['alt']); ?>" loading="lazy" />
                        </div>

                        <div class="display__text">
                            <?= the_field('product_type_1'); ?>
                        </div>

                        <div class="display--button">
                            <a href="/custom-merchandisers" class="btn btn-sm">Learn more</a>
                        </div>
                    </div>

                    <div class="display__col__2">
                        <div class="display__image">
                            <img src="<?= esc_url($product_type_image2['url']); ?>" alt="<?= esc_attr($product_type_image2['alt']); ?>" loading="lazy" width="auto" class="titan-graphics" />
                        </div>

                        <div class="display__text">
                            <?= the_field('product_type_2'); ?>
                        </div>

                        <div class="display--button">
                            <a href="/about/#greatBusiness" class="btn btn-sm">Learn more</a>
                        </div>
                    </div>

                    <div class="display__col__3">
                        <div class="display__image">
                            <img src="<?= esc_url($product_type_image3['url']); ?>" alt="<?= esc_attr($product_type_image3['alt']); ?>" loading="lazy" />
                        </div>

                        <div class="display__text">
                            <?= the_field('product_type_3'); ?>
                        </div>

                        <div class="display--button">
                            <a href="/innovations" class="btn btn-sm">Learn more</a>
                        </div>
                    </div>

                    <div class="display__col__4">
                        <div class="display__image">
                            <img src="<?= esc_url($product_type_image4['url']); ?>" alt="<?= esc_attr($product_type_image4['alt']); ?>" loading="lazy" />
                        </div>

                        <div class="display__text">
                            <?= the_field('product_type_4'); ?>
                        </div>

                        <div class="display--button">
                            <a href="/about/#responsible" class="btn btn-sm">Learn more</a>
                        </div>
                    </div>

                    <div class="display__col__5">
                        <div class="display__image">
                            <img src="<?= esc_url($product_type_image5['url']); ?>" alt="<?= esc_attr($product_type_image5['alt']); ?>" loading="lazy" />
                        </div>

                        <div class="display__text">
                            <?= the_field('product_type_5'); ?>
                        </div>

                        <div class="display--button">
                            <a href="/about/#northAmerican" class="btn btn-sm">Learn more</a>
                        </div>  
                    </div>
                </div>
            </section>
            <!-- Products Display Section -->

                
            <?php if ( have_rows('solution_types') ) : ?>
                <!-- Solutions Section -->
                <section id="solutions" class="solutions mt-6">
                    <div class="solutions__title">
                        <h2 class="title"><?= the_field('solutions_title'); ?></h2>
                    </div>

                    <div class="solutions__description pb-2 px-10">
                        <?= the_field('solutions_description'); ?>
                    </div>

                    <div class="solutions__type">
                        <?php 
                                while (have_rows('solution_types')) : the_row();  
                                
                                $solution_type_icon = get_sub_field('solution_type_image');
                                $solution_type_name = get_sub_field('solution_type_name');
                                $solution_type_url = get_sub_field('solution_type_url');
                                
                        ?>
                                <div class="type__col">
                                    <div class="type__icon">
                                        <img src="<?= $solution_type_icon['url']; ?>" alt="<?= $solution_type_icon['alt']; ?>" />
                                    </div>
                                    <span>
                                        <a href="<?= $solution_type_url; ?>">
                                            <?= $solution_type_name; ?>
                                        </a>
                                    </span>
                                </div>
                        <?php endwhile; ?>
                    </div>
                </section>
                <!-- Solutions Section -->
            <?php endif; ?>
            

            <!-- CTA Section -->
            <section class="cta mt-6">
                <?php get_template_part( 'template-parts/cta' ); ?>
            </section>
            <!-- CTA Section -->

            <!-- Blogs Section -->
            <section class="blogs mt-6">
                <div class="blogs__title">
                    <h2 class="title">Due North Blogs</h2>
                </div>

                <?php 
                $args = array(
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC',

                );

                $blogs = new WP_Query($args);

                if ($blogs->have_posts()) : ?>

                    <div class="latest__blogs">
                        <?php while ($blogs->have_posts()) : $blogs->the_post() ?>
                            <article class="blog__<?= the_ID(); ?>">
                                <div class="blog__thumbnail">
                                    <a href="<?= esc_url(the_permalink()); ?>">
                                        <?= the_post_thumbnail(); ?>
                                    </a>
                                </div>
                                
                                <div class="blog__date">
                                    <?= get_the_date(); ?>
                                </div>
                                
                                <div class="blog__title">
                                    <a href="<?= esc_url(the_permalink()); ?>">
                                        <h2>
                                            <?= esc_attr(the_title()); ?>
                                        </h2>
                                    </a>
                                </div>

                                <div class="blog__button">
                                    <a href="<?= esc_url(the_permalink()); ?>" class="btn btn-sm" role="button">Read more</a>
                                </div>

                            </article>
                        <?php endwhile; ?>
                    </div>

                <?php endif; ?>
            </section>
            <!-- Blogs Section -->

            <!-- Technical Resources Section -->
            <section class="techsupport mt-8">
                <div class="techsupport__title">
                    <h2 class="title">Tech Support</h2>
                </div>
                <div class="techsupport__description px-10 mb-4">
                    <p>Welcome to Due North Technical Support. Our products have earned us a reputation for engineering excellence, temperature stability, and reliable, high-performance components that are built to last. But should you run into any issues, you can reach out to our helpful technical experts. Find operating and technical manuals, maintenance videos, and the parts order form here.</p>
                </div>

                <div class="techsupport__wrapper">
                    <div class="techsupport__col__1">
                        <img src="/wp-content/uploads/2023/12/owner-manual.png" alt="Owner Manuals">
                        
                        <div class="content__wrapper">
                            <h2 class="title">
                                Owner & Technical Manuals
                            </h2>

                            <p>
                                Access the technical information for your merchandiser
                            </p>

                            <a href="/technical-manuals" class="btn btn-sm">Learn more</a>
                        </div>
                    </div>

                    <div class="techsupport__col__2">
                        <img src="/wp-content/uploads/2023/12/tech-faqs.png" alt="Tech FAQ">
                        
                        <div class="content__wrapper">
                            <h2 class="title">
                                Technical FAQS
                            </h2>

                            <p>
                                Quicks answers to the most frequently asked questions
                            </p>

                            <a href="/faq" class="btn btn-sm">Learn more</a>
                        </div>
                    </div>
                </div>
            </section> <!-- Tech Resources Section -->
        </main>
        <!-- Container -->
    </div>
    <!-- #primary -->


<?php get_footer(); ?>
