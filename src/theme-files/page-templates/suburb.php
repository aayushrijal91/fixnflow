<?php
/*
 * Template Name: Suburb Page
 * The suburb page
 *
 */
get_header();

$suburb = get_the_title();
?>

<div class="suburbPage bg-off-white">
    <?= get_template_part('parts/section', 'nav') ?>

    <div class="p-1 xl:p-6">
        <div class="generalBanner max-w-[1874px] mx-auto h-[576px] rounded-[20px] md:rounded-[30px] overflow-hidden">
            <div class="container">
                <div class="pt-48 pb-12 text-white text-center">
                    <h1 class="text-4xl md:text-5xl xl:text-heading font-bold">Servicing <?= get_the_title() ?></h1>
                    <p class="text-base md:text-lg pt-10">
                        Your trusted local family owned plumbing company in Sydney
                    </p>
                </div>

                <div class="flex flex-wrap justify-between">
                    <div class="w-fit">
                        <div>
                            <img src="<?= get_template_directory_uri() ?>/images/icons/google-reviews.png" alt="<?php bloginfo('name'); ?>">
                        </div>
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
                    <div class="w-5/12 lg:w-4/12 xl:w-3/12 relative group">
                        <div class="absolute right-0 bottom-[-100%] group-hover:bottom-0 duration-300 flex flex-col items-center">
                            <img src="<?= get_template_directory_uri() ?>/images/lib/vipMembershipCard.png" alt="<?php bloginfo('name'); ?>">
                            <a href="<?= get_site_url() ?>" class="btn-yellow-hover-main-blue px-5 lg:px-14"><span class="relative z-10">Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-20 lg:pt-24">
        <div class="flex flex-wrap -mx-2 lg:-mx-3 gap-y-5 justify-center">
            <div class="w-full md:w-2/3 lg:w-1/2 px-2 lg:px-3" data-aos="zoom-in">
                <div class="text-center bg-contain rounded-[30px] pt-11 pb-20 px-5 xl:px-16 h-full" style="background: linear-gradient(#171818 0 40%, rgba(0,0,0,0) 80% 100%), url(<?= get_template_directory_uri() ?>/images/background/membership-guy.jpg) no-repeat center bottom">
                    <h3 class="text-white text-3xl lg:text-[45px] leading-none font-bold highlight-light-blue">Plumbers in your local area with <span>24/7 services</span></h3>
                    <p class="text-white leading-relaxed pt-6 pb-28 md:py-6 description text-sm md:text-base">Fix n Flow have been delivering unparalleled plumbing services to <?= get_the_title() ?> residents for over a decade. All our <?= get_the_title() ?> plumbers are highly experienced, licensed, and qualified to help residents and commercial businesses fix all plumbing-related issues.</p>
                    <a href="<?= get_site_url() ?>" target="<?= $section_1_left['button']['target'] ?>" class="btn-yellow-hover-main-blue px-14 mt-10"><span class="relative z-10">Learn more</span></a>
                </div>
            </div>
            <div class="w-full lg:w-1/2 px-2 lg:px-3" data-aos="zoom-in">
                <div class="bg-main-blue rounded-[30px] py-12 px-5 xl:p-12 h-full text-white">
                    <h3 class="text-3xl lg:text-[35px] font-semibold leading-none pb-5">Expert plumbers with over 10 years of experience</h3>

                    <article class="font-articulat leading-loose description text-sm md:text-base">
                        At Fix N Flow, we take pride in being one of Sydney's leading plumbing companies, providing high-quality plumbing services to residents and businesses alike. With over 10 years of experience, a large fleet of vehicles, and a team of highly trained plumbers, we have built a reputation for delivering exceptional plumbing solutions with a focus on quality and customer satisfaction. Our commitment to excellence has earned us more than 150 5-star reviews from our valued clients, making us the go-to choice for plumbing services in Sydney.
                    </article>
                </div>
            </div>
        </div>
    </div>


    <?php if (have_rows('suburb_services', 'options')) : ?>
        <div class="bg-white py-28">
            <div class="container">
                <h2 class="text-center text-4xl md:text-5xl xl:text-heading text-grey font-bold leading-none highlight-main-blue"><span>Plumber Services</span> in <?= get_the_title() ?></h2>
                <div class="pt-10 md:pt-24 flex flex-wrap -mx-2 gap-y-4">
                    <?php
                    while (have_rows('suburb_services', 'options')) : the_row();
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $description = str_replace('{suburb}', $suburb, get_sub_field('description'));
                    $link = get_sub_field('link');
                    ?>
                        <div class="w-full md:w-1/2 lg:w-1/3 px-2">
                            <div class="bg-off-white hover:bg-quaternary duration-300 rounded-2xl p-6 flex flex-col justify-between items-center h-full" data-aos="zoom-in">
                                <div class="h-[147px] w-full bg-grey rounded-[10px] overflow-hidden">
                                    <img class="object-cover h-full w-full" src="<?= $image['url'] ?>" alt="<?php bloginfo('name'); ?>">
                                </div>
                                <h3 class="text-2xl font-bold text-main-blue pt-8 text-center"><?= $title ?> in <?= $suburb ?></h3>
                                <article class="font-articulat leading-loose text-grey text-center pt-6 pb-8"><?= $description ?></article>
                                <a href="<?= $link ?>" class="border border-light-blue rounded-md h-[48px] px-14 flex items-center justify-center text-center text-main-blue font-articulat font-semibold gap-x-4">
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
    <?php endif; ?>

    <div class="container pt-24 lg:pt-40 pb-16">
        <?php get_template_part('parts/section', 'specialOffers') ?>
        <?php get_template_part('parts/section', 'globalcta') ?>
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