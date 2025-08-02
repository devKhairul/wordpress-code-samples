<section class="intro">
    <?php $intro_content = get_field('intro_content'); 

    if ( $intro_content ) : ?>
        <div class="intro__content">
            <?= $intro_content; ?>
        </div>               
    <?php endif; ?>
</section>