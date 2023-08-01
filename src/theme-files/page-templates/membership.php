<?php
/*
 * Template Name: Membership Page
 * The membership page
 *
 */
get_header();
?>

<div class="membershipPage bg-off-white">
    <?php get_template_part('parts/section', 'banner'); ?>

    <div class="container">
        <div class="flex flex-wrap -mx-3 items-center py-12 lg:py-24 gap-y-10" data-aos="fade-up">
            <div class="w-full md:w-1/2 lg:w-1/4 px-3 order-3 md:order-1">
                <div class="flex flex-wrap items-center justify-center -mx-2 pt-6 gap-y-5">
                    <div class="w-2/3 px-2 text-center flex flex-col items-center">
                        <img src="<?= get_template_directory_uri() ?>/images/logo/accredited.png" alt="<?php bloginfo( 'name' ); ?>">
                        <div class="my-5 border-b h-[3px] w-[184px] bg-quaternary"></div>
                        <div class="font-articulat text-light-blue text-base">We are qualified plumbers</div>
                    </div>
                    <div class="w-1/2 px-2 text-center flex flex-col items-center">
                        <?= echo_theme_image('/images/logo/ebix.png') ?>
                        <div class="font-articulat text-primary text-sm font-semibold pt-6">EBiX Trades<br />Monitor</div>
                    </div>
                    <div class="w-1/2 px-2 text-center flex flex-col items-center">
                        <?= echo_theme_image('/images/logo/master-plumber-association.png') ?>
                        <div class="font-articulat text-primary text-sm font-semibold pt-6">Master Plumber<br />Association<br /> NSW</div>
                    </div>
                </div>
            </div>

            <?php $introduction = get_field('introduction'); ?>
            <div class="w-full lg:w-1/2 px-3 order-1 md:order-3 lg:order-2">
                <div class="text-center bg-contain rounded-[20px] md:rounded-[30px] py-10 md:pt-11 md:pb-28 px-5 xl:px-16 h-full" style="background: linear-gradient(#171818 0 40%, rgba(0,0,0,0) 80% 100%), url(<?= $introduction['background_image'] ? $introduction['background_image']['url'] : ''  ?>) no-repeat center bottom; background-size: contain;">
                    <div class="text-white text-3xl lg:text-[45px] leading-none font-bold highlight-light-blue"><?= $introduction['heading'] ?></div>
                    <div class="text-white leading-relaxed py-6 text-sm md:text-base"><?= $introduction['description'] ?></div>
                    <?php if ($introduction['button']) : ?>
                        <a href="<?= $introduction['button']['url'] ?>" target="<?= $introduction['button']['target'] ?>" class="btn-yellow-hover-main-blue px-14 mt-10"><span class="relative z-10"><?= $introduction['button']['title'] ?></span></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 px-3 order-2 lg:order-3">
                <div class="flex justify-center lg:justify-start">
                    <?= echo_theme_image('/images/icons/google-color.png') ?>
                </div>
                <div class="flex flex-wrap -mx-2 pt-4">
                    <div class="w-1/2 px-2">
                        <div class="bg-light-blue text-primary h-full rounded-xl py-4 px-3.5">
                            <div class="text-3xl font-articulat-heavy leading-none"><?= get_field('number_of_reviews', 'options') ?>+</div>
                            <div class="text-sm font-articulat leading-none font-semibold">Customer review</div>
                        </div>
                    </div>
                    <div class="w-1/2 px-2">
                        <div class="bg-white border-2 border-light-blue text-light-blue rounded-xl px-3.5 py-4">
                            <div class="text-3xl font-articulat-heavy leading-none flex gap-x-2">5.0 <svg class="mt-1" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                    <path d="M5.70741 1.2561C5.87545 0.837657 6.46781 0.837656 6.63585 1.2561L7.8836 4.36327C7.95516 4.54146 8.1224 4.66297 8.31398 4.67596L11.6546 4.90247C12.1045 4.93298 12.2876 5.49635 11.9416 5.78547L9.37203 7.93232C9.22468 8.05544 9.1608 8.25204 9.20765 8.43826L10.0245 11.6854C10.1346 12.1227 9.65532 12.4709 9.27342 12.2311L6.43762 10.4508C6.27499 10.3487 6.06827 10.3487 5.90564 10.4508L3.06984 12.2311C2.68794 12.4709 2.20871 12.1227 2.31872 11.6854L3.13562 8.43826C3.18246 8.25204 3.11858 8.05544 2.97123 7.93232L0.401711 5.78547C0.0556734 5.49635 0.238724 4.93298 0.688614 4.90247L4.02928 4.67596C4.22086 4.66297 4.3881 4.54146 4.45966 4.36327L5.70741 1.2561Z" fill="#5AB2F8" />
                                </svg></div>
                            <div class="text-sm font-articulat leading-none font-semibold">Average rating</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-20 md:py-32">
        <div class="container">
            <?php $section_2 = get_field('section_2'); ?>
            <div class="flex flex-wrap justify-around pb-20 gap-y-5">
                <div class="w-full lg:w-5/12 text-4xl md:text-5xl xl:text-heading leading-none text-grey font-bold text-center highlight-main-blue">
                    <?= $section_2['heading'] ?>
                </div>
                <div class="w-full lg:w-5/12 text-grey font-articulat text-base leading-loose description text-center md:text-start">
                    <?= $section_2['description'] ?>
                </div>
            </div>

            <?php get_template_part('parts/section', 'globalcta') ?>
        </div>
    </div>

    <div style="background:linear-gradient(#ffffff 0 50%, #F7F8FA 50% 100%)">
        <div class="container">
            <div class="bg-white md:bg-dark-blue md:rounded-[30px] md:p-9">
                <div class="flex flex-wrap md:justify-between lg:justify-around items-center gap-y-10">
                    <div class="w-full md:w-5/12 xl:w-1/3">
                        <div class="text-4xl md:text-5xl xl:text-heading leading-none text-main-blue md:text-white font-bold text-center highlight-light-blue">Why <span>wait</span><br /> any longer?</div>
                        <div class="text-grey md:text-white font-articulat text-center pt-9">Join our VIP club now and experience the benefits of being a part of our Fix N Flow Plumbing family!</div>
                    </div>
                    <div class="w-full md:w-1/2 bg-dark-blue md:bg-transparent px-4 py-9 md:p-0 rounded-[20px] md:rounded-0">
                        <div class="text-white text-center font-articulat ob-5">Simply fill in your details below and we'll get back to you and about the next steps!</div>
                        <?= do_shortcode('[contact-form-7 id="160" title="Membership form"]') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-9">
        <div class="w-full xl:w-10/12 mx-auto">
            <div class="flex flex-wrap -mx-3">
                <div class="w-full lg:w-1/2 px-3">
                    <div class="h-full bg-gradient-to-b from-[#E7F4FF] to-[#BEE1FF] rounded-[20px] shadow-[0px_0px_20px_0px_rgba(0, 0, 0, 0.05)_inset] relative">
                        <svg class="absolute top-0 left-0" xmlns="http://www.w3.org/2000/svg" width="561" height="556" viewBox="0 0 561 556" fill="none">
                            <g opacity="0.45" filter="url(#filter0_b_544_31372)">
                                <path d="M549.869 154.397C644.941 74.5381 636.33 -155.946 695.652 -245.606L468.751 -465.57L-348.49 269.541L0.320435 577.842C69.6192 534.88 128.392 444.297 148.346 325.638C168.301 206.979 243.314 187.324 319.92 196.473C396.526 205.622 454.796 234.255 549.869 154.397Z" fill="#F7F8FA" />
                            </g>
                            <defs>
                                <filter id="filter0_b_544_31372" x="-353.49" y="-470.57" width="1054.14" height="1053.41" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feGaussianBlur in="BackgroundImageFix" stdDeviation="2.5" />
                                    <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_544_31372" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_544_31372" result="shape" />
                                </filter>
                            </defs>
                        </svg>
                        <div class="relative">
                            <div class="px-5 md:px-9 pt-9 flex flex-wrap">
                                <div class="flex-1">
                                    <div class="text-main-blue text-4xl md:text-5xl xl:text-heading font-bold leading-none pt-8 md:pt-0">10% OFF</div>
                                    <div class="text-2xl lg:text-[35px] text-grey font-bold leading-none pt-6 md:pt-0">For all membership holders</div>
                                </div>
                                <div class="w-fit">
                                    <?= echo_theme_image('/images/lib/membership.png') ?>
                                </div>
                            </div>
                            <?= echo_theme_image('/images/lib/member-couple.png', 'w-full') ?>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 px-3">
                    <div class="flex flex-col h-full justify-between gap-y-5 mt-5 lg:mt-0">
                        <div class="bg-[#D9D9D9]/50 rounded-[10px] min-h-[115px] md:min-h-[174px] px-5 py-4 md:p-7 relative text-main-blue text-2xl md:text-[35px] font-bold flex items-center leading-none">
                            <img src="<?= get_template_directory_uri() ?>/images/lib/priority-booking-eg.png" alt="<?php bloginfo( 'name' ); ?>" class="absolute right-0 bottom-0 h-[110%] md:h-fit">
                            <div>Guaranteed <br /><span class="text-grey">priority booking</span></div>
                        </div>

                        <div class="bg-gradient-to-r from-[#4299DE] via-[#64B7F9] to-[#48CCF5] rounded-[10px] min-h-[115px] md:min-h-[174px] px-5 py-4 md:p-7 relative text-white text-2xl md:text-[35px] font-bold flex items-center leading-none">
                            <img src="<?= get_template_directory_uri() ?>/images/lib/service-upgrade-eg.png" class="absolute right-0 bottom-0 h-[150%] md:h-fit" alt="<?php bloginfo( 'name' ); ?>">
                            <div>Discounted <br /><span class="text-dark-blue">service<br /> upgrades</span></div>
                        </div>

                        <div class="bg-gradient-to-r from-[#396BB5] to-[#1E4785] rounded-[10px] min-h-[115px] md:min-h-[174px] p-7 relative flex items-center">
                            <img src="<?= get_template_directory_uri() ?>/images/lib/drain-camera-inspection.png" class="absolute right-0 bottom-0 h-[90%] md:h-fit" alt="<?php bloginfo( 'name' ); ?>">
                            <div>
                                <div class="leading-none text-white text-2xl md:text-[35px] font-bold">FREE <span class="text-light-blue">drain camera<br /> inspection</span></div>
                                <div class="text-base md:text-xl text-white pt-4">With any hydro-jetting service</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-52">
        <?php get_template_part('parts/section', 'professionalPlumbing') ?>
    </div>

    <?php get_template_part('parts/section', 'whyus') ?>

    <div class="pb-40 lg:pb-60">
        <?php get_template_part('parts/section', 'leadingbrands') ?>
    </div>
</div>

<?php get_footer() ?>