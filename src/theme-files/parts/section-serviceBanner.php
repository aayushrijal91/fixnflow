<?php $banner = get_field('banner'); ?>

<?= get_template_part('parts/section', 'nav') ?>

<div class="p-1 xl:p-6">
    <div class="relative bg-main-blue max-w-[1874px] mx-auto h-[614px] rounded-[20px] md:rounded-[30px] overflow-hidden">
        <video class="absolute w-full h-full object-cover" autoplay loop muted>
            <source src="<?= get_template_directory_uri() ?>/images/background/dark-blue-wavy-bg.webm" type="video/webm">
            <source src="<?= get_template_directory_uri() ?>/images/background/dark-blue-wavy-bg.mp4" type="video/mp4">
            Your browser does not support HTML video.
        </video>
        <div class="container relative">
            <div class="pt-44 md:pt-48 pb-20 md:pb-24 text-white text-center">
                <?php if (isset($banner)) : ?>
                    <h1 class="text-4xl md:text-5xl xl:text-heading font-semibold"><?= $banner['title'] ? $banner['title'] : get_the_title(); ?> </h1>
                    <?php if (isset($banner['subtitle'])) : ?>
                        <p class="text-base md:text-lg pt-10">
                            <?= $banner['subtitle'] ?>
                        </p>
                <?php endif;
                endif; ?>
            </div>

            <div class="flex flex-wrap justify-between">
                <div class="w-fit">
                    <?= echo_theme_image('/images/icons/google-reviews.png') ?>
                    <br />
                    <div class="flex-wrap flex -mx-2 items-center pt-6">
                        <div class="w-fit px-2">
                            <article class="border-b-4 border-r-4 border-light-blue rounded-[10px] bg-white py-2 px-3.5 text-dark-blue leading-none">
                                <p class="text-3xl font-bold"><?= get_field('number_of_reviews', 'options') ?>+</p>
                                <p class="text-xs font-bold">Customer<br />reviews</p>
                            </article>
                        </div>
                        <div class="w-fit px-2">
                            <article class="border-b-4 border-r-4 border-yellow rounded-[10px] bg-main-blue py-2 px-3.5 text-white leading-none">
                                <p class="text-3xl flex items-center font-bold gap-x-2">5.0
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.88515 0.857663C6.05318 0.439219 6.64555 0.439219 6.81358 0.857663L8.06134 3.96483C8.13289 4.14302 8.30013 4.26453 8.49171 4.27752L11.8324 4.50403C12.2823 4.53454 12.4653 5.09791 12.1193 5.38703L9.54977 7.53388C9.40241 7.657 9.33853 7.8536 9.38538 8.03982L10.2023 11.287C10.3123 11.7243 9.83305 12.0725 9.45115 11.8327L6.61535 10.0524C6.45272 9.95026 6.24601 9.95026 6.08338 10.0524L3.24758 11.8327C2.86568 12.0725 2.38644 11.7243 2.49646 11.287L3.31335 8.03982C3.3602 7.8536 3.29632 7.657 3.14896 7.53388L0.579446 5.38703C0.233408 5.09791 0.416459 4.53454 0.866348 4.50403L4.20702 4.27752C4.3986 4.26453 4.56584 4.14302 4.63739 3.96483L5.88515 0.857663Z" fill="#FFAE35" />
                                    </svg>
                                </p>
                                <p class="text-xs">Average<br />rating</p>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="md:w-3/12 relative group grow">
                    <article class="absolute right-0 md:bottom-[-100%] group-hover:bottom-0 duration-300 flex flex-col items-center px-2 md:px-0">
                        <?= echo_theme_image('/images/lib/vipMembershipCard.png') ?>
                        <a href="<?= get_site_url() ?>/membership" class="btn-yellow-hover-main-blue px-4 md:px-14 "><span class="relative z-10">Learn More</span></a>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap justify-center -mt-10" data-aos="zoom-in">
        <div class="w-full lg:w-7/12 xl:w-5/12 order-2 lg:order-1">
            <?= get_template_part('parts/section', 'checkServiceArea') ?>
        </div>
    </div>
</div>