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

    <div class="bg-light-blue pt-28">
        <div class="container">
            <div class="text-white text-4xl md:text-5xl xl:text-heading font-semibold leading-none">Emergency Pipe Replacement</div>
        </div>
        <div class="container pt-16 relative flex items-center">
            <button value="0" class="absolute z-[1000] -left-4 serviceAttributeBoxesButton bg-main-blue h-[65px] w-[65px] rounded-full flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="27" viewBox="0 0 16 27" fill="none">
                    <path d="M13.6481 2.34619L2.51595 13.4783L13.6481 24.6104" fill="#0067B9" />
                    <path d="M13.6481 2.34619L2.51595 13.4783L13.6481 24.6104" stroke="#F7F8FA" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" />
                </svg>
            </button>
            <div class="flex transition-transform duration-700 ease-in-out transform" id="serviceAttributeBoxes">
                <div class="bg-primary rounded-[30px] h-inherit w-2/5 mx-2 flex-shrink-0 px-11 py-8">
                    <div class="text-2xl text-white highlight-light-blue font-semibold leading-none pb-4">Common reasons <span>for pipe<br /> replacements</span></div>
                    <div class="font-articulat text-white leading-relaxed">Emergencies happen! Don't let a broken pipe ruin your week. Call a professional who can provide you with a long term plumbing solution. At Fix N Flow, we are ready to help, we're available 24/7 as we know you can't predict emergencies. You can however minimise them from happening.</div>
                </div>
                <div class="bg-white rounded-[30px] h-inherit w-1/5 mx-2 flex-shrink-0 py-8 px-7">
                    <div class="text-2xl text-main-blue font-bold leading-none pb-4">Old or broken pipes.</div>
                    <div class="font-articulat text-dark-blue leading-relaxed">Everything has a use by date and pipes are no different</div>
                </div>
                <div class="bg-white rounded-[30px] h-inherit w-1/5 mx-2 flex-shrink-0 py-8 px-7">
                    <div class="text-2xl text-main-blue font-bold leading-none pb-4">Severe damage</div>
                    <div class="font-articulat text-dark-blue leading-relaxed">Your existing pipes are no longer repairable due to reasons such as severe clogging, leaking, general wear and tear or rusting.</div>
                </div>
                <div class="bg-white rounded-[30px] h-inherit w-1/5 mx-2 flex-shrink-0 py-8 px-7">
                    <div class="text-2xl text-main-blue font-bold leading-none pb-4">Irregular maintenance</div>
                    <div class="font-articulat text-dark-blue leading-relaxed">The more you take care of your pipes, the less you will need them replaced!</div>
                </div>
                <div class="bg-white rounded-[30px] h-inherit w-1/5 mx-2 flex-shrink-0 py-8 px-7">
                    <div class="text-2xl text-main-blue font-bold leading-none pb-4">Tree roots</div>
                    <div class="font-articulat text-dark-blue leading-relaxed">Tree roots growing in your pipes.</div>
                </div>
            </div>
            <button value="-25%" class="absolute z-[1000] -right-4 serviceAttributeBoxesButton bg-main-blue h-[65px] w-[65px] rounded-full flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="26" viewBox="0 0 15 26" fill="none">
                    <path d="M1.5162 24.4172L12.6483 13.2851L1.5162 2.15302" fill="#0067B9" />
                    <path d="M1.5162 24.4172L12.6483 13.2851L1.5162 2.15302" stroke="#F7F8FA" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" />
                </svg>
            </button>
        </div>

        <div class="container pt-36 pb-28 relative">
            <div class="flex flex-wrap justify-between">
                <div class="w-5/12">
                    <div class="highlight-white text-dark-blue text-4xl md:text-5xl xl:text-heading font-semibold leading-none">You need to act quickly <span>when you have a broken pipe.</span></div>
                    <div class="font-articulat text-white leading-relaxed pt-8">The sooner you get it fixed the less chance you will cause further damage to your plumbing system. Contact our pipe replacement experts at Fix N Flow for fast and reliable service. We’re the top choice for pipe replacements across NSW, including Sydney Metro, Central Coast, South Coast & Illawarra, Hunter Valley, and Blue Mountains.</div>
                </div>
                <div class="w-1/2"></div>
            </div>
            <img src="<?= get_template_directory_uri() ?>/images/lib/guaranteed-plumbing.gif" alt="plumb" class="absolute right-0 -bottom-14">
        </div>
    </div>

    <div class="relative">
    <?php get_template_part('parts/section', 'serviceGuaranteed') ?>
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