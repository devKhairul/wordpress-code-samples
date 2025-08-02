<?php if ( have_rows('featured_creators') ) : ?>
    <section class="featured-creators">
        <div class="ast-container">
            <div class="featured-creators__wrapper">
                <div class="featured-creators__content">
                    <h2>Meet Some of Our Creators</h2>
                </div>

                <div class="featured-creators__cards">
                    <?php while ( have_rows('featured_creators') ) : the_row();  ?>
                        <?php $creator_image = get_sub_field('creator_photo'); ?>
                        
                        <div class="creator-card">
                            <img src="<?= $creator_image['url'] ?>" alt="<?= $creator_image['alt'] ?>">
                            
                            <h3><?= get_sub_field('creator_name') ?></h3>
                            
                            <?= get_sub_field('creator_description') ?>
                        </div>
                    <?php endwhile ?>
                </div>

                <?php if ( get_field('fc_url') ) : ?>
                    <?php $fc_url = get_field('fc_url'); ?>
                    
                    <div class="featured-creators__footer">
                        <a href="<?= $fc_url['url'] ?>" class="creator-card__link"><span><?= $fc_url['title'] ?></span></a>
                    </div>
                <?php endif; ?>
            </div> <!-- .creators__wrapper -->
        </div> <!-- .ast-container -->
    </section> <!-- .creators -->

<?php endif; ?>