<?php 

/*
Template Name: FAQ Page Template
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


get_header(); ?>

    <div id="primary" <?php astra_primary_class(); ?>>
        <main class="wrapper faqs">
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
                        <?= the_title(); ?>
                    </h2>
                </div>

                <div class="intro__descriptions">
                    <p>Frequently Asked Questions</p>
                </div>
            </section>


            <?php if ( have_rows('faq') ) : ?>
                
                <section class="faqs__section mt-4">
                    
                    <div class="accordion">
                        <?php while ( have_rows('faq') ) : the_row(); ?>
                        <?php 
                            $question = get_sub_field('faq_question'); 
                            $answer = get_sub_field('faq_answer'); 
                        ?>
                        
                        <div class="accordion__item">
                            <div class="accordion__title">
                                <span class="accordion__title-text">
                                    <?= $question ?>
                                </span>
                            </div>
                            
                            <div class="accordion__content">
                                <?= $answer ?>
                            </div>
                        </div>
                        
                        <?php endwhile;  ?>
                    </div>
                      
                </section>
             <?php endif;  ?>

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
