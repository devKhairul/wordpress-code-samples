<?php $video_copy = get_field('video_copy'); 

if ( $video_copy ) : ?>
    <section class="video">
        <?php if ( $video_copy ) : ?>
            <div class="video__content">
                <div class="video__content-text">
                    <?= $video_copy; ?>
                </div>
        <?php endif; ?>

        <?php if ( get_field('video_embed') ) : ?>
            <div class="video__content-video">
                <?= get_field('video_embed'); ?>
            </div>
        <?php endif; ?>
    </section> <!-- video section -->
<?php endif; ?>