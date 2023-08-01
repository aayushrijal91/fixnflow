<?php
/*
 * Template Name: Careers Page
 * The careers page
 *
 */
get_header();
$banner = get_field('banner');
get_template_part('parts/section', 'nav');
?>

<div class="careersPage bg-off-white">
    <div class="careersBanner max-w-[1874px] mx-auto p-2 xl:p-6">
        <div class="flex flex-wrap -mx-2 gap-y-2">
            <div class="w-full lg:w-7/12 px-2 order-2 md:order-1">
                <div class="rounded-[20px] md:rounded-[30px] bg-main-blue h-full relative overflow-hidden">
                    <video class="absolute w-full h-full object-cover" autoplay loop muted>
                        <source src="<?= get_template_directory_uri() ?>/images/background/dark-blue-wavy-bg.webm" type="video/webm">
                        <source src="<?= get_template_directory_uri() ?>/images/background/dark-blue-wavy-bg.mp4" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                    <div class="xl:w-10/12 ml-auto px-5 md:px-10 py-24 md:py-48 relative text-center xl:text-start">
                        <?php if (isset($banner)) : ?>
                            <div class="text-4xl md:text-5xl xl:text-heading text-white font-bold"><?= $banner['title'] ? $banner['title'] : get_the_title() ?></div>
                            <?php if ($banner['subtitle']) : ?>
                                <div class="pt-6 text-lg font-articulat text-white">
                                    <?= $banner['subtitle'] ?>
                                </div>
                        <?php
                            endif;
                        endif; ?>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-5/12 px-2 order-1 md:order-2">
                <div class="rounded-[20px] md:rounded-[30px] min-h-[272px] bg-light-blue h-full" style="background: url(<?= $banner['image']['url'] ?>) no-repeat center; background-size: cover"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="flex flex-wrap -mx-3 items-center py-12 lg:py-24 gap-y-10" data-aos="fade-up">
            <div class="w-full md:w-1/2 lg:w-1/4 px-3 order-3 md:order-1">
                <div class="flex flex-wrap items-center justify-center -mx-2 pt-6 gap-y-5">
                    <div class="w-2/3 px-2 text-center flex flex-col items-center">
                        <img src="<?= get_template_directory_uri() ?>/images/logo/accredited.png" alt="Accredited">
                        <div class="my-5 border-b h-[3px] w-[184px] bg-quaternary"></div>
                        <div class="font-articulat text-light-blue text-base">We are qualified plumbers</div>
                    </div>
                    <div class="w-1/2 px-2 text-center flex flex-col items-center">
                        <img src="<?= get_template_directory_uri() ?>/images/logo/ebix.png" alt="<?php bloginfo( 'name' ); ?>">
                        <div class="font-articulat text-primary text-sm font-semibold pt-6">EBiX Trades<br />Monitor</div>
                    </div>
                    <div class="w-1/2 px-2 text-center flex flex-col items-center">
                        <img src="<?= get_template_directory_uri() ?>/images/logo/master-plumber-association.png" alt="<?php bloginfo( 'name' ); ?>">
                        <div class="font-articulat text-primary text-sm font-semibold pt-6">Master Plumber<br />Association<br /> NSW</div>
                    </div>
                </div>
            </div>
            <?php $introduction = get_field('introduction'); ?>
            <div class="w-full lg:w-1/2 px-3 order-1 md:order-3 lg:order-2">
                <div class="text-center bg-quaternary rounded-[30px] py-12 px-5 md:p-16 lg:px-5 xl:p-16">
                    <div class="text-grey text-3xl md:text-[45px] leading-none font-bold highlight-light-blue"><?= $introduction['heading'] ?></div>
                    <div class="text-grey leading-relaxed py-11 font-articulat description"><?= $introduction['description'] ?></div>
                    <?php if ($introduction['button']) : ?>
                        <a href="<?= $introduction['button']['url'] ?>" target="<?= $introduction['button']['target'] ?>" class="btn-main-blue-hover-yellow px-14"><span class="relative z-10"><?= $introduction['button']['title'] ?></span></a>
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

    <div class="bg-dark-blue py-20 md:py-28">
        <?php $form = get_field('form'); ?>
        <div class="container">
            <div class="flex flex-wrap justify-around gap-y-5" data-aos="fade-up">
                <div class="w-full lg:w-5/12 text-4xl md:text-5xl xl:text-heading leading-none text-white font-bold text-center highlight-main-blue">
                    <?= $form['hero_heading'] ? $form['hero_heading'] : '' ?>
                </div>
                <div class="w-full lg:w-5/12 text-white font-articulat text-base leading-loose description text-center lg:text-start">
                    <?= $form['description'] ? $form['description'] : '' ?>
                </div>
            </div>

            <div class="bg-light-blue rounded-[30px] px-5 py-10 md:p-10 mt-16 md:mt-20" data-aos="zoom-in">
                <div class="flex flex-wrap gap-y-10">
                    <div class="w-full lg:w-1/2">
                        <?= echo_theme_image('/images/icons/careers-form.png') ?>
                        <div class="text-white text-3xl md:text-[45px] font-semibold py-11 leading-none highlight-main-blue"><?= $form['form_heading'] ? $form['form_heading'] : '' ?></div>
                        <div class="font-articulat text-white leading-loose"><?= $form['sub_heading'] ? $form['sub_heading'] : '' ?></div>
                    </div>
                    <div class="w-full lg:w-1/2 careersForm">
                        <div class="font-articulat text-white leading-loose">Attach your documents below and we will be in touch</div>
                        <?= do_shortcode('[contact-form-7 id="164" title="Careers Form"]') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-40 lg:pb-60">
        <?php get_template_part('parts/section', 'leadingbrands') ?>
    </div>
</div>

<?php get_footer() ?>