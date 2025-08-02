<?php

/**
 * Template Name: Leadership
 */

get_header(); ?>

<main class="wrapper leadership">
    <div class="ast-container">
        
        <?php get_template_part( 'template-parts/hero' ); ?> <!-- hero section -->

        <?php get_template_part( 'template-parts/intro' ); ?> <!-- intro section -->

        <?php if ( have_rows( 'leadership_team' ) ) : ?>

            <section class="team">
                <div class="team__content">
                    <?php while ( have_rows( 'leadership_team' ) ) : the_row(); ?>
                        <div class="team__content-rows">
                            <div class="team__content-rows-video">
                                <?= get_sub_field( 'leadership_member_video' ); ?>
                            </div>
                            
                            <div class="team__content-rows-member">
                                <div class="team__content-rows-member-info">
                                    <div class="team__content-rows-member-identity">
                                        <h3><?= get_sub_field( 'leadership_member_name' ); ?></h3>
                                        <p><?= get_sub_field( 'leadership_member_designation' ); ?></p>
                                    </div>
                                    <div class="team__content-rows-member-socials">
                                        <a href="<?= get_sub_field( 'leadership_member_linkedin' ); ?>" target="_blank">
                                            <img src="/wp-content/uploads/2024/12/linkedin-icon.svg" alt="Linkedin Icon">
                                        </a>
                                    </div>
                                </div>

                                <div class="team__content-rows-member-bio">
                                    <?= get_sub_field( 'leadership_member_bio' ); ?>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                </div>
            </section> <!-- team section -->

        <?php endif; ?>

        <?php get_template_part( 'template-parts/cta' ); ?> <!-- cta section -->


        <?php if ( have_rows( 'biz_team' ) ) : ?>

            <section class="bdm">
                <h2>Business Development Team</h2>

                <div class="bdm__grid">
                    <?php while ( have_rows( 'biz_team' ) ) : the_row(); ?>
                    
                        <div class="bdm__grid-member">
                            <?php $biz_member_photo = get_sub_field( 'biz_member_photo' ); ?>
                            
                            <?php if( !empty( $biz_member_photo ) ) : ?>
                                <div class="bdm__grid-member-img">
                                    <img src="<?= esc_url( $biz_member_photo['url'] ); ?>" alt="<?= esc_attr( $biz_member_photo['alt'] ); ?>">
                                </div>
                            <?php endif; ?>

                            <div class="bdm__grid-member-info">
                                <div class="bdm__grid-member-identity">
                                    <?php if ( get_sub_field( 'biz_member_name' ) ) : ?>
                                        <h3>
                                            <?= get_sub_field( 'biz_member_name' ); ?>
                                        </h3>
                                    <?php endif; ?>

                                    <?php if ( get_sub_field( 'biz_member_designation' ) ) : ?>
                                        <p>
                                            <?= get_sub_field( 'biz_member_designation' ); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>

                                <?php if ( get_sub_field('biz_member_linkedin') ) : ?>
                                    <div class="bdm__grid-member-social">
                                        <a href="<?= get_sub_field( 'biz_member_linkedin' ); ?>" target="_blank">
                                            <img src="/wp-content/uploads/2024/12/linkedin-icon.svg" alt="Linkedin Icon">
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <?php if ( get_sub_field( 'biz_member_bio' ) ) : ?>
                                <div class="bdm__grid-member-bio">
                                    <?= get_sub_field( 'biz_member_bio' ); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endwhile; ?>
                </div>

            </section>

        <?php endif; ?>

    </div> <!-- ast-container -->
</main>

<?php get_footer(); ?>
