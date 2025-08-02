<?php 

/*
Template Name: Technical Resources Page Template
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


get_header(); ?>

    <div id="primary" <?php astra_primary_class(); ?>>
        <main class="wrapper techResources">
            <!-- Banner -->
            <section class="banner__section" style="background-image:url('<?= get_the_post_thumbnail_url(); ?>')">
                    <h1 class="banner__section-title">
                        <?= the_title() ?>
                    </h1>
            </section>

            <!-- Intro -->
            <section class="intro mt-4">
                <div class="intro__title">
                    <h2 class="title mb-1">
                        <?= the_title() ?>
                    </h2>
                </div>

                <div class="intro__descriptions">
                    <?= the_content() ?>
                </div>
            </section>


            <!-- Technical Resources Section -->
            <section class="techsupport mt-4">
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
            

             <!-- Contact Blocks -->
            <section class="contact__intro mt-4">
                <h2 class="title">
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
