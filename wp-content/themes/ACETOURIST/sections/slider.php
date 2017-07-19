<div class="page_slider menu_transparent">
    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container"
         style="background-color:#000000;padding:0px;">
        <!-- START REVOLUTION SLIDER 4.6.5 fullscreen mode -->
        <div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;">
            <ul>    <!-- SLIDE  -->
                <?php while(have_rows('slider_header' , 'option')) : the_row() ?>

                <li data-transition="zoomout" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                    <!-- MAIN IMAGE -->
                    <img src="<?php echo get_sub_field('slider_images' , 'option') ?>
                    "
                         alt="1600x1200-1" data-bgposition="center bottom" data-bgfit="cover"
                         data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption pp_subheader sfl stl tp-resizeme"
                         data-x="center" data-hoffset="0"
                         data-y="bottom" data-voffset="-300"
                         data-speed="600"
                         data-start="1000"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="600"

                         style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">

                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption pp_header sfr str tp-resizeme"
                         data-x="center" data-hoffset="0"
                         data-y="bottom" data-voffset="-180"
                         data-speed="600"
                         data-start="1300"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="600"

                         style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">
                        <?php echo get_sub_field('slider_title' , 'option') ?>
                        </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption pp_content sfb stb tp-resizeme"
                         data-x="center" data-hoffset="0"
                         data-y="bottom" data-voffset="-100"
                         data-speed="600"
                         data-start="1600"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="600"

                         style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
<!--                        Arctic-->
<!--                        temperatures and several meters of snow<br/>-->
<!--                        are no match for the natural impressions and cultural twist <br/>-->
<!--                        that will warm your soul while dog sledding in Greenland.<br/>-->
                    </div>
                </li>

                <?php endwhile; ?>
                <!-- SLIDE  -->
            </ul>





        </div>




        <script type="text/javascript">

            /******************************************
             -    PREPARE PLACEHOLDER FOR SLIDER    -
             ******************************************/


            var setREVStartSize = function () {
                var tpopt = new Object();
                tpopt.startwidth = 960;
                tpopt.startheight = 0;
                tpopt.container = jQuery('#rev_slider_1_1');
                tpopt.fullScreen = "on";
                tpopt.forceFullWidth = "off";

                tpopt.container.closest(".rev_slider_wrapper").css({height: tpopt.container.height()});
                tpopt.width = parseInt(tpopt.container.width(), 0);
                tpopt.height = parseInt(tpopt.container.height(), 0);
                tpopt.bw = tpopt.width / tpopt.startwidth;
                tpopt.bh = tpopt.height / tpopt.startheight;
                if (tpopt.bh > tpopt.bw) tpopt.bh = tpopt.bw;
                if (tpopt.bh < tpopt.bw) tpopt.bw = tpopt.bh;
                if (tpopt.bw < tpopt.bh) tpopt.bh = tpopt.bw;
                if (tpopt.bh > 1) {
                    tpopt.bw = 1;
                    tpopt.bh = 1
                }
                if (tpopt.bw > 1) {
                    tpopt.bw = 1;
                    tpopt.bh = 1
                }
                tpopt.height = Math.round(tpopt.startheight * (tpopt.width / tpopt.startwidth));
                if (tpopt.height > tpopt.startheight && tpopt.autoHeight != "on") tpopt.height = tpopt.startheight;
                if (tpopt.fullScreen == "on") {
                    tpopt.height = tpopt.bw * tpopt.startheight;
                    var cow = tpopt.container.parent().width();
                    var coh = jQuery(window).height();
                    if (tpopt.fullScreenOffsetContainer != undefined) {
                        try {
                            var offcontainers = tpopt.fullScreenOffsetContainer.split(",");
                            jQuery.each(offcontainers, function (e, t) {
                                coh = coh - jQuery(t).outerHeight(true);
                                if (coh < tpopt.minFullScreenHeight) coh = tpopt.minFullScreenHeight
                            })
                        } catch (e) {
                        }
                    }
                    tpopt.container.parent().height(coh);
                    tpopt.container.height(coh);
                    tpopt.container.closest(".rev_slider_wrapper").height(coh);
                    tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);
                    tpopt.container.css({height: "100%"});
                    tpopt.height = coh;
                } else {
                    tpopt.container.height(tpopt.height);
                    tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);
                    tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);
                }
            };

            /* CALL PLACEHOLDER */
            setREVStartSize();


            var tpj = jQuery;
            tpj.noConflict();
            var revapi1;

            tpj(document).ready(function () {

                if (tpj('#rev_slider_1_1').revolution == undefined) {
                    revslider_showDoubleJqueryError('#rev_slider_1_1');
                } else {
                    revapi1 = tpj('#rev_slider_1_1').show().revolution(
                        {
                            dottedOverlay: "none",
                            delay: 9000,
                            startwidth: 960,
                            startheight: 0,
                            hideThumbs: 200,

                            thumbWidth: 100,
                            thumbHeight: 50,
                            thumbAmount: 3,


                            simplifyAll: "off",

                            navigationType: "bullet",
                            navigationArrows: "solo",
                            navigationStyle: "round",

                            touchenabled: "on",
                            onHoverStop: "on",
                            nextSlideOnWindowFocus: "off",

                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            drag_block_vertical: false,


                            keyboardNavigation: "off",

                            navigationHAlign: "center",
                            navigationVAlign: "bottom",
                            navigationHOffset: 0,
                            navigationVOffset: 20,

                            soloArrowLeftHalign: "left",
                            soloArrowLeftValign: "center",
                            soloArrowLeftHOffset: 20,
                            soloArrowLeftVOffset: 0,

                            soloArrowRightHalign: "right",
                            soloArrowRightValign: "center",
                            soloArrowRightHOffset: 20,
                            soloArrowRightVOffset: 0,

                            shadow: 0,
                            fullWidth: "off",
                            fullScreen: "on",

                            spinner: "spinner2",

                            stopLoop: "off",
                            stopAfterLoops: -1,
                            stopAtSlide: -1,

                            shuffle: "off",


                            forceFullWidth: "off",
                            fullScreenAlignForce: "off",
                            minFullScreenHeight: "",
                            hideTimerBar: "on",
                            hideThumbsOnMobile: "off",
                            hideNavDelayOnMobile: 1500,
                            hideBulletsOnMobile: "off",
                            hideArrowsOnMobile: "off",
                            hideThumbsUnderResolution: 0,

                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            startWithSlide: 0
                        });


                }
            });
            /*ready*/

        </script>



    </div><!-- END REVOLUTION SLIDER --></div>