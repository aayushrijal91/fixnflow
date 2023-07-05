<?php
/*
 * Template Name: About Us Page
 * The about us page
 *
 */
get_header();
get_template_part('parts/section', 'nav');
?>

<div class="bg-[#F7F8FA]">
    <div class="aboutBanner max-w-[1874px] mx-auto p-6">
        <div class="flex flex-wrap -mx-2">
            <div class="w-7/12 px-2">
                <div class="rounded-[30px] bg-light-blue bg-cover bg-no-repeat h-full" style="background:url(<?= get_template_directory_uri() ?>/images/background/about-banner-left.png), #5AB2F8">
                    <div class="w-10/12 ml-auto px-10 pt-48 pb-14">
                        <div class="text-4xl md:text-5xl xl:text-heading text-white font-bold"><?= get_the_title() ?></div>
                        <div class="pt-6 text-lg font-articulat text-white">Your trusted local family owned plumbing company in Sydney</div>
                        <div class="pt-24 pb-3">
                            <div class="w-1/3 px-1">
                                <img src="<?= get_template_directory_uri() ?>/images/icons/google-reviews.png" alt="google">
                            </div>
                            <div class="flex-wrap flex -mx-2 items-center pt-6">
                                <div class="w-fit px-2">
                                    <div class="border-b-4 border-r-4 border-light-blue rounded-[10px] bg-white py-2 px-3.5 text-dark-blue leading-none">
                                        <div class="text-3xl font-bold">124+</div>
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
                <div class="rounded-[30px] bg-light-blue bg-cover bg-no-repeat h-full" style="background: url(<?= get_template_directory_uri() ?>/images/background/about-banner-right.png)"></div>
            </div>
        </div>

        <div class="flex flex-wrap justify-center -mt-44">
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
        <div class="container">
            <div class="flex flex-wrap py-28">
                <div class="w-1/3">
                    <div class="text-4xl md:text-5xl xl:text-heading text-main-blue font-bold">Flow with the pros today!</div>
                    <div class="pt-10">
                        <a href="" class="btn-yellow-hover-main-blue px-14"><span class="relative z-10">Button name here</span></a>
                    </div>
                    <div class="pt-5">
                        <a href="" class="btn-main-blue-hover-yellow px-14"><span class="relative z-10">Button name here</span></a>
                    </div>
                </div>
                <div class="w-2/3">
                    <div class="bg-white rounded-[30px] h-full py-10 px-14">
                        <div class="flex flex-wrap -mx-3 font-articulat text-grey leading-relaxed">
                            <div class="w-1/2 px-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            <div class="w-1/2 px-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-10 pb-44">
            <div class="text-center text-4xl md:text-5xl xl:text-heading text-main-blue font-bold pb-36">Meet our expert plumbers</div>
            <div class="relative">
                <img id="gotoTeam1_1" class="absolute top-[45%] z-[10000] cursor-pointer left-[20%]" src="<?= get_template_directory_uri() ?>/images/icons/arrow-prev.png" alt="">
                <img id="gotoTeam1_4" class="absolute top-[45%] z-[10000] cursor-pointer right-[20%]" src="<?= get_template_directory_uri() ?>/images/icons/arrow-next.png" alt="">
                <div class="team_slider" id="team_slider_1">
                    <div class="team_card_1 px-2">
                        <div class="min-h-[607px] h-full rounded-[30px] overflow-hidden bg-[#D3E2EF] w-full py-11 px-14">
                            <div class="flex flex-wrap justify-between items-center">
                                <div class="text-4xl md:text-5xl xl:text-heading font-bold text-main-blue">Ricci</div>
                                <img src="<?= get_template_directory_uri() ?>/images/logo/small-logo.png" alt="Fix N Flow">
                            </div>
                            <div class="bg-white rounded-[10px] py-3.5 px-4 text-2xl text-grey font-bold flex gap-x-3 items-center my-8">
                                <svg width="29" height="34" viewBox="0 0 29 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.5629 5.42151L23.0322 1.89078C21.7332 0.591744 19.6181 0.591744 18.319 1.89078L13.6058 6.60397L17.1366 10.1347L20.6673 6.60397L26.5629 12.4996C27.4988 11.5595 28.0242 10.2871 28.0242 8.96057C28.0242 7.63408 27.4988 6.36159 26.5629 5.42151Z" fill="#5AB2F8" />
                                    <path d="M3.59651 20.1439C4.57912 21.1265 6.16129 21.1265 7.12724 20.1439L11.2409 16.0303L7.71015 12.4829L3.59651 16.5965C2.61391 17.5791 2.61391 19.1613 3.59651 20.1439Z" fill="#5AB2F8" />
                                    <path d="M19.5015 10.1353L18.319 11.3178L17.1366 12.5003L11.8405 7.20418C10.8579 6.20492 9.27572 6.20492 8.30977 7.18752C8.07612 7.41833 7.89062 7.69323 7.76401 7.99627C7.6374 8.29931 7.57221 8.62446 7.57221 8.95289C7.57221 9.28131 7.6374 9.60647 7.76401 9.90951C7.89062 10.2125 8.07612 10.4874 8.30977 10.7183L13.6059 16.0143L12.4234 17.1968L1.83121 27.789C0.532173 29.088 0.532173 31.2031 1.83121 32.5022C3.13026 33.8012 5.24536 33.8012 6.5444 32.5022L21.8498 17.1968C22.004 17.351 22.187 17.4733 22.3885 17.5567C22.5899 17.6402 22.8059 17.6831 23.0239 17.6831C23.242 17.6831 23.4579 17.6402 23.6593 17.5567C23.8608 17.4733 24.0439 17.351 24.198 17.1968C24.3522 17.0426 24.4745 16.8596 24.558 16.6581C24.6414 16.4566 24.6844 16.2407 24.6844 16.0227C24.6844 15.8046 24.6414 15.5887 24.558 15.3872C24.4745 15.1858 24.3522 15.0027 24.198 14.8485L19.5015 10.1353Z" fill="#5AB2F8" />
                                </svg>
                                Your All - Rounded Plumber
                            </div>
                            <div class="text-dark-blue font-articulat leading-relaxed">
                                <p class="pb-4">Ricci is an Australian full time trusted local plumber. Born into a plumbing family with his grandfather and father running their own plumbing business for generations, Ricci was destined to be a plumber himself. Ricci is an all-rounded plumber who can assist you with any plumbing issue, from blocked drains, leak taps, water pipe repairs to kitchen appliance installation and rectifying roofing issues – he is your guy! Ricci is also available 24/7 for your emergency calls.</p>
                                <p>Apart from being an awesome plumber that locals love and trust, on weekends you can find Ricci at Bondi Beach volunteering as a lifeguard or helping homeless children in need.</p>
                            </div>
                        </div>
                    </div>

                    <div class="team_card_2 px-2">
                        <div class="min-h-[607px] h-full rounded-[30px] overflow-hidden group relative">
                            <img src="<?= get_template_directory_uri() ?>/images/background/ricci.jpg" class="w-full h-full grayscale group-hover:grayscale-0 duration-300" alt="">
                            <div class="absolute w-full bg-gradient-to-b from-transparent to-black -bottom-56 group-hover:bottom-0 duration-300 p-12">
                                <div class="text-2xl text-light-blue font-bold pb-6">Work with Julian</div>
                                <div class="flex flex-wrap -mx-2 gap-y-4 text-white">
                                    <div class="w-1/2 px-2">Linkedin Link</div>
                                    <div class="w-1/2 px-2"><?= get_field('admin_email', 'options') ?></div>
                                    <div class="w-1/2 px-2">Facebook Link</div>
                                    <div class="w-1/2 px-2"><?= get_field('phone_number', 'options') ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="team_card_3 px-2">
                        <div class="min-h-[607px] h-full rounded-[30px] overflow-hidden group relative">
                            <img src="<?= get_template_directory_uri() ?>/images/background/ricci.jpg" class="w-full h-full grayscale group-hover:grayscale-0 duration-300" alt="">
                            <div class="absolute w-full bg-gradient-to-b from-transparent to-black -bottom-56 group-hover:bottom-0 duration-300 p-12">
                                <div class="text-2xl text-light-blue font-bold pb-6">Work with Julian</div>
                                <div class="flex flex-wrap -mx-2 gap-y-4 text-white">
                                    <div class="w-1/2 px-2">Linkedin Link</div>
                                    <div class="w-1/2 px-2"><?= get_field('admin_email', 'options') ?></div>
                                    <div class="w-1/2 px-2">Facebook Link</div>
                                    <div class="w-1/2 px-2"><?= get_field('phone_number', 'options') ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="team_card_4 px-2">
                        <div class="min-h-[607px] h-full rounded-[30px] overflow-hidden bg-[#D3E2EF] w-full py-11 px-14">
                            <div class="flex flex-wrap justify-between items-center">
                                <div class="text-4xl md:text-5xl xl:text-heading font-bold text-main-blue">Julian</div>
                                <img src="<?= get_template_directory_uri() ?>/images/logo/small-logo.png" alt="Fix N Flow">
                            </div>
                            <div class="bg-white rounded-[10px] py-3.5 px-4 text-2xl text-grey font-bold flex gap-x-3 items-center my-8">
                                <svg width="23" height="33" viewBox="0 0 23 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.0663 1.18413C12.3709 0.488754 11.1396 0.488754 10.4442 1.18413C10.0437 1.58466 0.629272 11.1122 0.629272 21.0384C0.629272 27.1744 5.61927 32.1644 11.7552 32.1644C17.8912 32.1644 22.8812 27.1744 22.8812 21.0384C22.8812 11.1122 13.4668 1.58466 13.0663 1.18413Z" fill="#5AB2F8" />
                                </svg>
                                Your Leak Detection Specialist
                            </div>
                            <div class="text-dark-blue font-articulat leading-relaxed">
                                <p class="pb-4">Julian is a local Plumber who has been in the local area his whole life. Just completed his Health and Safety certificate, you can count on Julian to carry out the job properly and safely. Julian specialises in leak detection – no matter how small or big the leakage is, Julian has the experience and expertise required to detect all types of leakages and provide solutions to your home and offices.</p>
                                <p>Extremely attentive to the job and with strong attention to detail, Julian would not leave your premise unless everything is completed to perfection. Looking for your perfect plumber? Julian is your guy!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative mt-5">
                <img id="gotoTeam2_1" class="absolute top-[45%] z-[10000] cursor-pointer left-[20%]" src="<?= get_template_directory_uri() ?>/images/icons/arrow-prev.png" alt="">
                <img id="gotoTeam2_4" class="absolute top-[45%] z-[10000] cursor-pointer right-[20%]" src="<?= get_template_directory_uri() ?>/images/icons/arrow-next.png" alt="">
                <div class="team_slider" id="team_slider_2">
                    <div class="team_card_1 px-2">
                        <div class="min-h-[607px] h-full rounded-[30px] overflow-hidden bg-[#D3E2EF] w-full py-11 px-14">
                            <div class="flex flex-wrap justify-between items-center">
                                <div class="text-4xl md:text-5xl xl:text-heading font-bold text-main-blue">Ricci</div>
                                <img src="<?= get_template_directory_uri() ?>/images/logo/small-logo.png" alt="Fix N Flow">
                            </div>
                            <div class="bg-white rounded-[10px] py-3.5 px-4 text-2xl text-grey font-bold flex gap-x-3 items-center my-8">
                                <svg width="29" height="34" viewBox="0 0 29 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.5629 5.42151L23.0322 1.89078C21.7332 0.591744 19.6181 0.591744 18.319 1.89078L13.6058 6.60397L17.1366 10.1347L20.6673 6.60397L26.5629 12.4996C27.4988 11.5595 28.0242 10.2871 28.0242 8.96057C28.0242 7.63408 27.4988 6.36159 26.5629 5.42151Z" fill="#5AB2F8" />
                                    <path d="M3.59651 20.1439C4.57912 21.1265 6.16129 21.1265 7.12724 20.1439L11.2409 16.0303L7.71015 12.4829L3.59651 16.5965C2.61391 17.5791 2.61391 19.1613 3.59651 20.1439Z" fill="#5AB2F8" />
                                    <path d="M19.5015 10.1353L18.319 11.3178L17.1366 12.5003L11.8405 7.20418C10.8579 6.20492 9.27572 6.20492 8.30977 7.18752C8.07612 7.41833 7.89062 7.69323 7.76401 7.99627C7.6374 8.29931 7.57221 8.62446 7.57221 8.95289C7.57221 9.28131 7.6374 9.60647 7.76401 9.90951C7.89062 10.2125 8.07612 10.4874 8.30977 10.7183L13.6059 16.0143L12.4234 17.1968L1.83121 27.789C0.532173 29.088 0.532173 31.2031 1.83121 32.5022C3.13026 33.8012 5.24536 33.8012 6.5444 32.5022L21.8498 17.1968C22.004 17.351 22.187 17.4733 22.3885 17.5567C22.5899 17.6402 22.8059 17.6831 23.0239 17.6831C23.242 17.6831 23.4579 17.6402 23.6593 17.5567C23.8608 17.4733 24.0439 17.351 24.198 17.1968C24.3522 17.0426 24.4745 16.8596 24.558 16.6581C24.6414 16.4566 24.6844 16.2407 24.6844 16.0227C24.6844 15.8046 24.6414 15.5887 24.558 15.3872C24.4745 15.1858 24.3522 15.0027 24.198 14.8485L19.5015 10.1353Z" fill="#5AB2F8" />
                                </svg>
                                Your All - Rounded Plumber
                            </div>
                            <div class="text-dark-blue font-articulat leading-relaxed">
                                <p class="pb-4">Ricci is an Australian full time trusted local plumber. Born into a plumbing family with his grandfather and father running their own plumbing business for generations, Ricci was destined to be a plumber himself. Ricci is an all-rounded plumber who can assist you with any plumbing issue, from blocked drains, leak taps, water pipe repairs to kitchen appliance installation and rectifying roofing issues – he is your guy! Ricci is also available 24/7 for your emergency calls.</p>
                                <p>Apart from being an awesome plumber that locals love and trust, on weekends you can find Ricci at Bondi Beach volunteering as a lifeguard or helping homeless children in need.</p>
                            </div>
                        </div>
                    </div>

                    <div class="team_card_2 px-2">
                        <div class="min-h-[607px] h-full rounded-[30px] overflow-hidden group relative">
                            <img src="<?= get_template_directory_uri() ?>/images/background/ricci.jpg" class="w-full h-full grayscale group-hover:grayscale-0 duration-300" alt="">
                            <div class="absolute w-full bg-gradient-to-b from-transparent to-black -bottom-56 group-hover:bottom-0 duration-300 p-12">
                                <div class="text-2xl text-light-blue font-bold pb-6">Work with Julian</div>
                                <div class="flex flex-wrap -mx-2 gap-y-4 text-white">
                                    <div class="w-1/2 px-2">Linkedin Link</div>
                                    <div class="w-1/2 px-2"><?= get_field('admin_email', 'options') ?></div>
                                    <div class="w-1/2 px-2">Facebook Link</div>
                                    <div class="w-1/2 px-2"><?= get_field('phone_number', 'options') ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="team_card_3 px-2">
                        <div class="min-h-[607px] h-full rounded-[30px] overflow-hidden group relative">
                            <img src="<?= get_template_directory_uri() ?>/images/background/ricci.jpg" class="w-full h-full grayscale group-hover:grayscale-0 duration-300" alt="">
                            <div class="absolute w-full bg-gradient-to-b from-transparent to-black -bottom-56 group-hover:bottom-0 duration-300 p-12">
                                <div class="text-2xl text-light-blue font-bold pb-6">Work with Julian</div>
                                <div class="flex flex-wrap -mx-2 gap-y-4 text-white">
                                    <div class="w-1/2 px-2">Linkedin Link</div>
                                    <div class="w-1/2 px-2"><?= get_field('admin_email', 'options') ?></div>
                                    <div class="w-1/2 px-2">Facebook Link</div>
                                    <div class="w-1/2 px-2"><?= get_field('phone_number', 'options') ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="team_card_4 px-2">
                        <div class="min-h-[607px] h-full rounded-[30px] overflow-hidden bg-[#D3E2EF] w-full py-11 px-14">
                            <div class="flex flex-wrap justify-between items-center">
                                <div class="text-4xl md:text-5xl xl:text-heading font-bold text-main-blue">Julian</div>
                                <img src="<?= get_template_directory_uri() ?>/images/logo/small-logo.png" alt="Fix N Flow">
                            </div>
                            <div class="bg-white rounded-[10px] py-3.5 px-4 text-2xl text-grey font-bold flex gap-x-3 items-center my-8">
                                <svg width="23" height="33" viewBox="0 0 23 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.0663 1.18413C12.3709 0.488754 11.1396 0.488754 10.4442 1.18413C10.0437 1.58466 0.629272 11.1122 0.629272 21.0384C0.629272 27.1744 5.61927 32.1644 11.7552 32.1644C17.8912 32.1644 22.8812 27.1744 22.8812 21.0384C22.8812 11.1122 13.4668 1.58466 13.0663 1.18413Z" fill="#5AB2F8" />
                                </svg>
                                Your Leak Detection Specialist
                            </div>
                            <div class="text-dark-blue font-articulat leading-relaxed">
                                <p class="pb-4">Julian is a local Plumber who has been in the local area his whole life. Just completed his Health and Safety certificate, you can count on Julian to carry out the job properly and safely. Julian specialises in leak detection – no matter how small or big the leakage is, Julian has the experience and expertise required to detect all types of leakages and provide solutions to your home and offices.</p>
                                <p>Extremely attentive to the job and with strong attention to detail, Julian would not leave your premise unless everything is completed to perfection. Looking for your perfect plumber? Julian is your guy!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative mt-5">
                <img id="gotoTeam3_1" class="absolute top-[45%] z-[10000] cursor-pointer left-[20%]" src="<?= get_template_directory_uri() ?>/images/icons/arrow-prev.png" alt="">
                <img id="gotoTeam3_4" class="absolute top-[45%] z-[10000] cursor-pointer right-[20%]" src="<?= get_template_directory_uri() ?>/images/icons/arrow-next.png" alt="">
                <div class="team_slider" id="team_slider_3">
                    <div class="team_card_1 px-2">
                        <div class="min-h-[607px] h-full rounded-[30px] overflow-hidden bg-[#D3E2EF] w-full py-11 px-14">
                            <div class="flex flex-wrap justify-between items-center">
                                <div class="text-4xl md:text-5xl xl:text-heading font-bold text-main-blue">Ricci</div>
                                <img src="<?= get_template_directory_uri() ?>/images/logo/small-logo.png" alt="Fix N Flow">
                            </div>
                            <div class="bg-white rounded-[10px] py-3.5 px-4 text-2xl text-grey font-bold flex gap-x-3 items-center my-8">
                                <svg width="29" height="34" viewBox="0 0 29 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.5629 5.42151L23.0322 1.89078C21.7332 0.591744 19.6181 0.591744 18.319 1.89078L13.6058 6.60397L17.1366 10.1347L20.6673 6.60397L26.5629 12.4996C27.4988 11.5595 28.0242 10.2871 28.0242 8.96057C28.0242 7.63408 27.4988 6.36159 26.5629 5.42151Z" fill="#5AB2F8" />
                                    <path d="M3.59651 20.1439C4.57912 21.1265 6.16129 21.1265 7.12724 20.1439L11.2409 16.0303L7.71015 12.4829L3.59651 16.5965C2.61391 17.5791 2.61391 19.1613 3.59651 20.1439Z" fill="#5AB2F8" />
                                    <path d="M19.5015 10.1353L18.319 11.3178L17.1366 12.5003L11.8405 7.20418C10.8579 6.20492 9.27572 6.20492 8.30977 7.18752C8.07612 7.41833 7.89062 7.69323 7.76401 7.99627C7.6374 8.29931 7.57221 8.62446 7.57221 8.95289C7.57221 9.28131 7.6374 9.60647 7.76401 9.90951C7.89062 10.2125 8.07612 10.4874 8.30977 10.7183L13.6059 16.0143L12.4234 17.1968L1.83121 27.789C0.532173 29.088 0.532173 31.2031 1.83121 32.5022C3.13026 33.8012 5.24536 33.8012 6.5444 32.5022L21.8498 17.1968C22.004 17.351 22.187 17.4733 22.3885 17.5567C22.5899 17.6402 22.8059 17.6831 23.0239 17.6831C23.242 17.6831 23.4579 17.6402 23.6593 17.5567C23.8608 17.4733 24.0439 17.351 24.198 17.1968C24.3522 17.0426 24.4745 16.8596 24.558 16.6581C24.6414 16.4566 24.6844 16.2407 24.6844 16.0227C24.6844 15.8046 24.6414 15.5887 24.558 15.3872C24.4745 15.1858 24.3522 15.0027 24.198 14.8485L19.5015 10.1353Z" fill="#5AB2F8" />
                                </svg>
                                Your All - Rounded Plumber
                            </div>
                            <div class="text-dark-blue font-articulat leading-relaxed">
                                <p class="pb-4">Ricci is an Australian full time trusted local plumber. Born into a plumbing family with his grandfather and father running their own plumbing business for generations, Ricci was destined to be a plumber himself. Ricci is an all-rounded plumber who can assist you with any plumbing issue, from blocked drains, leak taps, water pipe repairs to kitchen appliance installation and rectifying roofing issues – he is your guy! Ricci is also available 24/7 for your emergency calls.</p>
                                <p>Apart from being an awesome plumber that locals love and trust, on weekends you can find Ricci at Bondi Beach volunteering as a lifeguard or helping homeless children in need.</p>
                            </div>
                        </div>
                    </div>

                    <div class="team_card_2 px-2">
                        <div class="min-h-[607px] h-full rounded-[30px] overflow-hidden group relative">
                            <img src="<?= get_template_directory_uri() ?>/images/background/ricci.jpg" class="w-full h-full grayscale group-hover:grayscale-0 duration-300" alt="">
                            <div class="absolute w-full bg-gradient-to-b from-transparent to-black -bottom-56 group-hover:bottom-0 duration-300 p-12">
                                <div class="text-2xl text-light-blue font-bold pb-6">Work with Julian</div>
                                <div class="flex flex-wrap -mx-2 gap-y-4 text-white">
                                    <div class="w-1/2 px-2">Linkedin Link</div>
                                    <div class="w-1/2 px-2"><?= get_field('admin_email', 'options') ?></div>
                                    <div class="w-1/2 px-2">Facebook Link</div>
                                    <div class="w-1/2 px-2"><?= get_field('phone_number', 'options') ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="team_card_3 px-2">
                        <div class="min-h-[607px] h-full rounded-[30px] overflow-hidden group relative">
                            <img src="<?= get_template_directory_uri() ?>/images/background/ricci.jpg" class="w-full h-full grayscale group-hover:grayscale-0 duration-300" alt="">
                            <div class="absolute w-full bg-gradient-to-b from-transparent to-black -bottom-56 group-hover:bottom-0 duration-300 p-12">
                                <div class="text-2xl text-light-blue font-bold pb-6">Work with Julian</div>
                                <div class="flex flex-wrap -mx-2 gap-y-4 text-white">
                                    <div class="w-1/2 px-2">Linkedin Link</div>
                                    <div class="w-1/2 px-2"><?= get_field('admin_email', 'options') ?></div>
                                    <div class="w-1/2 px-2">Facebook Link</div>
                                    <div class="w-1/2 px-2"><?= get_field('phone_number', 'options') ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="team_card_4 px-2">
                        <div class="min-h-[607px] h-full rounded-[30px] overflow-hidden bg-[#D3E2EF] w-full py-11 px-14">
                            <div class="flex flex-wrap justify-between items-center">
                                <div class="text-4xl md:text-5xl xl:text-heading font-bold text-main-blue">Julian</div>
                                <img src="<?= get_template_directory_uri() ?>/images/logo/small-logo.png" alt="Fix N Flow">
                            </div>
                            <div class="bg-white rounded-[10px] py-3.5 px-4 text-2xl text-grey font-bold flex gap-x-3 items-center my-8">
                                <svg width="23" height="33" viewBox="0 0 23 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.0663 1.18413C12.3709 0.488754 11.1396 0.488754 10.4442 1.18413C10.0437 1.58466 0.629272 11.1122 0.629272 21.0384C0.629272 27.1744 5.61927 32.1644 11.7552 32.1644C17.8912 32.1644 22.8812 27.1744 22.8812 21.0384C22.8812 11.1122 13.4668 1.58466 13.0663 1.18413Z" fill="#5AB2F8" />
                                </svg>
                                Your Leak Detection Specialist
                            </div>
                            <div class="text-dark-blue font-articulat leading-relaxed">
                                <p class="pb-4">Julian is a local Plumber who has been in the local area his whole life. Just completed his Health and Safety certificate, you can count on Julian to carry out the job properly and safely. Julian specialises in leak detection – no matter how small or big the leakage is, Julian has the experience and expertise required to detect all types of leakages and provide solutions to your home and offices.</p>
                                <p>Extremely attentive to the job and with strong attention to detail, Julian would not leave your premise unless everything is completed to perfection. Looking for your perfect plumber? Julian is your guy!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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