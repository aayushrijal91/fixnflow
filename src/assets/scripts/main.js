// ie: Engine.ui.misc();
jQuery(function ($) {
    "use strict";
    var Engine = {
        ui: {
            misc: function () {
                AOS.init({ duration: 1500, });

                $('#homepage_service_slider').slick({
                    slidesToShow: 3,
                    arrows: false,
                    centerMode: true,
                    centerPadding: "200px",
                    slidesToScroll: 1,
                })

                $(window).on('scroll', () => {
                    if ($(this).scrollTop() >= 600) {
                        $('#return-to-top').fadeIn(300);
                    } else {
                        $('#return-to-top').fadeOut(300);
                    }
                });

                $('#return-to-top').on('click', () => {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 500);
                });
            }, // end misc
        }, // end ui
        //utils: {

        //}, // end utils
    };
    Engine.ui.misc();
    //Engine.utils.sliders();
});