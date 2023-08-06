<?php
/*
 * Template Name: Home Safety Inspection Page
 * The home safety inspection page
 *
 */
get_header();
?>

<main class="innerInnerServicePage bg-off-white">
    <?php get_template_part('parts/section', 'innerInnerServiceBanner'); ?>

    <?php
    $section_1 = get_field('section_1');
    $section_2 = get_field('section_2');
    $section_3 = get_field('section_3');
    $section_4 = get_field('section_4');
    ?>
    <?php if ($section_1 || $section_2 || $section_3 || $section_4) : ?>
        <div class="container py-24 md:pt-36 lg:pb-44">
            <div class="flex flex-wrap -mx-3 gap-y-7">
                <?php if ($section_1) : ?>
                    <div class="w-full md:w-1/2 px-3 order-1" data-aos="zoom-in">
                        <div class="text-center bg-contain rounded-[20px] lg:rounded-[30px] py-9 px-5 xl:p-20 shadow-lg h-full flex flex-col justify-between items-center" style="background: linear-gradient(#171818 0 40%, rgba(0,0,0,0) 80% 100%), url(<?= $section_1['bg_image']['url'] ?>) no-repeat center bottom; background-size: contain;">
                            <article>
                                <h2 class="text-light-blue text-4xl xl:text-[45px] leading-none font-bold highlight-white"><?= $section_1['heading'] ?></h2>
                                <p class="text-white leading-relaxed py-6 font-articulat"><?= $section_1['description'] ?></p>
                            </article>
                            <a href="<?= $section_1['button']['url'] ?>" target="<?= $section_1['button']['target'] ?>" class="btn-yellow-hover-main-blue px-14 mt-10"><span class="relative z-10"><?= $section_1['button']['title'] ?></span></a>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($section_2) : ?>
                    <div class="w-full lg:w-1/2 px-3 order-2 md:order-3 lg:order-2" data-aos="zoom-in">
                        <div class="bg-white rounded-[20px] lg:rounded-[30px] h-full py-11 px-5 lg:px-9">
                            <h2 class="text-2xl font-bold text-main-blue"><?= $section_2['heading'] ?></h2>
                            <article class="description font-articulat text-grey pt-6"><?= $section_2['description'] ?></article>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($section_3) : ?>
                    <div class="w-full lg:w-7/12 px-3 order-3 md:order-4 lg:order-3" data-aos="zoom-in">
                        <div class="bg-quaternary rounded-[30px] h-full py-11 px-5 md:px-9">
                            <h3 class="text-2xl font-bold text-main-blue"><?= $section_3['heading'] ?></h3>
                            <article class="description font-articulat text-grey pt-6"><?= $section_3['description'] ?></article>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($section_4) : ?>
                    <div class="w-full md:w-1/2 lg:w-5/12 px-3 order-4 md:order-2 lg:order-4" data-aos="zoom-in">
                        <div class="text-center rounded-[20px] lg:rounded-[30px] px-5 py-9 xl:p-20 shadow-lg h-full" style="background: linear-gradient(#ffffff 0 40%, rgba(0,0,0,0) 80% 100%), url(<?= $section_4['bg_image']['url'] ?>) no-repeat center bottom; background-size: contain;">
                            <h2 class="text-dark text-4xl xl:text-[45px] leading-none font-bold highlight-main-blue"><?= $section_4['heading'] ?></h2>
                            <p class="text-dark leading-relaxed py-6 font-articulat"><?= $section_4['description'] ?></p>
                            <a href="<?= $section_4['button']['url'] ?>" target="<?= $section_4['button']['target'] ?>" class="btn-main-blue-hover-yellow px-14 mt-10"><span class="relative z-10"><?= $section_4['button']['title'] ?></span></a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="bg-white">
        <?php get_template_part('parts/section', 'professionalPlumbing') ?>
    </div>

    <?php $service_attributes = get_field('service_attributes');
    if (!empty($service_attributes['heading'])) : ?>
        <div class="bg-light-blue pt-20 md:pt-28">
            <div class="container" data-aos="fade-up">
                <h2 class="text-white text-4xl md:text-5xl xl:text-heading font-semibold leading-none capitalize"><?= $service_attributes['heading'] ?></h2>
            </div>
            <div class="container pt-16 pb-36 relative items-center hidden xl:flex">
                <button value="0" class="absolute z-[1000] -left-4 serviceAttributeBoxesButton bg-main-blue h-[65px] w-[65px] rounded-full flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="27" viewBox="0 0 16 27" fill="none">
                        <path d="M13.6481 2.34619L2.51595 13.4783L13.6481 24.6104" fill="#0067B9" />
                        <path d="M13.6481 2.34619L2.51595 13.4783L13.6481 24.6104" stroke="#F7F8FA" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" />
                    </svg>
                </button>
                <div class="flex transition-transform duration-700 ease-in-out transform" id="serviceAttributeBoxes">
                    <?php if (have_rows('service_attributes')) :
                        $count = 0;
                        while (have_rows('service_attributes')) : the_row();
                            if (have_rows('attributes')) :
                                while (have_rows('attributes')) : the_row();
                                    $title = get_sub_field('title');
                                    $description = get_sub_field('description');
                                    if ($count == 0) :
                    ?>
                                        <article class="bg-primary rounded-[30px] h-inherit w-2/5 mx-2 flex-shrink-0 px-11 py-8" data-aos="zoom-in">
                                            <h4 class="text-2xl text-white highlight-light-blue font-semibold leading-none pb-4"><?= $title ?></h3>
                                                <p class="font-articulat text-white leading-relaxed"><?= $description ?></p>
                                        </article>
                                    <?php else : ?>
                                        <article class="bg-white rounded-[30px] h-inherit w-1/5 mx-2 flex-shrink-0 py-8 px-7" data-aos="zoom-in">
                                            <h4 class="text-2xl text-main-blue font-bold leading-none pb-4"><?= $title ?></h4>
                                            <p class="font-articulat text-dark-blue leading-relaxed"><?= $description ?></p>
                                        </article>
                    <?php
                                    endif;
                                    $count++;
                                endwhile;
                            endif;
                        endwhile;
                    endif;
                    ?>
                </div>
                <button value="-25%" class="absolute z-[1000] -right-4 serviceAttributeBoxesButton bg-main-blue h-[65px] w-[65px] rounded-full flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="26" viewBox="0 0 15 26" fill="none">
                        <path d="M1.5162 24.4172L12.6483 13.2851L1.5162 2.15302" fill="#0067B9" />
                        <path d="M1.5162 24.4172L12.6483 13.2851L1.5162 2.15302" stroke="#F7F8FA" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" />
                    </svg>
                </button>
            </div>

            <div class="py-10 xl:hidden">
                <div class="px-2">
                    <?php if (have_rows('service_attributes')) :
                        $count = 0;
                        while (have_rows('service_attributes')) : the_row();
                            if (have_rows('attributes')) :
                                while (have_rows('attributes')) : the_row();
                                    $title = get_sub_field('title');
                                    $description = get_sub_field('description');
                                    if ($count == 0) :
                    ?>
                                        <article class="bg-primary rounded-[30px] h-inherit p-8" data-aos="zoom-in">
                                            <p class="text-2xl text-white highlight-light-blue font-semibold leading-none pb-4"><?= $title ?></p>
                                            <p class="font-articulat text-white leading-relaxed"><?= $description ?></p>
                                        </article>
                    <?php
                                    endif;
                                    $count++;
                                endwhile;
                            endif;
                        endwhile;
                    endif;
                    ?>
                </div>

                <div class="mt-3 serviceAttributeBoxesMobile">
                    <?php if (have_rows('service_attributes')) :
                        $count = 0;
                        while (have_rows('service_attributes')) : the_row();
                            if (have_rows('attributes')) :
                                while (have_rows('attributes')) : the_row();
                                    $title = get_sub_field('title');
                                    $description = get_sub_field('description');
                                    if ($count == 0) :
                    ?>
                                    <?php else : ?>
                                        <article class="bg-white rounded-[30px] h-inherit mx-2 flex-shrink-0 py-8 px-7" data-aos="zoom-in">
                                            <h4 class="text-2xl text-main-blue font-bold leading-none pb-4"><?= $title ?></h4>
                                            <p class="font-articulat text-dark-blue leading-relaxed"><?= $description ?></p>
                                        </article>
                    <?php
                                    endif;
                                    $count++;
                                endwhile;
                            endif;
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>

            <?php $service_description = get_field('service_description');
            if ($service_description['heading'] != null) : ?>
                <div class="container pb-28 relative">
                    <div class="flex flex-wrap justify-between">
                        <div class="w-full lg:w-5/12" data-aos="zoom-in">
                            <h2 class="highlight-white text-dark-blue text-4xl md:text-5xl xl:text-heading font-semibold leading-none"><?= $service_description['heading'] ?></span></h2>
                            <article class="font-articulat text-white leading-relaxed pt-8 description"><?= $service_description['description'] ?></article>
                        </div>
                        <div class="w-full lg:w-1/2" data-aos="zoom-in">
                            <div class="rounded-[30px] overflow-hidden"><?= echo_image($service_description['image'], '', 'w-full') ?></div>
                        </div>
                    </div>
                    <img src="<?= get_template_directory_uri() ?>/images/lib/guaranteed-plumbing.gif" alt="<?php bloginfo('name'); ?>" class="absolute right-20 -bottom-14">
                </div>
            <?php endif; ?>

            <?php
            $service_description_listing = get_field('service_description_listing');
            if (!empty($service_description_listing['heading'])) :
            ?>
                <div class="container pb-28 relative">
                    <div class="flex flex-wrap justify-between">
                        <div class="w-full lg:w-5/12" data-aos="zoom-in">
                            <h2 class="highlight-white text-dark-blue text-4xl md:text-5xl xl:text-heading font-semibold leading-none"><?= $service_description_listing['heading'] ?></h2>
                        </div>
                        <div class="w-full lg:w-1/2" data-aos="zoom-in">
                            <div class="columns-2">
                                <?php if (have_rows('service_description_listing')) :
                                    while (have_rows('service_description_listing')) : the_row();
                                        if (have_rows('service_list')) :
                                            while (have_rows('service_list')) : the_row();
                                                $subHeading = get_sub_field('sub_heading');
                                                $title = get_sub_field('title');
                                                $description = get_sub_field('description');
                                ?>
                                                <div class="border border-white rounded-[20px] p-8 servicDescriptionCard mb-4 break-inside-avoid">
                                                    <p class="text-dark-blue font-articulat subHeading"><?= $subHeading ?></p>
                                                    <h3 class="text-2xl text-white font-semibold leading-none pt-3 pb-6 title"><?= $title ?></h3>
                                                    <article class="text-dark-blue font-articulat pb-6 description hidden"><?= $description ?></article>
                                                    <div class="flex justify-center">
                                                        <button class="showServiceDescriptionBtn h-[52px] w-[52px] rounded-full bg-[#C0E3FF] flex items-center justify-center">
                                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M1.76416 12.4197H22.7888" stroke="#0067B9" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M12.2764 1.90747L12.2764 22.9321" stroke="#0067B9" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                <?php
                                            endwhile;
                                        endif;
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    <img src="<?= get_template_directory_uri() ?>/images/lib/guaranteed-plumbing.gif" alt="<?php bloginfo('name'); ?>" class="absolute left-20 -bottom-14">
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="relative">
        <?php get_template_part('parts/section', 'serviceGuaranteed') ?>
    </div>

    <div class="container pt-24 pb-32 md:pb-60">
        <?php get_template_part('parts/section', 'specialOffers') ?>
        <?php get_template_part('parts/section', 'globalcta') ?>
    </div>

    <?php get_template_part('parts/section', 'whyus') ?>

    <div class="pb-24">
        <?php get_template_part('parts/section', 'leadingbrands') ?>
    </div>

    <?php get_template_part('parts/section', 'contact') ?>

    <div class="container pt-24 pb-60">
        <?php if (have_rows('faqs')) : ?>
            <div class="w-full lg:w-8/12 mx-auto" data-aos="fade-up">
                <h2 class="text-center text-grey text-4xl md:text-5xl xl:text-heading font-bold highlight-main-blue leading-none"><span>Frequently</span> asked questions</h2>
                <p class="text-main-blue text-center pt-7 font-semibold">All you <?= get_the_title() ?> questions answered here</p>

                <div class="accordion-container pt-10 md:pt-20">
                    <?php
                    $index = 1;
                    while (have_rows('faqs')) : the_row();
                        $question = get_sub_field('question');
                        $answer = get_sub_field('answer');
                    ?>
                        <div class="accordion-card">
                            <div class="accordion-head<?= ($index == 1) ? " active" : ""; ?>">
                                <div class="flex w-full justify-between">
                                    <p class="h-inherit">
                                        <?= $question ?>
                                    </p>
                                    <div class="h-inherit">
                                        <p class="plusminus">
                                            <?php if ($index == 1) { ?>
                                                <svg width="25" height="4" viewBox="0 0 25 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.56055 1.81152H22.5852" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            <?php } else { ?>
                                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.0723 1.99902V23.0237" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M1.56006 12.5112H22.5847" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            <?php } ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <p class="accordion-body" style="<?= ($index == 1) ? 'display: block;' : ''; ?>">
                                <?= $answer ?>
                            </p>
                        </div>
                    <?php
                        $index++;
                    endwhile;
                    ?>
                </div>

                <?php if (get_field('faq_button')) : ?>
                    <div class="flex justify-center pt-12">
                        <a href="<?= get_field('faq_button')['url'] ?>" target="<?= get_field('faq_button')['target'] ?>" class="btn-main-blue-hover-yellow px-14"><span class="relative z-10"><?= get_field('faq_button')['title'] ?></span></a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif;
        wp_reset_query(); ?>
    </div>
</main>

<?php get_footer() ?>