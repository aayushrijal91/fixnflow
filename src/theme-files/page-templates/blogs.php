<?php
/*
 * Template Name: Blogs Page
 * The blogs page
 *
 */
get_header();
?>

<main class="blogsPage bg-off-white">
    <?php get_template_part('parts/section', 'banner'); ?>

    <div class="p-1 md:py-6 lg:p-6">
        <div class="section_1 max-w-[1874px] mx-auto pt-6 pb-11 px-5 lg:px-10 rounded-[20px] md:rounded-[30px] overflow-hidden relative">
            <img src="<?= get_template_directory_uri() ?>/images/background/bannerWaves.png" alt="<?php bloginfo('name'); ?>" class="absolute w-full top-0 left-0">

            <?php $args = array(
                'posts_per_page' => 1,
                'post_type' => 'post',
                'orderby' => 'date',
                'order' => 'DESC',
            );

            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                    $featured_description = get_the_content() ? substr(get_the_content(), 0, 300) . '...' : '...';
            ?>
                    <div class="relative">
                        <div class="flex flex-wrap gap-x-5 lg:gap-x-10">
                            <div class="w-3/12 md:w-fit">
                                <?= echo_theme_image('/images/icons/most-popular-badge.png') ?>
                            </div>
                            <div class="w-fit flex-1">
                                <div class="flex flex-wrap items-center gap-x-3 gap-y-2">
                                    <p class="w-fit text-light-blue font-articulat font-semibold px-5 lg:px-10 leading-none"><?= get_the_date() ?></p>

                                    <?php foreach (get_the_tags() as $tag) : ?>
                                        <p class="w-fit bg-dark-blue rounded-full px-4 py-2.5 text-light-blue flex gap-x-2 text-sm font-articulat">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                <path d="M16.7165 9.00251L8.88825 1.17431C8.73234 1.01835 8.52087 0.930711 8.30035 0.930664H1.64796C1.42741 0.930664 1.21591 1.01827 1.05996 1.17422C0.904016 1.33016 0.816406 1.54167 0.816406 1.76221V8.4146C0.816453 8.63513 0.904094 8.8466 1.06005 9.00251L8.88825 16.8307C9.11991 17.0624 9.39493 17.2462 9.69762 17.3716C10.0003 17.497 10.3247 17.5615 10.6524 17.5615C10.98 17.5615 11.3044 17.497 11.6071 17.3716C11.9098 17.2462 12.1849 17.0624 12.4165 16.8307L16.7165 12.5308C16.9481 12.2991 17.1319 12.0241 17.2573 11.7214C17.3827 11.4187 17.4473 11.0943 17.4473 10.7666C17.4473 10.439 17.3827 10.1146 17.2573 9.81188C17.1319 9.50919 16.9481 9.23416 16.7165 9.00251ZM5.8057 7.58305C5.47677 7.58305 5.15523 7.48552 4.88173 7.30277C4.60824 7.12003 4.39507 6.86029 4.2692 6.5564C4.14332 6.25251 4.11039 5.91811 4.17456 5.5955C4.23873 5.27289 4.39712 4.97656 4.62971 4.74397C4.8623 4.51138 5.15864 4.35299 5.48125 4.28882C5.80385 4.22464 6.13825 4.25758 6.44214 4.38346C6.74603 4.50933 7.00577 4.72249 7.18851 4.99599C7.37126 5.26948 7.4688 5.59103 7.4688 5.91996C7.4688 6.36104 7.29358 6.78405 6.98169 7.09594C6.6698 7.40784 6.24678 7.58305 5.8057 7.58305Z" fill="#0067B9" />
                                            </svg>
                                            <?= $tag->name ?>
                                        </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap flex-col items-center text-center gap-y-5 md:gap-y-10 pt-10 md:pt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="61" viewBox="0 0 70 61" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7596 34.5993C15.5254 34.5993 13.313 34.1593 11.2488 33.3043C9.18465 32.4493 7.3091 31.196 5.72924 29.6162C4.14939 28.0363 2.89618 26.1608 2.04117 24.0966C1.18616 22.0324 0.746094 19.8201 0.746094 17.5858C0.746094 15.3516 1.18616 13.1392 2.04117 11.075C2.89618 9.01083 4.14939 7.13527 5.72925 5.55541C7.3091 3.97556 9.18466 2.72235 11.2488 1.86734C12.8619 1.19917 14.5656 0.784406 16.2994 0.635044L16.3064 0.572266H17.7596H69.2494V17.0403H41.594V30.5256L26.6399 17.0403H17.7596V17.5858L17.7596 34.5993Z" fill="#F7F8FA" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M51.8302 26.846C54.0645 26.846 56.2768 27.286 58.341 28.141C60.4052 28.9961 62.2807 30.2493 63.8606 31.8291C65.4405 33.409 66.6937 35.2845 67.5487 37.3487C68.4037 39.4129 68.8438 41.6253 68.8437 43.8595C68.8437 46.0938 68.4037 48.3061 67.5487 50.3703C66.6937 52.4345 65.4405 54.31 63.8606 55.8899C62.2807 57.4698 60.4052 58.723 58.341 59.578C56.7279 60.2461 55.0243 60.6609 53.2904 60.8103L53.2835 60.873H51.8302H0.746696V44.4051H27.9958V30.9197L42.9499 44.4051H51.8302V43.8595L51.8302 26.846Z" fill="#5AB2F8" />
                            </svg>
                            <p class="w-full lg:w-6/12 text-[45px] text-white font-semibold leading-none">
                                <?= get_the_title() ?>
                            </p>
                            <article class="w-full lg:w-7/12 text-white font-articulat">
                                <?= $featured_description ?>
                            </article>
                            <div class="w-fit pt-16 md:pt-0"><a href="<?= get_the_permalink() ?>" class="btn-main-blue-hover-yellow px-14"><span class="relative z-10">Learn more</span></a></div>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            wp_reset_query();
            ?>
        </div>
    </div>

    <div class="py-24">
        <div class="container">
            <div class="flex flex-wrap gap-x-2 gap-y-6">
                <div class="w-full md:w-fit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="25" viewBox="0 0 29 25" fill="none">
                        <path d="M26.1733 0.859375H2.37939C1.74834 0.859375 1.14313 1.11006 0.696909 1.55628C0.250686 2.00251 0 2.60771 0 3.23877C0 3.86982 0.250686 4.47503 0.696909 4.92126C1.14313 5.36748 1.74834 5.61816 2.37939 5.61816H26.1733C26.8044 5.61816 27.4096 5.36748 27.8558 4.92126C28.302 4.47503 28.5527 3.86982 28.5527 3.23877C28.5527 2.60771 28.302 2.00251 27.8558 1.55628C27.4096 1.11006 26.8044 0.859375 26.1733 0.859375Z" fill="#5AB2F8" />
                        <path d="M21.4136 10.3765H7.13721C6.50615 10.3765 5.90094 10.6272 5.45472 11.0734C5.0085 11.5196 4.75781 12.1248 4.75781 12.7559C4.75781 13.3869 5.0085 13.9921 5.45472 14.4383C5.90094 14.8846 6.50615 15.1353 7.13721 15.1353H21.4136C22.0446 15.1353 22.6498 14.8846 23.0961 14.4383C23.5423 13.9921 23.793 13.3869 23.793 12.7559C23.793 12.1248 23.5423 11.5196 23.0961 11.0734C22.6498 10.6272 22.0446 10.3765 21.4136 10.3765Z" fill="#5AB2F8" />
                        <path d="M16.6577 19.8945H11.8989C11.2679 19.8945 10.6627 20.1452 10.2164 20.5914C9.77022 21.0377 9.51953 21.6429 9.51953 22.2739C9.51953 22.905 9.77022 23.5102 10.2164 23.9564C10.6627 24.4026 11.2679 24.6533 11.8989 24.6533H16.6577C17.2888 24.6533 17.894 24.4026 18.3402 23.9564C18.7864 23.5102 19.0371 22.905 19.0371 22.2739C19.0371 21.6429 18.7864 21.0377 18.3402 20.5914C17.894 20.1452 17.2888 19.8945 16.6577 19.8945Z" fill="#5AB2F8" />
                    </svg>
                </div>
                <div class="w-fit">
                    <a href="javascript:void(0)" class="active blogFilterBtn" data-target="all">All</a>
                </div>
                <div class="w-fit">
                    <a href="javascript:void(0)" class="blogFilterBtn" data-target="most_popular_blogs">Most popular</a>
                </div>
                <div class="w-fit">
                    <a href="javascript:void(0)" class="blogFilterBtn" data-target="latest_news_blogs">Latest news</a>
                </div>
                <div class="w-fit">
                    <a href="javascript:void(0)" class="blogFilterBtn" data-target="emergency_plumbing_blogs">Emergency Plumbing</a>
                </div>
            </div>
        </div>

        <div id="most_popular_blogs" class="blogs_list pt-16">
            <div class="container">
                <div class="flex flex-wrap justify-between items-center md:pb-8">
                    <p class="w-fit font-articulat text-dark-blue font-bold text-2xl">Most popular</p>
                    <div class="w-fit flex flex-wrap gap-x-5 md:gap-x-12">
                        <a href="javascript:void(0)" class="blog_prev" id="blog_prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="36" viewBox="0 0 34 36" fill="none">
                                <path d="M4.78432 19.4884C4.19853 18.9026 4.19853 17.9529 4.78432 17.3671L14.3303 7.82113C14.916 7.23535 15.8658 7.23535 16.4516 7.82113C17.0374 8.40692 17.0374 9.35667 16.4516 9.94245L7.9663 18.4277L16.4516 26.913C17.0374 27.4988 17.0374 28.4485 16.4516 29.0343C15.8658 29.6201 14.916 29.6201 14.3303 29.0343L4.78432 19.4884ZM28.1543 19.9277H5.84498V16.9277H28.1543V19.9277Z" fill="#22346C" />
                            </svg>
                        </a>
                        <a href="javascript:void(0)" class="blog_next" id="blog_next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="36" viewBox="0 0 34 36" fill="none">
                                <path d="M29.2157 19.4884C29.8015 18.9026 29.8015 17.9529 29.2157 17.3671L19.6697 7.82113C19.084 7.23535 18.1342 7.23535 17.5484 7.82113C16.9626 8.40692 16.9626 9.35667 17.5484 9.94245L26.0337 18.4277L17.5484 26.913C16.9626 27.4988 16.9626 28.4485 17.5484 29.0343C18.1342 29.6201 19.084 29.6201 19.6697 29.0343L29.2157 19.4884ZM5.8457 19.9277H28.155V16.9277H5.8457V19.9277Z" fill="#22346C" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="w-full xl:w-[85.5%] py-5 ms-auto">
                <div class="blogs_slider">
                    <?php
                    $category_name = 'Most Popular';

                    $category = get_term_by('name', $category_name, 'category');

                    if ($category) :
                        $args = array(
                            'cat' => $category->term_id,
                            'posts_per_page' => -1,
                            'post_type' => 'post',
                            'orderby' => 'date',
                            'order' => 'DESC',
                        );

                        $the_query = new WP_Query($args);

                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) :
                                $the_query->the_post();
                                $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                                $featured_description = get_the_content() ? substr(get_the_content(), 0, 140) . '...' : '...';
                    ?>
                                <div>
                                    <div class="bg-light-blue rounded-[20px] md:rounded-[30px] h-[367px] md:h-[483px] p-3 md:p-7 flex items-end" style="background: url(<?= $featured_img_url ?>) no-repeat center #5AB2F8; background-size: cover;">
                                        <div class="flex flex-wrap w-full -mx-2 gap-y-4">
                                            <?php foreach (get_the_tags() as $tag) : ?>
                                                <div class="w-fit px-2">
                                                    <p class="bg-dark-blue rounded-full px-3 py-2.5 text-light-blue flex gap-x-2 text-sm font-articulat">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                            <path d="M16.7165 9.00251L8.88825 1.17431C8.73234 1.01835 8.52087 0.930711 8.30035 0.930664H1.64796C1.42741 0.930664 1.21591 1.01827 1.05996 1.17422C0.904016 1.33016 0.816406 1.54167 0.816406 1.76221V8.4146C0.816453 8.63513 0.904094 8.8466 1.06005 9.00251L8.88825 16.8307C9.11991 17.0624 9.39493 17.2462 9.69762 17.3716C10.0003 17.497 10.3247 17.5615 10.6524 17.5615C10.98 17.5615 11.3044 17.497 11.6071 17.3716C11.9098 17.2462 12.1849 17.0624 12.4165 16.8307L16.7165 12.5308C16.9481 12.2991 17.1319 12.0241 17.2573 11.7214C17.3827 11.4187 17.4473 11.0943 17.4473 10.7666C17.4473 10.439 17.3827 10.1146 17.2573 9.81188C17.1319 9.50919 16.9481 9.23416 16.7165 9.00251ZM5.8057 7.58305C5.47677 7.58305 5.15523 7.48552 4.88173 7.30277C4.60824 7.12003 4.39507 6.86029 4.2692 6.5564C4.14332 6.25251 4.11039 5.91811 4.17456 5.5955C4.23873 5.27289 4.39712 4.97656 4.62971 4.74397C4.8623 4.51138 5.15864 4.35299 5.48125 4.28882C5.80385 4.22464 6.13825 4.25758 6.44214 4.38346C6.74603 4.50933 7.00577 4.72249 7.18851 4.99599C7.37126 5.26948 7.4688 5.59103 7.4688 5.91996C7.4688 6.36104 7.29358 6.78405 6.98169 7.09594C6.6698 7.40784 6.24678 7.58305 5.8057 7.58305Z" fill="#0067B9" />
                                                        </svg>
                                                        <?= $tag->name ?>
                                                    </p>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <h4 class="text-main-blue text-2xl font-bold leading-none py-6"><?= get_the_title(); ?></h4>
                                    <p class="font-articulat text-grey"><?= $featured_description ?></p>
                                    <div class="border-b-2 border-quaternary my-6"></div>
                                    <p class="flex font-articulat text-sm text-main-blue items-center gap-x-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                                            <path d="M6.19141 1.75293V6.42871" stroke="#FFAE35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M22.5527 1.75293V6.42871" stroke="#FFAE35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M6.19141 13.4424H22.5566" stroke="#FFAE35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M23.7236 6.42871H5.02051C3.08374 6.42871 1.51367 7.99877 1.51367 9.93555V23.9629C1.51367 25.8997 3.08374 27.4697 5.02051 27.4697H23.7236C25.6604 27.4697 27.2305 25.8997 27.2305 23.9629V9.93555C27.2305 7.99877 25.6604 6.42871 23.7236 6.42871Z" stroke="#FFAE35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Published on <?= get_the_date() ?>
                                    </p>
                                    <div class="flex flex-wrap justify-center pt-6">
                                        <div class="w-full md:w-10/12">
                                            <a href="<?= get_the_permalink() ?>" class="btn-main-blue-hover-yellow w-full"><span class="relative z-10">Learn more</span></a>
                                        </div>
                                    </div>
                                </div>
                    <?php
                            endwhile;
                        endif;
                        wp_reset_query();
                    endif;
                    ?>
                </div>
            </div>
        </div>

        <div id="latest_news_blogs" class="blogs_list pt-16">
            <div class="container">
                <div class="flex flex-wrap justify-between items-center md:pb-8">
                    <h3 class="w-fit font-articulat text-dark-blue font-bold text-2xl">Latest news</h3>
                    <div class="w-fit flex flex-wrap gap-x-5 md:gap-x-12">
                        <a href="javascript:void(0)" class="blog_prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="36" viewBox="0 0 34 36" fill="none">
                                <path d="M4.78432 19.4884C4.19853 18.9026 4.19853 17.9529 4.78432 17.3671L14.3303 7.82113C14.916 7.23535 15.8658 7.23535 16.4516 7.82113C17.0374 8.40692 17.0374 9.35667 16.4516 9.94245L7.9663 18.4277L16.4516 26.913C17.0374 27.4988 17.0374 28.4485 16.4516 29.0343C15.8658 29.6201 14.916 29.6201 14.3303 29.0343L4.78432 19.4884ZM28.1543 19.9277H5.84498V16.9277H28.1543V19.9277Z" fill="#22346C" />
                            </svg>
                        </a>
                        <a href="javascript:void(0)" class="blog_next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="36" viewBox="0 0 34 36" fill="none">
                                <path d="M29.2157 19.4884C29.8015 18.9026 29.8015 17.9529 29.2157 17.3671L19.6697 7.82113C19.084 7.23535 18.1342 7.23535 17.5484 7.82113C16.9626 8.40692 16.9626 9.35667 17.5484 9.94245L26.0337 18.4277L17.5484 26.913C16.9626 27.4988 16.9626 28.4485 17.5484 29.0343C18.1342 29.6201 19.084 29.6201 19.6697 29.0343L29.2157 19.4884ZM5.8457 19.9277H28.155V16.9277H5.8457V19.9277Z" fill="#22346C" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="w-full xl:w-[85.5%] py-5 ms-auto">
                <div class="blogs_slider">
                    <?php $args = array(
                        'posts_per_page' => -1,
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) :
                            $the_query->the_post();
                            $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                            $featured_description = get_the_content() ? substr(get_the_content(), 0, 140) . '...' : '...';
                    ?>
                            <div class="">
                                <div class="bg-light-blue rounded-[20px] md:rounded-[30px] h-[367px] md:h-[483px] p-3 md:p-7 flex items-end" style="background: url(<?= $featured_img_url ?>) no-repeat center #5AB2F8; background-size: cover;">
                                    <div class="flex flex-wrap w-full -mx-2 gap-y-4">
                                        <?php foreach (get_the_tags() as $tag) : ?>
                                            <div class="w-fit px-2">
                                                <p class="bg-dark-blue rounded-full px-3 py-2.5 text-light-blue flex gap-x-2 text-sm font-articulat">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                        <path d="M16.7165 9.00251L8.88825 1.17431C8.73234 1.01835 8.52087 0.930711 8.30035 0.930664H1.64796C1.42741 0.930664 1.21591 1.01827 1.05996 1.17422C0.904016 1.33016 0.816406 1.54167 0.816406 1.76221V8.4146C0.816453 8.63513 0.904094 8.8466 1.06005 9.00251L8.88825 16.8307C9.11991 17.0624 9.39493 17.2462 9.69762 17.3716C10.0003 17.497 10.3247 17.5615 10.6524 17.5615C10.98 17.5615 11.3044 17.497 11.6071 17.3716C11.9098 17.2462 12.1849 17.0624 12.4165 16.8307L16.7165 12.5308C16.9481 12.2991 17.1319 12.0241 17.2573 11.7214C17.3827 11.4187 17.4473 11.0943 17.4473 10.7666C17.4473 10.439 17.3827 10.1146 17.2573 9.81188C17.1319 9.50919 16.9481 9.23416 16.7165 9.00251ZM5.8057 7.58305C5.47677 7.58305 5.15523 7.48552 4.88173 7.30277C4.60824 7.12003 4.39507 6.86029 4.2692 6.5564C4.14332 6.25251 4.11039 5.91811 4.17456 5.5955C4.23873 5.27289 4.39712 4.97656 4.62971 4.74397C4.8623 4.51138 5.15864 4.35299 5.48125 4.28882C5.80385 4.22464 6.13825 4.25758 6.44214 4.38346C6.74603 4.50933 7.00577 4.72249 7.18851 4.99599C7.37126 5.26948 7.4688 5.59103 7.4688 5.91996C7.4688 6.36104 7.29358 6.78405 6.98169 7.09594C6.6698 7.40784 6.24678 7.58305 5.8057 7.58305Z" fill="#0067B9" />
                                                    </svg>
                                                    <?= $tag->name ?>
                                                </p>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <h4 class="text-main-blue text-2xl font-bold leading-none py-6"><?= get_the_title(); ?></h4>
                                <p class="font-articulat text-grey"><?= $featured_description ?></p>
                                <div class="border-b-2 border-quaternary my-6"></div>
                                <p class="flex font-articulat text-sm text-main-blue items-center gap-x-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                                        <path d="M6.19141 1.75293V6.42871" stroke="#FFAE35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M22.5527 1.75293V6.42871" stroke="#FFAE35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6.19141 13.4424H22.5566" stroke="#FFAE35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M23.7236 6.42871H5.02051C3.08374 6.42871 1.51367 7.99877 1.51367 9.93555V23.9629C1.51367 25.8997 3.08374 27.4697 5.02051 27.4697H23.7236C25.6604 27.4697 27.2305 25.8997 27.2305 23.9629V9.93555C27.2305 7.99877 25.6604 6.42871 23.7236 6.42871Z" stroke="#FFAE35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Published on <?= get_the_date() ?>
                                </p>
                                <div class="flex flex-wrap justify-center pt-6">
                                    <div class="w-full md:w-10/12">
                                        <a href="<?= get_the_permalink() ?>" class="btn-main-blue-hover-yellow w-full"><span class="relative z-10">Learn more</span></a>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                    ?>
                </div>
            </div>
        </div>

        <div id="emergency_plumbing_blogs" class="blogs_list pt-16">
            <div class="container">
                <div class="flex flex-wrap justify-between items-center md:pb-8">
                    <h3 class="w-fit font-articulat text-dark-blue font-bold text-2xl">Emergency Plumbing</h3>
                    <div class="w-fit flex flex-wrap gap-x-5 md:gap-x-12">
                        <a href="javascript:void(0)" class="blog_prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="36" viewBox="0 0 34 36" fill="none">
                                <path d="M4.78432 19.4884C4.19853 18.9026 4.19853 17.9529 4.78432 17.3671L14.3303 7.82113C14.916 7.23535 15.8658 7.23535 16.4516 7.82113C17.0374 8.40692 17.0374 9.35667 16.4516 9.94245L7.9663 18.4277L16.4516 26.913C17.0374 27.4988 17.0374 28.4485 16.4516 29.0343C15.8658 29.6201 14.916 29.6201 14.3303 29.0343L4.78432 19.4884ZM28.1543 19.9277H5.84498V16.9277H28.1543V19.9277Z" fill="#22346C" />
                            </svg>
                        </a>
                        <a href="javascript:void(0)" class="blog_next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="36" viewBox="0 0 34 36" fill="none">
                                <path d="M29.2157 19.4884C29.8015 18.9026 29.8015 17.9529 29.2157 17.3671L19.6697 7.82113C19.084 7.23535 18.1342 7.23535 17.5484 7.82113C16.9626 8.40692 16.9626 9.35667 17.5484 9.94245L26.0337 18.4277L17.5484 26.913C16.9626 27.4988 16.9626 28.4485 17.5484 29.0343C18.1342 29.6201 19.084 29.6201 19.6697 29.0343L29.2157 19.4884ZM5.8457 19.9277H28.155V16.9277H5.8457V19.9277Z" fill="#22346C" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="w-full xl:w-[85.5%] py-5 ms-auto">
                <div class="blogs_slider">
                    <?php
                    $category_name = 'Emergency Plumbing';

                    $category = get_term_by('name', $category_name, 'category');

                    if ($category) :
                        $args = array(
                            'cat' => $category->term_id,
                            'posts_per_page' => -1,
                            'post_type' => 'post',
                            'orderby' => 'date',
                            'order' => 'DESC',
                        );

                        $the_query = new WP_Query($args);

                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) :
                                $the_query->the_post();
                                $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                                $featured_description = get_the_content() ? substr(get_the_content(), 0, 140) . '...' : '...';
                    ?>
                                <div class="">
                                    <div class="bg-light-blue rounded-[20px] md:rounded-[30px] h-[367px] md:h-[483px] p-3 md:p-7 flex items-end" style="background: url(<?= $featured_img_url ?>) no-repeat center #5AB2F8; background-size: cover;">
                                        <div class="flex flex-wrap w-full -mx-2 gap-y-4">
                                            <?php foreach (get_the_tags() as $tag) : ?>
                                                <div class="w-fit px-2">
                                                    <p class="bg-dark-blue rounded-full px-3 py-2.5 text-light-blue flex gap-x-2 text-sm font-articulat">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                                            <path d="M16.7165 9.00251L8.88825 1.17431C8.73234 1.01835 8.52087 0.930711 8.30035 0.930664H1.64796C1.42741 0.930664 1.21591 1.01827 1.05996 1.17422C0.904016 1.33016 0.816406 1.54167 0.816406 1.76221V8.4146C0.816453 8.63513 0.904094 8.8466 1.06005 9.00251L8.88825 16.8307C9.11991 17.0624 9.39493 17.2462 9.69762 17.3716C10.0003 17.497 10.3247 17.5615 10.6524 17.5615C10.98 17.5615 11.3044 17.497 11.6071 17.3716C11.9098 17.2462 12.1849 17.0624 12.4165 16.8307L16.7165 12.5308C16.9481 12.2991 17.1319 12.0241 17.2573 11.7214C17.3827 11.4187 17.4473 11.0943 17.4473 10.7666C17.4473 10.439 17.3827 10.1146 17.2573 9.81188C17.1319 9.50919 16.9481 9.23416 16.7165 9.00251ZM5.8057 7.58305C5.47677 7.58305 5.15523 7.48552 4.88173 7.30277C4.60824 7.12003 4.39507 6.86029 4.2692 6.5564C4.14332 6.25251 4.11039 5.91811 4.17456 5.5955C4.23873 5.27289 4.39712 4.97656 4.62971 4.74397C4.8623 4.51138 5.15864 4.35299 5.48125 4.28882C5.80385 4.22464 6.13825 4.25758 6.44214 4.38346C6.74603 4.50933 7.00577 4.72249 7.18851 4.99599C7.37126 5.26948 7.4688 5.59103 7.4688 5.91996C7.4688 6.36104 7.29358 6.78405 6.98169 7.09594C6.6698 7.40784 6.24678 7.58305 5.8057 7.58305Z" fill="#0067B9" />
                                                        </svg>
                                                        <?= $tag->name ?>
                                                    </p>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <h4 class="text-main-blue text-2xl font-bold leading-none py-6"><?= get_the_title(); ?></h4>
                                    <p class="font-articulat text-grey"><?= $featured_description ?></p>
                                    <div class="border-b-2 border-quaternary my-6"></div>
                                    <p class="flex font-articulat text-sm text-main-blue items-center gap-x-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                                            <path d="M6.19141 1.75293V6.42871" stroke="#FFAE35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M22.5527 1.75293V6.42871" stroke="#FFAE35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M6.19141 13.4424H22.5566" stroke="#FFAE35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M23.7236 6.42871H5.02051C3.08374 6.42871 1.51367 7.99877 1.51367 9.93555V23.9629C1.51367 25.8997 3.08374 27.4697 5.02051 27.4697H23.7236C25.6604 27.4697 27.2305 25.8997 27.2305 23.9629V9.93555C27.2305 7.99877 25.6604 6.42871 23.7236 6.42871Z" stroke="#FFAE35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Published on <?= get_the_date() ?>
                                    </p>
                                    <div class="flex flex-wrap justify-center pt-6">
                                        <div class="w-full md:w-10/12">
                                            <a href="<?= get_the_permalink() ?>" class="btn-main-blue-hover-yellow w-full"><span class="relative z-10">Learn more</span></a>
                                        </div>
                                    </div>
                                </div>
                    <?php
                            endwhile;
                        endif;
                        wp_reset_query();
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part('parts/section', 'professionalPlumbing') ?>

    <div class="px-3 md:px-6 pt-28">
        <div class="bg-main-blue max-w-[1874px] mx-auto rounded-[20px] md:rounded-[30px] overflow-hidden relative">
            <video class="absolute h-full w-full object-cover" autoplay loop muted>
                <source src="<?= get_template_directory_uri() ?>/images/background/dark-blue-wavy-bg.mp4" type="video/mp4">
                Your browser does not support HTML video.
            </video>
            <img src="<?= get_template_directory_uri() ?>/images/icons/question-marks.png" class="absolute -right-20 top-0 xl:hidden" alt="<?php bloginfo('name'); ?>">
            <div class="container relative">
                <div class="flex flex-wrap justify-center md:justify-between items-center gap-x-5 py-16 xl:py-0">
                    <article class="w-fit flex flex-col items-center md:items-start text-center md:text-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="61" viewBox="0 0 70 61" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7596 34.5993C15.5254 34.5993 13.313 34.1593 11.2488 33.3043C9.18465 32.4493 7.3091 31.196 5.72924 29.6162C4.14939 28.0363 2.89618 26.1608 2.04117 24.0966C1.18616 22.0324 0.746094 19.8201 0.746094 17.5858C0.746094 15.3516 1.18616 13.1392 2.04117 11.075C2.89618 9.01083 4.14939 7.13527 5.72925 5.55541C7.3091 3.97556 9.18466 2.72235 11.2488 1.86734C12.8619 1.19917 14.5656 0.784406 16.2994 0.635044L16.3064 0.572266H17.7596H69.2494V17.0403H41.594V30.5256L26.6399 17.0403H17.7596V17.5858L17.7596 34.5993Z" fill="#F7F8FA" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M51.8302 26.846C54.0645 26.846 56.2768 27.286 58.341 28.141C60.4052 28.9961 62.2807 30.2493 63.8606 31.8291C65.4405 33.409 66.6937 35.2845 67.5487 37.3487C68.4037 39.4129 68.8438 41.6253 68.8437 43.8595C68.8437 46.0938 68.4037 48.3061 67.5487 50.3703C66.6937 52.4345 65.4405 54.31 63.8606 55.8899C62.2807 57.4698 60.4052 58.723 58.341 59.578C56.7279 60.2461 55.0243 60.6609 53.2904 60.8103L53.2835 60.873H51.8302H0.746696V44.4051H27.9958V30.9197L42.9499 44.4051H51.8302V43.8595L51.8302 26.846Z" fill="#5AB2F8" />
                        </svg>
                        <h2 class="text-white text-4xl md:text-5xl xl:text-heading font-bold leading-none pt-12 lg:pt-20 pb-10">Read all our FAQ's</h2>
                        <p class="text-white font-articulat">The plumbing pros answer your frequently asked questions!</p>
                    </article>
                    <div class="w-fit hidden xl:block"><?= echo_theme_image('/images/icons/question-marks.png') ?></div>
                    <div class="w-fit pt-16 md:pt-0">
                        <a href="<?= get_field('faq_button')['url'] ?>" target="<?= get_field('faq_button')['target'] ?>" class="btn-yellow-hover-main-blue px-14"><span class="relative z-10">See all FAQs</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-24 pb-60">
        <div class="w-full lg:w-8/12 mx-auto">
            <h2 class="text-center text-main-blue text-4xl md:text-5xl xl:text-heading font-bold leading-none">Most common questions</h2>
            <p class="text-main-blue text-center pt-7 font-semibold">Can’t find your answer here? Have a read through all our FAQ’s!</p>

            <div class="accordion-container pt-14 md:pt-20">
                <?php if (have_rows('faqs')) :
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
                            <p class="accordion-body" style="<?= ($index == 1) ? 'display: block;' : ''; ?>">
                                <?= $answer ?>
                            </p>
                        </div>
                <?php
                        $index++;
                    endwhile;
                endif;
                wp_reset_query();
                ?>
            </div>

            <div class="flex justify-center pt-12">
                <a href="<?= get_field('faq_button')['url'] ?>" target="<?= get_field('faq_button')['target'] ?>" class="btn-main-blue-hover-yellow px-14"><span class="relative z-10"><?= get_field('faq_button')['title'] ?></span></a>
            </div>
        </div>
    </div>
</main>

<?php get_footer() ?>