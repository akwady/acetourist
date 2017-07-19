<div class="header_style_wrapper">

    <div class="top_bar  hasbg ">

        <div class="container">
            <!-- Begin logo -->
            <a id="custom_logo_transparent" class="logo_wrapper default"
               href="<?php echo get_home_url() ?>">
                <img src="<?php echo get_field('logo_header' , 'option') ?>" alt="" width="69" height="33"/>
            </a>
            <!-- End logo -->
            <a href="tel:<?php echo get_field('phone_header' , 'option') ?>">
                <div class="header_action">
                    <i class="fa fa-phone"></i>
                    <?php echo get_field('phone_header' , 'option') ?>
                </div>
            </a>
            <!-- Begin main nav -->
            <div id="nav_wrapper" class="menu_home">
                <div class="nav_wrapper_inner">
                    <div id="menu_border_wrapper">
                        <div class="menu-main-menu-container">
                            <?php wp_nav_menu(['theme-location' => 'main_menu']) ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End main nav -->

        </div>
    </div>
</div>