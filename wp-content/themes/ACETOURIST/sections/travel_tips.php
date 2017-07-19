<div class="one withsmallpadding withbg "
     style="background-image:url('<?php echo get_template_directory_uri() . '/images/1600x1200-15.jpg' ?>');background-size:cover;margin-top:-1px;">
    <div class="page_content_wrapper fullwidth" style="text-align:center">
        <h2 class="ppb_title-4">
            <?php echo get_field('travel_tips_title' , 'option') ?>
        </h2>






        <div id="blog_grid_wrapper" class="sidebar_content full_width ppb_blog_posts" style="text-align:left">
            <?php while(have_rows('slider_gallery' , 'option')) : the_row() ?>
            <div data-toggle="modal" data-target="#<?php echo get_sub_field('slug' , 'option') ?>">
                <div id="post-2720" class="post type-post hentry status-publish" >
                <div class="post_wrapper grid_layout" style="background-image:url('<?php echo get_sub_field('images' , 'option') ?>');">
                    <div class="parallax_overlay_header"></div>
                    <div class="grid_wrapper">
                        <div class="post_header grid">
                            <a href="javascript:" >
                                <h6><?php echo get_sub_field('title' , 'option') ?>
                                </h6>
                            </a>
<!--                            <div class="post_detail">-->
<!--                                --><?php //the_date() ?>
<!--                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <?php endwhile; ?>

            <?php while(have_rows('slider_gallery' , 'option')) : the_row() ?>
            <div class="modal fade" id="<?php echo get_sub_field('slug' , 'option') ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="gallery_image_slider">
                                <?php while(have_rows('gallery_image_slider' , 'option')) : the_row() ?>
                                <div class="gallery_image_slider_img">
                                    <div class="gallery_image_slider_bg_img" style="background: url('<?php echo get_sub_field('image' , 'option') ?>') no-repeat; background-size: cover;background-position: center center;">
                                    </div>
                                </div>
                                <?php endwhile;?>
                            </div>
                            <div class="click_out" data-dismiss="modal">
                                x
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>


        </div>

        <br class="clear"/></div>
</div>
