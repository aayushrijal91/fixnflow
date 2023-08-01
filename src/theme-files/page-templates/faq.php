<?php
/*
 * Template Name: FAQ Page
 * The faq page
 *
 */
get_header();
?>

<div class="faqPage bg-off-white">
    <?php get_template_part('parts/section', 'banner'); ?>

    <div class="py-24">
        <div class="container">
            <div class="flex flex-wrap -mx-3 gap-y-5">
                <div class="w-full xl:w-1/2 px-3">
                    <div class="partGlobalCta md:h-[402px] rounded-xl md:rounded-[30px] bg-gradient-to-b from-[#316A9E] to-[#153B74] flex px-5 md:px-20 pt-60 pb-10 md:py-11 relative overflow-hidden">
                        <img alt="<?php bloginfo( 'name' ); ?>" class="globalCtaBg absolute left-0 top-0 h-[120%] w-[120%] max-w-[120%] duration-300" src="<?= get_template_directory_uri() ?>/images/background/cta-2.png">
                        <img src="<?= get_template_directory_uri() ?>/images/lib/faq-floating-logo.png" class="globalCtaLogo_2 absolute bottom-0 right-[-10%] w-[120%] max-w-[120%] duration-300" alt="<?php bloginfo( 'name' ); ?>">
                        <img src="<?= get_template_directory_uri() ?>/images/lib/floating-laptop.png" class="globalCtaComponent_2 absolute top-[-20%] md:top-32 md:left-[-3%] md:h-full duration-300" alt="<?php bloginfo( 'name' ); ?>">

                        <?php $cta_1 = get_field('cta_1'); ?>
                        <div class="relative text-center">
                            <div class="text-3xl md:text-4xl lg:text-[45px] font-bold text-light-blue highlight-white"><?= $cta_1['heading'] ?></div>
                            <div class="text-white font-articulat py-7"><?= $cta_1['sub_heading'] ?></div>
                            <?php if ($cta_1['button']) : ?>
                                <a href="<?= $cta_1['button']['url'] ?>" target="<?= $cta_1['button']['target'] ?>" class="btn-light-blue-hover-white px-14"><span class="relative z-10"><?= $cta_1['button']['title'] ?></span></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="w-full xl:w-1/2 px-3">
                    <div class="partGlobalCta md:h-[402px] rounded-xl md:rounded-[30px] px-10 md:px-20 py-11 bg-no-repeat bg-cover relative overflow-hidden" style="background:url(<?= get_template_directory_uri() ?>/images/background/faq_cta_2.jpg) no-repeat; background-size: cover">
                        <img alt="<?php bloginfo( 'name' ); ?>" class="absolute -left-7 bottom-0 duration-300" src="<?= get_template_directory_uri() ?>/images/background/cta-1-component.png">
                        <img src="<?= get_template_directory_uri() ?>/images/background/faq-cta-component-2.png" class="hidden md:block absolute bottom-0 right-0 duration-300" alt="<?php bloginfo( 'name' ); ?>">

                        <?php $cta_2 = get_field('cta_2'); ?>
                        <div class="relative text-center">
                            <div class="text-4xl lg:text-[45px] font-bold text-dark-blue highlight-white pb-60 md:pb-7"><?= $cta_2['heading'] ?></div>
                            <?php if ($cta_2['button']) : ?>
                                <a href="<?= $cta_2['button']['url'] ?>" target="<?= $cta_2['button']['target'] ?>" class="btn-main-blue-hover-yellow px-14"><span class="relative z-10"><?= $cta_2['button']['title'] ?></span></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-24">
        <div class="w-full lg:w-8/12 mx-auto">
            <div class="text-center text-grey text-4xl md:text-5xl xl:text-heading font-bold"><span class="text-main-blue">FAQ</span> Fix N Flow Plumbing</div>
            <div class="text-main-blue text-center pt-7 font-semibold">All your plumbing questions answered here</div>

            <div class="accordion-container pt-14 md:pt-20">
                <?php if (have_rows('faq_list')) :
                    $index = 1;
                    while (have_rows('faq_list')) : the_row();
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
                endif;
                ?>
            </div>
        </div>
    </div>

    <div class="pb-52">
        <?php get_template_part('parts/section', 'professionalPlumbing') ?>
    </div>

    <?php get_template_part('parts/section', 'whyus') ?>

    <div class="pb-40 lg:pb-60">
        <?php get_template_part('parts/section', 'leadingbrands') ?>
    </div>
</div>

<?php get_footer() ?>