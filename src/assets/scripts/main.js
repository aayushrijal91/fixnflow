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
                            breakpoint: 1100,
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

                AOS.refresh();

                $('#homepage_testimonial_slider_1').slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    arrows: false,
                    centerMode: true,
                    centerPadding: '220px',
                    autoplay: true,
                    responsive: [
                        {
                            breakpoint: 1600,
                            settings: {
                                centerPadding: "150px",
                                slidesToShow: 3,
                            }
                        },
                        {
                            breakpoint: 1100,
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

                AOS.refresh();

                $('#brand_slider').slick({
                    slidesToShow: 5,
                    cssEase: 'linear',
                    speed: 1500,
                    autoplaySpeed: 0,
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
                });

                AOS.refresh();

                $('#homepage_testimonial_slider_2').slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    arrows: false,
                    centerMode: true,
                    autoplay: true,
                    centerPadding: '150px',
                    responsive: [
                        {
                            breakpoint: 1600,
                            settings: {
                                centerPadding: "100px",
                                slidesToShow: 3,
                            }
                        },
                        {
                            breakpoint: 1100,
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
                });

                AOS.refresh();

                let teamSlider1 = $("#team_slider_1").slick({
                    slidesToShow: 2,
                    centerMode: true,
                    centerPadding: "400px",
                    arrows: false,
                    infinite: false,
                    initialSlide: 2,
                    draggable: false,
                });

                $('#gotoTeam1_1').on('click', function () {
                    teamSlider1.slick('slickGoTo', 1);
                    $('#team_slider_1 .team_card_1').css('opacity', 1);
                    $('#team_slider_1 .team_card_4').css('opacity', 0);
                })

                $('#gotoTeam1_4').on('click', function () {
                    teamSlider1.slick('slickGoTo', 4);
                    $('#team_slider_1 .team_card_4').css('opacity', 1);
                    $('#team_slider_1 .team_card_1').css('opacity', 0);
                })

                let teamSlider2 = $("#team_slider_2").slick({
                    slidesToShow: 2,
                    centerMode: true,
                    centerPadding: "400px",
                    arrows: false,
                    infinite: false,
                    initialSlide: 2,
                    draggable: false,
                });

                AOS.refresh();

                $('#gotoTeam2_1').on('click', function () {
                    teamSlider2.slick('slickGoTo', 1);
                    $('#team_slider_2 .team_card_1').css('opacity', 1);
                    $('#team_slider_2 .team_card_4').css('opacity', 0);
                })

                $('#gotoTeam2_4').on('click', function () {
                    teamSlider2.slick('slickGoTo', 4);
                    $('#team_slider_2 .team_card_4').css('opacity', 1);
                    $('#team_slider_2 .team_card_1').css('opacity', 0);
                })

                let teamSlider3 = $("#team_slider_3").slick({
                    slidesToShow: 2,
                    centerMode: true,
                    centerPadding: "400px",
                    arrows: false,
                    infinite: false,
                    initialSlide: 2,
                    draggable: false,
                });

                AOS.refresh();

                $('#gotoTeam3_1').on('click', function () {
                    teamSlider3.slick('slickGoTo', 1);
                    $('#team_slider_3 .team_card_1').css('opacity', 1);
                    $('#team_slider_3 .team_card_4').css('opacity', 0);
                })

                $('#gotoTeam3_4').on('click', function () {
                    teamSlider3.slick('slickGoTo', 4);
                    $('#team_slider_3 .team_card_4').css('opacity', 1);
                    $('#team_slider_3 .team_card_1').css('opacity', 0);
                })

                AOS.refresh();

                $('.part_contactus_services').slick({
                    variableWidth: true,
                    draggable: false,
                    autoplay: true,
                    slidesToScroll: 1,
                    cssEase: 'linear',
                    speed: 2000,
                    autoplaySpeed: 0,
                    rtl: false
                })

                scrollBehaviour();

                $(window).on('scroll', () => {
                    scrollBehaviour();
                });

                function scrollBehaviour() {
                    if ($(window).scrollTop() >= 50) {
                        $('.navigation_bar').addClass('scrolled');
                    } else {
                        $('.navigation_bar').removeClass('scrolled');
                    }
                }

                $(".accordion-head").on('click', function () {
                    $(".accordion-head").removeClass("active");
                    $(this).addClass('active');

                    if ($('.accordion-body').is(':visible')) {
                        $(".accordion-body").slideUp(300);
                    }
                    if ($(this).next(".accordion-body").is(':visible')) {
                        $(this).next(".accordion-body").slideUp(300);
                    } else {
                        $(this).next(".accordion-body").slideDown(300);
                    }

                    $(".accordion-head").find('.plusminus').html('<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.0723 1.99902V23.0237" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><path d="M1.56006 12.5112H22.5847" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>');
                    $(".accordion-head.active").find('.plusminus').html('<svg width="25" height="4" viewBox="0 0 25 4" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.56055 1.81152H22.5852" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>');
                });

            }, // end misc
        }, // end ui
        //utils: {

        //}, // end utils
    };
    Engine.ui.misc();
    //Engine.utils.sliders();
});