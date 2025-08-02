<?php

/**
 * Template Name: Monarch Match
 */

get_header(); ?>

<main class="wrapper monarch-match">
    <div class="ast-container">
        
        <?php get_template_part('template-parts/hero' ); ?>

        <?php get_template_part('template-parts/intro' ); ?>

        <section class="practice-prep">
            <div class="practice-prep__content">
                <div class="practice-prep__content__row">
                    <div class="graphic__elements">
                        <span style="background-color: #F27A21;border-radius: 100%;padding: 0;width: 40px;height: 42px;display: flex;text-align: center;vertical-align: middle;color: white;font-weight: bold;align-items: center;justify-content: center;">1</span>
                        <div style="width:3px; flex-basis:100%; background-color:#F27A21;">&nbsp;</div>
                    </div>

                    <div class="copy__elements">
                        <?php if ( get_field( 'pp_copy_header' ) ) : ?>
                            <div class="copy__elements-header">
                                <?= get_field('pp_copy_header'); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( have_rows('pp_copy_paragraphs') ) : ?>
                            <div class="copy__elements-paragraphs">
                                <?php while ( have_rows('pp_copy_paragraphs') ) : the_row(); ?>
                                    <div class="paragraph">
                                        <?= get_sub_field('pp_paragraphs'); ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if ( get_field( 'pp_copy_footnote' ) ) : ?>
                    <div class="copy__elements-footnote">
                        <?= get_field('pp_copy_footnote'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- 2 -->
            <div class="practice-prep__content">
                <div class="practice-prep__content__row">
                    <div class="graphic__elements">
                    <span style="background-color: #F27A21;border-radius: 100%;padding: 0;width: 40px;height: 42px;display: flex;text-align: center;vertical-align: middle;color: white;font-weight: bold;align-items: center;justify-content: center;">2</span>
                        <div style="width:3px; flex-basis:100%; background-color:#F27A21;">&nbsp;</div>
                    </div>

                    <div class="copy__elements">
                        <?php if ( get_field( 'pm_copy_header' ) ) : ?>
                            <div class="copy__elements-header">
                                <?= get_field('pm_copy_header'); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( have_rows('pm_copy_paragraphs') ) : ?>
                            <div class="copy__elements-paragraphs">
                                <?php while ( have_rows('pm_copy_paragraphs') ) : the_row(); ?>
                                    <div class="paragraph">
                                        <?= get_sub_field('pm_paragraphs'); ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if ( get_field( 'pm_copy_footnote' ) ) : ?>
                    <div class="copy__elements-footnote">
                        <?= get_field('pm_copy_footnote'); ?>
                    </div>
                <?php endif; ?>
            </div>

             <!-- 3 -->
             <div class="practice-prep__content">
                <div class="practice-prep__content__row">
                    <div class="graphic__elements">
                    <span style="background-color: #F27A21;border-radius: 100%;padding: 0;width: 40px;height: 52px;display: flex;text-align: center;vertical-align: middle;color: white;font-weight: bold;align-items: center;justify-content: center;">3</span>
                        <div style="width:3px; flex-basis:100%; background-color:#F27A21;">&nbsp;</div>
                    </div>

                    <div class="copy__elements">
                        <?php if ( get_field( 'pc_copy_header' ) ) : ?>
                            <div class="copy__elements-header">
                                <?= get_field('pc_copy_header'); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ( have_rows('pc_copy_paragraphs') ) : ?>
                            <div class="copy__elements-paragraphs">
                                <?php while ( have_rows('pc_copy_paragraphs') ) : the_row(); ?>
                                    <div class="paragraph">
                                        <?= get_sub_field('pc_paragraphs'); ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if ( get_field( 'pc_copy_footnote' ) ) : ?>
                    <div class="copy__elements-footnote">
                        <?= get_field('pc_copy_footnote'); ?>

                        <?= get_field('pc_footnote_video'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <?php get_template_part('template-parts/cta' ); ?>

    </div> <!-- ast-container -->
</main>

<?php get_footer(); ?>



                