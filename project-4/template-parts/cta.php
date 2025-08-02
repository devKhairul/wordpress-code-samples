<!-- CTA -->

    <div class="cta__title">
        <h2 class="title"><?= the_field('cta_title'); ?></h2>
    </div>

    <div class="cta__description py-1">
        <?= the_field('cta_text'); ?>
    </div>

    <div class="cta__button">
        <a href="<?= the_field('cta_url'); ?>" role="button" class="btn btn-sm">
            <?= the_field('cta_button_label'); ?>
        </a>
    </div>

<!-- CTA -->