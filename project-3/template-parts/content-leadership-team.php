<?php if ( have_rows('leadership_team') ) : ?>
    <section class="leadership-team">
        <div class="ast-container">
            <div class="leadership-team__wrapper">
                <div class="leadership-team__content">
                    <h2>Meet Our Leadership Team</h2>
                </div>

                <div class="leadership-team__cards">
                    <?php while ( have_rows('leadership_team') ) : the_row();  ?>
                    
                        <?php $leadership_photo = get_sub_field('leadership_photo'); ?>
                    
                        <div class="leadership-card">
                            <img src="<?= $leadership_photo['url'] ?>" alt="<?= $leadership_photo['alt'] ?>">
                            
                            <div>
                                <h3><?= get_sub_field('leadership_name') ?></h3>
                                <h4><?= get_sub_field('leadership_title') ?></h4>
                            </div>
                            
                            <div>
                                <?= get_sub_field('leadership_bio') ?>
                            </div>
                        </div>

                    <?php endwhile ?>
                </div> <!-- .leaderships__cards -->

                <?php if ( get_field('leadership_section_url') ) : ?>
                    <?php $leadership_section_url = get_field('leadership_section_url'); ?>
                    
                    <div class="leadership-team__footer">
                        <a href="<?= $leadership_section_url['url'] ?>" class="leadership-card__link">
                            <span><?= $leadership_section_url['title'] ?></span>
                        </a>
                    </div>
                <?php endif; ?>
            </div> <!-- .leaderships__wrapper -->
        </div> <!-- .ast-container -->
    </section> <!-- .leaderships -->
<?php endif; ?>