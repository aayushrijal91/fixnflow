<?php
/*
 * Template Name: About Us Page
 * The about us page
 *
 */
get_header();
$banner = get_field('banner');
get_template_part('parts/section', 'nav');
?>

<div class="bg-off-white">
    <div class="aboutBanner max-w-[1874px] mx-auto p-6">
        <div class="flex flex-wrap -mx-2">
            <div class="w-7/12 px-2">
                <div class="rounded-[30px] bg-light-blue bg-cover bg-no-repeat h-full relative overflow-hidden">
                    <video class="absolute h-full object-cover" autoplay loop muted>
                        <source src="<?= get_template_directory_uri() ?>/images/background/light-blue-wavy-bg.webm" type="video/webm">
                        <source src="<?= get_template_directory_uri() ?>/images/background/light-blue-wavy-bg.mp4" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                    <div class="w-10/12 ml-auto px-10 pt-48 pb-14 relative">
                        <?php if (isset($banner)) : ?>
                            <h1 class="text-4xl md:text-5xl xl:text-heading text-white font-bold"><?= $banner['title'] ? $banner['title'] : get_the_title() ?></h1>
                            <?php if ($banner['subtitle']) : ?>
                                <div class="pt-6 text-lg font-articulat text-white">
                                    <?= $banner['subtitle'] ?>
                                </div>
                        <?php
                            endif;
                        endif; ?>
                        <div class="pt-24 pb-3">
                            <div class="w-1/3 px-1">
                                <img src="<?= get_template_directory_uri() ?>/images/icons/google-reviews.png" alt="google">
                            </div>
                            <div class="flex-wrap flex -mx-2 items-center pt-6">
                                <div class="w-fit px-2">
                                    <div class="border-b-4 border-r-4 border-light-blue rounded-[10px] bg-white py-2 px-3.5 text-dark-blue leading-none">
                                        <div class="text-3xl font-bold"><?= get_field('number_of_reviews', 'options') ?>+</div>
                                        <div class="text-xs font-bold">Customer<br />reviews</div>
                                    </div>
                                </div>
                                <div class="w-fit px-2">
                                    <div class="border-b-4 border-r-4 border-yellow rounded-[10px] bg-main-blue py-2 px-3.5 text-white leading-none">
                                        <div class="text-3xl flex items-center font-bold gap-x-2">5.0
                                            <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.88515 0.857663C6.05318 0.439219 6.64555 0.439219 6.81358 0.857663L8.06134 3.96483C8.13289 4.14302 8.30013 4.26453 8.49171 4.27752L11.8324 4.50403C12.2823 4.53454 12.4653 5.09791 12.1193 5.38703L9.54977 7.53388C9.40241 7.657 9.33853 7.8536 9.38538 8.03982L10.2023 11.287C10.3123 11.7243 9.83305 12.0725 9.45115 11.8327L6.61535 10.0524C6.45272 9.95026 6.24601 9.95026 6.08338 10.0524L3.24758 11.8327C2.86568 12.0725 2.38644 11.7243 2.49646 11.287L3.31335 8.03982C3.3602 7.8536 3.29632 7.657 3.14896 7.53388L0.579446 5.38703C0.233408 5.09791 0.416459 4.53454 0.866348 4.50403L4.20702 4.27752C4.3986 4.26453 4.56584 4.14302 4.63739 3.96483L5.88515 0.857663Z" fill="#FFAE35" />
                                            </svg>
                                        </div>
                                        <div class="text-xs">Average<br />rating</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-5/12 px-2">
                <div class="rounded-[30px] bg-light-blue bg-cover bg-no-repeat h-full" style="background: url(<?= $banner['image']['url'] ?>) no-repeat center; background-size: cover"></div>
            </div>
        </div>

        <div class="flex flex-wrap justify-center -mt-44" data-aos="zoom-in">
            <div class="w-full lg:w-5/12 order-2 lg:order-1">
                <div class="bg-white rounded-[30px] px-8 py-6 shadow-xl">
                    <div class="text-dark-blue text-xl md:text-2xl font-extrabold pb-8">Check if we service your area</div>
                    <div class="hidden h-14 bg-light-grey rounded-md px-4 w-full mt-3 outline-none font-semibold gap-y-5"></div>
                    <?= do_shortcode('[contact-form-7 id="9" title="Check Service Area"]') ?>
                </div>
            </div>
        </div>
    </div>

    <div class="aboutPage">
        <?php $section_1 = get_field('section_1');
        if (isset($section_1['heading'])) : ?>
            <div class="container">
                <div class="flex flex-wrap py-28">
                    <div class="w-1/3">
                        <div class="text-4xl md:text-5xl xl:text-heading text-main-blue font-bold highlight-light-blue"><?= $section_1['heading'] ?></div>
                        <div class="pt-10">
                            <a href="<?= $section_1['button_1']['url'] ?>" target="<?= $section_1['button_1']['target'] ?>" class="btn-yellow-hover-main-blue px-14"><span class="relative z-10"><?= $section_1['button_1']['title'] ?></span></a>
                        </div>
                        <div class="pt-5">
                            <a href="<?= $section_1['button_2']['url'] ?>" target="<?= $section_1['button_2']['target'] ?>" class="btn-main-blue-hover-yellow px-14"><span class="relative z-10"><?= $section_1['button_2']['title'] ?></span></a>
                        </div>
                    </div>
                    <div class="w-2/3">
                        <div class="bg-white rounded-[30px] h-full py-10 px-14 font-articulat text-grey leading-relaxed description columns-2">
                            <?= $section_1['description'] ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="pt-10 pb-44">
            <div class="text-center text-4xl md:text-5xl xl:text-heading text-main-blue font-bold pb-28">Meet our expert plumbers</div>
            <?php
            $teamMembers = get_field('team_members');
            ?>

            <?php
            if (have_rows('team_members')) :
                $key = 0;
                while (have_rows('team_members')) : the_row();
                    $member_1 = get_sub_field('member_1');
                    $member_2 = get_sub_field('member_2');
            ?>
                    <div class="relative mt-5">
                        <img id="gotoTeam<?= $key ?>_1" class="absolute top-[45%] z-[10000] cursor-pointer left-[20%]" src="<?= get_template_directory_uri() ?>/images/icons/arrow-prev.png" alt="fixnflow">
                        <img id="gotoTeam<?= $key ?>_4" class="absolute top-[45%] z-[10000] cursor-pointer right-[20%]" src="<?= get_template_directory_uri() ?>/images/icons/arrow-next.png" alt="fixnflow">

                        <div class="team_slider" id="team_slider_<?= $key ?>">
                            <div class="team_card_1 px-2">
                                <?php if ($member_1['name']) : ?>
                                    <div class="min-h-[607px] h-full rounded-[30px] overflow-hidden bg-[#D3E2EF] w-full py-11 px-14">
                                        <div class="flex flex-wrap justify-between items-center">
                                            <div class="text-4xl md:text-5xl xl:text-heading font-bold text-main-blue"><?= $member_1['name'] ?></div>
                                            <img src="<?= get_template_directory_uri() ?>/images/logo/small-logo.png" alt="Fix N Flow">
                                        </div>
                                        <div class="bg-white rounded-[10px] py-3.5 px-4 text-2xl text-grey font-bold flex gap-x-3 items-center my-8">
                                            <?= echo_image($member_1['icon']) ?>
                                            <?= $member_1['position'] ?>
                                        </div>
                                        <div class="text-dark-blue font-articulat leading-relaxed description"><?= $member_1['about'] ?></div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="team_card_2 px-2">
                                <?php if ($member_1['name']) : ?>
                                    <div class="min-h-[607px] h-full rounded-[30px] overflow-hidden group relative">
                                        <img src="<?= $member_1['image']['url'] ?>" class="w-full h-full grayscale group-hover:grayscale-0 duration-300" alt="<?= $member_1['image']['alt'] ?>">
                                        <div class="absolute w-full bg-gradient-to-b from-transparent to-black -bottom-56 group-hover:bottom-0 duration-300 p-12">
                                            <div class="text-2xl text-light-blue font-bold pb-6">Work with <?= $member_1['name'] ?></div>
                                            <div class="flex flex-wrap -mx-2 gap-y-4 text-white">
                                                <div class="w-1/2 px-2"><?= $member_1['linkedin_link'] ?></div>
                                                <div class="w-1/2 px-2"><?= $member_1['phone_number'] ?></div>
                                                <div class="w-1/2 px-2"><?= $member_1['facebook_link'] ?></div>
                                                <div class="w-1/2 px-2"><?= $member_1['email'] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="team_card_3 px-2">
                                <?php if ($member_2['name']) : ?>
                                    <div class="min-h-[607px] h-full rounded-[30px] overflow-hidden group relative">
                                        <img src="<?= $member_2['image']['url'] ?>" class="w-full h-full grayscale group-hover:grayscale-0 duration-300" alt="<?= $member_2['image']['alt'] ?>">
                                        <div class="absolute w-full bg-gradient-to-b from-transparent to-black -bottom-56 group-hover:bottom-0 duration-300 p-12">
                                            <div class="text-2xl text-light-blue font-bold pb-6">Work with <?= $member_2['name'] ?></div>
                                            <div class="flex flex-wrap -mx-2 gap-y-4 text-white">
                                                <div class="w-1/2 px-2"><?= $member_2['linkedin_link'] ?></div>
                                                <div class="w-1/2 px-2"><?= $member_2['phone_number'] ?></div>
                                                <div class="w-1/2 px-2"><?= $member_2['facebook_link'] ?></div>
                                                <div class="w-1/2 px-2"><?= $member_2['email'] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="team_card_4 px-2">
                                <?php if ($member_2['name']) : ?>

                                    <div class="min-h-[607px] h-full rounded-[30px] overflow-hidden bg-[#D3E2EF] w-full py-11 px-14">
                                        <div class="flex flex-wrap justify-between items-center">
                                            <div class="text-4xl md:text-5xl xl:text-heading font-bold text-main-blue"><?= $member_2['name'] ?></div>
                                            <img src="<?= get_template_directory_uri() ?>/images/logo/small-logo.png" alt="Fix N Flow">
                                        </div>
                                        <div class="bg-white rounded-[10px] py-3.5 px-4 text-2xl text-grey font-bold flex gap-x-3 items-center my-8">
                                            <?= echo_image($member_2['icon']) ?>
                                            <?= $member_2['position'] ?>
                                        </div>
                                        <div class="text-dark-blue font-articulat leading-relaxed description"><?= $member_2['about'] ?></div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
            <?php
                    $key++;
                endwhile;
            endif; ?>
        </div>
    </div>

    <?php get_template_part('parts/section', 'guarantee') ?>

    <?php get_template_part('parts/section', 'whyus') ?>

    <?php get_template_part('parts/section', 'contact') ?>

    <div class="pb-40 lg:pb-60">
        <?php get_template_part('parts/section', 'leadingbrands') ?>
    </div>
</div>

<?php get_footer() ?>