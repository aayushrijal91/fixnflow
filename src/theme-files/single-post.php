<?php
get_header();
?>

<div class="blogsInnerPage bg-off-white">
    <?php get_template_part('parts/section', 'banner'); ?>

    <div class="container pt-12 pb-24">
        <a href="<?= get_site_url() ?>/blogs" class="flex gap-x-5 items-center font-bold text-main-blue">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36" viewBox="0 0 35 36" fill="none">
                <path d="M4.78627 19.1837C4.20049 18.5979 4.20049 17.6482 4.78627 17.0624L14.3322 7.51645C14.918 6.93066 15.8677 6.93066 16.4535 7.51645C17.0393 8.10223 17.0393 9.05198 16.4535 9.63777L7.96825 18.123L16.4535 26.6083C17.0393 27.1941 17.0393 28.1439 16.4535 28.7296C15.8677 29.3154 14.918 29.3154 14.3322 28.7296L4.78627 19.1837ZM28.1562 19.623H5.84693V16.623H28.1562V19.623Z" fill="#22346C" />
            </svg>
            Go back to all blogs
        </a>

        <div class="flex justify-center pt-20">
            <div class="w-full lg:w-10/12">
                <div class="flex flex-wrap items-center">
                    <div class="w-1/3 font-articulat text-sm text-main-blue flex gap-x-3 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                            <path d="M6.10938 1.1499V5.82568" stroke="#FFAE35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M22.4707 1.1499V5.82568" stroke="#FFAE35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.10938 12.8394H22.4746" stroke="#FFAE35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M23.6416 5.82568H4.93848C3.0017 5.82568 1.43164 7.39575 1.43164 9.33252V23.3599C1.43164 25.2966 3.0017 26.8667 4.93848 26.8667H23.6416C25.5784 26.8667 27.1484 25.2966 27.1484 23.3599V9.33252C27.1484 7.39575 25.5784 5.82568 23.6416 5.82568Z" stroke="#FFAE35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Published on <?= get_the_time('d', $post->ID) . ' ' . get_the_time('M', $post->ID) . ' ' . get_the_time('Y', $post->ID) ?>
                    </div>
                    <div class="w-2/3 font-articulat text-sm text-main-blue">
                        Written by <?= get_the_author_meta('display_name', get_post_field('post_author', $post->ID)) ?>
                    </div>
                </div>
                <div class="border-b-2 border-quaternary my-5"></div>
                <article class="description font-articulat text-grey leading-loose">
                    <?= get_field('section_1')['description'] ?>
                </article>
            </div>
        </div>

        <?php if (get_the_content()) : ?>
            <div class="flex justify-center">
                <div class="w-full lg:w-10/12">
                    <article class="description font-articulat text-grey leading-loose">
                        <?= the_content(); ?>
                    </article>
                </div>
            </div>
        <?php endif; ?>

        <?php if (get_field('section_1')['hero_image']) : ?>
            <div class="py-12"><?= echo_image(get_field('section_1')['hero_image'], null, 'w-full rounded-[30px]') ?></div>
        <?php endif; ?>

        <div class="flex justify-center">
            <div class="w-full lg:w-10/12">
                <?php if (get_field('section_2')['heading']) : ?>
                    <h2 class="text-2xl md:text-[35px] text-main-blue font-bold py-10"><?= get_field('section_2')['heading'] ?></h2>
                <?php endif; ?>
                <?php if (get_field('section_2')['description']) : ?>
                    <article class="description font-articulat text-grey leading-loose">
                        <?= get_field('section_2')['description'] ?>
                    </article>
                <?php endif; ?>
            </div>
        </div>

        <div class="flex justify-center">
            <div class="w-full lg:w-10/12">
                <?php if (get_field('section_3')['heading']) : ?>
                    <h2 class="text-2xl md:text-[35px] text-main-blue font-bold py-10"><?= get_field('section_3')['heading'] ?></h2>
                <?php endif; ?>
                <?php if (get_field('section_3')['description']) : ?>
                    <article class="description font-articulat text-grey leading-loose">
                        <?= get_field('section_3')['description'] ?>
                    </article>
                <?php endif; ?>
            </div>
        </div>

        <?php if (get_field('section_3')['image_1'] || get_field('section_3')['image_2']) : ?>
            <div class="flex flex-wrap -mx-3 py-12">
                <div class="w-full md:w-1/2 px-3"><?= echo_image(get_field('section_3')['image_1'], null, 'w-full rounded-[30px]') ?></div>
                <div class="w-full md:w-1/2 px-3"><?= echo_image(get_field('section_3')['image_2'], null, 'w-full rounded-[30px]') ?></div>
            </div>
        <?php endif; ?>

        <div class="flex justify-center">
            <div class="w-full lg:w-10/12">
                <?php if (get_field('section_4')['heading']) : ?>
                    <h2 class="text-2xl md:text-[35px] text-main-blue font-bold py-10"><?= get_field('section_4')['heading'] ?></h2>
                <?php endif; ?>
                <?php if (get_field('section_4')['description']) : ?>
                    <article class="description font-articulat text-grey leading-loose">
                        <?= get_field('section_4')['description'] ?>
                    </article>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="pt-24 bg-gradient-to-b from-white to-off-white">
        <div class="container">
            <div class="flex flex-wrap justify-between items-center">
                <div class="w-10/12 text-[35px] text-grey font-bold leading-none">More <span class="text-main-blue">blogs</span> you'll like</div>
                <a href="<?= get_site_url() ?>/blogs" class="w-fit text-main-blue font-bold flex gap-x-2 items-center">See all blogs <svg xmlns="http://www.w3.org/2000/svg" width="34" height="36" viewBox="0 0 34 36" fill="none">
                        <path d="M29.2137 18.9122C29.7995 18.3264 29.7995 17.3767 29.2137 16.7909L19.6678 7.24496C19.082 6.65917 18.1323 6.65917 17.5465 7.24496C16.9607 7.83075 16.9607 8.78049 17.5465 9.36628L26.0317 17.8516L17.5465 26.3368C16.9607 26.9226 16.9607 27.8724 17.5465 28.4582C18.1323 29.044 19.082 29.044 19.6678 28.4582L29.2137 18.9122ZM5.84375 19.3516H28.1531V16.3516H5.84375V19.3516Z" fill="#22346C" />
                    </svg>
                </a>
            </div>

            <div class="flex flex-wrap -mx-2 pt-16">
                <?php $args = array(
                    'posts_per_page' => 3,
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
                        <div class="w-full md:w-1/2 lg:w-1/3 px-2">
                            <div class="rounded-[30px] h-[483px] p-7 flex items-end" style="background: url(<?= $featured_img_url ?>) no-repeat center #5AB2F8; background-size: cover;"></div>
                            <div class="text-main-blue text-2xl font-bold leading-none py-6"><?= get_the_title(); ?></div>
                            <div class="font-articulat text-grey"><?= $featured_description ?></div>
                            <div class="border-b-2 border-quaternary my-6"></div>
                            <div class="flex font-articulat text-sm text-main-blue items-center gap-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                                    <path d="M6.19141 1.75293V6.42871" stroke="#FFAE35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M22.5527 1.75293V6.42871" stroke="#FFAE35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6.19141 13.4424H22.5566" stroke="#FFAE35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M23.7236 6.42871H5.02051C3.08374 6.42871 1.51367 7.99877 1.51367 9.93555V23.9629C1.51367 25.8997 3.08374 27.4697 5.02051 27.4697H23.7236C25.6604 27.4697 27.2305 25.8997 27.2305 23.9629V9.93555C27.2305 7.99877 25.6604 6.42871 23.7236 6.42871Z" stroke="#FFAE35" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                Published on <?= get_the_date() ?>
                            </div>
                            <div class="flex flex-wrap justify-center pt-6">
                                <div class="w-full md:w-10/12">
                                    <a href="<?= get_the_permalink() ?>" class="btn-main-blue-hover-yellow w-full"><span class="relative z-10">Learn More</span></a>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>

    <div class="px-6 pt-28">
        <div class="bg-main-blue max-w-[1874px] mx-auto rounded-[30px] overflow-hidden relative">
            <video class="absolute w-full" autoplay loop muted>
                <source src="<?= get_template_directory_uri() ?>/images/background/dark-blue-wavy-bg.mp4" type="video/mp4">
                Your browser does not support HTML video.
            </video>
            <div class="container relative">
                <div class="flex flex-wrap justify-between items-center gap-x-5">
                    <div class="w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="61" viewBox="0 0 70 61" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7596 34.5993C15.5254 34.5993 13.313 34.1593 11.2488 33.3043C9.18465 32.4493 7.3091 31.196 5.72924 29.6162C4.14939 28.0363 2.89618 26.1608 2.04117 24.0966C1.18616 22.0324 0.746094 19.8201 0.746094 17.5858C0.746094 15.3516 1.18616 13.1392 2.04117 11.075C2.89618 9.01083 4.14939 7.13527 5.72925 5.55541C7.3091 3.97556 9.18466 2.72235 11.2488 1.86734C12.8619 1.19917 14.5656 0.784406 16.2994 0.635044L16.3064 0.572266H17.7596H69.2494V17.0403H41.594V30.5256L26.6399 17.0403H17.7596V17.5858L17.7596 34.5993Z" fill="#F7F8FA" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M51.8302 26.846C54.0645 26.846 56.2768 27.286 58.341 28.141C60.4052 28.9961 62.2807 30.2493 63.8606 31.8291C65.4405 33.409 66.6937 35.2845 67.5487 37.3487C68.4037 39.4129 68.8438 41.6253 68.8437 43.8595C68.8437 46.0938 68.4037 48.3061 67.5487 50.3703C66.6937 52.4345 65.4405 54.31 63.8606 55.8899C62.2807 57.4698 60.4052 58.723 58.341 59.578C56.7279 60.2461 55.0243 60.6609 53.2904 60.8103L53.2835 60.873H51.8302H0.746696V44.4051H27.9958V30.9197L42.9499 44.4051H51.8302V43.8595L51.8302 26.846Z" fill="#5AB2F8" />
                        </svg>
                        <div class="text-white text-4xl md:text-5xl xl:text-heading font-bold leading-none pt-20 pb-10">Read all our FAQ's</div>
                        <div class="text-white font-articulat">The plumbing pros answer your frequently asked questions!</div>
                    </div>
                    <div class="w-fit"><?= echo_theme_image('/images/icons/question-marks.png') ?></div>
                    <div class="w-fit">
                        <a href="<?= get_site_url() ?>" class="btn-yellow-hover-main-blue px-14"><span class="relative z-10">See all FAQs</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-24 pb-60">
        <?php get_template_part('parts/section', 'professionalPlumbing') ?>
    </div>
</div>

<?php get_footer(); ?>