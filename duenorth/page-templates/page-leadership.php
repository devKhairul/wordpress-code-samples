<?php 

/*
Template Name: Leadership Team Page Template
*/

?>
<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

    <div id="primary" <?php astra_primary_class(); ?>>
        <main class="wrapper leadership">

            <section class="banner__section" style="background-image:url('<?= get_the_post_thumbnail_url(); ?>')">
                    <h1 class="banner__section-title">
                        <?= the_title(); ?>
                    </h1>
            </section>

            <section class="leadership__intro my-4">
                <h2 class="title"><?= the_title(); ?></h2>

                <?= the_content(); ?>
            </section>

            <section class="leadership__team">
                <?php 
                
                if( have_rows('leadership_team_members') ):

                    while( have_rows('leadership_team_members') ) : the_row(); 
                    
                        $photo = get_sub_field('leadership_photo');
                        $name = get_sub_field('leadership_name');
                        $designation = get_sub_field('leadership_designation');
                        $linkedin = get_sub_field('leadership_linkedin');
                        $bio = get_sub_field('leadership_bio');


                    ?>
                        <div class="leadership__item mb-4">
                            <div class="member__details">
                                <img class="member__photo" src="<?= $photo['url']; ?>" alt="<?= $photo['alt']; ?>" />
                                <h2 class="pt-1"><?= $name; ?></h2>
                                <h3><?= $designation; ?></h3>
                                <span>
                                    <a href="<?= $linkedin; ?>" target="_blank">
                                        <img src="/wp-content/uploads/2023/04/linkedin-icon.svg" class="linkedin" alt="LinkedIn Icon">
                                    </a>
                                    
                                </span>
                            </div>

                            <div class="member__bio">
                                <?= $bio; ?>
                            </div>
                        </div>

                    <?php endwhile;

                // No value.
                else :
                    echo "No leadership members found in the database";
                endif;
                
                ?>
            </section>
        </main>    
	</div><!-- #primary -->

<?php get_footer(); ?>
