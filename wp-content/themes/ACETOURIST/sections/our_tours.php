<div class="ppb_wrapper  ">
    <div class="ppb_tour one withpadding " style="border-top:1px solid #e1e1e1;">
        <div class="container full_width" style="text-align:center">
            <h2 class="ppb_title">
                <?php echo get_field('our_tours_title' , 'option') ?>
            </h2>



            <div class="page_caption_desc">
                <?php echo get_field('our_tours_excerpt' , 'option') ?>
            </div>

            <div class="page_post">
                <?php while(have_rows('page_post' , 'option')) : the_row() ?>

                <div class="col-mgt">
                    <div class="page_post-img">
                        <a href="<?php echo get_sub_field('link' , 'option') ?>">
                            <img src="<?php echo get_sub_field('image' , 'option') ?> " alt="">
                        </a>
                        <div class="page_post_thumb">
                            <div class="page_post_thumb_title">
                                <?php echo get_sub_field('title' , 'option') ?>
                            </div>
                            <div class="page_post_thumb_old">
                                <?php echo get_sub_field('old' , 'option') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>

            </div>


        </div>
    </div>

</div>


