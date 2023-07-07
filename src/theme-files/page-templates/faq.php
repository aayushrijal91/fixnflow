<?php
/*
 * Template Name: FAQ Page
 * The faq page
 *
 */
get_header();
?>

<div class="faqPage bg-off-white">
    <?php get_template_part('parts/section', 'banner'); ?>

    <div class="py-24">
        <div class="container">
            <div class="flex flex-wrap -mx-3">
                <div class="w-full md:w-1/2 px-3">
                    <div class="partGlobalCta h-[402px] rounded-[30px] bg-gradient-to-b from-[#316A9E] to-[#153B74] flex px-20 py-11 transition-all duration-300 relative overflow-hidden">
                        <img alt="" class="globalCtaBg absolute left-0 top-0 h-[120%] w-[120%] max-w-[120%] duration-300" src="<?= get_template_directory_uri() ?>/images/background/cta-2.png">
                        <img src="<?= get_template_directory_uri() ?>/images/lib/faq-floating-logo.png" class="globalCtaLogo_2 absolute bottom-0 right-[-10%] w-[120%] max-w-[120%] duration-300" alt="">
                        <img src="<?= get_template_directory_uri() ?>/images/lib/floating-laptop.png" class="globalCtaComponent_2 absolute bottom-[-20%] left-[-3%] h-full max-w-[120%] duration-300" alt="">

                        <div class="relative text-center">
                            <div class="text-4xl lg:text-[45px] font-bold text-light-blue">Book online now <span class="text-white">for all your plumbing needs</span></div>
                            <div class="text-white font-articulat py-7">Plus receive 10% off all online bookings!</div>
                            <a href="./" class="btn-light-blue-hover-white px-14"><span class="relative z-10">Learn More</span></a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <div class="partGlobalCta h-[402px] rounded-[30px] bg-gradient-to-b from-[#316A9E] to-[#153B74] flex px-20 py-11 transition-all duration-300 relative overflow-hidden">
                        <img alt="" class="globalCtaBg absolute left-0 top-0 h-[120%] w-[120%] max-w-[120%] duration-300" src="<?= get_template_directory_uri() ?>/images/background/cta-2.png">
                        <img src="<?= get_template_directory_uri() ?>/images/lib/faq-floating-logo.png" class="globalCtaLogo_2 absolute bottom-0 right-[-10%] w-[120%] max-w-[120%] duration-300" alt="">
                        <img src="<?= get_template_directory_uri() ?>/images/lib/floating-laptop.png" class="globalCtaComponent_2 absolute bottom-[-20%] left-[-3%] h-full max-w-[120%] duration-300" alt="">

                        <div class="relative text-center">
                            <div class="text-4xl lg:text-[45px] font-bold text-light-blue">Book online now <span class="text-white">for all your plumbing needs</span></div>
                            <div class="text-white font-articulat py-7">Plus receive 10% off all online bookings!</div>
                            <a href="./" class="btn-main-blue-hover-yellow px-14"><span class="relative z-10">Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-24">
        <div class="container">
            <div class="w-full lg:w-8/12 mx-auto">
                <div class="text-center text-grey text-heading font-bold"><span class="text-main-blue">FAQ</span> Fix N Flow Plumbing</div>
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