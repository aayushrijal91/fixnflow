<?php
/*
 * Template Name: Contact Us Page
 * The contact us page
 *
 */
get_header();
?>

<div class="contactUsPage bg-off-white">
    <?php get_template_part('parts/section', 'banner'); ?>

    <div class="container py-24">
        <div class="flex flex-wrap -mx-2 gap-y-5 justify-center">
            <?php if (have_rows('cta')) :
                while (have_rows('cta')) : the_row();
                    $image = get_sub_field('image');
                    $icon = get_sub_field('icon');
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    $button = get_sub_field('button');
            ?>
                    <div class="w-full md:w-1/3 px-2" data-aos="zoom-in">
                        <div class="rounded-[30px] bg-white hover:bg-quaternary p-5 hover:-translate-x-2 hover:-translate-y-2 hover:shadow-[10px_10px_#0067B9] transition-all duration-300">
                            <img src="<?= $image['url'] ?>" class="rounded-[30px] w-full h-[106px] object-center object-cover" alt="<?= $image['alt'] ?>">
                            <div class="flex flex-wrap items-center min-h-[65px] gap-x-5 py-3.5">
                                <?php if ($icon) : ?><div class="w-fit"><img src="<?= $icon['url'] ?>" alt="<?= $icon['url'] ?>"></div><?php endif; ?>
                                <div class="w-fit font-bold text-[35px] text-main-blue flex-1 leading-none"><?= $title ?></div>
                            </div>
                            <div class="font-articulat leading-loose text-grey pb-5"><?= $description ?></div>
                            <?php if ($button) : ?><a href="<?= $button['url'] ?>" class="btn-main-blue-hover-yellow px-14"><span class="relative z-10"><?= $button['title'] ?></span></a><?php endif; ?>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>

    <?php get_template_part('parts/section', 'contact') ?>

    <div class="container pt-44 pb-20 md:pb-44">
        <div class="flex flex-wrap -mx-2 gap-y-5 mb-5">
            <div class="w-full lg:w-1/2 px-2" data-aos="zoom-in">
                <div class="rounded-[30px] bg-white p-6 md:p-9 h-full flex flex-col justify-between">
                    <div class="text-main-blue font-bold text-4xl md:text-5xl xl:text-heading">Special <span class="text-grey">offers</span></div>
                    <div class="text-grey font-articulat leading-loose pt-10">We offer various special offers to our customers to make our services even more affordable. Here are some of our current special offers:</div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 px-2" data-aos="zoom-in">
                <div class="rounded-[30px] bg-main-blue p-6 md:py-9 md:px-11 h-full bg-no-repeat bg-cover" style="background-image: url(<?= get_template_directory_uri() ?>/images/background/footer_cta_2.jpg)">
                    <div class="bg-tertiary rounded-[10px] pt-4 md:py-4 px-7 text-2xl md:text-[35px] font-bold text-white leading-none relative text-center md:text-start lg:min-h-[300px] xl:min-h-fit">
                        Fix n Flow <br /> <span class="text-dark-blue">Membership</span>
                        <img src="<?= get_template_directory_uri() ?>/images/lib/vip-membership.png" alt="Vip membership" class="md:absolute right-0 bottom-0">
                    </div>
                    <div class="flex flex-wrap justify-between -mx-2 items-center pt-4 gap-y-5">
                        <div class="w-full md:w-fit px-2">
                            <ul class="list-disc pl-5 font-articulat text-white leading-relaxed text-sm md:text-base">
                                <li>Guaranteed priority booking</li>
                                <li>10% OFF for all membership holders for life</li>
                            </ul>
                        </div>
                        <div class="w-full md:w-fit px-2">
                            <a href="./" class="btn-yellow-hover-main-blue w-full px-14"><span class="relative z-10">Button name here</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('parts/section', 'globalcta') ?>
    </div>

    <?php get_template_part('parts/section', 'professionalPlumbing') ?>

    <div class="pb-40 lg:pb-60">
        <?php get_template_part('parts/section', 'leadingbrands') ?>
    </div>
</div>

<?php get_footer() ?>