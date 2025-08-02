<?php 

/*
Template Name: Careers Page Template
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


get_header(); ?>

    <div id="primary" <?php astra_primary_class(); ?>>
        <main class="wrapper careers">
            <!-- Banner -->
            <section class="banner__section" style="background-image:url('<?= get_the_post_thumbnail_url(); ?>')">
                    <h1 class="banner__section-title">
                        <?= the_title(); ?>
                    </h1>
                
                    <?php 
                        the_content(); 
                    ?>
            </section>

            <!-- Intro -->
            <section class="careers__intro my-4">
                    <h2 class="careers__intro-title">
                       <?= get_field('careers_intro_title'); ?>
                    </h2>

                    <?= get_field('careers_intro_description'); ?>
            </section>

            <!-- Why Work At Due North -->
            <section class="why__dn mb-4">
                <div class="why__dn-row1 mb-2">
                    <h2 class="title">
                        <?= get_field('why_dn_title'); ?>
                    </h2>
                </div>
                
                <div class="why__dn-row2">

                    <?php
                        $photo_one = get_field('why_dn_image_1');
                        $photo_two = get_field('why_dn_image_2');
                    ?>

                    <div class="why__dn-creatives">
                        <img src="<?= $photo_one['url']; ?>" alt="<?= $photo_one['alt']; ?>">
                        <img src="<?= $photo_two['url']; ?>" alt="<?= $photo_two['alt']; ?>">
                    </div>

                    <div class="why__dn-contents">

                        <?php if ( have_rows('why_dn_reasons') ) :  ?>

                            <?php while ( have_rows('why_dn_reasons') ) : the_row();  ?>

                                <div class="why__dn-block">
                                    <?php $why_dn_icon = get_sub_field('reasons_icon');  ?>
                                    <div class="why__dn-icon">
                                        <img src="<?= $why_dn_icon['url']; ?>" alt="<?= $why_dn_icon['alt']; ?>">    
                                    </div>
                                    
                                    <div class="why__dn-text">
                                        <span>
                                            <strong>
                                                <?= get_sub_field('reasons_heading'); ?>
                                            </strong>
                                        </span>
                                        <?= get_sub_field('reasons_text'); ?>
                                    </div>
                                </div>

                            <?php endwhile; endif; ?>
                    </div>
                </div>
                
            </section><!-- Why Work At Due North -->

            <!-- Testimonials -->

            <?php if ( have_rows('emp_testimonials') ) : ?>
                <section class="emp__testimonials">

                    <h2 class="title">
                        <?= get_field('employee_testimonials_title'); ?>
                    </h2>

                    <div class="swiper testimonials">
                        <div class="swiper-wrapper mt-8 mb-3">
                            
                            <?php while ( have_rows('emp_testimonials') ) : the_row(); ?>

                                <div class="swiper-slide testimonial__block">
                                    <?php $emp_photo = get_sub_field('t_emp_photo');  ?>
                                    <div class="testimonial__block-photo">
                                        <img src="<?= $emp_photo['url']; ?>" alt="<?= $emp_photo['alt']; ?>">
                                    </div>

                                    <div class="testimonial__block-icon">
                                        <img src="/wp-content/uploads/2023/06/quote-icon.svg" alt="Quote">   
                                    </div>

                                    <div class="testimonial__block-content">
                                        <?= get_sub_field('t_emp_text') ?>

                                        <h2><?= get_sub_field('t_emp_name'); ?></h2>
                                        
                                        <h3><?= get_sub_field('t_emp_designation'); ?></h3>
                                    </div>
                                </div>

                            <?php endwhile; ?> 
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </section><!-- Testimonials -->
            <?php endif; ?>

            
            <!-- Job Postings -->
            <section class="job__postings mt-4"> 
                <h2 class="title">
                    <?= get_field('reimagine_your_career'); ?>
                </h2>
                <?= get_field('your_career_description'); ?>
                

                <?php if ( have_rows('available_positions') ) : ?>
                    
                    <div class="job__postings-list mt-2">
                        <h2 class="title mb-1">Available Positions</h2>
                        
                        <?php while ( have_rows('available_positions') ) : the_row(); ?>
                            <div class="job__postings-job mb-1">
                                <div class="accordion">
                                    <div class="accordion__item">
                                        <div class="accordion__title">
                                            <h2 class="accordion__title-text title">
                                                <?= get_sub_field('job_title') ?>
                                            </h2>
                                        </div>
                                        
                                        <div class="accordion__content">
                                            <?= get_sub_field('job_description') ?>
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>
                           
                        <?php endwhile; else: ?>
                            <h2 class="mt-4">We do not have any positions available at the moment. Please check back later.</h2>
                    </div>
                <?php endif; ?>
            </section><!-- Job Postings -->
        </main>    
	</div><!-- #primary -->

<?php get_footer(); ?>