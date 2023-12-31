<?php
/*
 * Template Name: Inner Service No Child Page
 * The inner inner services page
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
                            <h3 class="text-2xl font-bold text-main-blue"><?= $section_2['heading'] ?></h3>
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

    <?php
    $extra_content = get_field('extra_content_block');
    if ($extra_content) :
        if ($extra_content['show_extra_content_block']) : ?>
            <div class="bg-dark-blue py-24">
                <div class="container">
                    <?php if ($extra_content['heading']) : ?>
                        <h2 class="text-4xl md:text-5xl xl:text-heading font-bold text-main-blue highlight-white leading-none text-center"><?= $extra_content['heading'] ?></h2>
                    <?php endif; ?>
                    <div class="flex flex-wrap -mx-3 gap-y-5 pt-10 text-white">
                        <?php if ($extra_content['content_1']) : ?>
                            <div class="w-full lg:w-1/2 flex-1 px-3 h-full">
                                <article class="bg-main-blue rounded-[20px] p-5 description"><?= $extra_content['content_1'] ?></article>
                            </div>
                        <?php endif; ?>
                        <?php if ($extra_content['content_2']) : ?>
                            <div class="w-full lg:w-1/2 flex-1 px-3 h-full">
                                <article class="bg-main-blue rounded-[20px] p-5 description"><?= $extra_content['content_2'] ?></article>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
    <?php endif;
    endif; ?>

    <div class="bg-white">
        <?php get_template_part('parts/section', 'professionalPlumbing') ?>
    </div>

    <?php get_template_part('parts/section', 'serviceGuaranteed') ?>

    <div class="container pt-24 pb-32 md:pb-60">
        <?php get_template_part('parts/section', 'specialOffers') ?>
        <?php get_template_part('parts/section', 'globalcta') ?>
    </div>

    <?php get_template_part('parts/section', 'whyus') ?>

    <div class="pb-24">
        <?php get_template_part('parts/section', 'leadingbrands') ?>
    </div>

    <?php get_template_part('parts/section', 'contact') ?>

    <div class="container pt-24 pb-44 md:pb-60">
        <?php if (have_rows('faqs')) : ?>
            <div class="w-full lg:w-8/12 mx-auto">
                <h2 class="text-center text-grey text-heading font-bold"><span class="text-main-blue">Frequently</span>asked questions</h2>
                <p class="text-main-blue text-center pt-7 font-semibold">All you <?= get_the_title() ?> questions answered here</p>

                <div class="accordion-container pt-20">
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
                            <article class="accordion-body" style="<?= ($index == 1) ? 'display: block;' : ''; ?>">
                                <?= $answer ?>
                            </article>
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