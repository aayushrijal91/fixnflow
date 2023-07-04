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
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                centerPadding: "60px",
                                slidesToShow: 2,
                            }
                        },
                        {
                            breakpoint: 540,
                            settings: {
                                centerPadding: "20px",
                                slidesToShow: 1,
                            }
                        }
                    ]
                });

                $('#homepage_testimonial_slider_1').slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    arrows: false,
                    centerMode: true,
                    centerPadding: '220px',
                    autoplay: true,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                centerPadding: "60px",
                                slidesToShow: 2,
                            }
                        },
                        {
                            breakpoint: 540,
                            settings: {
                                centerPadding: "20px",
                                slidesToShow: 1,
                            }
                        }
                    ]
                });

                $('#brand_slider').slick({
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    arrows: false,
                    autoplay: true,
                    responsive: [
                        {
                            breakpoint: 540,
                            settings: {
                                slidesToShow: 3,
                            }
                        }
                    ]
                })

                $('#homepage_testimonial_slider_2').slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    arrows: false,
                    centerMode: true,
                    autoplay: true,
                    centerPadding: '150px',
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                centerPadding: "40px",
                                slidesToShow: 2,
                            }
                        },
                        {
                            breakpoint: 540,
                            settings: {
                                centerPadding: "40px",
                                slidesToShow: 1,
                            }
                        }
                    ]
                })

                scrollBehaviour();

                $(window).on('scroll', () => {
                    scrollBehaviour();
                    // if ($(this).scrollTop() >= 600) {
                    //     $('#return-to-top').fadeIn(300);
                    // } else {
                    //     $('#return-to-top').fadeOut(300);
                    // }
                });

                function scrollBehaviour() {
                    if ($(window).scrollTop() >= 50) {
                        $('.navigation_bar').addClass('scrolled');
                    } else {
                        $('.navigation_bar').removeClass('scrolled');
                    }
                }

                // $('#return-to-top').on('click', () => {
                //     $('body,html').animate({
                //         scrollTop: 0
                //     }, 500);
                // });




            }, // end misc
        }, // end ui
        //utils: {

        //}, // end utils
    };
    Engine.ui.misc();
    //Engine.utils.sliders();
});