<?php 

/*
Template Name: Technical Manuals Template
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


get_header(); ?>

    <div id="primary" <?php astra_primary_class(); ?>>
        <main class="wrapper manuals">
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


            <?php if ( have_rows('freezers_manuals') ) : ?>
                
                  <!-- Minus Forty Manuals -->
                  <section class="manuals__section mt-4">
                    <h2 class="title">Minus Forty</h2>
                        <div class="manuals__content mt-2">
                            <h2 class="subtitle">Freezers</h2>
                            <hr>
                            <div class="manuals__files">
                                <?php while ( have_rows('freezers_manuals') ) : the_row(); ?>
                                <?php 
                                    $name = get_sub_field('f_manual_name'); 
                                    $f_english_file = get_sub_field('f_english_manual'); 
                                    $f_french_file = get_sub_field('f_french_manual'); 
                                
                                ?>

                                    <div class="manuals__files--block">
                                        <?php if ($f_english_file) : ?>
                                            <a href="<?= $f_english_file ?>" target="_blank">
                                                <?= $name ?>
                                            </a>
                                        <?php endif; ?>

                                        <?php if ($f_french_file) : ?>
                                            <a href="<?= $f_french_file ?>" target="_blank">
                                                <?php echo $name . " (Français)"; ?>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile;  ?>
                            </div>
                        </div>

                        <div class="manuals__content mt-2">
                            <h2 class="subtitle">Coolers</h2>
                            <hr>
                            <div class="manuals__files">
                                <?php while ( have_rows('coolers_manuals') ) : the_row(); ?>
                                <?php 
                                    $name = get_sub_field('c_manual_name'); 
                                    $c_english_file = get_sub_field('c_english_manual'); 
                                    $c_french_file = get_sub_field('c_french_manual'); 
                                
                                ?>

                                    <div class="manuals__files--block">
                                        <?php if ($c_english_file) : ?>
                                            <a href="<?= $c_english_file ?>" target="_blank">
                                                <?= $name ?>
                                            </a>
                                        <?php endif; ?>

                                        <?php if ($c_french_file) : ?>
                                            <a href="<?= $c_french_file ?>" target="_blank">
                                                <?php echo $name . " (Français)"; ?>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile;  ?>
                            </div>
                        </div>

                        <div class="manuals__content mt-2">
                            <h2 class="subtitle">Uprights (Technical Manuals)</h2>
                            <hr>
                            <div class="manuals__files">
                                <?php while ( have_rows('uprights_manuals') ) : the_row(); ?>
                                <?php 
                                    $name = get_sub_field('u_manual_name'); 
                                    $u_english_file = get_sub_field('u_english_manual'); 
                                    $u_french_file = get_sub_field('u_french_manual'); 
                                
                                ?>

                                    <div class="manuals__files--block">
                                        <?php if ($u_english_file) : ?>
                                            <a href="<?= $u_english_file ?>" target="_blank">
                                                <?= $name ?>
                                            </a>
                                        <?php endif; ?>

                                        <?php if ($u_french_file) : ?>
                                            <a href="<?= $u_french_file ?>" target="_blank">
                                                <?php echo $name . " (Français)"; ?>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile;  ?>
                            </div>
                        </div>
                </section> <!-- Minus Forty Manuals -->
            <?php endif;  ?>
            

            <?php if ( have_rows('qbd_coolers_manuals') ) : ?>
                
                <!-- QBD Coolers -->
                <section class="manuals__section mt-4">
                  <h2 class="title">QBD</h2>
                      <div class="manuals__content mt-2">
                          <h2 class="subtitle">Coolers & Open Air</h2>
                          <hr>
                          <div class="manuals__files">
                              <?php while ( have_rows('qbd_coolers_manuals') ) : the_row(); ?>
                              <?php 
                                  $name = get_sub_field('qbd_manual_name'); 
                                  $qbd_english_file = get_sub_field('qbd_english_manual'); 
                                  $qbd_french_file = get_sub_field('qbd_french_manual'); 
                              
                              ?>

                                  <div class="manuals__files--block">
                                      <?php if ($qbd_english_file) : ?>
                                          <a href="<?= $qbd_english_file ?>" target="_blank">
                                              <?= $name ?>
                                          </a>
                                      <?php endif; ?>

                                      <?php if ($qbd_french_file) : ?>
                                          <a href="<?= $qbd_french_file ?>" target="_blank">
                                              <?php echo $name . " (Français)"; ?>
                                          </a>
                                      <?php endif; ?>
                                  </div>
                              <?php endwhile;  ?>
                          </div>
                      </div>
              </section> <!-- QBD Coolers -->
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
