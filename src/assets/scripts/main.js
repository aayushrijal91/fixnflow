// ie: Engine.ui.misc();
jQuery(function ($) {
    "use strict";
    var Engine = {
        ui: {
            misc: function () {
                AOS.init({ duration: 1500, });

                let areasData;
                let areasDataFetchError = false;

                $.ajax({
                    url: '/wp-json/api/areas',
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        areasData = data;
                    },
                    error: function (error) {
                        areasDataFetchError = true;
                        console.error('Error fetching data:', error);
                    }
                });

                $('#checkServiceAreaForm').on('submit', function (e) {
                    e.preventDefault();

                    let areaValue = $('input[name="area"]').val();
                    const checkServiceAreaForm = $(this).parents('.checkServiceAreaForm');
                    const noService = checkServiceAreaForm.find('.noService');
                    const yesService = checkServiceAreaForm.find('.yesService');

                    if (areasDataFetchError) {
                        $(this).parents('.checkServiceAreaForm').find('.dataFetchError').removeClass('hidden');
                        noService.addClass('hidden');
                        yesService.addClass('hidden');

                        return;
                    }

                    if (checkSimilarArea(areaValue)) {
                        yesService.removeClass('hidden');
                        noService.addClass('hidden');
                    } else {
                        noService.removeClass('hidden');
                        yesService.addClass('hidden');
                    }
                });

                function checkSimilarArea(areaValue) {
                    const preparedAreaValue = areaValue.toLowerCase().replace(/\s/g, "");

                    const similarMatches = [];

                    areasData.forEach(item => {
                        const preparedItem = item.toLowerCase().replace(/\s/g, "");
                        const similarityRatio = stringSimilarity.compareTwoStrings(preparedAreaValue, preparedItem);

                        if (similarityRatio >= 0.6) {
                            similarMatches.push(item);
                        }
                    });

                    return (similarMatches.length >= 1);
                }

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

                let teamSlider0 = $("#team_slider_0").slick({
                    slidesToShow: 2,
                    centerMode: true,
                    centerPadding: "400px",
                    arrows: false,
                    infinite: false,
                    initialSlide: 2,
                    draggable: false,
                    responsive: [
                        {
                            breakpoint: 1600,
                            settings: {
                                centerPadding: "150px"
                            }
                        }
                    ]
                });

                $('#gotoTeam0_1').on('click', function () {
                    teamSlider0.slick('slickGoTo', 1);
                    $('#team_slider_0 .team_card_1').css('opacity', 1);
                    $('#team_slider_0 .team_card_4').css('opacity', 0);
                });

                $('#gotoTeam0_4').on('click', function () {
                    teamSlider0.slick('slickGoTo', 4);
                    $('#team_slider_0 .team_card_4').css('opacity', 1);
                    $('#team_slider_0 .team_card_1').css('opacity', 0);
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
                    responsive: [
                        {
                            breakpoint: 1600,
                            settings: {
                                centerPadding: "150px"
                            }
                        }
                    ]
                });

                AOS.refresh();

                $('#gotoTeam1_1').on('click', function () {
                    teamSlider1.slick('slickGoTo', 1);
                    $('#team_slider_1 .team_card_1').css('opacity', 1);
                    $('#team_slider_1 .team_card_4').css('opacity', 0);
                });

                $('#gotoTeam1_4').on('click', function () {
                    teamSlider1.slick('slickGoTo', 4);
                    $('#team_slider_1 .team_card_4').css('opacity', 1);
                    $('#team_slider_1 .team_card_1').css('opacity', 0);
                });

                let teamSlider2 = $("#team_slider_2").slick({
                    slidesToShow: 2,
                    centerMode: true,
                    centerPadding: "400px",
                    arrows: false,
                    infinite: false,
                    initialSlide: 2,
                    draggable: false,
                    responsive: [
                        {
                            breakpoint: 1600,
                            settings: {
                                centerPadding: "150px"
                            }
                        }
                    ]
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
                    responsive: [
                        {
                            breakpoint: 1600,
                            settings: {
                                centerPadding: "150px"
                            }
                        }
                    ]
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

                AOS.refresh();

                let bookingFormSlider = $('#bookingFormSlider').slick({
                    slidesToShow: 1,
                    arrows: false,
                    draggable: false,
                    adaptiveHeight: true,
                });

                AOS.refresh();

                $('ul.formTypeSlider li.slide').width($('ul.formTypeSlider li:nth-child(1)').width());

                $('.formTypeSliderBtn').on('click', function () {
                    $(this).parents('li').siblings().removeClass("active");
                    $(this).parents('li').addClass('active');

                    $('ul.formTypeSlider li:nth-child(1).active ~ .slide').width($('ul.formTypeSlider li:nth-child(1)').width());
                    $('ul.formTypeSlider li:nth-child(1).active ~ .slide').css('left', 0);
                    $('ul.formTypeSlider li:nth-child(2).active ~ .slide').width($('ul.formTypeSlider li:nth-child(2)').width());
                    $('ul.formTypeSlider li:nth-child(2).active ~ .slide').css('left', $('ul.formTypeSlider li:nth-child(1)').width());
                    $('ul.formTypeSlider li:nth-child(3).active ~ .slide').width($('ul.formTypeSlider li:nth-child(3)').width());
                    $('ul.formTypeSlider li:nth-child(3).active ~ .slide').css('left', $('ul.formTypeSlider li:nth-child(1)').width() + $('ul.formTypeSlider li:nth-child(2)').width());
                    $('ul.formTypeSlider li:nth-child(4).active ~ .slide').width($('ul.formTypeSlider li:nth-child(4)').width());
                    $('ul.formTypeSlider li:nth-child(4).active ~ .slide').css('left', $('ul.formTypeSlider li:nth-child(1)').width() + $('ul.formTypeSlider li:nth-child(2)').width() + $('ul.formTypeSlider li:nth-child(3)').width());

                    bookingFormSlider.slick('slickGoTo', $(this).attr('slideTarget'));
                });

                $('#formSliderChanger').on('change', function () {
                    bookingFormSlider.slick('slickGoTo', $(this).val());
                })

                AOS.refresh();

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

                $('#file_resume').on('change', function () {
                    let file = $('#file_resume').val();

                    if (file != "") {
                        let theSplit = file.split('\\');
                        let fileName = theSplit[theSplit.length - 1];
                        $('#uploaded_resume_name').html(fileName.substring(0, 50));
                    }
                });

                $('#file_coverletter').on('change', function () {
                    let file = $('#file_coverletter').val();

                    if (file != "") {
                        let theSplit = file.split('\\');
                        let fileName = theSplit[theSplit.length - 1];
                        $('#uploaded_coverletter_name').html(fileName.substring(0, 50));
                    }
                });

                let areasSuburbSlider = $('#areas_suburb_slider').slick({
                    slidesToShow: 1,
                    arrows: false,
                    draggable: false,
                    infinite: false
                });

                AOS.refresh();

                $('.region_nav a.region_nav_link').on('click', function () {
                    $('.region_nav a.region_nav_link').removeClass('active');
                    $(this).addClass('active');
                    areasSuburbSlider.slick('slickGoTo', $(this).attr('slick-target'));
                });

                $('#regionChangeSelect').on('change', function () {
                    areasSuburbSlider.slick('slickGoTo', $(this).val());
                });

                $('a.blogFilterBtn').on('click', function () {
                    $('a.blogFilterBtn').removeClass('active');
                    $(this).addClass('active');

                    let target = $(this).attr('data-target');

                    if (target == 'all') {
                        $('.blogs_list').css('display', 'block');
                    } else {
                        $('.blogs_list').css('display', 'none');
                        $(`#${target}`).css('display', 'block');
                    }
                });

                $('.blogs_slider').slick({
                    slidesToShow: 3,
                    centerMode: true,
                    slidesToScroll: 1,
                    centerPadding: '100px',
                    // prevArrow: $(this).parents('.blogs_list').find('.blog_prev'),
                    // nextArrow: $(this).parents('.blogs_list').find('.blog_next'),
                    // arrows: true,
                    responsive: [
                        {
                            breakpoint: 1100,
                            settings: {
                                slidesToShow: 2,
                                centerMode: false,
                                centerMode: 0
                            }
                        },
                        {
                            breakpoint: 540,
                            settings: {
                                slidesToShow: 1,
                                centerMode: false,
                                centerMode: 0
                            }
                        }
                    ]
                })

                AOS.refresh();

                let counter = 2;
                let right = 38;

                $('#growbox').on('click', function () {
                    right = right - 9;
                    $(`#growingBox .stepCard:nth-child(${counter})`).addClass('shown');
                    $(`#growingBox .stepCard:nth-child(${counter + 1})`).addClass('showingNext');
                    $(this).parent('div').css('right', `${right}%`);
                    if (right < 0) {
                        $(this).parent('div').remove();
                    }
                    counter++;
                });

                $('.serviceAttributeBoxesButton').on('click', function () {
                    $('#serviceAttributeBoxes').css('transform', `translateX(${$(this).val()})`);
                });

                $('.serviceAttributeBoxesMobile').slick({
                    slidesToShow: 3,
                    centerMode: true,
                    centerPadding: "60px",
                    arrows: false,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 2,
                            }
                        },
                        {
                            breakpoint: 540,
                            settings: {
                                slidesToShow: 1
                            }
                        }
                    ]
                });

                AOS.refresh();

                $('.showServiceDescriptionBtn').on('click', function () {
                    $(this).parents('.servicDescriptionCard').toggleClass('active');
                    $(this).parents('.servicDescriptionCard').find('.description').slideToggle();

                    const svg1 = '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="4" viewBox="0 0 25 4" fill="none"><path d="M1.66602 1.53223H22.6907" stroke="#C0E3FF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" /></svg>';
                    const svg2 = '<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.76416 12.4197H22.7888" stroke="#0067B9" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" /><path d="M12.2764 1.90747L12.2764 22.9321" stroke="#0067B9" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" /></svg>';

                    $(this).parents('.servicDescriptionCard').hasClass('active') ? $(this).html(svg1) : $(this).html(svg2);
                });

                const showPlus = '<svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none"><circle cx="26.5" cy="26.4599" r="26.3691" fill="#5AB2F8" /><path d="M15.9877 26.459H37.0123" stroke="#F7F8FA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" /><path d="M26.5007 15.9473L26.5007 36.9719" stroke="#F7F8FA" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" /></svg>';
                const showMinus = '<svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54" fill="none"><circle cx="26.7714" cy="27.0214" r="26.3691" fill="#F7F8FA"/><path d="M16.2592 27.0205H37.2838" stroke="#5AB2F8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><path d="M37.2845 27.0215L16.2599 27.0215" stroke="#5AB2F8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>';

                $('button.showAboutDescription').on('click', function () {
                    $(this).parents('.aboutDescriptionWrapper').toggleClass('shown');
                    $(this).parents('.aboutDescriptionWrapper').find('.description').slideToggle();

                    if ($(this).parents('.aboutDescriptionWrapper').hasClass('shown')) {
                        $(this).html(showMinus);
                    }
                    else {
                        $(this).html(showPlus);
                    }
                });

                $('#openGiantMenu').on('click', function () {
                    $('#giantMenu').addClass('open');
                });

                $('.closeGiantMenu').on('click', function () {
                    $('#giantMenu').removeClass('open');
                });
            }, // end misc
        }, // end ui
        //utils: {

        //}, // end utils
    };
    Engine.ui.misc();
    //Engine.utils.sliders();
});