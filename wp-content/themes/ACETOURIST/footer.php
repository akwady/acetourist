</body>

<footer id="app-footer">
    <div class="footer_bar ">
        <div id="footer" class="">
            <div class="container">
                <ul class="sidebar_widget four">
                    <li id="text-2" class="widget widget_text">
                        <div class="textwidget">
                            <div style="text-align:left;margin-top:10px;">
                                <img src="<?php echo get_field('logo_footer', 'option') ?>" alt=""
                                     style="max-width:100px;"/>
                                <div style="margin-top:10px;">
                                    <?php echo get_field('title_company', 'option') ?>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="text-3" class="widget widget_text">
                        <h2 class="widgettitle"><?php echo get_field('contact_info', 'option') ?>
                        </h2>


                        <div class="textwidget">
                            <ul class="address">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <?php echo get_field('address', 'option') ?>

                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <?php echo get_field('phone_1', 'option') ?>
                                </li>
                                <li>
                                    <i class="fa fa-mobile"></i>
                                    <?php echo get_field('phone_2', 'option') ?>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i><?php echo get_field('email', 'option') ?>
                                </li>
                                <li>
                                    <i class="fa fa-globe"></i>
                                    <?php echo get_field('website', 'option') ?>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li id="tag_cloud-5" class="widget widget_tag_cloud">
                        <h2 class="widgettitle"><?php echo get_field('tags', 'option') ?>
                        </h2>
                        <div class="tagcloud">
                            <?php while (have_rows('tags_page', 'option')) : the_row() ?>
                                <a href='<?php echo get_sub_field('link', 'option') ?>'
                                   class='tag-link-5 tag-link-position-1' title='7 topics'
                                   style='font-size: 13px;'>
                                    <?php echo get_sub_field('title', 'option') ?>

                                </a>
                            <?php endwhile; ?>
                        </div>
                    </li>
                </ul>
            </div>

            <br class="clear"/>
        </div>

        <div class="footer_bar_wrapper container ">
            <div class="social_wrapper">
                <ul>
                    <li class="facebook">
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="twitter">
                        <a href="">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="flickr">
                        <a title="Flickr" href="">
                            <i class="fa fa-flickr"></i>
                        </a>
                    </li>
                    <li class="youtube">
                        <a title="Youtube" href="">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </li>
                    <li class="vimeo">
                        <a title="Vimeo" href="">
                            <i class="fa fa-vimeo-square"></i>
                        </a>
                    </li>
                    <li class="google">
                        <a title="Google+" href="#">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li class="pinterest">
                        <a title="Pinterest" href="">
                            <i class="fa fa-pinterest"></i>
                        </a>
                    </li>
                    <li class="instagram">
                        <a title="Instagram" href="">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="copyright">© Copyright Halozend</div>
            <br class="clear"/>
            <div id="toTop"><i class="fa fa-angle-up"></i></div>
        </div>
    </div>
    <?php wp_footer() ?>
</footer>

</html>