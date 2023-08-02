<?php
/*
 * Template Name: Front Page
 * The front page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
?>

<div class="homeBanner h-[680px] md:h-auto xl:h-[860px] relative">
    <video class="absolute w-full h-full object-cover hidden md:block" autoplay loop muted>
        <source src="<?= get_template_directory_uri() ?>/images/background/home_banner_animation.webm" type="video/webm">
        <source src="<?= get_template_directory_uri() ?>/images/background/home_banner_animation.mp4" type="video/mp4">
        Your browser does not support HTML video.
    </video>
    <img src="<?= get_template_directory_uri() ?>/images/background/homebanner-sm.jpg" class="absolute w-full h-full md:hidden" alt="<?php bloginfo('name'); ?>">

    <div class="container pt-32 md:pt-64 lg:pt-52 xl:pt-64 relative">
        <div class="flex justify-center">
            <div class="w-8/12 md:w-10/12 lg:w-2/3 text-white text-center">
                <h2 class="font-articulat text-[22px] lg:text-3xl">Your trusted plumbing partner in Sydney</h2>
                <h1 class="text-4xl md:text-5xl lg:text-heading font-bold leading-none pt-3.5">Flow with the Pros, Choose<br /> <span class="text-light-blue">Fix N Flow</span></h1>
            </div>
        </div>
        <div class="flex flex-wrap justify-between items-center pt-32 lg:pt-44 gap-y-16">
            <div class="w-full lg:w-7/12 order-2 lg:order-1" data-aos="zoom-in">
                <?= get_template_part('parts/section', 'checkServiceArea') ?>
            </div>
            <div class="w-full lg:w-4/12 order-1 lg:order-2">
                <div class="flex flex-wrap -mx-1 items-center pb-3">
                    <div class="w-1/3 px-1">
                        <img src="<?= get_template_directory_uri() ?>/images/icons/google-reviews.png" alt="<?php bloginfo('name'); ?>">
                    </div>
                    <div class="w-1/3 px-1">
                        <article class="border-b-4 border-r-4 border-light-blue rounded-[10px] bg-white py-2 px-3.5 font-articulat text-dark-blue font-bold leading-none">
                            <p class="text-3xl"><?= get_field('number_of_reviews', 'options') ?>+</p>
                            <p class="text-xs">Customer reviews</p>
                        </article>
                    </div>
                    <div class="w-1/3 px-1">
                        <article class="border-b-4 border-r-4 border-yellow rounded-[10px] bg-main-blue py-2 px-3.5 font-articulat text-white font-bold leading-none">
                            <p class="text-3xl flex items-center gap-x-2">5.0
                                <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.88515 0.857663C6.05318 0.439219 6.64555 0.439219 6.81358 0.857663L8.06134 3.96483C8.13289 4.14302 8.30013 4.26453 8.49171 4.27752L11.8324 4.50403C12.2823 4.53454 12.4653 5.09791 12.1193 5.38703L9.54977 7.53388C9.40241 7.657 9.33853 7.8536 9.38538 8.03982L10.2023 11.287C10.3123 11.7243 9.83305 12.0725 9.45115 11.8327L6.61535 10.0524C6.45272 9.95026 6.24601 9.95026 6.08338 10.0524L3.24758 11.8327C2.86568 12.0725 2.38644 11.7243 2.49646 11.287L3.31335 8.03982C3.3602 7.8536 3.29632 7.657 3.14896 7.53388L0.579446 5.38703C0.233408 5.09791 0.416459 4.53454 0.866348 4.50403L4.20702 4.27752C4.3986 4.26453 4.56584 4.14302 4.63739 3.96483L5.88515 0.857663Z" fill="#FFAE35" />
                                </svg>
                            </p>
                            <p class="text-xs">Average rating</p>
                        </article>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-1">
                    <div class="w-1/3 px-1">
                        <div class="border border-light-blue rounded-full bg-light-blue bg-opacity-60 h-[41px] flex items-center justify-center p-2">
                            <img src="<?= get_template_directory_uri() ?>/images/icons/hipages-review.png" alt="<?php bloginfo('name'); ?>">
                        </div>
                    </div>
                    <div class="w-1/3 px-1">
                        <div class="border border-light-blue rounded-full bg-light-blue bg-opacity-60 h-[41px] flex items-center justify-center p-2">
                            <img src="<?= get_template_directory_uri() ?>/images/icons/facebook-review.png" alt="<?php bloginfo('name'); ?>">
                        </div>
                    </div>
                    <div class="w-1/3 px-1">
                        <div class="border border-light-blue rounded-full bg-light-blue bg-opacity-60 h-[41px] flex items-center justify-center p-2">
                            <img src="<?= get_template_directory_uri() ?>/images/icons/truelocal-review.png" alt="<?php bloginfo('name'); ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="homePage pt-96 md:pt-0">
    <div class="container pt-44 pb-20 md:pb-44">
        <?php get_template_part('parts/section', 'globalcta') ?>
    </div>

    <?php $section_1 = get_field('section_1');
    if ($section_1['heading']) : ?>
        <div class="container hidden lg:block">
            <div class="flex justify-center group relative">
                <div class="w-full lg:w-5/12 absolute top-0 left-0 opacity-0 group-hover:opacity-100 translate-y-96 group-hover:translate-y-0 duration-1000">
                    <h2 class="text-5xl xl:text-heading leading-none font-bold text-main-blue highlight-light-blue"><?= $section_1['heading'] ?></h2>
                    <article class="text-grey font-articulat py-16 leading-loose description">
                        <?= $section_1['description'] ?>
                    </article>
                    <div class="flex flex-wrap -mx-2">
                        <div class="w-full md:w-1/2 px-2">
                            <a href="<?= $section_1['button_1']['url'] ?>" target="<?= $section_1['button_1']['target'] ?>" class="btn-yellow-hover-main-blue w-full"><span class="relative z-10"><?= $section_1['button_1']['title'] ?></span></a>
                        </div>
                        <div class="w-full md:w-1/2 px-2">
                            <a href="<?= $section_1['button_2']['url'] ?>" target="<?= $section_1['button_2']['target'] ?>" class="btn-main-blue-hover-yellow w-full"><span class="relative z-10"><?= $section_1['button_2']['title'] ?></span></a>
                        </div>
                    </div>
                </div>
                <div class="lg:group-hover:translate-x-[20rem] xl:group-hover:translate-x-[30rem] duration-1000 w-full lg:w-9/12 rounded-[30px] h-[641px] bg-no-repeat bg-cover bg-center p-6 shadow-[14px_14px_#5AB2F8] overflow-hidden relative">
                    <img class="absolute top-0 left-0 object-cover h-full" src="<?= get_template_directory_uri() ?>/images/background/video-thumbnail.jpg" alt="<?php bloginfo('name'); ?>">
                    <a href="<?= get_site_url() ?>" class="h-[69px] w-[69px] rounded-full bg-off-white flex items-center justify-center relative">
                        <svg width="20" height="26" viewBox="0 0 20 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.0439453" y="0.741211" width="4.85152" height="24.4202" rx="2.42576" fill="#0067B9" />
                            <rect x="14.917" y="0.741211" width="4.85152" height="24.4202" rx="2.42576" fill="#0067B9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="lg:hidden">
            <div class="container">
                <div class="flex flex-wrap justify-center gap-y-20">
                    <div class="w-full">
                        <div class="w-full rounded-xl h-[188px] md:h-[300px] bg-no-repeat bg-cover flex items-end bg-center p-6 shadow-[5px_5px_#5AB2F8]" style="background-image: url('<?= get_template_directory_uri() ?>/images/background/video-thumbnail.jpg')">
                            <a href="./" class="h-[36px] w-[36px] rounded-full bg-off-white flex items-center justify-center">
                                <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.5" cx="17.8022" cy="17.2864" r="17.2227" fill="#F7F8FA" />
                                    <rect x="12.8638" y="11.1709" width="2.4299" height="12.2309" rx="0.789109" fill="#0067B9" />
                                    <rect x="20.3125" y="11.1709" width="2.4299" height="12.2309" rx="0.789109" fill="#0067B9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="w-full">
                        <h2 class="text-4xl md:text-5xl leading-none font-bold text-main-blue highlight-light-blue"><?= $section_1['heading'] ?></h2>
                        <article class="text-grey font-articulat py-8 md:py-14 leading-loose description">
                            <?= $section_1['description'] ?>
                        </article>
                        <div class="flex flex-wrap gap-y-4 -mx-2">
                            <div class="w-full md:w-1/2 px-2">
                                <a href="<?= $section_1['button_1']['url'] ?>" target="<?= $section_1['button_1']['target'] ?>" class="btn-yellow-hover-main-blue w-full"><span class="relative z-10"><?= $section_1['button_1']['title'] ?></span></a>
                            </div>
                            <div class="w-full md:w-1/2 px-2">
                                <a href="<?= $section_1['button_2']['url'] ?>" target="<?= $section_1['button_2']['target'] ?>" class="btn-main-blue-hover-yellow w-full"><span class="relative z-10"><?= $section_1['button_2']['title'] ?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php
    $services = get_field('services');

    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'order'          => 'ASC',
        'orderby'        => 'publish_date',
        'meta_query' => array(
            array(
                'key' => '_wp_page_template',
                'value' => 'page-templates/inner-service.php'
            )
        )
    );

    $the_query = new WP_Query($args); ?>

    <div class="py-28 bg-no-repeat bg-contain" style="background-image: url('<?= get_template_directory_uri() ?>/images/background/homepage_services.png')">
        <div class="container md:pt-20 lg:pb-20">
            <h2 class="mx-auto w-11/12 lg:w-2/3 text-grey text-4xl md:text-5xl lg:text-heading leading-none font-bold text-center"><?= $services['heading'] ?></h2>
            <p class="mx-auto w-11/12 lg:w-2/3 text-grey font-articulat text-center pt-9 md:pt-14"><?= $services['description'] ?></p>
            <div class="bg-light rounded-[35px] py-16 md:mt-16 shadow-[inset_0px_0px_36px_0px_rgba(0, 0, 0, 0.05)]">
                <div id="homepage_service_slider" class="homepage_service_slider pb-12">
                    <?php
                    if ($the_query->have_posts()) :
                        $count = 0;
                        while ($the_query->have_posts()) : $the_query->the_post();
                            $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                    ?>
                            <div class="bg-quaternary rounded-2xl p-4 flex flex-col justify-between" data-aos="zoom-in">
                                <div class="pb-16">
                                    <div class="h-[147px] w-full bg-grey rounded-[10px] relative overflow-hidden">
                                        <img class="object-cover h-full w-full" src="<?= $featured_img_url ?>" alt="<?php bloginfo('name'); ?>">
                                        <img class="absolute left-3 bottom-3" src="<?= get_template_directory_uri() ?>/images/icons/service-icon.png" alt="<?php bloginfo('name'); ?>">
                                    </div>
                                    <h4 class="text-2xl font-bold text-main-blue pt-3"><?= get_the_title() ?></h4>
                                </div>
                                <a href="<?= get_the_permalink() ?>" class="border border-light-blue rounded-md h-[48px] flex items-center justify-center text-center text-main-blue font-articulat font-semibold gap-x-4">
                                    Explore now
                                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.86279 16.0078L8.28068 9.58992C8.67121 9.1994 8.67121 8.56623 8.28069 8.17571L1.86279 1.75781" stroke="#5AB2F8" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                    ?>
                </div>
                <div class="flex justify-center">
                    <a href="<?= $services['button']['url'] ?>" target="<?= $services['button']['target'] ?>" class="btn-yellow-hover-main-blue px-14 w-full md:w-fit"><span class="relative z-10"><?= $services['button']['title'] ?></span></a>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part('parts/section', 'guarantee') ?>

    <?php get_template_part('parts/section', 'whyus') ?>

    <?php get_template_part('parts/section', 'contact') ?>

    <div class="testimonials py-16 md:py-36 lg:py-40 relative group">
        <img src="<?= get_template_directory_uri() ?>/images/background/testimonial-left-floater.png" class="absolute left-0 bottom-0 group-hover:bottom-[-20%] duration-500" alt="<?php bloginfo('name'); ?>">
        <img src="<?= get_template_directory_uri() ?>/images/background/testimonial-right-floater.png" class="absolute right-0 bottom-0 group-hover:bottom-[-20%] duration-500" alt="<?php bloginfo('name'); ?>">
        <div class="container pb-11 md:pb-20">
            <div class="flex flex-wrap justify-between gap-y-10">
                <div class="text-4xl md:text-heading text-grey font-bold flex leading-none">
                    <h2>Our <span class="text-main-blue">happy</span><br class="md:hidden" /> customers</h2>

                    <div class="hidden md:inline">
                        <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.01432 27.8241H18.9205C20.1499 27.8241 21.329 27.3357 22.1983 26.4664C23.0676 25.5971 23.556 24.4181 23.556 23.1887V20.871C23.556 20.2563 23.3118 19.6668 22.8771 19.2321C22.4425 18.7975 21.8529 18.5533 21.2383 18.5533C20.6236 18.5533 20.034 18.7975 19.5994 19.2321C19.1647 19.6668 18.9205 20.2563 18.9205 20.871V23.1887H5.01432V9.28244H7.33202C7.94672 9.28244 8.53623 9.03826 8.97089 8.6036C9.40554 8.16895 9.64973 7.57943 9.64973 6.96474C9.64973 6.35005 9.40554 5.76053 8.97089 5.32587C8.53623 4.89122 7.94672 4.64703 7.33202 4.64703H5.01432C3.78493 4.64703 2.60589 5.13541 1.73659 6.00471C0.867279 6.87402 0.378906 8.05306 0.378906 9.28244L0.378906 23.1887C0.378906 24.4181 0.867279 25.5971 1.73659 26.4664C2.60589 27.3357 3.78493 27.8241 5.01432 27.8241Z" fill="#5AB2F8" />
                            <path d="M27.033 0.0112323H15.4445C15.215 0.0108217 14.9905 0.0785645 14.7996 0.205873C14.6086 0.333181 14.4598 0.514321 14.3719 0.72633C14.284 0.938338 14.2611 1.17167 14.3059 1.39674C14.3508 1.6218 14.4615 1.82848 14.624 1.99055L18.7797 6.14388L12.647 12.2788C12.4257 12.4926 12.2491 12.7484 12.1276 13.0312C12.0062 13.3139 11.9422 13.6181 11.9395 13.9258C11.9369 14.2335 11.9955 14.5387 12.112 14.8236C12.2286 15.1084 12.4007 15.3672 12.6183 15.5848C12.8359 15.8024 13.0947 15.9745 13.3795 16.0911C13.6644 16.2076 13.9696 16.2662 14.2773 16.2636C14.585 16.2609 14.8892 16.197 15.1719 16.0755C15.4547 15.954 15.7105 15.7774 15.9243 15.5561L22.0592 9.42343L26.2126 13.5791C26.3204 13.6866 26.4483 13.7719 26.5891 13.8299C26.7299 13.888 26.8807 13.9177 27.033 13.9175C27.1849 13.9167 27.3351 13.8868 27.4757 13.8294C27.6876 13.7418 27.8688 13.5933 27.9963 13.4027C28.1238 13.2121 28.1918 12.9879 28.1919 12.7586V1.17008C28.1919 0.862738 28.0698 0.567979 27.8525 0.350652C27.6351 0.133325 27.3404 0.0112323 27.033 0.0112323Z" fill="#5AB2F8" />
                        </svg>
                    </div>
                </div>
                <div>
                    <?= echo_theme_image('/images/logo/testimonials-review.png') ?>
                </div>
            </div>
        </div>

        <?php if (have_rows('testimonials')) :
            $totalTestimonials = count(get_field('testimonials'));
            $midValue = ceil(($totalTestimonials + 1) / 2);
        ?>
            <div class="testimonial_slider" id="homepage_testimonial_slider_1">
                <?php foreach (get_field('testimonials') as $key => $testimonial) : the_row();
                    $username = get_sub_field('username');
                    $comment = get_sub_field('comment');
                ?>
                    <div class="bg-[#EEF1F6] rounded-[10px] p-5" data-aos="zoom-in">
                        <div class="flex flex-wrap items-center justify-between">
                            <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.8422 5.52532C13.4092 5.52436 14.926 6.0781 16.1238 7.08845L19.4788 3.89345C18.1909 2.70588 16.6439 1.83485 14.9606 1.34948C13.2773 0.86411 11.5041 0.777758 9.78161 1.09728C8.05912 1.4168 6.43482 2.1334 5.03761 3.1902C3.64039 4.24701 2.50873 5.61493 1.73242 7.18541L5.51481 10.1008C5.95593 8.77064 6.80439 7.61296 7.94 6.79177C9.07561 5.97059 10.4408 5.52751 11.8422 5.52532Z" fill="#D94F3D" />
                                <path d="M5.17369 12.1946C5.17464 11.4829 5.29 10.776 5.51535 10.101L1.73296 7.18558C0.959271 8.74199 0.556641 10.4565 0.556641 12.1946C0.556641 13.9327 0.959271 15.6471 1.73296 17.2036L5.51535 14.2881C5.29 13.6131 5.17464 12.9062 5.17369 12.1946Z" fill="#F2C042" />
                                <path d="M22.6677 10.1426H11.8945V14.7596H17.9993C17.6361 16.0651 16.8041 17.1907 15.6626 17.9208L19.4157 20.8141C21.814 18.6616 23.2232 15.1613 22.6677 10.1426Z" fill="#5085ED" />
                                <path d="M15.66 17.9207C14.5001 18.5846 13.1778 18.9111 11.8422 18.8636C10.4408 18.8614 9.07561 18.4183 7.94 17.5971C6.80439 16.7759 5.95593 15.6183 5.51481 14.2881L1.73242 17.2035C2.66668 19.0868 4.10787 20.6721 5.8939 21.781C7.67992 22.8899 9.73994 23.4786 11.8422 23.4806C14.6085 23.5558 17.305 22.6057 19.4132 20.813L15.66 17.9207Z" fill="#57A75C" />
                            </svg>
                            <svg width="129" height="26" viewBox="0 0 129 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.9795 2.37817C12.2118 1.79977 13.0306 1.79977 13.2629 2.37817L15.6705 8.37381C15.7695 8.62012 16.0006 8.78807 16.2654 8.80603L22.7116 9.24311C23.3335 9.28528 23.5865 10.064 23.1082 10.4636L18.15 14.6062C17.9464 14.7764 17.8581 15.0482 17.9228 15.3056L19.4991 21.5714C19.6512 22.1758 18.9887 22.6571 18.4609 22.3257L12.9889 18.8903C12.7641 18.7492 12.4783 18.7492 12.2535 18.8903L6.78153 22.3257C6.25365 22.6571 5.59122 22.1758 5.74328 21.5714L7.31958 15.3056C7.38433 15.0482 7.29603 14.7764 7.09235 14.6062L2.13417 10.4636C1.65586 10.064 1.90888 9.28528 2.53075 9.24311L8.97695 8.80603C9.24177 8.78807 9.47293 8.62012 9.57185 8.37381L11.9795 2.37817Z" fill="#FFAE35" />
                                <path d="M37.8682 2.37799C38.1005 1.79959 38.9193 1.79959 39.1515 2.37799L41.5592 8.37363C41.6581 8.61993 41.8893 8.78789 42.1541 8.80584L48.6003 9.24293C49.2222 9.28509 49.4752 10.0638 48.9969 10.4635L44.0387 14.6061C43.835 14.7762 43.7467 15.048 43.8115 15.3054L45.3878 21.5712C45.5398 22.1756 44.8774 22.6569 44.3495 22.3255L38.8775 18.8901C38.6527 18.749 38.367 18.749 38.1422 18.8901L32.6702 22.3255C32.1423 22.6569 31.4799 22.1756 31.632 21.5712L33.2082 15.3054C33.273 15.048 33.1847 14.7762 32.981 14.6061L28.0228 10.4635C27.5445 10.0638 27.7976 9.28509 28.4194 9.24293L34.8656 8.80584C35.1304 8.78789 35.3616 8.61993 35.4605 8.37363L37.8682 2.37799Z" fill="#FFAE35" />
                                <path d="M63.7588 2.37817C63.9911 1.79977 64.8099 1.79977 65.0422 2.37817L67.4498 8.37381C67.5488 8.62012 67.7799 8.78807 68.0447 8.80603L74.4909 9.24311C75.1128 9.28528 75.3658 10.064 74.8875 10.4636L69.9293 14.6062C69.7257 14.7764 69.6374 15.0482 69.7021 15.3056L71.2784 21.5714C71.4305 22.1758 70.768 22.6571 70.2402 22.3257L64.7682 18.8903C64.5434 18.7492 64.2576 18.7492 64.0328 18.8903L58.5608 22.3257C58.0329 22.6571 57.3705 22.1758 57.5226 21.5714L59.0989 15.3056C59.1636 15.0482 59.0753 14.7764 58.8716 14.6062L53.9135 10.4636C53.4352 10.064 53.6882 9.28528 54.31 9.24311L60.7562 8.80603C61.0211 8.78807 61.2522 8.62012 61.3511 8.37381L63.7588 2.37817Z" fill="#FFAE35" />
                                <path d="M89.6455 2.37817C89.8778 1.79977 90.6966 1.79977 90.9289 2.37817L93.3366 8.37381C93.4355 8.62012 93.6666 8.78807 93.9315 8.80603L100.378 9.24311C101 9.28528 101.253 10.064 100.774 10.4636L95.8161 14.6062C95.6124 14.7764 95.5241 15.0482 95.5888 15.3056L97.1651 21.5714C97.3172 22.1758 96.6548 22.6571 96.1269 22.3257L90.6549 18.8903C90.4301 18.7492 90.1443 18.7492 89.9195 18.8903L84.4475 22.3257C83.9197 22.6571 83.2572 22.1758 83.4093 21.5714L84.9856 15.3056C85.0503 15.0482 84.962 14.7764 84.7584 14.6062L79.8002 10.4636C79.3219 10.064 79.5749 9.28528 80.1968 9.24311L86.643 8.80603C86.9078 8.78807 87.139 8.62012 87.2379 8.37381L89.6455 2.37817Z" fill="#FFAE35" />
                                <path d="M115.534 2.37817C115.766 1.79977 116.585 1.79977 116.818 2.37817L119.225 8.37381C119.324 8.62012 119.555 8.78807 119.82 8.80603L126.266 9.24311C126.888 9.28528 127.141 10.064 126.663 10.4636L121.705 14.6062C121.501 14.7764 121.413 15.0482 121.478 15.3056L123.054 21.5714C123.206 22.1758 122.543 22.6571 122.016 22.3257L116.544 18.8903C116.319 18.7492 116.033 18.7492 115.808 18.8903L110.336 22.3257C109.808 22.6571 109.146 22.1758 109.298 21.5714L110.874 15.3056C110.939 15.0482 110.851 14.7764 110.647 14.6062L105.689 10.4636C105.211 10.064 105.464 9.28528 106.085 9.24311L112.532 8.80603C112.796 8.78807 113.028 8.62012 113.127 8.37381L115.534 2.37817Z" fill="#FFAE35" />
                            </svg>
                        </div>
                        <p class="font-extrabold text-main-blue py-4"><?= $username ?></p>
                        <div class="border border-light-blue w-[45px]"></div>
                        <p class="font-articulat text-grey pt-5 text-sm leading-loose"><?= $comment ?></p>
                    </div>
                <?php
                    if ($key == $midValue) {
                        break;
                    }
                endforeach; ?>
            </div>

            <div class="testimonial_slider mt-4" id="homepage_testimonial_slider_2">
                <?php while (have_rows('testimonials')) : the_row();
                    $username = get_sub_field('username');
                    $comment = get_sub_field('comment');
                ?>
                    <div class="bg-[#EEF1F6] rounded-[10px] p-5" data-aos="zoom-in">
                        <div class="flex flex-wrap items-center justify-between">
                            <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.8422 5.52532C13.4092 5.52436 14.926 6.0781 16.1238 7.08845L19.4788 3.89345C18.1909 2.70588 16.6439 1.83485 14.9606 1.34948C13.2773 0.86411 11.5041 0.777758 9.78161 1.09728C8.05912 1.4168 6.43482 2.1334 5.03761 3.1902C3.64039 4.24701 2.50873 5.61493 1.73242 7.18541L5.51481 10.1008C5.95593 8.77064 6.80439 7.61296 7.94 6.79177C9.07561 5.97059 10.4408 5.52751 11.8422 5.52532Z" fill="#D94F3D" />
                                <path d="M5.17369 12.1946C5.17464 11.4829 5.29 10.776 5.51535 10.101L1.73296 7.18558C0.959271 8.74199 0.556641 10.4565 0.556641 12.1946C0.556641 13.9327 0.959271 15.6471 1.73296 17.2036L5.51535 14.2881C5.29 13.6131 5.17464 12.9062 5.17369 12.1946Z" fill="#F2C042" />
                                <path d="M22.6677 10.1426H11.8945V14.7596H17.9993C17.6361 16.0651 16.8041 17.1907 15.6626 17.9208L19.4157 20.8141C21.814 18.6616 23.2232 15.1613 22.6677 10.1426Z" fill="#5085ED" />
                                <path d="M15.66 17.9207C14.5001 18.5846 13.1778 18.9111 11.8422 18.8636C10.4408 18.8614 9.07561 18.4183 7.94 17.5971C6.80439 16.7759 5.95593 15.6183 5.51481 14.2881L1.73242 17.2035C2.66668 19.0868 4.10787 20.6721 5.8939 21.781C7.67992 22.8899 9.73994 23.4786 11.8422 23.4806C14.6085 23.5558 17.305 22.6057 19.4132 20.813L15.66 17.9207Z" fill="#57A75C" />
                            </svg>
                            <svg width="129" height="26" viewBox="0 0 129 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.9795 2.37817C12.2118 1.79977 13.0306 1.79977 13.2629 2.37817L15.6705 8.37381C15.7695 8.62012 16.0006 8.78807 16.2654 8.80603L22.7116 9.24311C23.3335 9.28528 23.5865 10.064 23.1082 10.4636L18.15 14.6062C17.9464 14.7764 17.8581 15.0482 17.9228 15.3056L19.4991 21.5714C19.6512 22.1758 18.9887 22.6571 18.4609 22.3257L12.9889 18.8903C12.7641 18.7492 12.4783 18.7492 12.2535 18.8903L6.78153 22.3257C6.25365 22.6571 5.59122 22.1758 5.74328 21.5714L7.31958 15.3056C7.38433 15.0482 7.29603 14.7764 7.09235 14.6062L2.13417 10.4636C1.65586 10.064 1.90888 9.28528 2.53075 9.24311L8.97695 8.80603C9.24177 8.78807 9.47293 8.62012 9.57185 8.37381L11.9795 2.37817Z" fill="#FFAE35" />
                                <path d="M37.8682 2.37799C38.1005 1.79959 38.9193 1.79959 39.1515 2.37799L41.5592 8.37363C41.6581 8.61993 41.8893 8.78789 42.1541 8.80584L48.6003 9.24293C49.2222 9.28509 49.4752 10.0638 48.9969 10.4635L44.0387 14.6061C43.835 14.7762 43.7467 15.048 43.8115 15.3054L45.3878 21.5712C45.5398 22.1756 44.8774 22.6569 44.3495 22.3255L38.8775 18.8901C38.6527 18.749 38.367 18.749 38.1422 18.8901L32.6702 22.3255C32.1423 22.6569 31.4799 22.1756 31.632 21.5712L33.2082 15.3054C33.273 15.048 33.1847 14.7762 32.981 14.6061L28.0228 10.4635C27.5445 10.0638 27.7976 9.28509 28.4194 9.24293L34.8656 8.80584C35.1304 8.78789 35.3616 8.61993 35.4605 8.37363L37.8682 2.37799Z" fill="#FFAE35" />
                                <path d="M63.7588 2.37817C63.9911 1.79977 64.8099 1.79977 65.0422 2.37817L67.4498 8.37381C67.5488 8.62012 67.7799 8.78807 68.0447 8.80603L74.4909 9.24311C75.1128 9.28528 75.3658 10.064 74.8875 10.4636L69.9293 14.6062C69.7257 14.7764 69.6374 15.0482 69.7021 15.3056L71.2784 21.5714C71.4305 22.1758 70.768 22.6571 70.2402 22.3257L64.7682 18.8903C64.5434 18.7492 64.2576 18.7492 64.0328 18.8903L58.5608 22.3257C58.0329 22.6571 57.3705 22.1758 57.5226 21.5714L59.0989 15.3056C59.1636 15.0482 59.0753 14.7764 58.8716 14.6062L53.9135 10.4636C53.4352 10.064 53.6882 9.28528 54.31 9.24311L60.7562 8.80603C61.0211 8.78807 61.2522 8.62012 61.3511 8.37381L63.7588 2.37817Z" fill="#FFAE35" />
                                <path d="M89.6455 2.37817C89.8778 1.79977 90.6966 1.79977 90.9289 2.37817L93.3366 8.37381C93.4355 8.62012 93.6666 8.78807 93.9315 8.80603L100.378 9.24311C101 9.28528 101.253 10.064 100.774 10.4636L95.8161 14.6062C95.6124 14.7764 95.5241 15.0482 95.5888 15.3056L97.1651 21.5714C97.3172 22.1758 96.6548 22.6571 96.1269 22.3257L90.6549 18.8903C90.4301 18.7492 90.1443 18.7492 89.9195 18.8903L84.4475 22.3257C83.9197 22.6571 83.2572 22.1758 83.4093 21.5714L84.9856 15.3056C85.0503 15.0482 84.962 14.7764 84.7584 14.6062L79.8002 10.4636C79.3219 10.064 79.5749 9.28528 80.1968 9.24311L86.643 8.80603C86.9078 8.78807 87.139 8.62012 87.2379 8.37381L89.6455 2.37817Z" fill="#FFAE35" />
                                <path d="M115.534 2.37817C115.766 1.79977 116.585 1.79977 116.818 2.37817L119.225 8.37381C119.324 8.62012 119.555 8.78807 119.82 8.80603L126.266 9.24311C126.888 9.28528 127.141 10.064 126.663 10.4636L121.705 14.6062C121.501 14.7764 121.413 15.0482 121.478 15.3056L123.054 21.5714C123.206 22.1758 122.543 22.6571 122.016 22.3257L116.544 18.8903C116.319 18.7492 116.033 18.7492 115.808 18.8903L110.336 22.3257C109.808 22.6571 109.146 22.1758 109.298 21.5714L110.874 15.3056C110.939 15.0482 110.851 14.7764 110.647 14.6062L105.689 10.4636C105.211 10.064 105.464 9.28528 106.085 9.24311L112.532 8.80603C112.796 8.78807 113.028 8.62012 113.127 8.37381L115.534 2.37817Z" fill="#FFAE35" />
                            </svg>
                        </div>
                        <p class="font-extrabold text-main-blue py-4"><?= $username ?></p>
                        <div class="border border-light-blue w-[45px]"></div>
                        <p class="font-articulat text-grey pt-5 text-sm leading-loose"><?= $comment ?></p>
                    </div>
                <?php endwhile; ?>
            </div>

        <?php endif; ?>

        <?php get_template_part('parts/section', 'leadingbrands') ?>
    </div>

    <?php $sponsors = get_field('sponsors');
    if (isset($sponsors['heading'])) : ?>
        <div class="bg-light-grey pt-20 pb-40 md:pt-40 md:pb-52 relative">
            <div class="container">
                <h2 class="md:text-center text-4xl md:text-5xl lg:text-heading text-grey font-bold leading-tight highlight-main-blue"><?= $sponsors['heading'] ?></h2>
                <div class="w-full lg:w-8/12 xl:w-1/2 mx-auto my-10 md:my-12 p-7 border-t border-b border-light-blue text-grey font-articulat text-center leading-loose">
                    <p class="w-full lg:w-10/12 mx-auto"><?= $sponsors['description'] ?></p>
                </div>

                <div class="w-full xl:w-10/12 mx-auto">
                    <div class="flex flex-wrap justify-center -mx-2 gap-y-5">
                        <div class="w-full md:w-1/2 lg:w-1/3 px-2" data-aos="zoom-in">
                            <div class="bg-white shadow p-2 rounded-[10px] h-full">
                                <div class="h-[166px] w-full rounded-[10px] overflow-hidden">
                                    <img src="<?= get_template_directory_uri() ?>/images/lib/sponsors-1.jpg" class="w-full object-cover object-center h-full" alt="<?php bloginfo('name'); ?>">
                                </div>
                                <div class="mx-auto -mt-7 w-fit h-[57px] rounded-full bg-main-blue px-10 py-1 flex justify-center items-center relative">
                                    <?= echo_theme_image('/images/logo/wish-foundation.png') ?>
                                </div>
                                <div class="flex flex-wrap justify-between items-center mx-auto w-10/12 pt-4 pb-2">
                                    <p class="font-articulat text-dark-blue leading-relaxed text-sm">
                                        <span class="text-xs font-bold">Proudly supporting</span> <br />Wish Foundation
                                    </p>
                                    <div>
                                        <?= echo_theme_image('/images/icons/sponsor-1.png') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full  md:w-1/2 lg:w-1/3 px-2" data-aos="zoom-in">
                            <div class="bg-white shadow p-2 rounded-[10px] h-full">
                                <div class="h-[166px] w-full rounded-[10px] overflow-hidden">
                                    <img src="<?= get_template_directory_uri() ?>/images/lib/sponsors-2.jpg" class="w-full object-cover object-center h-full" alt="<?php bloginfo('name'); ?>">
                                </div>
                                <div class="mx-auto -mt-7 w-fit h-[57px] rounded-full bg-dark-blue px-10 py-1 flex justify-center items-center relative">
                                    <?= echo_theme_image('/images/logo/save-the-children.png') ?>
                                </div>
                                <div class="flex flex-wrap justify-between items-center mx-auto w-10/12 pt-4 pb-2">
                                    <p class="font-articulat text-dark-blue leading-relaxed text-sm">
                                        <span class="text-xs font-bold">Proudly supporting</span> <br />Wish Foundation
                                    </p>
                                    <div>
                                        <?= echo_theme_image('/images/icons/sponsor-1.png') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 lg:w-1/3 px-2" data-aos="zoom-in">
                            <div class="bg-dark-blue shadow p-2 rounded-[10px] h-full">
                                <div class="h-[166px] w-full rounded-[10px] overflow-hidden">
                                    <img src="<?= get_template_directory_uri() ?>/images/lib/sponsors-3.jpg" class="w-full object-cover object-center h-full" alt="<?php bloginfo('name'); ?>">
                                </div>
                                <div class="mx-auto -mt-12 w-fit relative">
                                    <?= echo_theme_image('/images/logo/earlwood-wanderers.png') ?>
                                </div>
                                <div class="flex flex-wrap justify-between items-center mx-auto w-10/12 pt-2 pb-2">
                                    <p class="font-articulat text-white leading-relaxed text-sm">
                                        <span class="text-xs font-bold">Proudly supporting</span> <br />Wish Foundation
                                    </p>
                                    <div>
                                        <?= echo_theme_image('/images/icons/sponsor-2.png') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php get_footer(); ?>