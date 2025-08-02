<?php

/**
 * Template Name: Leadership Team
 */

get_header(); ?>

<main id="primary" class="site-main leadership">
    <?php get_template_part( 'template-parts/hero' ); ?>

    <?php get_template_part( 'template-parts/intro' ); ?>

    <div class="ast-container">
        <div class="leadership__team">

            <!-- Member 1  -->
            <?php $member_1 = get_field('leadership_team_member_1');  ?>

            <?php if ( $member_1 ) : ?>
                <div class="leadership__team-member">
                    <?php $member_photo_1 = $member_1['member_photo_1']; ?>

                    <?php if ( $member_photo_1 ) : ?>
                        <div class="leadership__team-member-image">
                            <img src="<?= esc_url( $member_photo_1['url'] ); ?>" alt="<?= esc_attr( $member_photo_1['alt'] ); ?>">
                        </div>
                    <?php endif; ?>
                    
                    <?php if ( $member_1['member_name_1'] ) : ?>
                        <div class="leadership__team-member-name">
                            <h3>
                                <?= esc_html( $member_1['member_name_1'] ); ?>
                            </h3>
                        </div>
                    <?php endif; ?>

                    <?php if ( $member_1['member_designation_1'] ) : ?>
                        <div class="leadership__team-member-designation">
                            <p>
                                <?= esc_html( $member_1['member_designation_1'] ); ?>
                            </p>
                        </div>
                    <?php endif; ?>

                    <?php if ( $member_1['popup_id_1'] ) : ?>
                        <div class="leadership__team-member-bio">
                        <a href="javascript:void(0);" class="btn-link" id="<?php echo $member_1['popup_id_1']; ?>">Read Bio</a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            

            <!-- Member 2 -->
            <?php $member_2 = get_field('leadership_team_member_2');  ?>

            <?php if ( $member_2 ) : ?>
                <div class="leadership__team-member">
                    <?php $member_photo_2 = $member_2['member_photo_2']; ?>
                    <?php if ( $member_photo_2 ) : ?>
                        <div class="leadership__team-member-image">
                            <img src="<?= esc_url( $member_photo_2['url'] ); ?>" alt="<?= esc_attr( $member_photo_2['alt'] ); ?>">
                        </div>
                    <?php endif; ?>

                    <?php if ( $member_2['member_name_2'] ) : ?>
                        <div class="leadership__team-member-name">
                            <h3>
                                <?= esc_html( $member_2['member_name_2'] ); ?>
                            </h3>
                        </div>
                    <?php endif; ?>

                    <?php if ( $member_2['member_designation_2'] ) : ?>
                    <div class="leadership__team-member-designation">
                        <p>
                            <?= esc_html( $member_2['member_designation_2'] ); ?>
                        </p>
                    </div>
                    <?php endif; ?>

                    <?php if ( $member_2['popup_id_2'] ) : ?>
                        <div class="leadership__team-member-bio">
                            <a href="javascript:void(0);" class="btn-link" id="<?php echo $member_2['popup_id_2']; ?>">Read Bio</a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <!-- Member 3 -->
            <?php $member_3 = get_field('leadership_team_member_3');  ?>

            <?php if ( $member_3 ) : ?>
                <div class="leadership__team-member">
                    <?php $member_photo_3 = $member_3['member_photo_3']; ?>
                    <?php if ( $member_photo_3 ) : ?>
                        <div class="leadership__team-member-image">
                            <img src="<?= esc_url( $member_photo_3['url'] ); ?>" alt="<?= esc_attr( $member_photo_3['alt'] ); ?>">
                        </div>
                    <?php endif; ?>

                    <?php if ( $member_3['member_name_3'] ) : ?>
                        <div class="leadership__team-member-name">
                            <h3>
                                <?= esc_html( $member_3['member_name_3'] ); ?>
                            </h3>
                        </div>
                    <?php endif; ?>

                    <?php if ( $member_3['member_designation_3'] ) : ?>
                    <div class="leadership__team-member-designation">
                        <p>
                            <?= esc_html( $member_3['member_designation_3'] ); ?>
                        </p>
                    </div>
                    <?php endif; ?>

                    <?php if ( $member_3['popup_id_3'] ) : ?>
                        <div class="leadership__team-member-bio">    
                            <a href="javascript:void(0);" class="btn-link" id="<?php echo $member_3['popup_id_3']; ?>">Read Bio</a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <!-- Member 4 -->
            <?php $member_4 = get_field('leadership_team_member_4');  ?>

            <?php if ( $member_4 ) : ?>
                <div class="leadership__team-member">
                    <?php $member_photo_4 = $member_4['member_photo_4']; ?>
                    <?php if ( $member_photo_4 ) : ?>
                        <div class="leadership__team-member-image">
                            <img src="<?= esc_url( $member_photo_4['url'] ); ?>" alt="<?= esc_attr( $member_photo_4['alt'] ); ?>">
                        </div>
                    <?php endif; ?>

                    <?php if ( $member_4['member_name_4'] ) : ?>
                        <div class="leadership__team-member-name">
                            <h3>
                                <?= esc_html( $member_4['member_name_4'] ); ?>
                            </h3>
                        </div>
                    <?php endif; ?>

                    <?php if ( $member_4['member_designation_4'] ) : ?>
                    <div class="leadership__team-member-designation">
                        <p>
                            <?= esc_html( $member_4['member_designation_4'] ); ?>
                        </p>
                    </div>
                    <?php endif; ?>

                    <?php if ( $member_4['popup_id_4'] ) : ?>
                        <div class="leadership__team-member-bio">    
                            <a href="javascript:void(0);" class="btn-link" id="<?php echo $member_4['popup_id_4']; ?>">Read Bio</a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <!-- Member 5 -->
            <?php $member_5 = get_field('leadership_team_member_5');  ?>

            <?php if ( $member_5 ) : ?>
                <div class="leadership__team-member">
                    <?php $member_photo_5 = $member_5['member_photo_5']; ?>
                    <?php if ( $member_photo_5 ) : ?>
                        <div class="leadership__team-member-image">
                            <img src="<?= esc_url( $member_photo_5['url'] ); ?>" alt="<?= esc_attr( $member_photo_5['alt'] ); ?>">
                        </div>
                    <?php endif; ?>

                    <?php if ( $member_5['member_name_5'] ) : ?>
                        <div class="leadership__team-member-name">
                            <h3>
                                <?= esc_html( $member_5['member_name_5'] ); ?>
                            </h3>
                        </div>
                    <?php endif; ?>

                    <?php if ( $member_5['member_designation_5'] ) : ?>
                    <div class="leadership__team-member-designation">
                        <p>
                            <?= esc_html( $member_5['member_designation_5'] ); ?>
                        </p>
                    </div>
                    <?php endif; ?>

                    <?php if ( $member_5['popup_id_5'] ) : ?>
                        <div class="leadership__team-member-bio">    
                            <a href="javascript:void(0);" class="btn-link" id="<?php echo $member_5['popup_id_5']; ?>">Read Bio</a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <!-- Member 6 -->
            <?php $member_6 = get_field('leadership_team_member_6');  ?>

            <?php if ( $member_6 ) : ?>
                <div class="leadership__team-member">
                    <?php $member_photo_6 = $member_6['member_photo_6']; ?>
                    <?php if ( $member_photo_6 ) : ?>
                        <div class="leadership__team-member-image">
                            <img src="<?= esc_url( $member_photo_6['url'] ); ?>" alt="<?= esc_attr( $member_photo_6['alt'] ); ?>">
                        </div>
                    <?php endif; ?>

                    <?php if ( $member_6['member_name_6'] ) : ?>
                        <div class="leadership__team-member-name">
                            <h3>
                                <?= esc_html( $member_6['member_name_6'] ); ?>
                            </h3>
                        </div>
                    <?php endif; ?>

                    <?php if ( $member_6['member_designation_6'] ) : ?>
                    <div class="leadership__team-member-designation">
                        <p>
                            <?= esc_html( $member_6['member_designation_6'] ); ?>
                        </p>
                    </div>
                    <?php endif; ?>

                    <?php if ( $member_6['popup_id_6'] ) : ?>
                        <div class="leadership__team-member-bio">    
                            <a href="javascript:void(0);" class="btn-link" id="<?php echo $member_6['popup_id_6']; ?>">Read Bio</a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <!-- Member 7 -->
            <?php $member_7 = get_field('leadership_team_member_7');  ?>

            <?php if ( $member_7 ) : ?>
                <div class="leadership__team-member">
                    <?php $member_photo_7 = $member_7['member_photo_7']; ?>
                    <?php if ( $member_photo_7 ) : ?>
                        <div class="leadership__team-member-image">
                            <img src="<?= esc_url( $member_photo_7['url'] ); ?>" alt="<?= esc_attr( $member_photo_7['alt'] ); ?>">
                        </div>
                    <?php endif; ?>

                    <?php if ( $member_7['member_name_7'] ) : ?>
                        <div class="leadership__team-member-name">
                            <h3>
                                <?= esc_html( $member_7['member_name_7'] ); ?>
                            </h3>
                        </div>
                    <?php endif; ?>

                    <?php if ( $member_7['member_designation_7'] ) : ?>
                    <div class="leadership__team-member-designation">
                        <p>
                            <?= esc_html( $member_7['member_designation_7'] ); ?>
                        </p>
                    </div>
                    <?php endif; ?>

                    <?php if ( $member_7['popup_id_7'] ) : ?>
                        <div class="leadership__team-member-bio">    
                            <a href="javascript:void(0);" class="btn-link" id="<?php echo $member_7['popup_id_7']; ?>">Read Bio</a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            
        </div>
    </div> <!-- .ast-container -->



    <div class="ast-container">
        <?php get_template_part( 'template-parts/cta-blog' ); ?>
    </div>
</main>



<?php get_footer(); ?>