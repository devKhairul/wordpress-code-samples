<div class="specialists__intro">
    <?= the_field('ss_intro'); ?>
</div>

<div class="specialists mt-4">
    <?php while ( have_rows('sales_speacialists') ) : the_row() ?>
        
    <?php 
        // Get sub fields
        $photo = get_sub_field('ss_photo');
        $name = get_sub_field('ss_name');
        $designation = get_sub_field('ss_designation');
        $email = get_sub_field('ss_email');
        $phone = get_sub_field('ss_phone');
    ?>
    
    <div class="specialists__member">
        
        <img src="<?= $photo['url']; ?>" alt="<?= $photo['alt']; ?>" class="specialists__member__photo">
        

        <div class="specialists__member__details">
            <div>
                <h2>
                    <strong><?= $name; ?></strong>
                </h2>
            </div>
            
            <div>
                <h3><?= $designation?></h3>
            </div>

            <div>
                <a href="mailto:<?= $email; ?>"><?= $email; ?></a>
            </div>
            
            <div>
                <a href="tel:+<?= $phone; ?>"><?= $phone; ?></a>
            </div>
        </div>
        
    </div>


    <?php endwhile; ?>
</div>
