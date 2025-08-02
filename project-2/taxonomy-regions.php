<?php 

    get_header(); 

    $terms = get_terms(array(
        'taxonomy' => 'regions',
        'hide_empty' => true,
    ));

    $current_term = get_queried_object();
    
    // For Sale
    $for_sale_args = array(
        'post_type' => 'vet-practices',
        'posts_per_page' => -1,
        'regions' => $current_term->slug,
        'post_status' => 'publish',
        'meta_query' => array(
            array(
                'key' => 'listing_status',
                'value' => 'sale',
                'compare' => '===',
            ),
        ),
    );
    $for_sale_query = new WP_Query( $for_sale_args );

    // Pending
    $pending_args = array(
        'post_type' => 'vet-practices',
        'posts_per_page' => -1,
        'regions' => $current_term->slug,
        'post_status' => 'publish',
        'meta_query' => array(
            array(
                'key' => 'listing_status',
                'value' => 'pending',
                'compare' => '===',
            ),
        ),
    );
    
    $pending_query = new WP_Query( $pending_args );

    // Pending
    $sold_args = array(
        'post_type' => 'vet-practices',
        'posts_per_page' => -1,
        'regions' => $current_term->slug,
        'post_status' => 'publish',
        'meta_query' => array(
            array(
                'key' => 'listing_status',
                'value' => 'sold',
                'compare' => '===',
            ),
        ),
    );
    
    $sold_query = new WP_Query( $sold_args );

    

   
    
?>

<main class="wrapper vet-practices">
    <div class="ast-container">
        <section class="hero">
            <div class="hero__content">
                <div class="hero__content-img">
                    <img src="/wp-content/uploads/2025/01/buy-practice-hero-fore.svg" alt="Decorative Butterfly Image">
                </div>
                <div class="hero__content-title">
                    <h2>Practices for Sale</h2>
                </div>
            </div>
        </section> <!-- hero section -->

        <section class="vet-practices__intro">
            <div class="vet-practices__content">
                <p>We are privileged to represent veterinarians across the United States who have built successful vet practices and are looking to transition ownership. Our listing of vet practices for sale in the US is updated regularly, so please check back periodically if you’re looking for vet practices that align with your vision.</p>
                
                <p>If you’d like to receive information about any of our vet practices for sale, please use the applicable reference number and complete the Non-Disclosure Agreement and submit it to us. We’ll review your request and promptly be in touch.</p>
                
                <a href="#practice-inquiry" class="outlined-btn mt-1">Vet Practice Inquiry</a>
            </div>
        </section>

        
        <section class="vet__items">
            <h2>Vet Practices for Sale - <?= $current_term->name; ?> </h2>

            <div class="vet__items-container">
                <div class="vet__items-regions">
                    <h3>REGIONS</h3>
                    
                    <ul>
                        <?php foreach ($terms as $term) : ?>
                            
                                <li>
                                    <a href="/regions/<?= $term->slug; ?>" style="<?= $current_term->slug === $term->slug ? 'color: #EF7A22;' : ''; ?>">
                                        <?= $term->name; ?>
                                    </a>
                                </li>
                            
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <div class="vet__items-post-container">
                    <?php if ( $for_sale_query->have_posts() ) : ?>
                        <h6>For Sale</h6>
                        <div class="vet__items-grid">
                            <?php while ( $for_sale_query->have_posts() ) : $for_sale_query->the_post(); ?>   
                                
                                <article class="vet__items-post">
                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>
                    
                                    <?php 
                                        the_content(); 
                                    ?>      

                                    <?php $listing_status = get_field('listing_status'); ?>

                                    <?php if ($listing_status['label'] !== 'For Sale') : ?>
                                        <div class="vet__items-post-status">
                                            <p style="background-color:<?php echo $listing_status['label'] === 'Pending Closing' ? '#EF7A22' : '#000000'; ?>">
                                                <?= $listing_status['label']; ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>

                                </article>
                                
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    <?php endif; ?>

                    <!-- PENDING -->                                            
                    <?php if ( $pending_query->have_posts() ) : ?>
                        <h6>Pending</h6>
                        <div class="vet__items-grid">
                            <?php while ( $pending_query->have_posts() ) : $pending_query->the_post(); ?>   
                                
                                <article class="vet__items-post">
                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>
                    
                                    <?php 
                                        the_content(); 
                                    ?>      

                                    <?php $listing_status = get_field('listing_status'); ?>

                                    <?php if ($listing_status['label'] !== 'For Sale') : ?>
                                        <div class="vet__items-post-status">
                                            <p style="background-color:<?php echo $listing_status['label'] === 'Pending Closing' ? '#EF7A22' : '#000000'; ?>">
                                                <?= $listing_status['label']; ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>

                                </article>
                                
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    <?php endif; ?>

                    <!-- SOLD -->
                    <?php if ( $sold_query->have_posts() ) : ?>
                        <h6>Sold</h6>
                        <div class="vet__items-grid">
                            <?php while ( $sold_query->have_posts() ) : $sold_query->the_post(); ?>   
                                
                                <article class="vet__items-post">
                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>
                    
                                    <?php 
                                        the_content(); 
                                    ?>      

                                    <?php $listing_status = get_field('listing_status'); ?>

                                    <?php if ($listing_status['label'] !== 'For Sale') : ?>
                                        <div class="vet__items-post-status">
                                            <p style="background-color:<?php echo $listing_status['label'] === 'Pending Closing' ? '#EF7A22' : '#000000'; ?>">
                                                <?= $listing_status['label']; ?>
                                            </p>
                                        </div>
                                    <?php endif; ?>

                                </article>
                                
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
    
            <div class="pagination">
                
            </div>
        </section>
    

        <section class="cta">
            <div class="cta__content">
                <div class="cta__content-text">
                    <h2>Attend Our Seminar on Practice Transition</h2>
                    <p>Join us at the next vet conference to learn the key steps to a successful vet practice sale</p>
                </div>

                <div class="cta__content-btn">
                    <a href="/events/" target="" class="outlined-btn">
                        Learn More
                    </a>
                </div>
            </div>
        </section>
    </div>

    <section class="practice-inquiry" id="practice-inquiry">
        <div class="ast-container">
            <div class="practice-inquiry__content">
                <h2>Vet Practice Inquiry</h2>
                <p>Please read our Non Disclosure Agreement (NDA). If you accept its terms, please complete the form below. Your completed NDA will be sent to us and a copy will be sent to the email address you have provided.</p>
                <a href="/wp-content/uploads/2024/12/NDA.pdf" target="_blank" class="outlined-btn mt-1">View Non-Disclosure Agreement</a>
            </div>

            <div class="practice-inquiry__form form">
                <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]'); ?>
            </div>
        </div>
    </section>
    
</main>

<?php get_footer(); ?>