<?php $banner = get_field('banner'); ?>

<?= get_template_part('parts/section', 'nav') ?>

<div class="innerInnerServiceBanner max-w-[1874px] mx-auto p-1 xl:p-6">
    <div class="flex flex-wrap -mx-2 gap-y-2">
        <div class="w-full xl:w-7/12 px-2 order-2 xl:order-1 flex-1">
            <div class="rounded-[20px] md:rounded-[30px] bg-main-blue bg-cover bg-no-repeat h-full relative overflow-hidden">
                <video class="absolute h-full w-full object-cover" autoplay loop muted>
                    <source src="<?= get_template_directory_uri() ?>/images/background/dark-blue-wavy-bg.webm" type="video/webm">
                    <source src="<?= get_template_directory_uri() ?>/images/background/dark-blue-wavy-bg.mp4" type="video/mp4">
                    Your browser does not support HTML video.
                </video>
                <div class="xl:w-10/12 ml-auto px-5 pt-24 md:pt-48 pb-20 md:pb-24 relative text-center xl:text-start">
                    <?php if (isset($banner)) : ?>
                        <h1 class="text-4xl md:text-5xl xl:text-heading text-white font-semibold <?= !($banner['image']) ? 'text-center' : '' ?>"><?= $banner['title'] ? $banner['title'] : get_the_title() ?></h1>
                        <?php if ($banner['subtitle']) : ?>
                            <p class="pt-6 text-lg font-articulat text-white <?= !($banner['image']) ? 'text-center' : '' ?>">
                                <?= $banner['subtitle'] ?>
                            </p>
                    <?php
                        endif;
                    endif; ?>
                    <div class="pt-14 pb-3">
                        <div class="w-1/3 px-1">
                            <img src="<?= get_template_directory_uri() ?>/images/icons/google-reviews.png" alt="<?php bloginfo('name'); ?>">
                        </div>
                        <div class="flex-wrap flex -mx-2 items-center pt-6">
                            <div class="w-fit px-2">
                                <div class="border-b-4 border-r-4 border-light-blue rounded-[10px] bg-white py-2 px-3.5 text-dark-blue leading-none">
                                    <h4 class="text-3xl font-bold"><?= get_field('number_of_reviews', 'options') ?>+</h4>
                                    <p class="text-xs font-bold">Customer<br />reviews</p>
                                </div>
                            </div>
                            <div class="w-fit px-2">
                                <div class="border-b-4 border-r-4 border-yellow rounded-[10px] bg-dark-blue py-2 px-3.5 text-white leading-none">
                                    <h3 class="text-3xl flex items-center font-bold gap-x-2">5.0
                                        <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.88515 0.857663C6.05318 0.439219 6.64555 0.439219 6.81358 0.857663L8.06134 3.96483C8.13289 4.14302 8.30013 4.26453 8.49171 4.27752L11.8324 4.50403C12.2823 4.53454 12.4653 5.09791 12.1193 5.38703L9.54977 7.53388C9.40241 7.657 9.33853 7.8536 9.38538 8.03982L10.2023 11.287C10.3123 11.7243 9.83305 12.0725 9.45115 11.8327L6.61535 10.0524C6.45272 9.95026 6.24601 9.95026 6.08338 10.0524L3.24758 11.8327C2.86568 12.0725 2.38644 11.7243 2.49646 11.287L3.31335 8.03982C3.3602 7.8536 3.29632 7.657 3.14896 7.53388L0.579446 5.38703C0.233408 5.09791 0.416459 4.53454 0.866348 4.50403L4.20702 4.27752C4.3986 4.26453 4.56584 4.14302 4.63739 3.96483L5.88515 0.857663Z" fill="#FFAE35" />
                                        </svg>
                                    </h3>
                                    <p class="text-xs">Average<br />rating</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if (isset($banner['image'])) : ?>
            <div class="w-full xl:w-5/12 px-2 order-1 xl:order-2">
                <div class="rounded-[20px] md:rounded-[30px] min-h-[272px] md:min-h-[400px] bg-light-blue bg-cover bg-no-repeat h-full overflow-hidden">
                    <img src="<?= $banner['image']['url'] ?>" alt="<?= $banner['image']['alt'] ?>" class="h-full w-full object-cover">
                </div>
            </div>
        <?php endif; ?>
    </div>

    <div class="flex flex-wrap justify-center -mt-44" data-aos="zoom-in">
        <div class="w-full lg:w-10/12 xl:w-5/12 order-2 lg:order-1">
            <?= get_template_part('parts/section', 'checkServiceArea') ?>
        </div>
    </div>
</div>