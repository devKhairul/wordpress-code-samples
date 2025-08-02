<?php 

/*
Template Name: Locations Page Template
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


get_header(); ?>

    <div id="primary" <?php astra_primary_class(); ?>>
        <main class="wrapper locations">
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
                        <?= get_field('locations_intro_title'); ?>
                    </h2>

                    <div class="intro__descriptions">
                        <?= get_field('locations_intro_description'); ?>
                    </div>
                    
                </div>
            </section>

            <!-- Locations and Map -->
            <section class="locations__map mt-4">
                <div class="addresses px-4">
                    <?= get_field('location_one'); ?>

                    <?= get_field('location_two'); ?>
                    
                    <?= get_field('location_three'); ?>
                    
                    <?= get_field('location_four'); ?>
                </div>

                <div id="map_canvas" class="map">
                <iframe src="https://www.google.com/maps/d/u/1/embed?mid=15aylWEG2haVpRYgkZy0D1fDNyYWMB8w&ehbc=2E312F&noprof=1" width="640" height="480"></iframe>
                </div>
            </section>

            <!-- Contact Blocks -->
            <section class="contact__intro mt-4">
                <h2>
                    <?= get_field('page_title'); ?>
                </h2>
                <?= get_field('contact_section_description'); ?>
            </section>

            <section class="contact__blocks mt-2">
                <?php 
                    get_template_part( 'template-parts/contact-cards' ); 
                ?>
            </section>
            
        </main>    
	</div><!-- #primary -->

<?php get_footer(); ?>
