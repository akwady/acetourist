<div class="one withsmallpadding ">
    <div class="container" style="text-align:center">
        <h2 class="ppb_title-3">
            <?php echo get_field('what_customers_say_title' , 'option') ?>
        </h2>
        <br>
        <div id="what_customers_say_slider" >
            <?php while(have_rows('what_customers_say_slider' , 'option')) : the_row() ?>
                <div class="item what_customers_say_slider_all ">
                    <div class="what_customers_say_slider_text">
                        <?php echo get_sub_field('what_customers_say_slider_text' , 'option') ?>
                    </div>
                    <div class="what_customers_say_slider_author">
                        <span><?php echo get_sub_field('what_customers_say_slider_author' , 'option') ?></span>
                        <span><?php echo get_sub_field('what_customers_say_slider_career' , 'option') ?></span>
                    </div>
                </div>
            <?php endwhile;?>
        </div>
    </div>
</div>