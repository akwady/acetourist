<div class="one withsmallpadding withbg parallax background_why">
    <div class="container" style="text-align:center">
        <h2 class="ppb_title-2">
            <?php echo get_field('why_choose_us_title' , 'option') ?>
        </h2>
        <div style="height:20px"></div>
        <br/>
        <div class="service_content_wrapper ">
            <?php while(have_rows('one_third' , 'option')) : the_row() ?>

            <div class="one_third ">
                <div class="service_wrapper">
                    <div class="service_icon">
                        <i class="<?php echo get_sub_field('class_icon' , 'option') ?>  "></i>
                    </div>
                    <div class="service_title">
                        <h3>
                            <?php echo get_sub_field('one_third_title' , 'option') ?>

                        </h3>
                        <div class="service_content">
                            <?php echo get_sub_field('one_third_text' , 'option') ?>
                            <a href="<?php echo get_sub_field('link' , 'option') ?>">learn more</a></div>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>
            <br class="clear"/><br/></div>
        <br class="clear"/></div>
</div>
