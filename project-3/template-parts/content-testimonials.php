<?php if ( have_rows('testimonials') ) : ?>
    <section class="testimonials">
        <div class="ast-container">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php while ( have_rows('testimonials') ) : the_row(); ?>
                        
                        <?php
                            $testimonial_logo = get_sub_field('testimonial_logo');
                            $testimonial_heading = get_sub_field('testimonial_heading');
                            $testimonial_comment = get_sub_field('testimonial_comment');
                            $testimonial_author = get_sub_field('testimonial_author');  ?>
                            
                        <div class="swiper-slide slide-content">
                            <?php if ($testimonial_logo) : ?>
                                <div class="slide-logo__wrapper">
                                    <img src="<?= $testimonial_logo['url'] ?>" alt="<?= $testimonial_logo['alt'] ?>" class="slide-logo" />
                                </div>
                            <?php endif; ?>
                            
                            <div class="slide-content__wrapper">
                                <?php if ($testimonial_heading) : ?>
                                    <h2><?= $testimonial_heading ?></h2>
                                <?php endif; ?>

                                <?php if ($testimonial_comment) : ?>
                                    <?= $testimonial_comment ?>
                                <?php endif; ?>
                            </div>
                            
                            <?php if ($testimonial_author) : ?>
                                <div class="slide-author__wrapper">
                                    <div class="slide-author">
                                        <?= $testimonial_author ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div> <!-- .swiper-slide -->
                    <?php endwhile; ?>
                </div> <!-- .swiper-wrapper -->

                <!-- Pagination (dot navigation) -->
                <div class="swiper-pagination"></div>
            </div> <!-- .swiper -->
        </div> <!-- .ast-container -->
    </section>
<?php endif; ?>