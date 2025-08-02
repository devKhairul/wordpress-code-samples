<?php if ( get_field('cta_text') ) : ?>
    <section class="cta">
        <div class="ast-container">
            <div class="cta__wrapper">
                <?php 
                    $cta_image = get_field('cta_image');
                    $cta_text = get_field('cta_text');
                    $cta_url = get_field('cta_url');
                ?>
                <?php if ($cta_image) : ?>
                    <img src="<?= $cta_image['url'] ?>" alt="<?= $cta_image['alt'] ?>">
                <?php endif; ?>

                <?php if ($cta_text) : ?>
                    <?= $cta_text ?>
                <?php endif; ?>

                <?php if ($cta_url) : ?>
                    <a href="<?= $cta_url['url'] ?>"><span><?= $cta_url['title'] ?></span></a>
                <?php endif; ?>
            </div> <!-- .cta__wrapper -->
        </div> <!-- .ast-container -->
    </section> <!-- .cta -->
<?php endif; ?>