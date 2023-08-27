<?php
/*
 * Template Name: Booking Form Page
 * The Booking Form page
 *
 */
get_header();
$banner = get_field('banner');
?>

<main class="bookingFormPage bg-off-white">
    <?= get_template_part('parts/section', 'nav') ?>

    <div class="p-1 xl:p-6">
        <div class="generalBanner max-w-[1874px] mx-auto h-[576px] rounded-[20px] md:rounded-[30px] overflow-hidden">
            <div class="container">
                <div class="pt-44 md:pt-48 pb-20 md:pb-24 text-white text-center">
                    <?php if (isset($banner)) : ?>
                        <?php if (!is_404()) : ?>
                            <h1 class="text-4xl md:text-5xl xl:text-heading font-semibold text-capitalize"><?= $banner['title'] ? $banner['title'] : get_the_title(); ?> </h1>
                        <?php endif; ?>
                        <?php if (isset($banner['subtitle'])) : ?>
                            <p class="text-base md:text-lg pt-4">
                                <?= $banner['subtitle'] ?>
                            </p>
                    <?php endif;
                    endif; ?>
                </div>

                <div class="flex flex-wrap justify-between">
                    <div class="w-fit">
                        <div>
                            <img src="<?= get_template_directory_uri() ?>/images/icons/google-reviews.png" alt="<?php bloginfo('name'); ?>">
                        </div>
                        <div class="flex-wrap flex -mx-2 items-center pt-6">
                            <div class="w-fit px-2">
                                <article class="border-b-4 border-r-4 border-light-blue rounded-[10px] bg-white py-2 px-3.5 text-dark-blue leading-none">
                                    <p class="text-3xl font-bold"><?= get_field('number_of_reviews', 'options') ?>+</p>
                                    <p class="text-xs font-bold">Customer<br />reviews</p>
                                </article>
                            </div>
                            <div class="w-fit px-2">
                                <article class="border-b-4 border-r-4 border-yellow rounded-[10px] bg-main-blue py-2 px-3.5 text-white leading-none">
                                    <p class="text-3xl flex items-center font-bold gap-x-2">5.0
                                        <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.88515 0.857663C6.05318 0.439219 6.64555 0.439219 6.81358 0.857663L8.06134 3.96483C8.13289 4.14302 8.30013 4.26453 8.49171 4.27752L11.8324 4.50403C12.2823 4.53454 12.4653 5.09791 12.1193 5.38703L9.54977 7.53388C9.40241 7.657 9.33853 7.8536 9.38538 8.03982L10.2023 11.287C10.3123 11.7243 9.83305 12.0725 9.45115 11.8327L6.61535 10.0524C6.45272 9.95026 6.24601 9.95026 6.08338 10.0524L3.24758 11.8327C2.86568 12.0725 2.38644 11.7243 2.49646 11.287L3.31335 8.03982C3.3602 7.8536 3.29632 7.657 3.14896 7.53388L0.579446 5.38703C0.233408 5.09791 0.416459 4.53454 0.866348 4.50403L4.20702 4.27752C4.3986 4.26453 4.56584 4.14302 4.63739 3.96483L5.88515 0.857663Z" fill="#FFAE35" />
                                        </svg>
                                    </p>
                                    <p class="text-xs">Average<br />rating</p>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="w-5/12 lg:w-4/12 xl:w-3/12 relative group">
                        <div class="absolute right-0 bottom-[-100%] group-hover:bottom-0 duration-300 flex flex-col items-center">
                            <img src="<?= get_template_directory_uri() ?>/images/lib/vipMembershipCard.png" alt="<?php bloginfo('name'); ?>">
                            <a href="<?= get_site_url() ?>" class="btn-yellow-hover-main-blue px-5 lg:px-14"><span class="relative z-10">Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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