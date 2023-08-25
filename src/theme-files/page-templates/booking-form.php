<?php
/*
 * Template Name: Booking Form Page
 * The Booking Form page
 *
 */
get_header();
?>

<main class="bookingFormPage bg-off-white">
    <?php get_template_part('parts/section', 'banner'); ?>

    <div class="py-20 md:py-36">
        <div class="container">
            <h2 class="w-full lg:w-7/12 mx-auto text-grey text-4xl md:text-5xl xl:text-heading font-bold text-center highlight-main-blue">
                Select how you would like to <span>get in touch</span>
            </h2>
        </div>
        <div class="container hidden md:block">
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
        <div class="bg-main-blue py-7 lg:py-20 relative mt-10 md:mt-0">
            <img src="<?= get_template_directory_uri() ?>/images/lib/booking_form_van.png" class="absolute bottom-0 left-0 hidden xl:block" alt="<?php bloginfo('name'); ?>">
            <div class="container">
                <div class="flex flex-wrap gap-y-10 -mx-3">
                    <div class="w-full lg:w-1/2 px-3">
                        <img src="<?= get_template_directory_uri() ?>/images/lib/booking-guy.jpg" class="rounded-[20px] md:rounded-[30px] md:hidden lg:block" alt="<?php bloginfo('name'); ?>">
                    </div>
                    <div class="w-full lg:w-1/2 px-3">
                        <div class="flex justify-center mb-12 md:hidden">
                            <select id="formSliderChanger" class="px-5 py-3 bg-dark-blue text-white rounded-md outline-none">
                                <option value="0">Make a booking</option>
                                <option value="1">Send an enquiry</option>
                                <option value="2">Request call back</option>
                                <option value="3">Get free quote</option>
                            </select>
                        </div>
                        <div class="bookingFormSlider" id="bookingFormSlider">
                            <div>
                                <div class="flex flex-wrap gap-x-5 items-center">
                                    <div class="w-fit"><?= echo_theme_image('/images/icons/make-a-booking.png') ?></div>
                                    <h2 class="w-fit flex-1 text-4xl md:text-5xl xl:text-heading font-semibold text-light-blue highlight-white">
                                        Make a <span>booking</span>
                                    </h2>
                                </div>
                                <p class="py-6 text-white font-articulat">One of our expert plumbers will get back to you as soon as possible.</p>
                                <div class="hidden md:w-1/4 h-14 md:w-2/3 bg-transparent border-b border-white w-full mt-3 mt-5 outline-none font-semibold text-white gap-y-5 bg-light-blue rounded-md shadow-[0px_0px_10px_0px_rgba(0,0,0,0.4)_inset] px-2"></div>
                                <?= do_shortcode('[contact-form-7 id="156" title="Booking Form"]') ?>
                            </div>
                            <div>
                                <div class="flex flex-wrap gap-x-5 items-center">
                                    <div class="w-fit"><?= echo_theme_image('/images/icons/make-a-booking.png') ?></div>
                                    <h2 class="w-fit flex-1 text-4xl md:text-5xl xl:text-heading font-semibold text-light-blue highlight-white">
                                        Send an <span>enquiry</span>
                                    </h2>
                                </div>
                                <p class="py-6 text-white font-articulat">One of our expert plumbers will get back to you as soon as possible.</p>
                                <?= do_shortcode('[contact-form-7 id="154" title="Booking - Send enquiry"]') ?>
                            </div>
                            <div>
                                <div class="flex flex-wrap gap-x-5 items-center">
                                    <div class="w-fit"><?= echo_theme_image('/images/icons/make-a-booking.png') ?></div>
                                    <h2 class="w-fit flex-1 text-4xl md:text-5xl xl:text-[63px] font-semibold text-light-blue highlight-white">
                                        Request a <span>call back</span>
                                    </h2>
                                </div>
                                <p class="py-6 text-white font-articulat">One of our expert plumbers will get back to you as soon as possible.</p>
                                <?= do_shortcode('[contact-form-7 id="157" title="Booking - Request Callback"]') ?>
                            </div>
                            <div>
                                <div class="flex flex-wrap gap-x-5 items-center">
                                    <div class="w-fit"><?= echo_theme_image('/images/icons/make-a-booking.png') ?></div>
                                    <h2 class="w-fit flex-1 text-4xl md:text-5xl xl:text-heading font-semibold text-light-blue highlight-white">
                                        Get a <span>free quote</span>
                                    </h2>
                                </div>
                                <p class="py-6 text-white font-articulat">One of our expert plumbers will get back to you as soon as possible.</p>
                                <?= do_shortcode('[contact-form-7 id="158" title="Booking - Get a free quote"]') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container pb-20 md:pb-32">
        <?php get_template_part('parts/section', 'globalcta') ?>
    </div>

    <?php get_template_part('parts/section', 'professionalPlumbing') ?>

    <div class="pb-40 lg:pb-60">
        <?php get_template_part('parts/section', 'leadingbrands') ?>
    </div>
</main>

<?php get_footer() ?>