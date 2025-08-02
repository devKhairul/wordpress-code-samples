<?php if ( get_field('cta_copy') ) : ?> 
    <section class="cta">
        <div class="cta__content">
            <div class="cta__content-text">
                <?= get_field('cta_copy'); ?>
            </div>

            <?php $cta_button = get_field('cta_button'); ?>

            <?php if ( $cta_button ) : ?>
                <div class="cta__content-btn">
                    <a href="<?= $cta_button['url']; ?>" target="<?= $cta_button['target']; ?>" class="outlined-btn">
                        <?= $cta_button['title']; ?> 
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </section> 
<?php endif; ?>