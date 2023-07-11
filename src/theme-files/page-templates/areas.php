<?php
/*
 * Template Name: Areas Page
 * The areas page
 *
 */
get_header();
?>

<div class="areasPage bg-off-white">
    <?php get_template_part('parts/section', 'banner'); ?>

    <div class="container py-24">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full lg:w-1/2 px-3" data-aos="zoom-in">
                <div class="text-center bg-contain rounded-[30px] pt-11 pb-28 px-16 h-full" style="background: linear-gradient(#171818 0 40%, rgba(0,0,0,0) 80% 100%), url(<?= get_template_directory_uri() ?>/images/background/membership-guy.jpg) no-repeat center bottom">
                    <div class="text-white text-[45px] leading-none font-bold">Plumbers in your local area with <span class="text-light-blue">24/7 services</span></div>
                    <div class="text-white leading-relaxed py-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</div>
                    <a href="" class="btn-yellow-hover-main-blue px-14 mt-10"><span class="relative z-10">Button name here</span></a>
                </div>
            </div>
            <div class="w-full lg:w-1/2 px-3" data-aos="zoom-in">
                <div class="bg-main-blue rounded-[30px] p-12 h-full text-white">
                    <div class="text-[35px] font-semibold leading-none pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>

                    <div class="font-articulat leading-relaxed">
                        <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-24 bg-white">
        <div class="container">
            <div class="text-center text-4xl md:text-5xl xl:text-heading text-main-blue font-bold">Select your region</div>
            <div class="w-full lg:w-10/12 rounded-3xl bg-primary">

            </div>

            <div class="bg-primary rounded-[30px] py-9"></div>
        </div>
    </div>

    <div class="py-24">
        <?php get_template_part('parts/section', 'contactCta') ?>
    </div>

    <?php get_template_part('parts/section', 'contact') ?>

    <div class="py-40 lg:pb-60">
        <?php get_template_part('parts/section', 'professionalPlumbing') ?>
    </div>
</div>

<?php get_footer() ?>