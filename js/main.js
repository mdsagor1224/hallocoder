jQuery(document).ready(function($){
    jQuery('.slider').bxSlider({
        auto: true,
        autoControls: true,
        stopAutoOnClick: true,
        pager: true,
    });

    jQuery("#owl-slider").owlCarousel({
        autoplay: true,
        items:1,
    });
});