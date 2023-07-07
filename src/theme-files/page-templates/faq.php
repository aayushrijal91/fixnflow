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
            <div class="flex flex-wrap -mx-3">
                <div class="w-full md:w-1/2 px-3">
                    <div class="partGlobalCta h-[402px] rounded-[30px] bg-gradient-to-b from-[#316A9E] to-[#153B74] flex px-20 py-11 transition-all duration-300 relative overflow-hidden">
                        <img alt="" class="globalCtaBg absolute left-0 top-0 h-[120%] w-[120%] max-w-[120%] duration-300" src="<?= get_template_directory_uri() ?>/images/background/cta-2.png">
                        <img src="<?= get_template_directory_uri() ?>/images/lib/faq-floating-logo.png" class="globalCtaLogo_2 absolute bottom-0 right-[-10%] w-[120%] max-w-[120%] duration-300" alt="">
                        <img src="<?= get_template_directory_uri() ?>/images/lib/floating-laptop.png" class="globalCtaComponent_2 absolute bottom-[-20%] left-[-3%] h-full max-w-[120%] duration-300" alt="">

                        <div class="relative text-center">
                            <div class="text-4xl lg:text-[45px] font-bold text-light-blue">Book online now <span class="text-white">for all your plumbing needs</span></div>
                            <div class="text-white font-articulat py-7">Plus receive 10% off all online bookings!</div>
                            <a href="./" class="btn-light-blue-hover-white px-14"><span class="relative z-10">Learn More</span></a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <div class="partGlobalCta h-[402px] rounded-[30px] bg-gradient-to-b from-[#316A9E] to-[#153B74] flex px-20 py-11 transition-all duration-300 relative overflow-hidden">
                        <img alt="" class="globalCtaBg absolute left-0 top-0 h-[120%] w-[120%] max-w-[120%] duration-300" src="<?= get_template_directory_uri() ?>/images/background/cta-2.png">
                        <img src="<?= get_template_directory_uri() ?>/images/lib/faq-floating-logo.png" class="globalCtaLogo_2 absolute bottom-0 right-[-10%] w-[120%] max-w-[120%] duration-300" alt="">
                        <img src="<?= get_template_directory_uri() ?>/images/lib/floating-laptop.png" class="globalCtaComponent_2 absolute bottom-[-20%] left-[-3%] h-full max-w-[120%] duration-300" alt="">

                        <div class="relative text-center">
                            <div class="text-4xl lg:text-[45px] font-bold text-light-blue">Book online now <span class="text-white">for all your plumbing needs</span></div>
                            <div class="text-white font-articulat py-7">Plus receive 10% off all online bookings!</div>
                            <a href="./" class="btn-main-blue-hover-yellow px-14"><span class="relative z-10">Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-24">
        <div class="container">
            <div class="w-full lg:w-8/12 mx-auto">
                <div class="text-center text-grey text-heading font-bold"><span class="text-main-blue">FAQ</span> Fix N Flow Plumbing</div>
                <div class="text-main-blue text-center pt-7 font-semibold">All your plumbing questions answered here</div>

                <div class="accordion-container pt-20">
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