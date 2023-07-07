<?php
/*
 * Template Name: Booking Form Page
 * The Booking Form page
 *
 */
get_header();
?>

<div class="bookingFormPage bg-off-white">
    <?php get_template_part('parts/section', 'banner'); ?>

    <div class="container py-32">
        <?php get_template_part('parts/section', 'globalcta') ?>
    </div>

    <div class="pb-36">
        <div class="container">
            <div class="w-full lg:w-7/12 mx-auto text-grey text-4xl md:text-5xl xl:text-heading font-bold text-center">
                Select how you would like to <span class="text-main-blue">get in touch</span>
            </div>
        </div>
        <div class="container">
            <div class="flex justify-center pt-14">
                <ul class="formTypeSlider flex relative">
                    <li class="active">
                        <a href="javascript:void(0)" slideTarget="0" class="text-grey/50 text-lg font-bold formTypeSliderBtn">Make a booking</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" slideTarget="1" class="text-grey/50 text-lg font-bold formTypeSliderBtn">Send an enquiry</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" slideTarget="2" class="text-grey/50 text-lg font-bold formTypeSliderBtn">Request call back</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" slideTarget="3" class="text-grey/50 text-lg font-bold formTypeSliderBtn">Get free quote</a>
                    </li>
                    <li class="slide"></li>
                </ul>
            </div>
        </div>
        <div class="bg-main-blue py-20">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/2">
                        <img src="<?= get_template_directory_uri() ?>/images/lib/booking-guy.jpg" class="rounded-[30px]" alt="booking">
                    </div>
                    <div class="w-full lg:w-1/2">
                        <div class="bookingFormSlider" id="bookingFormSlider">
                            <div>
                                <div class="flex flex-wrap gap-x-5 items-center">
                                    <div class="w-fit"><img src="<?= get_template_directory_uri() ?>/images/icons/make-a-booking.png" alt=""></div>
                                    <div class="w-fit flex-1 text-4xl md:text-5xl xl:text-heading font-semibold text-light-blue">
                                        Make a <span class="text-white">booking</span>
                                    </div>
                                </div>
                                <div class="py-6 text-white font-articulat">One of our expert plumbers will get back to you as soon as possible.</div>
                            </div>
                            <div>
                                <div class="flex flex-wrap gap-x-5 items-center">
                                    <div class="w-fit"><img src="<?= get_template_directory_uri() ?>/images/icons/make-a-booking.png" alt=""></div>
                                    <div class="w-fit flex-1 text-4xl md:text-5xl xl:text-heading font-semibold text-light-blue">
                                        Send an <span class="text-white">enquiry</span>
                                    </div>
                                </div>
                                <div class="py-6 text-white font-articulat">One of our expert plumbers will get back to you as soon as possible.</div>
                                <div class="hidden h-14 bg-transparent border-b border-white w-full mt-3 mt-5 outline-none font-semibold text-white gap-y-5"></div>
                                <?= do_shortcode('[contact-form-7 id="154" title="Booking - Send enquiry"]') ?>
                            </div>
                            <div>
                                <div class="flex flex-wrap gap-x-5 items-center">
                                    <div class="w-fit"><img src="<?= get_template_directory_uri() ?>/images/icons/make-a-booking.png" alt=""></div>
                                    <div class="w-fit flex-1 text-4xl md:text-5xl xl:text-[63px] font-semibold text-light-blue">
                                        Request a <span class="text-white">call back</span>
                                    </div>
                                </div>
                                <div class="py-6 text-white font-articulat">One of our expert plumbers will get back to you as soon as possible.</div>
                            </div>
                            <div>
                                <div class="flex flex-wrap gap-x-5 items-center">
                                    <div class="w-fit"><img src="<?= get_template_directory_uri() ?>/images/icons/make-a-booking.png" alt=""></div>
                                    <div class="w-fit flex-1 text-4xl md:text-5xl xl:text-heading font-semibold text-light-blue">
                                        Get a <span class="text-white">free quote</span>
                                    </div>
                                </div>
                                <div class="py-6 text-white font-articulat">One of our expert plumbers will get back to you as soon as possible.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part('parts/section', 'professionalPlumbing') ?>

    <div class="pb-40 lg:pb-60">
        <?php get_template_part('parts/section', 'leadingbrands') ?>
    </div>
</div>

<?php get_footer() ?>