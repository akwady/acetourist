jQuery(document).ready(function($) {

    $("#what_customers_say_slider").owlCarousel({
        rewindNav: true,
        autoPlay: true,
        navigationText: ["", ""],
        loop:true,
        itemsCustom : [
            [0, 1],
            [450, 1],
            [500, 1],
            [768, 1],
            [1024, 1],
            [1200, 1],
            [1400, 1],
            [1600, 1]
        ],
        navigation : false
    });
    $("#other_tours_slider").owlCarousel({
        rewindNav: true,
        autoPlay: true,
        navigationText: ["", ""],
        loop:true,
        itemsCustom : [
            [0, 1],
            [450, 1],
            [500, 1],
            [768, 2],
            [1024, 3],
            [1200, 3],
            [1400, 3],
            [1600, 3]
        ],
        navigation : false
    });

    $(".gallery_image_slider").owlCarousel({
        rewindNav: true,
        autoPlay: true,
        navigationText: ["", ""],
        loop:true,
        itemsCustom : [
            [0, 1],
            [450, 1],
            [500, 1],
            [768, 1],
            [1024, 1],
            [1200, 1],
            [1400, 1],
            [1600, 1]
        ],
        navigation : true
    });
    $('.gallery_image_slider .owl-prev').html('<i class="fa fa-angle-left" aria-hidden="true"></i>');
    $('.gallery_image_slider .owl-next').html('<i class="fa fa-angle-right" aria-hidden="true"></i>');





    var Heightmenu = $(".menu-logo-header").offset().top;

    $(window).scroll(function(){
        var scroll = $(this).scrollTop();
        if(scroll > Heightmenu+30){
            $(".menu-logo-header").addClass('activeScroll');
        }else{
            $(".menu-logo-header").removeClass('activeScroll');
        }
    });
    function activeMenu(field){
        var url = window.location.href;
        field.each(function(){
            var url_current = this.href+"/";
            if( url_current == url){
                $(this).closest('li').addClass("active_menu");
            }
        });
    }
    activeMenu($(".category-all li a"));


});
