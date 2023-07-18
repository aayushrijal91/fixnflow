<?php
/*
 * Template Name: Inner Inner Services Page
 * The inner inner services page
 *
 */
get_header();
?>

<div class="innerInnerServicePage bg-off-white">
    <?php get_template_part('parts/section', 'innerInnerServiceBanner'); ?>

    <?php $section_1 = get_field('section_1');

    if ($section_1) : ?>
        <div class="container">
            <div class="flex flex-wrap py-28">
                <div class="w-1/3">
                    <div class="text-4xl md:text-5xl xl:text-heading text-main-blue font-bold"><?= $section_1['heading'] ?></div>
                    <div class="pt-10">
                        <a href="<?= $section_1['button_1']['url'] ?>" target="<?= $section_1['button_1']['target'] ?>" class="btn-yellow-hover-main-blue px-14"><span class="relative z-10"><?= $section_1['button_1']['title'] ?></span></a>
                    </div>
                    <div class="pt-5">
                        <a href="<?= $section_1['button_2']['url'] ?>" target="<?= $section_1['button_1']['target'] ?>" class="btn-main-blue-hover-yellow px-14"><span class="relative z-10"><?= $section_1['button_2']['title'] ?></span></a>
                    </div>
                </div>
                <div class="w-2/3">
                    <div class="bg-white rounded-[30px] h-full py-10 px-14 font-articulat text-grey leading-relaxed description columns-2">
                        <?= $section_1['description'] ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="bg-white">
        <?php get_template_part('parts/section', 'professionalPlumbing') ?>
    </div>

    <div class="container pt-24 pb-60">
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