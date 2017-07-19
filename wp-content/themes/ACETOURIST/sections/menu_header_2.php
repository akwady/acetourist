<div class="header_style_wrapper menu-logo-header">

    <div class="top_bar  hasbg menu-logo-header ">

        <div  class="menu_header_1 container">
            <!-- Begin logo -->
            <a id="custom_logo" class="logo_wrapper"
               href="<?php echo get_home_url() ?>">
                <img src="<?php echo get_field('logo_header_2' , 'option') ?>" alt="" width="69" height="33"/>
            </a>
            <!-- End logo -->
            <a href="tel:<?php echo get_field('phone_header' , 'option') ?>">
                <div class="header_action">
                    <i class="fa fa-phone"></i>
                    <?php echo get_field('phone_header' , 'option') ?>
                </div>
            </a>
            <!-- Begin main nav -->
            <div id="nav_wrapper" class="menu_header_2 menu_home">
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