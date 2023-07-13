<?php
/*
 * Template Name: Services Page
 * The services page
 *
 */
get_header();
$banner = get_field('banner');
?>
<div class="servicesPage">
    <?php get_template_part('parts/section', 'serviceBanner'); ?>

    <div class="py-24">
        <div class="container">
            <div class="text-center text-4xl md:text-5xl xl:text-heading text-grey font-bold leading-none">Explore all <span class="text-main-blue">Services</span></div>
            <div class="pt-24 flex flex-wrap -mx-2">
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <div class="bg-off-white rounded-2xl p-6 flex flex-col justify-between items-center" data-aos="zoom-in">
                        <div class="h-[147px] w-full bg-grey rounded-[10px] p-3 flex items-end bg-no-repeat bg-cover" style="background-image: url('<?= $image['url'] ?>')"></div>
                        <div class="text-2xl font-bold text-main-blue pt-8 text-center">Blocked Stormwater Drains</div>
                        <div class="font-articulat leading-loose text-grey text-center pt-6 pb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et...</div>
                        <a href="<?= $link ?>" class="border border-light-blue rounded-md h-[48px] px-14 flex items-center justify-center text-center text-main-blue font-articulat font-semibold gap-x-4">
                            Explore now
                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.86279 16.0078L8.28068 9.58992C8.67121 9.1994 8.67121 8.56623 8.28069 8.17571L1.86279 1.75781" stroke="#5AB2F8" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-24 pb-52 bg-off-white">
        <?php get_template_part('parts/section', 'professionalPlumbing') ?>
    </div>

    <?php get_template_part('parts/section', 'whyus') ?>

    <div class="pb-40 lg:pb-60">
        <?php get_template_part('parts/section', 'leadingbrands') ?>
    </div>
</div>


<?php get_footer() ?>