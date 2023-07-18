<?php
/*
 * Template Name: Inner Services Page
 * The inner services page
 *
 */
get_header();
?>

<div class="innerServicePage bg-off-white">
    <?php get_template_part('parts/section', 'serviceBanner'); ?>

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

    <?php $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent' => get_the_ID(),
        'order'          => 'ASC',
        'orderby'        => 'publish_date',
        'meta_query' => array(
            array(
                'key' => '_wp_page_template',
                'value' => 'page-templates/inner-inner-service.php'
            )
        )
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
    ?>
        <div class="py-40 bg-white">
            <div class="container">
                <div class="text-center text-4xl md:text-5xl xl:text-heading text-grey font-bold leading-none">Explore all <span class="text-main-blue"><?= get_the_title() ?> Services</span></div>
                <div class="pt-24 flex flex-wrap -mx-2 gap-y-4">
                    <?php
                    while ($the_query->have_posts()) : $the_query->the_post();
                        $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                    ?>
                        <div class="w-full md:w-1/2 lg:w-1/3 px-2">
                            <div class="bg-off-white hover:bg-quaternary duration-300 rounded-2xl p-6 flex flex-col justify-between items-center h-full" data-aos="zoom-in">
                                <div class="h-[147px] w-full bg-grey rounded-[10px] p-3 flex items-end bg-no-repeat bg-cover" style="background-image: url('<?= $featured_img_url ?>'); background-size: cover;"></div>
                                <div class="text-2xl font-bold text-main-blue pt-8 text-center"><?= get_the_title() ?></div>
                                <div class="font-articulat leading-loose text-grey text-center pt-6 pb-8"><?= get_the_content() ?></div>
                                <a href="<?= get_the_permalink() ?>" class="border border-light-blue rounded-md h-[48px] px-14 flex items-center justify-center text-center text-main-blue font-articulat font-semibold gap-x-4">
                                    Explore now
                                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.86279 16.0078L8.28068 9.58992C8.67121 9.1994 8.67121 8.56623 8.28069 8.17571L1.86279 1.75781" stroke="#5AB2F8" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    <?php
    endif;
    wp_reset_query();
    ?>

    <div class="py-40 lg:pb-60">
        <?php get_template_part('parts/section', 'professionalPlumbing') ?>
    </div>

    <?php get_template_part('parts/section', 'whyus') ?>

    <div class="pb-24">
        <?php get_template_part('parts/section', 'leadingbrands') ?>
    </div>

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