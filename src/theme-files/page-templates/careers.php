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
    <div class="careersBanner max-w-[1874px] mx-auto p-6">
        <div class="flex flex-wrap -mx-2">
            <div class="w-7/12 px-2">
                <div class="rounded-[30px] bg-cover bg-no-repeat h-full" style="background:url(<?= get_template_directory_uri() ?>/images/background/about-banner-left.png) center, #0067B9">
                    <div class="w-10/12 ml-auto px-10 py-48">
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
            <div class="w-5/12 px-2">
                <div class="rounded-[30px] bg-light-blue h-full" style="background: url(<?= get_template_directory_uri() ?>/images/background/careers-banner-right.jpg) center no-repeat; background-size: cover"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="flex flex-wrap -mx-3 items-center py-24">
            <div class="w-full lg:w-1/4 px-3" data-aos="zoom-in">
                <div class="flex flex-wrap items-center justify-center -mx-2 pt-6 gap-y-5">
                    <div class="w-2/3 px-2 text-center flex flex-col items-center">
                        <img src="<?= get_template_directory_uri() ?>/images/logo/accredited.png" alt="Accredited">
                        <div class="my-5 border-b h-[3px] w-[184px] bg-quaternary"></div>
                        <div class="font-articulat text-light-blue text-base">We are qualified plumbers</div>
                    </div>
                    <div class="w-1/2 px-2 text-center flex flex-col items-center">
                        <img src="<?= get_template_directory_uri() ?>/images/logo/ebix.png" alt="">
                        <div class="font-articulat text-primary text-sm font-semibold pt-6">EBiX Trades<br />Monitor</div>
                    </div>
                    <div class="w-1/2 px-2 text-center flex flex-col items-center">
                        <img src="<?= get_template_directory_uri() ?>/images/logo/master-plumber-association.png" alt="">
                        <div class="font-articulat text-primary text-sm font-semibold pt-6">Master Plumber<br />Association<br /> NSW</div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 px-3" data-aos="zoom-in">
                <div class="text-center bg-quaternary rounded-[30px] p-16">
                    <div class="text-grey text-[45px] leading-none font-bold">Welcome to <br> the careers page for <br /><span class="text-light-blue">Fix N Flow Plumbing</span></div>
                    <div class="text-grey leading-relaxed py-11 font-articulat">We are a fast-growing plumbing company dedicated to providing exceptional customer service and quality workmanship. Our success is built on the skills, knowledge, and dedication of our employees, and we are always looking for talented individuals to join our team.</div>
                    <a href="" class="btn-main-blue-hover-yellow px-14"><span class="relative z-10">Button name here</span></a>
                </div>
            </div>
            <div class="w-full lg:w-1/4 px-3" data-aos="zoom-in">
                <img src="<?= get_template_directory_uri() ?>/images/icons/google-color.png" alt="Google Color">
                <div class="flex flex-wrap -mx-2 pt-4">
                    <div class="w-1/2 px-2">
                        <div class="bg-light-blue text-primary h-full rounded-xl py-4 px-3.5">
                            <div class="text-3xl font-articulat-heavy leading-none">124+</div>
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

    <div class="bg-dark-blue py-28">
        <div class="container">
            <div class="flex flex-wrap justify-around">
                <div class="w-full lg:w-5/12 text-4xl md:text-5xl xl:text-heading leading-none text-white font-bold text-center">
                    Reach your <span class="text-main-blue">full potential</span> here
                </div>
                <div class="w-full lg:w-5/12 text-white font-articulat text-base leading-loose">
                    At Fix N Flow Plumbing, we offer a dynamic and supportive work environment that encourages personal and professional growth. We provide ongoing training and development opportunities to help our employees reach their full potential and achieve their career goals. 
                </div>
            </div>

            <div class="bg-light-blue rounded-[30px] p-10 mt-20">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/2">
                        <?= echo_theme_image('/images/icons/careers-form.png') ?>
                        <div class="text-white text-[45px] font-semibold py-11 leading-none">Interested in<br /> joining the <span class="text-main-blue">Fix N Flow</span><br /> Plumbing team?</div>
                        <div class="font-articulat text-white leading-loose">Please submit your resume and a brief cover letter.<br /> We look forward to hearing from you!</div>
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