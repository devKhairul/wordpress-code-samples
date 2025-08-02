<?php 

/*
Template Name: Contacts Page Template
*/

?>

<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

    <div id="primary" <?php astra_primary_class(); ?>>
        <main class="wrapper">
            <section class="contact__intro my-2">
                <h1 class="title mb-1">
                    <?= the_field('page_title'); ?>
                </h1>

                <?= the_content(); ?>
            </section>

            <!-- Contact Cards -->
            <div class="contact__blocks">
                <?php 
                    get_template_part( 'template-parts/contact-cards' ); 
                ?>
            </div>
            


            <!-- Form Section -->
            <?php $form = get_field('c_form_section'); ?>

            <section class="form__section mt-4">
                
                <!-- Speak With Sales  -->
                <?php if (is_page(1243)) : ?>
                    <?php if ( have_rows('sales_speacialists') ) : ?>
                        <?php get_template_part( 'template-parts/sales-specialists' ); ?>
                    <?php endif; ?>
                <?php endif; ?>


                <div class="form mt-4">
                    <?= the_field('form'); ?>
                </div>
            </section>  

            <?php if (is_page(1288)) : ?>

            <!-- Speak With Sales  -->
            <section id="specialists" class="mt-4 mb-6">
                <?php if ( have_rows('sales_speacialists') ) : ?>
                    <?php get_template_part( 'template-parts/sales-specialists' ); ?>
                <?php endif; ?>
            </section>



            <?php  endif; ?>

            
        </main>    
	</div><!-- #primary -->

<?php get_footer(); ?>