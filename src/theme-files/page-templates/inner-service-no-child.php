<?php
/*
 * Template Name: Inner Service No Child Page
 * The inner inner services page
 *
 */
get_header();
?>

<div class="innerInnerServicePage bg-off-white">
    <?php get_template_part('parts/section', 'innerInnerServiceBanner'); ?>

    <?php
    $section_1 = get_field('section_1');
    $section_2 = get_field('section_2');
    $section_3 = get_field('section_3');
    $section_4 = get_field('section_4');
    ?>
    <?php if ($section_1 || $section_2 || $section_3 || $section_4) : ?>
        <div class="container pt-36 pb-44">
            <div class="flex flex-wrap -mx-3 gap-y-7">
                <?php if ($section_1) : ?>
                    <div class="w-full lg:w-1/2 px-3" data-aos="zoom-in">
                        <div class="text-center bg-contain rounded-[30px] p-20 shadow-lg h-full flex flex-col justify-between items-center" style="background: linear-gradient(#171818 0 40%, rgba(0,0,0,0) 80% 100%), url(<?= $section_1['bg_image']['url'] ?>) no-repeat center bottom; background-size: contain;">
                            <div>
                                <div class="text-light-blue text-[45px] leading-none font-bold highlight-white"><?= $section_1['heading'] ?></div>
                                <div class="text-white leading-relaxed py-6 font-articulat"><?= $section_1['description'] ?></div>
                            </div>
                            <a href="<?= $section_1['button']['url'] ?>" target="<?= $section_1['button']['target'] ?>" class="btn-yellow-hover-main-blue px-14 mt-10"><span class="relative z-10"><?= $section_1['button']['title'] ?></span></a>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($section_2) : ?>
                    <div class="w-full lg:w-1/2 px-3" data-aos="zoom-in">
                        <div class="bg-white rounded-[30px] h-full py-11 px-9">
                            <div class="text-2xl font-bold text-main-blue"><?= $section_2['heading'] ?></div>
                            <div class="description font-articulat text-grey pt-6"><?= $section_2['description'] ?></div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($section_3) : ?>
                    <div class="w-full lg:w-7/12 px-3" data-aos="zoom-in">
                        <div class="bg-quaternary rounded-[30px] h-full py-11 px-9">
                            <div class="text-2xl font-bold text-main-blue"><?= $section_3['heading'] ?></div>
                            <div class="description font-articulat text-grey pt-6"><?= $section_3['description'] ?></div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($section_4) : ?>
                    <div class="w-full lg:w-5/12 px-3" data-aos="zoom-in">
                        <div class="text-center bg-contain rounded-[30px] p-20 shadow-lg h-full" style="background: linear-gradient(#ffffff 0 40%, rgba(0,0,0,0) 80% 100%), url(<?= $section_4['bg_image']['url'] ?>) no-repeat center bottom; background-size: contain;">
                            <div class="text-dark text-[45px] leading-none font-bold highlight-main-blue"><?= $section_4['heading'] ?></div>
                            <div class="text-dark leading-relaxed py-6 font-articulat"><?= $section_4['description'] ?></div>
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

    <?php get_template_part('parts/section', 'serviceGuaranteed') ?>

    <div class="container pt-24 pb-60">
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
            <div class="w-full lg:w-8/12 mx-auto">
                <div class="text-center text-grey text-heading font-bold"><span class="text-main-blue">Frequently</span>asked questions</div>
                <div class="text-main-blue text-center pt-7 font-semibold">All you <?= get_the_title() ?> questions answered here</div>

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
                                    <div class="h-inherit">
                                        <?= $question ?>
                                    </div>
                                    <div class="h-inherit">
                                        <div class="plusminus">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-body" style="<?= ($index == 1) ? 'display: block;' : ''; ?>">
                                <?= $answer ?>
                            </div>
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
</div>

<?php get_footer() ?>