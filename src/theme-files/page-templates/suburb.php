<?php
/*
 * Template Name: Suburb Page
 * The suburb page
 *
 */
get_header();
?>

<div class="suburbPage bg-off-white">
    <?= get_template_part('parts/section', 'nav') ?>

    <div class="p-6">
        <div class="generalBanner max-w-[1874px] mx-auto h-[576px] rounded-[30px] overflow-hidden">
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
                    <div class="w-3/12 relative group">
                        <div class="absolute right-0 bottom-[-100%] group-hover:bottom-0 duration-300 flex flex-col items-center">
                            <img src="<?= get_template_directory_uri() ?>/images/lib/vipMembershipCard.png" alt="<?php bloginfo('name'); ?>">
                            <a href="./" class="btn-yellow-hover-main-blue px-14 "><span class="relative z-10">Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="flex flex-wrap -mx-3 py-24">
            <div class="w-full lg:w-1/2 px-3" data-aos="zoom-in">
                <div class="text-center bg-contain rounded-[30px] pt-11 pb-28 px-16 h-full" style="background: linear-gradient(#171818 0 40%, rgba(0,0,0,0) 80% 100%), url(<?= get_template_directory_uri() ?>/images/background/membership-guy.jpg) no-repeat center bottom">
                    <h3 class="text-white text-[45px] leading-none font-bold highlight-light-blue">Plumbers in your local area with <span>24/7 services</span></h3>
                    <p class="text-white leading-relaxed py-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                    <a href="<?= get_site_url() ?>" target="<?= $section_1_left['button']['target'] ?>" class="btn-yellow-hover-main-blue px-14 mt-10"><span class="relative z-10">Learn more</span></a>
                </div>
            </div>
            <div class="w-full lg:w-1/2 px-3" data-aos="zoom-in">
                <div class="bg-main-blue rounded-[30px] p-12 h-full text-white">
                    <h3 class="text-[35px] font-semibold leading-none pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>

                    <article class="font-articulat leading-relaxed description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </article>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap py-28">
            <div class="w-1/3">
                <h2 class="text-4xl md:text-5xl xl:text-heading text-main-blue font-bold">Lorem ipsum dolor sit amet, consectetur</h2>
                <div class="pt-10">
                    <a href="" class="btn-yellow-hover-main-blue px-14"><span class="relative z-10">Button name here</span></a>
                </div>
                <div class="pt-5">
                    <a href="" class="btn-main-blue-hover-yellow px-14"><span class="relative z-10">Button name here</span></a>
                </div>
            </div>
            <div class="w-2/3">
                <article class="bg-white hover:bg-quaternary duration-300 rounded-[30px] h-full py-10 px-14 font-articulat text-grey hover:text-primary leading-relaxed description columns-2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </article>
            </div>
        </div>
    </div>

    <div class="bg-main-blue pt-24 text-white">
        <div class="container">
            <div class="flex flex-wrap justify-between">
                <div class="w-full lg:w-1/2">
                    <?= echo_theme_image('/images/lib/suburb-guy.jpg', 'rounded-[30px] -mt-32') ?>
                </div>
                <div class="w-full lg:w-1/2">
                    <h3 class="text-[35px] font-bold leading-none">Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo nec.</h3>
                    <article class="description font-articulat leading-loose pt-11">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                        <p>Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo nec. Hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit. Pharetra diam sit amet nisl suscipit. Lacus luctus accumsan tortor posuere ac. Porttitor eget dolor morbi non arcu risus quis. Dui accumsan sit amet nulla facilisi. Orci ac auctor augue mauris augue neque gravida in. Nisi porta lorem mollis aliquam ut porttitor. Sed libero enim sed faucibus turpis. Quisque id diam vel quam elementum.</p>
                    </article>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-full" height="172" viewBox="0 0 1920 172" fill="none">
            <path d="M265.336 26.3531C-7.06037 24.7827 -280.805 75.8399 -509.975 80.5498L-503.055 170.026L3699.03 171.032L3691.75 26.9707C3691.75 26.9707 3399.03 -15.6038 3109.23 8.24748C2944.18 21.8319 2661.97 81.3091 2469.37 81.263C1976.75 81.145 1933.1 8.1683 1705.4 7.91135C1477.71 7.6544 1412.41 49.8885 1203.78 64.1149C995.149 78.3413 892.738 70.5666 769.845 64.126C658.324 58.2814 537.733 27.9235 265.336 26.3531Z" fill="#5AB2F8" />
        </svg>
    </div>
    <div class="bg-light-blue -mt-1 relative">
        <div class="container pb-20">
            <div class="w-full lg:w-1/2 text-white">
                <h3 class="text-[35px] font-bold leading-none">Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo nec.</h3>
                <article class="description font-articulat leading-loose pt-11">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                    <p>Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo nec. Hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit. Pharetra diam sit amet nisl suscipit. Lacus luctus accumsan tortor posuere ac. Porttitor eget dolor morbi non arcu risus quis. Dui accumsan sit amet nulla facilisi. Orci ac auctor augue mauris augue neque gravida in. Nisi porta lorem mollis aliquam ut porttitor. Sed libero enim sed faucibus turpis. Quisque id diam vel quam elementum.</p>
                </article>
            </div>
        </div>
        <?= echo_theme_image('/images/lib/fixnflow-van.png', 'absolute right-0 bottom-[-1rem]') ?>
    </div>

    <div class="container pt-40 pb-16">
        <?php get_template_part('parts/section', 'specialOffers') ?>
        <?php get_template_part('parts/section', 'globalcta') ?>
    </div>

    <div class="container">
        <div class="flex flex-wrap py-24">
            <div class="w-1/3">
                <h3 class="text-4xl md:text-5xl xl:text-heading text-main-blue font-bold">Lorem ipsum dolor sit amet, consectetur</h3>
                <div class="pt-10">
                    <a href="" class="btn-yellow-hover-main-blue px-14"><span class="relative z-10">Button name here</span></a>
                </div>
            </div>
            <div class="w-2/3">
                <article class="bg-main-blue rounded-[30px] h-full py-10 px-14 font-articulat text-white leading-relaxed description columns-2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </article>
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