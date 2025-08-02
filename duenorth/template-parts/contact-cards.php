
    <?php 
    
    if( have_rows('contact_us') ):

        while( have_rows('contact_us') ) : the_row(); 
        
            $icon = get_sub_field('c_icon');
            $title = get_sub_field('c_title');
            $button_label = get_sub_field('c_button_label');
            $button_url = get_sub_field('c_button_url');
        ?>
            <div class="contact__item mb-4">
                <div class="contact__item--icon">
                    <img class="member__photo" src="<?= $icon['url']; ?>" alt="<?= $icon['alt']; ?>" width="80" />
                </div>
            
                <div class="contact__item--title mt-1">
                    <h2 class="title">
                        <?= $title; ?>
                    </h2>
                </div>

                <div class="contact__item--button mt-2">
                    <a href="<?= $button_url; ?>" class="btn btn-sm mt-6 pt-4">
                        <?= $button_label; ?>
                    </a>
                </div>    
            </div>
        <?php endwhile;
    endif;               
    ?>
