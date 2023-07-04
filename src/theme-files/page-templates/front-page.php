<?php
/*
 * Template Name: Front Page
 * The front page
 *
 */
get_header();
get_template_part('parts/section', 'homebanner');
?>

<div class="homePage pt-48 md:pt-0">
    <div class="container">
        <div class="flex flex-wrap -mx-2 pt-44 pb-20 md:pb-44 gap-y-5">
            <div class="w-full md:w-1/2 px-2">
                <div class="h-[447px] md:h-[274px] rounded-xl flex items-stretch md:items-center p-8 transition-all duration-300 hover:-translate-x-2 hover:-translate-y-2 hover:shadow-[10px_10px_#0067B9] relative overflow-hidden homepage-cta">
                    <img alt="" class="homepage-cta-bg-1 absolute left-0 top-0 h-[120%] w-[120%] max-w-[120%] duration-300" src="<?= get_template_directory_uri() ?>/images/background/cta-1.jpg">
                    <img src="<?= get_template_directory_uri() ?>/images/background/cta-1-component.png" class="homepage-cta-component-1 absolute bottom-0 right-0 max-w-[120%] duration-300" alt="">

                    <div class="relative flex flex-col h-full justify-between md:justify-center md:items-start">
                        <div class="text-4xl font-bold text-dark-blue pb-10">Same day service<div class="text-white">guarantee or its free!</div>
                        </div>
                        <a href="./" class="btn-yellow-hover-main-blue px-14 "><span class="relative z-10">Learn More</span></a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/4 px-2">
                <div class="h-[274px] rounded-xl bg-gradient-to-b from-[#316A9E] to-[#153B74] flex items-end p-7 transition-all duration-300 hover:-translate-x-2 hover:-translate-y-2 hover:shadow-[10px_10px_#0067B9] relative overflow-hidden homepage-cta">
                    <img alt="" class="homepage-cta-bg-1 absolute left-0 top-0 h-[120%] w-[120%] max-w-[120%] duration-300" src="<?= get_template_directory_uri() ?>/images/background/cta-2.png">
                    <img src="<?= get_template_directory_uri() ?>/images/background/cta-2-logo.png" class="homepage-logo-2 absolute top-0 right-0  max-w-[120%] duration-300" alt="">
                    <img src="<?= get_template_directory_uri() ?>/images/background/cta-2-component.png" class="homepage-cta-component-2 absolute bottom-0 right-0 h-full max-w-[120%] duration-300" alt="">

                    <div class="flex items-center relative">
                        <div class="text-4xl font-bold text-light-blue">10% off <span class="text-white">online bookings</span></div>
                        <a href="./">
                            <svg width="19" height="33" viewBox="0 0 19 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.04346 30.0151L15.1987 17.8598C16.0131 17.0455 16.0131 15.7251 15.1987 14.9107L3.04346 2.75537" stroke="#F7F8FA" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/4 px-2">
                <div class="h-[274px] rounded-xl bg-gradient-to-b from-main-blue to-[#0E3659] flex items-end p-7 transition-all duration-300 hover:-translate-x-2 hover:-translate-y-2 hover:shadow-[10px_10px_#0067B9] relative overflow-hidden homepage-cta">
                    <img alt="" class="homepage-cta-bg-1 absolute left-0 top-0 h-[120%] w-[120%] max-w-[120%] duration-300" src="<?= get_template_directory_uri() ?>/images/background/cta-3.png">
                    <img src="<?= get_template_directory_uri() ?>/images/background/cta-3-component.png" class="homepage-cta-component-2 absolute top-0 right-0  max-w-[120%] duration-300" alt="">

                    <div class="flex items-center">
                        <div class="text-[35px] leading-none font-bold text-yellow">10% off <span class="text-white">Seniors discount</span></div>
                        <a href="">
                            <svg width="19" height="33" viewBox="0 0 19 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.04346 30.0151L15.1987 17.8598C16.0131 17.0455 16.0131 15.7251 15.1987 14.9107L3.04346 2.75537" stroke="#F7F8FA" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container hidden md:block">
        <div class="flex justify-center group relative">
            <div class="w-full lg:w-5/12 absolute top-0 left-0 opacity-0 group-hover:opacity-100 translate-y-96 group-hover:translate-y-0 duration-1000">
                <div class="text-heading leading-none font-bold text-main-blue">From leaks to clogs, <span class="text-light-blue">we fix it all</span></div>
                <div class="text-grey font-articulat py-16 leading-loose">
                    <p class="pb-5">Fix N Flow is a local, family-owned plumbing company providing top-quality services to residents and businesses in <span class="font-bold">Sydney Metro, Central Coast, South Coast & Illawarra, Hunter Valley, and Blue Mountains.</span> Our team of expert plumbers is <span class="font-bold">available 24/7 for all your plumbing needs,</span> from emergency repairs to regular maintenance.</p>
                    <p>Our mission is to provide you with efficient and reliable plumbing services with a 60-minutes response time guarantee.</p>
                </div>
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full md:w-1/2 px-2">
                        <a href="" class="btn-yellow-hover-main-blue w-full"><span class="relative z-10">Button name here</span></a>
                    </div>
                    <div class="w-full md:w-1/2 px-2">
                        <a href="" class="btn-main-blue-hover-yellow w-full"><span class="relative z-10">Button name here</span></a>
                    </div>
                </div>
            </div>
            <div class="group-hover:translate-x-[30rem] duration-1000 w-full lg:w-9/12 rounded-[30px] h-[641px] bg-no-repeat bg-cover bg-center p-6 shadow-[14px_14px_#5AB2F8]" style="background-image: url('<?= get_template_directory_uri() ?>/images/background/video-thumbnail.jpg')">
                <a href="./" class="h-[69px] w-[69px] rounded-full bg-[#F7F8FA] flex items-center justify-center">
                    <svg width="20" height="26" viewBox="0 0 20 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.0439453" y="0.741211" width="4.85152" height="24.4202" rx="2.42576" fill="#0067B9" />
                        <rect x="14.917" y="0.741211" width="4.85152" height="24.4202" rx="2.42576" fill="#0067B9" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="md:hidden">
        <div class="container">
            <div class="flex flex-wrap justify-center gap-y-20">
                <div class="w-full">
                    <div class="w-full rounded-xl h-[188px] bg-no-repeat bg-cover flex items-end bg-center p-6 shadow-[5px_5px_#5AB2F8]" style="background-image: url('<?= get_template_directory_uri() ?>/images/background/video-thumbnail.jpg')">
                        <a href="./" class="h-[36px] w-[36px] rounded-full bg-[#F7F8FA] flex items-center justify-center">
                            <svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle opacity="0.5" cx="17.8022" cy="17.2864" r="17.2227" fill="#F7F8FA" />
                                <rect x="12.8638" y="11.1709" width="2.4299" height="12.2309" rx="0.789109" fill="#0067B9" />
                                <rect x="20.3125" y="11.1709" width="2.4299" height="12.2309" rx="0.789109" fill="#0067B9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="w-full">
                    <div class="text-4xl md:text-heading leading-none font-bold text-main-blue">From leaks to clogs, <span class="text-light-blue">we fix it all</span></div>
                    <div class="text-grey font-articulat py-14 leading-loose">
                        <p class="pb-5">Fix N Flow is a local, family-owned plumbing company providing top-quality services to residents and businesses in <span class="font-bold">Sydney Metro, Central Coast, South Coast & Illawarra, Hunter Valley, and Blue Mountains.</span> Our team of expert plumbers is <span class="font-bold">available 24/7 for all your plumbing needs,</span> from emergency repairs to regular maintenance.</p>
                        <p>Our mission is to provide you with efficient and reliable plumbing services with a 60-minutes response time guarantee.</p>
                    </div>
                    <div class="flex flex-wrap gap-y-4">
                        <div class="w-full">
                            <a href="" class="btn-yellow-hover-main-blue w-full"><span class="relative z-10">Button name here</span></a>
                        </div>
                        <div class="w-full">
                            <a href="" class="btn-main-blue-hover-yellow w-full"><span class="relative z-10">Button name here</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $services = get_field('services'); ?>
    <div class="py-28 bg-no-repeat bg-contain" style="background-image: url('<?= get_template_directory_uri() ?>/images/background/homepage_services.png')">
        <div class="container md:py-20">
            <div class="mx-auto w-11/12 lg:w-2/3 text-grey text-4xl md:text-heading leading-none font-bold text-center"><?= $services['heading'] ?></div>
            <div class="mx-auto w-11/12 lg:w-2/3 text-grey font-articulat text-center pt-9 md:pt-14"><?= $services['description'] ?></div>
            <div class="bg-light rounded-[35px] py-16 md:mt-16 shadow-[inset_0px_0px_36px_0px_rgba(0, 0, 0, 0.05)]">
                <div id="homepage_service_slider" class="homepage_service_slider pb-12">
                    <?php if (have_rows('services')) :
                        while (have_rows('services')) : the_row();
                            if (have_rows('services_list')) :
                                while (have_rows('services_list')) : the_row();
                                    $image = get_sub_field('image');
                                    $serviceName = get_sub_field('service_name');
                                    $link = get_sub_field('link');
                    ?>
                                    <div class="bg-quaternary rounded-2xl p-4 flex flex-col justify-between">
                                        <div class="pb-16">
                                            <div class="h-[147px] w-full bg-grey rounded-[10px] p-3 flex items-end bg-no-repeat bg-cover" style="background-image: url('<?= $image['url'] ?>')">
                                                <img src="<?= get_template_directory_uri() ?>/images/icons/service-icon.png" alt="">
                                            </div>
                                            <div class="text-2xl font-bold text-main-blue pt-3"><?= $serviceName ?></div>
                                        </div>
                                        <a href="<?= $link ?>" class="border border-light-blue rounded-md h-[48px] flex items-center justify-center text-center text-main-blue font-articulat font-semibold gap-x-4">
                                            Explore now
                                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.86279 16.0078L8.28068 9.58992C8.67121 9.1994 8.67121 8.56623 8.28069 8.17571L1.86279 1.75781" stroke="#5AB2F8" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" />
                                            </svg>
                                        </a>
                                    </div>
                    <?php
                                endwhile;
                            endif;
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="flex justify-center">
                    <a href="<?= $services['button']['url'] ?>" target="<?= $services['button']['target'] ?>" class="btn-yellow-hover-main-blue px-14 w-full md:w-fit"><span class="relative z-10"><?= $services['button']['title'] ?></span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-dark-blue pt-14 md:pt-40 bg-no-repeat bg-cover md:bg-contain" style="background-image:url(<?= get_template_directory_uri() ?>/images/background/homepage_guarantee_vector.png)">
        <div class="container">
            <div class="flex flex-wrap justify-between">
                <div class="w-full lg:w-5/12">
                    <div class="text-white text-4xl md:text-heading font-bold leading-none pb-12">What you're <span class="text-light-blue">guaranteed</span> to get from us</div>
                    <img src="<?= get_template_directory_uri() ?>/images/lib/guaranteed-plumbing.png" alt="plumb" class="hidden md:block">
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="flex flex-wrap -mx-2 gap-y-4 md:gap-y-5">
                        <div class="w-1/2 md:w-1/3 px-2 group">
                            <div class="relative bg-white h-full w-full rounded-2xl p-4 md:px-8 transition-all duration-300 group-hover:-translate-x-2 hover:-translate-y-2 group-hover:shadow-[10px_10px_#0067B9] overflow-hidden">
                                <img src="<?= get_template_directory_uri() ?>/images/background/cta-4.jpg" alt="" class="absolute top-0 right-0 h-[120%] w-[120%] max-w-[120%] rounded-2xl group-hover:-top-7 group-hover:-right-7 duration-300 opacity-0 group-hover:opacity-100">
                                <div class="flex flex-col items-center gap-y-4 relative h-full">
                                    <div class="text-main-blue group-hover:text-dark-blue transition-all duration-150">
                                        <svg width="49" height="46" viewBox="0 0 49 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M45.2908 9.78149H42.3211V27.5997C42.3211 29.239 40.9907 30.5694 39.3514 30.5694H21.0224L15.5938 36.5089H30.4423L36.6787 44.824C36.9638 45.2042 37.4092 45.418 37.8666 45.418C38.0239 45.418 38.1813 45.3942 38.3358 45.3408C38.9416 45.1388 39.3514 44.5716 39.3514 43.9331V36.5089H45.2908C46.9301 36.5089 48.2605 35.1784 48.2605 33.5391V12.7512C48.2605 11.1119 46.9301 9.78149 45.2908 9.78149Z" fill="currentColor" />
                                            <path d="M32.8982 27.0721C34.5375 27.0721 35.8679 25.7417 35.8679 24.1024V3.31443C35.8679 1.67516 34.5375 0.344727 32.8982 0.344727H3.20115C1.56187 0.344727 0.231445 1.67516 0.231445 3.31443V24.1024C0.231445 25.7417 1.56187 27.0721 3.20115 27.0721H9.14056V34.4964C9.14056 35.1348 9.55038 35.7021 10.1562 35.904C10.3106 35.9574 10.468 35.9812 10.6254 35.9812C11.0828 35.9812 11.5282 35.7674 11.8133 35.3873L18.0497 27.0721H32.8982Z" fill="currentColor" />
                                        </svg>
                                    </div>
                                    <div class="flex justify-center">
                                        <div class="text-4xl md:text-heading leading-none font-bold text-light-blue group-hover:text-dark-blue transition-all duration-150 border-b border-light-blue pb-3">
                                            01
                                        </div>
                                    </div>
                                    <div class="text-grey group-hover:text-white duration-300 font-articulat text-center text-sm md:text-base">Call us and speak to an expert</div>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/3 px-2 group">
                            <div class="relative bg-white h-full w-full rounded-2xl p-4 md:px-8 transition-all duration-300 group-hover:-translate-x-2 hover:-translate-y-2 group-hover:shadow-[10px_10px_#0067B9] overflow-hidden">
                                <img src="<?= get_template_directory_uri() ?>/images/background/cta-4.jpg" alt="" class="absolute top-0 right-0 h-[120%] w-[120%] max-w-[120%] rounded-2xl group-hover:-top-7 group-hover:-right-7 duration-300 opacity-0 group-hover:opacity-100">
                                <div class="flex flex-col items-center gap-y-4 relative h-full">
                                    <div class="text-main-blue group-hover:text-dark-blue transition-all duration-150">
                                        <svg width="38" height="39" viewBox="0 0 38 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M27.9499 24.4683L36.0752 32.5936C37.0877 33.6061 37.0877 35.2477 36.0752 36.2603V36.2603C35.0627 37.2728 33.4211 37.2728 32.4085 36.2603L24.2832 28.1349" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" />
                                            <path d="M27.9883 24.5067C27.9672 24.4856 27.9329 24.486 27.9123 24.5075C27.9105 24.5095 27.9088 24.5115 27.9072 24.5137C26.9293 25.9041 25.7181 27.1147 24.3273 28.092C24.3248 28.0937 24.3225 28.0957 24.3203 28.0978C24.2998 28.1183 24.2998 28.1515 24.3203 28.172L32.4085 36.2603C33.4211 37.2728 35.0627 37.2728 36.0752 36.2603C37.0877 35.2477 37.0877 33.6061 36.0752 32.5936L27.9883 24.5067Z" fill="currentColor" />
                                            <path d="M15.9089 30.7603C24.009 30.7603 30.5755 24.1938 30.5755 16.0937C30.5755 7.99349 24.009 1.427 15.9089 1.427C7.80868 1.427 1.24219 7.99349 1.24219 16.0937C1.24219 24.1938 7.80868 30.7603 15.9089 30.7603Z" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="square" />
                                        </svg>
                                    </div>
                                    <div class="flex justify-center">
                                        <div class="text-4xl md:text-heading leading-none font-bold text-light-blue group-hover:text-dark-blue transition-all duration-150 border-b border-light-blue pb-3">
                                            02
                                        </div>
                                    </div>
                                    <div class="text-grey group-hover:text-white duration-300 font-articulat text-center text-sm md:text-base">Onsite review</div>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/3 px-2 group">
                            <div class="relative bg-white h-full w-full rounded-2xl p-4 md:px-8 transition-all duration-300 group-hover:-translate-x-2 hover:-translate-y-2 group-hover:shadow-[10px_10px_#0067B9] overflow-hidden">
                                <img src="<?= get_template_directory_uri() ?>/images/background/cta-4.jpg" alt="" class="absolute top-0 right-0 h-[120%] w-[120%] max-w-[120%] rounded-2xl group-hover:-top-7 group-hover:-right-7 duration-300 opacity-0 group-hover:opacity-100">
                                <div class="flex flex-col items-center gap-y-4 relative h-full">
                                    <div class="text-main-blue group-hover:text-dark-blue transition-all duration-150">
                                        <svg width="44" height="39" viewBox="0 0 44 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M33.3888 1.17236H7.375C9.76913 1.17236 11.7106 2.8693 11.7106 4.96186V32.2462C11.7106 34.3388 13.6521 36.0357 16.0463 36.0357H37.7244V4.96186C37.7244 2.8693 35.7829 1.17236 33.3888 1.17236Z" fill="currentColor" />
                                            <path d="M31.6552 9.31166H17.7812C17.3025 9.31166 16.9141 9.01637 16.9141 8.65253C16.9141 8.2887 17.3025 7.99341 17.7812 7.99341H31.6552C32.1338 7.99341 32.5223 8.2887 32.5223 8.65253C32.5223 9.01637 32.1338 9.31166 31.6552 9.31166Z" fill="#F7F8FA" />
                                            <path d="M31.6552 14.5849H17.7812C17.3025 14.5849 16.9141 14.2896 16.9141 13.9257C16.9141 13.5619 17.3025 13.2666 17.7812 13.2666H31.6552C32.1338 13.2666 32.5223 13.5619 32.5223 13.9257C32.5223 14.2896 32.1338 14.5849 31.6552 14.5849Z" fill="#F7F8FA" />
                                            <path d="M31.6552 19.8578H17.7812C17.3025 19.8578 16.9141 19.5625 16.9141 19.1987C16.9141 18.8348 17.3025 18.5396 17.7812 18.5396H31.6552C32.1338 18.5396 32.5223 18.8348 32.5223 19.1987C32.5223 19.5625 32.1338 19.8578 31.6552 19.8578Z" fill="#F7F8FA" />
                                            <path d="M23.8511 25.1308H17.7812C17.3025 25.1308 16.9141 24.8355 16.9141 24.4716C16.9141 24.1078 17.3025 23.8125 17.7812 23.8125H23.8511C24.3297 23.8125 24.7182 24.1078 24.7182 24.4716C24.7182 24.8355 24.3297 25.1308 23.8511 25.1308Z" fill="#F7F8FA" />
                                            <path d="M1.44336 4.96186V5.46186H1.94336H10.6146H11.1146V4.96186C11.1146 2.53205 8.88391 0.672363 6.27899 0.672363C3.67406 0.672363 1.44336 2.53205 1.44336 4.96186Z" fill="currentColor" stroke="#F7F8FA" />
                                            <path d="M20.3825 32.8889H19.8825V33.3889C19.8825 35.1442 18.2302 36.6784 16.0469 36.6784V37.1784V37.6784H38.5921C41.1971 37.6784 43.4278 35.8187 43.4278 33.3889V32.8889H42.9278H20.3825Z" fill="currentColor" stroke="#F7F8FA" />
                                        </svg>
                                    </div>
                                    <div class="flex justify-center">
                                        <div class="text-4xl md:text-heading leading-none font-bold text-light-blue group-hover:text-dark-blue transition-all duration-150 border-b border-light-blue pb-3">
                                            03
                                        </div>
                                    </div>
                                    <div class="text-grey group-hover:text-white duration-300 font-articulat text-center text-sm md:text-base">Deliver a free quote</div>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/3 px-2 group">
                            <div class="relative bg-white h-full w-full rounded-2xl p-4 md:px-8 transition-all duration-300 group-hover:-translate-x-2 hover:-translate-y-2 group-hover:shadow-[10px_10px_#0067B9] overflow-hidden">
                                <img src="<?= get_template_directory_uri() ?>/images/background/cta-4.jpg" alt="" class="absolute top-0 right-0 h-[120%] w-[120%] max-w-[120%] rounded-2xl group-hover:-top-7 group-hover:-right-7 duration-300 opacity-0 group-hover:opacity-100">
                                <div class="flex flex-col items-center gap-y-4 relative h-full">
                                    <div class="text-main-blue group-hover:text-dark-blue transition-all duration-150">
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M33.4911 26.8405L23.4652 18.0354L18.209 24.1988L26.7867 33.542C26.8405 33.601 26.893 33.6601 26.9521 33.7191C27.8421 34.6089 29.0491 35.1087 30.3075 35.1087C31.566 35.1087 32.773 34.6089 33.663 33.7191C33.722 33.6601 33.7746 33.601 33.8284 33.542C34.6723 32.6086 35.1108 31.3782 35.0476 30.1214C34.9843 28.8647 34.4245 27.6845 33.4911 26.8405Z" fill="currentColor" />
                                            <path d="M5.10784 10.7214C5.21857 10.8321 5.36876 10.8944 5.52538 10.8944H8.23443L13.5084 16.169L16.322 13.7688L10.8407 8.28755V5.5791C10.8407 5.42247 10.7784 5.27228 10.6677 5.16155L6.53352 1.02741C6.42277 0.91669 6.27258 0.854492 6.11598 0.854492C5.95937 0.854492 5.80918 0.91669 5.69843 1.02741L0.973698 5.75214C0.86298 5.86289 0.800781 6.01308 0.800781 6.16969C0.800781 6.32629 0.86298 6.47648 0.973698 6.58723L5.10784 10.7214Z" fill="currentColor" />
                                            <path d="M34.7549 6.66098L30.6332 10.7833L25.1277 5.27841L29.25 1.15608C27.7789 0.739434 26.2187 0.756571 24.7571 1.20543C23.2955 1.6543 21.9947 2.51578 21.011 3.68631C20.0273 4.85683 19.4026 6.28658 19.2121 7.80364C19.0216 9.32071 19.2733 10.8605 19.937 12.2379L1.66587 27.8231C1.17149 28.2427 0.863986 28.8415 0.810939 29.4878C0.757892 30.1341 0.963644 30.7751 1.38297 31.2697C1.42609 31.3205 1.47156 31.3701 1.51881 31.4174L4.49184 34.3898C4.719 34.617 4.98868 34.7972 5.28549 34.9202C5.5823 35.0431 5.90042 35.1064 6.22169 35.1064C6.54295 35.1064 6.86107 35.0431 7.15788 34.9202C7.45469 34.7972 7.72437 34.617 7.95153 34.3898C7.99937 34.3426 8.04425 34.2936 8.08795 34.2428L23.6731 15.9734C25.0504 16.6382 26.5905 16.8907 28.108 16.7006C29.6254 16.5106 31.0557 15.886 32.2265 14.9021C33.3973 13.9182 34.2589 12.6169 34.7075 11.1548C35.156 9.69277 35.1725 8.13221 34.7549 6.66098Z" fill="currentColor" />
                                        </svg>
                                    </div>
                                    <div class="flex justify-center">
                                        <div class="text-4xl md:text-heading leading-none font-bold text-light-blue group-hover:text-dark-blue transition-all duration-150 border-b border-light-blue pb-3">
                                            04
                                        </div>
                                    </div>
                                    <div class="text-grey group-hover:text-white duration-300 font-articulat text-center text-sm md:text-base">Complete work with updates, we maintain consant dialogue</div>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/3 px-2 group">
                            <div class="relative bg-white h-full w-full rounded-2xl p-4 md:px-8 transition-all duration-300 group-hover:-translate-x-2 hover:-translate-y-2 group-hover:shadow-[10px_10px_#0067B9] overflow-hidden">
                                <img src="<?= get_template_directory_uri() ?>/images/background/cta-4.jpg" alt="" class="absolute top-0 right-0 h-[120%] w-[120%] max-w-[120%] rounded-2xl group-hover:-top-7 group-hover:-right-7 duration-300 opacity-0 group-hover:opacity-100">
                                <div class="flex flex-col items-center gap-y-4 relative h-full">
                                    <div class="text-main-blue group-hover:text-dark-blue transition-all duration-150">
                                        <svg width="42" height="40" viewBox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M39.6419 15.4332L29.0418 8.73602C28.4035 8.32971 27.6716 8.09424 26.9161 8.05222C26.1607 8.01021 25.4071 8.16304 24.7278 8.49607L16.091 12.6901C16.6617 14.0829 16.6804 15.6408 16.1433 17.047C15.6062 18.4531 14.5535 19.6018 13.1996 20.2594C11.8456 20.917 10.2919 21.0341 8.85467 20.5869C7.41741 20.1397 6.2045 19.1617 5.46266 17.852L2.74467 19.1732C1.99631 19.5398 1.36539 20.1084 0.923173 20.8147C0.48096 21.521 0.245086 22.3369 0.2422 23.1702V28.4388C0.240422 29.1896 0.429861 29.9285 0.792659 30.5858C1.15546 31.2431 1.67967 31.7972 2.31587 32.1959L12.916 38.8931C13.5543 39.2992 14.2863 39.5345 15.0417 39.5766C15.7971 39.6186 16.5506 39.4659 17.23 39.133L39.2131 28.4559C39.9615 28.0893 40.5924 27.5207 41.0346 26.8144C41.4768 26.1081 41.7127 25.2922 41.7156 24.4589V19.1903C41.7174 18.4395 41.5279 17.7006 41.1651 17.0433C40.8023 16.386 40.2781 15.8319 39.6419 15.4332ZM36.8521 19.9731L17.2263 29.5053C16.5469 29.8381 15.7933 29.9908 15.038 29.9488C14.2826 29.9068 13.5506 29.6714 12.9123 29.2653L5.03089 24.2848C4.94861 24.2329 4.87737 24.1653 4.82123 24.0858C4.76509 24.0063 4.72515 23.9166 4.70369 23.8217C4.68224 23.7268 4.67968 23.6286 4.69618 23.5327C4.71267 23.4368 4.74789 23.3451 4.79983 23.2628C4.85176 23.1805 4.91939 23.1093 4.99886 23.0531C5.07833 22.997 5.16808 22.9571 5.26298 22.9356C5.35789 22.9142 5.45609 22.9116 5.55198 22.9281C5.64787 22.9446 5.73957 22.9798 5.82185 23.0317L13.7077 28.013C14.1331 28.2838 14.6209 28.4407 15.1243 28.4687C15.6278 28.4967 16.1299 28.3949 16.5827 28.173L36.2085 18.6415C36.3853 18.5557 36.5889 18.5436 36.7746 18.6079C36.8666 18.6397 36.9513 18.6893 37.0241 18.7539C37.0969 18.8186 37.1562 18.8969 37.1987 18.9844C37.2412 19.0719 37.266 19.167 37.2718 19.2641C37.2776 19.3612 37.2641 19.4585 37.2323 19.5505C37.2005 19.6424 37.1508 19.7272 37.0862 19.8C37.0216 19.8727 36.9433 19.9321 36.8558 19.9746L36.8521 19.9731Z" fill="currentColor" />
                                            <path d="M13.2036 6.04049C12.6909 6.04049 12.1897 5.88846 11.7634 5.60361C11.3371 5.31877 11.0049 4.91392 10.8087 4.44024C10.6125 3.96657 10.5611 3.44535 10.6611 2.9425C10.7612 2.43965 11.0081 1.97775 11.3706 1.61522C11.7331 1.25268 12.195 1.00579 12.6979 0.905768C13.2007 0.805745 13.7219 0.85708 14.1956 1.05328C14.6693 1.24949 15.0741 1.58174 15.359 2.00804C15.6438 2.43433 15.7959 2.93552 15.7959 3.44822C15.7959 4.13574 15.5227 4.79509 15.0366 5.28123C14.5505 5.76738 13.8911 6.04049 13.2036 6.04049Z" fill="currentColor" />
                                            <path d="M24.0816 7.16437C24.9875 6.72119 25.9919 6.51776 26.9989 6.57351C28.0058 6.62926 28.9817 6.94235 29.8331 7.48283L35.98 11.365C36.6609 9.75188 36.7158 7.94282 36.134 6.29135C35.5522 4.63989 34.3755 3.26471 32.8338 2.43455C31.2922 1.6044 29.4964 1.37891 27.7974 1.80217C26.0983 2.22543 24.6182 3.26701 23.6461 4.72337C23.2606 4.61422 22.8619 4.55889 22.4612 4.55896C21.7882 4.55647 21.1234 4.70747 20.5175 5.00046C19.9116 5.29346 19.3805 5.72073 18.9645 6.24982C18.5485 6.7789 18.2586 7.39587 18.1169 8.0538C17.9751 8.71174 17.9853 9.39334 18.1465 10.0468L24.0816 7.16437Z" fill="currentColor" />
                                            <path d="M10.6119 19.3714C9.73294 19.3714 8.87376 19.1108 8.14296 18.6225C7.41217 18.1342 6.84259 17.4401 6.50624 16.6281C6.16989 15.8161 6.08189 14.9226 6.25336 14.0606C6.42483 13.1985 6.84807 12.4067 7.46955 11.7852C8.09104 11.1637 8.88287 10.7405 9.7449 10.569C10.6069 10.3976 11.5004 10.4856 12.3125 10.8219C13.1245 11.1583 13.8185 11.7278 14.3068 12.4586C14.7951 13.1894 15.0557 14.0486 15.0557 14.9275C15.0546 16.1058 14.586 17.2354 13.7529 18.0685C12.9197 18.9017 11.7901 19.3702 10.6119 19.3714Z" fill="currentColor" />
                                        </svg>
                                    </div>
                                    <div class="flex justify-center">
                                        <div class="text-4xl md:text-heading leading-none font-bold text-light-blue group-hover:text-dark-blue transition-all duration-150 border-b border-light-blue pb-3">
                                            05
                                        </div>
                                    </div>
                                    <div class="text-grey group-hover:text-white duration-300 font-articulat text-center text-sm md:text-base">Clean up</div>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/3 px-2 group">
                            <div class="relative bg-white h-full w-full rounded-2xl p-4 md:px-8 transition-all duration-300 group-hover:-translate-x-2 hover:-translate-y-2 group-hover:shadow-[10px_10px_#0067B9] overflow-hidden">
                                <img src="<?= get_template_directory_uri() ?>/images/background/cta-4.jpg" alt="" class="absolute top-0 right-0 h-[120%] w-[120%] max-w-[120%] rounded-2xl group-hover:-top-7 group-hover:-right-7 duration-300 opacity-0 group-hover:opacity-100">
                                <div class="flex flex-col items-center gap-y-4 relative h-full">
                                    <div class="text-main-blue group-hover:text-dark-blue transition-all duration-150">
                                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M41.7893 18.1495C41.7893 8.25212 32.5316 0.229492 21.1124 0.229492C9.69327 0.229492 0.435547 8.25212 0.435547 18.1495C0.435547 28.0468 9.69327 36.0694 21.1124 36.0694C22.3176 36.0694 23.4979 35.9777 24.647 35.8053C25.0942 35.7382 25.5528 35.8085 25.9509 36.0229L33.3271 39.9954C34.6596 40.713 36.2755 39.7479 36.2755 38.2345V31.172C36.2755 30.6187 36.5086 30.0939 36.8952 29.698C39.941 26.5791 41.7893 22.5559 41.7893 18.1495Z" fill="currentColor" />
                                            <path d="M20.451 21.3374C21.042 21.3374 21.4532 21.1575 21.5046 20.7721C21.556 18.9477 22.8151 18.2025 24.0742 17.3802C25.3333 16.5322 26.5667 15.6329 26.5667 13.5258C26.5667 10.9819 24.5367 9.15747 21.1962 9.15747C19.2947 9.15747 17.9328 9.77418 17.0335 10.5964C16.1341 11.4187 15.6973 12.4466 15.6973 13.2174C15.6973 14.3464 16.8709 14.5908 17.3223 14.6012C17.4407 14.604 17.5036 14.5202 17.5245 14.4036C17.8009 12.8658 18.7933 11.3159 21.1448 11.3159C22.9949 11.3159 24.0485 12.2667 24.0485 13.7314C24.0485 15.0676 22.9179 15.5558 21.7615 16.3267C20.6309 17.0719 19.4489 18.074 19.3718 20.4637C19.3461 21.0547 19.8086 21.3374 20.451 21.3374ZM20.3226 26.271H20.6823C21.6074 26.271 22.0956 25.7828 22.0956 24.8835V24.5751C22.0956 23.6757 21.6074 23.1618 20.6823 23.1618H20.3226C19.4232 23.1618 18.935 23.6757 18.935 24.5751V24.8835C18.935 25.7828 19.4232 26.271 20.3226 26.271Z" fill="#F7F8FA" />
                                        </svg>
                                    </div>
                                    <div class="flex justify-center">
                                        <div class="text-4xl md:text-heading leading-none font-bold text-light-blue group-hover:text-dark-blue transition-all duration-150 border-b border-light-blue pb-3">
                                            06
                                        </div>
                                    </div>
                                    <div class="text-grey group-hover:text-white duration-300 font-articulat text-center text-sm md:text-base">Review and follow up</div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:hidden">
                            <img src="<?= get_template_directory_uri() ?>/images/lib/guaranteed-plumbing.png" alt="plumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative group">
        <div class="absolute bottom-full overflow-x-hidden">
            <img src="<?= get_template_directory_uri() ?>/images/background/why-choose-vector.png" alt="" class="group-hover:-translate-x-96 duration-500 max-w-[200%]">
        </div>
        <div class="bg-secondary-blue duration-500 pb-14 md:pb-40 pt-10 md:pt-0">
            <div class="container">
                <div class="flex flex-wrap justify-between items-center">
                    <div class="text-4xl md:text-heading font-bold text-white duration-500 leading-none">Why Choose Fix N Flow?</div>
                    <div class="w-fit hidden md:block"><a href="./" class="btn-yellow-hover-main-blue w-full px-14"><span class="relative z-10">Button name here</span></a></div>
                </div>
                <div class="w-full lg:w-10/12 pt-7">
                    <div class="flex flex-wrap -mx-2 text-white duration-500 font-articulat leading-loose">
                        <div class="w-full lg:w-1/2 px-2">
                            Fix N Flow, we understand the importance of having a reliable and trustworthy plumbing service provider. As a family owned and operated business, we take pride in treating our customers like family. We believe in providing our customers with personalised services and building long-lasting relationships with them.
                        </div>
                        <div class="w-full lg:w-1/2 px-2">
                            Our responsiveness is one of the most significant advantages of choosing Fix N Flow. We guarantee a 60-minutes response time to ensure that your plumbing needs are attended to promptly. Call us today and experience the Fix N Flow difference!
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-2 mt-20 gap-y-4">
                    <div class="w-full lg:w-3/4 px-2">
                        <div class="flex flex-wrap -mx-2 gap-y-4">
                            <div class="w-full lg:w-1/3 px-2">
                                <div class="h-[255px] rounded-[10px] relative overflow-hidden whyus-card">
                                    <img src="<?= get_template_directory_uri() ?>/images/background/why-us-bg-1.jpg" class="whyus-card-bg-1 absolute top-0 right-0 h-[120%] w-[120%] max-w-[120%] duration-300" alt="">
                                    <img src="<?= get_template_directory_uri() ?>/images/background/why-us-bg-component-1.png" class="whyus-card-bg-component-1 absolute bottom-0 right-0 h-full max-w-[120%] duration-300" alt="">
                                    <div class="absolute w-full h-full bg-gradient-to-b from-transparent to-black/75"></div>

                                    <div class="flex h-full items-end p-7 relative">
                                        <div class="w-full">
                                            <div class="text-white text-2xl md:text-4xl font-semibold md:pb-7"><span class="font-bold">Family</span> owned<br /> & operated</div>
                                            <div class="flex flex-wrap justify-between items-end">
                                                <div class="w-fit font-articulat text-white flex-1 text-base leading-loose">
                                                    We treat our customers like family.
                                                </div>
                                                <div class="w-fit"><img src="<?= get_template_directory_uri() ?>/images/icons/why-us-icon-1.png" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-2/3 px-2">
                                <div class="h-[450px] md:h-[255px] rounded-[10px] relative overflow-hidden whyus-card">
                                    <img src="<?= get_template_directory_uri() ?>/images/background/why-us-bg-2.jpg" class="whyus-card-bg-1 absolute top-0 right-0 h-[120%] w-[120%] max-w-[120%] duration-300" alt="">
                                    <img src="<?= get_template_directory_uri() ?>/images/background/why-us-bg-component-2.png" class="whyus-card-bg-component-1 absolute bottom-0 right-0 duration-300" alt="">
                                    <div class="absolute w-full h-full bg-gradient-to-b from-transparent to-black/75"></div>

                                    <div class="flex h-full md:items-end p-7 relative">
                                        <div class="w-full">
                                            <div class="text-white text-2xl md:text-4xl font-semibold">We guarantee a <div class="font-bold">60-minute</div> response time</div>
                                            <div class="flex flex-wrap justify-between items-end">
                                                <div class="w-fit font-articulat text-white flex-1 text-base">
                                                    To ensure that your plumbing needs are attended to promptly.
                                                </div>
                                                <div class="w-fit"><img src="<?= get_template_directory_uri() ?>/images/icons/why-us-icon-2.png" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-2 mt-4 gap-y-4">
                            <div class="w-full lg:w-2/3 px-2">
                                <div class="h-[450px] md:h-[255px] rounded-[10px] relative overflow-hidden whyus-card bg-gradient-to-r from-[#f3f3f3] to-[#e4e2e2]">
                                    <img src="<?= get_template_directory_uri() ?>/images/background/why-us-bg-component-3.png" class="whyus-card-bg-component-3 absolute bottom-0 right-0 duration-300" alt="">

                                    <div class="flex h-full md:items-end p-7 relative">
                                        <div class="w-full">
                                            <div class="text-dark-blue text-2xl md:text-4xl font-bold pb-7">Detailed breakdown <div class="text-light-blue">of all costs</div>
                                            </div>
                                            <div class="flex flex-wrap justify-between items-end">
                                                <div class="w-9/12 md:w-7/12 font-articulat text-dark-blue text-sm md:text-base leading-loose">
                                                    Our team of expert plumbers will ensure you can make informed decisions.
                                                </div>
                                                <div class="w-fit"><img src="<?= get_template_directory_uri() ?>/images/icons/why-us-icon-3.png" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/3 px-2">
                                <div class="h-[255px] rounded-[10px] relative overflow-hidden whyus-card">
                                    <img src="<?= get_template_directory_uri() ?>/images/background/why-us-bg-4.jpg" class="whyus-card-bg-1 absolute top-0 right-0 h-[120%] w-[120%] max-w-[120%] duration-300" alt="">
                                    <img src="<?= get_template_directory_uri() ?>/images/background/why-us-bg-component-4.png" class="whyus-card-bg-component-3 absolute bottom-0 right-0 h-full max-w-[120%] duration-300" alt="">

                                    <div class="flex h-full items-end p-7 relative">
                                        <div class="w-full">
                                            <div class="text-white text-2xl md:text-4xl font-bold pb-7">We believe in <div class="text-dark-blue">transparency</div>
                                            </div>
                                            <div class="flex flex-wrap justify-between items-end">
                                                <div class="w-fit font-articulat text-white flex-1 text-base leading-loose">
                                                    When it comes to pricing & our services.
                                                </div>
                                                <div class="w-fit"><img src="<?= get_template_directory_uri() ?>/images/icons/why-us-icon-4.png" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/4 px-2">
                        <div class="h-[450px] md:h-full rounded-[10px] relative overflow-hidden whyus-card bg-white">
                            <img src="<?= get_template_directory_uri() ?>/images/background/why-us-bg-5.png" class="absolute top-0 right-0 w-full duration-300" alt="">
                            <img src="<?= get_template_directory_uri() ?>/images/background/why-us-bg-component-5.png" class="whyus-card-bg-component-5 absolute top-0 right-0 h-full max-w-[120%] duration-300" alt="">

                            <div class="flex h-full items-end p-7 relative">
                                <div class="w-full">
                                    <div class="text-dark-blue text-2xl md:text-4xl font-bold md:pb-7">Affordable & <br /><span class="text-light-blue">fair</span> pricing</div>
                                    <div class="flex flex-wrap justify-between items-end">
                                        <div class="w-8/12 font-articulat text-dark-blue text-sm md:text-base leading-loose">
                                            Without compromising on the quality of our services.
                                        </div>
                                        <div class="w-fit"><img src="<?= get_template_directory_uri() ?>/images/icons/why-us-icon-5.png" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:hidden pt-14"><a href="./" class="btn-yellow-hover-main-blue w-full px-14"><span class="relative z-10">Button name here</span></a></div>
            </div>
        </div>
    </div>

    <div class="homepageContact bg-light-blue md:bg-[#D3E2EF] relative overflow-hidden group">
        <img src="<?= get_template_directory_uri() ?>/images/background/homepageContact-component.png" alt="" class="absolute top-0 left-0 group-hover:-top-[50%] duration-1000 hidden md:block">

        <div class="container relative py-16 md:pb-20">
            <div class="flex flex-wrap justify-between gap-y-10">
                <div class="w-full lg:w-1/2">
                    <img src="<?= get_template_directory_uri() ?>/images/icons/homepage-getintouch.png" alt="">
                    <div class="text-4xl md:text-heading text-white font-bold leading-none pt-7 md:pt-10">Get in <span class="text-dark-blue">touch</span></div>
                    <div class="text-white font-articulat font-semibold py-3 md:py-8">One of our expert plumbers will get back to you as soon as possible.</div>
                    <div class="hidden h-14 bg-transparent border-b border-white w-full mt-3 mt-5 outline-none font-semibold text-white gap-y-5"></div>
                    <?= do_shortcode('[contact-form-7 id="22" title="Homepage Contact"]') ?>
                </div>
                <div class="w-full lg:w-5/12 hidden md:block">
                    <img src="<?= get_template_directory_uri() ?>/images/icons/nearby.png" alt="">
                    <div class="text-4xl md:text-heading text-grey font-bold leading-none py-10">We're always <br /><span class="text-main-blue">nearby!</span></div>
                    <div class="font-bold font-articulat text-main-blue pb-10">Call us today</div>

                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="text-4xl md:text-heading text-main-blue font-bold"><?= get_field('phone_number', 'options') ?></a>

                    <div class="text-sm md:text-base font-articulat text-grey leading-loose pt-5 pb-9 w-full xl:w-11/12">
                        <p class="pb-5">We’re here for all your plumbing needs. Our team of expert plumbers is available 24/7 to help you with any plumbing emergencies.</p>
                        <p>At Fix N Flow, we are committed to providing our customers with top-quality plumbing services. Contact us today for all your plumbing needs.</p>
                    </div>

                    <a href="./" class="btn-main-blue-hover-yellow px-14"><span class="relative z-10">Button name here</span></a>
                </div>
            </div>
        </div>
        <img src="<?= get_template_directory_uri() ?>/images/lib/contact_guy.png" class="absolute right-0 bottom-0 hidden md:block" alt="">
    </div>

    <div class="md:hidden bg-[#D3E2EF]">
        <img src="<?= get_template_directory_uri() ?>/images/background/mobile-contact-vector.png" class="w-full" alt="">
        <div class="container pt-9 pb-16">
            <img src="<?= get_template_directory_uri() ?>/images/icons/nearby.png" alt="">
            <div class="text-4xl md:text-heading text-grey font-bold leading-none py-10">We're always <br /><span class="text-main-blue">nearby!</span></div>
            <div class="font-bold font-articulat text-main-blue pb-10">Call us today</div>

            <a href="tel:<?= get_field('phone_number', 'options') ?>" class="text-4xl md:text-heading text-main-blue font-bold"><?= get_field('phone_number', 'options') ?></a>

            <div class="text-sm md:text-base font-articulat text-grey leading-loose pt-5 pb-9 w-full xl:w-11/12">
                <p class="pb-5">We’re here for all your plumbing needs. Our team of expert plumbers is available 24/7 to help you with any plumbing emergencies.</p>
                <p>At Fix N Flow, we are committed to providing our customers with top-quality plumbing services. Contact us today for all your plumbing needs.</p>
            </div>
            <a href="./" class="btn-main-blue-hover-yellow px-14"><span class="relative z-10">Button name here</span></a>
        </div>
    </div>

    <div class="testimonials py-16 md:py-40 relative group">
        <img src="<?= get_template_directory_uri() ?>/images/background/testimonial-left-floater.png" class="absolute left-0 bottom-0 group-hover:bottom-[-20%] duration-500" alt="">
        <img src="<?= get_template_directory_uri() ?>/images/background/testimonial-right-floater.png" class="absolute right-0 bottom-0 group-hover:bottom-[-20%] duration-500" alt="">
        <div class="container pb-11 md:pb-20">
            <div class="flex flex-wrap justify-between gap-y-10">
                <div class="text-4xl md:text-heading text-grey font-bold flex leading-none">
                    <div>Our <span class="text-main-blue">happy</span><br class="md:hidden" /> customers</div>

                    <div class="hidden md:inline">
                        <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.01432 27.8241H18.9205C20.1499 27.8241 21.329 27.3357 22.1983 26.4664C23.0676 25.5971 23.556 24.4181 23.556 23.1887V20.871C23.556 20.2563 23.3118 19.6668 22.8771 19.2321C22.4425 18.7975 21.8529 18.5533 21.2383 18.5533C20.6236 18.5533 20.034 18.7975 19.5994 19.2321C19.1647 19.6668 18.9205 20.2563 18.9205 20.871V23.1887H5.01432V9.28244H7.33202C7.94672 9.28244 8.53623 9.03826 8.97089 8.6036C9.40554 8.16895 9.64973 7.57943 9.64973 6.96474C9.64973 6.35005 9.40554 5.76053 8.97089 5.32587C8.53623 4.89122 7.94672 4.64703 7.33202 4.64703H5.01432C3.78493 4.64703 2.60589 5.13541 1.73659 6.00471C0.867279 6.87402 0.378906 8.05306 0.378906 9.28244L0.378906 23.1887C0.378906 24.4181 0.867279 25.5971 1.73659 26.4664C2.60589 27.3357 3.78493 27.8241 5.01432 27.8241Z" fill="#5AB2F8" />
                            <path d="M27.033 0.0112323H15.4445C15.215 0.0108217 14.9905 0.0785645 14.7996 0.205873C14.6086 0.333181 14.4598 0.514321 14.3719 0.72633C14.284 0.938338 14.2611 1.17167 14.3059 1.39674C14.3508 1.6218 14.4615 1.82848 14.624 1.99055L18.7797 6.14388L12.647 12.2788C12.4257 12.4926 12.2491 12.7484 12.1276 13.0312C12.0062 13.3139 11.9422 13.6181 11.9395 13.9258C11.9369 14.2335 11.9955 14.5387 12.112 14.8236C12.2286 15.1084 12.4007 15.3672 12.6183 15.5848C12.8359 15.8024 13.0947 15.9745 13.3795 16.0911C13.6644 16.2076 13.9696 16.2662 14.2773 16.2636C14.585 16.2609 14.8892 16.197 15.1719 16.0755C15.4547 15.954 15.7105 15.7774 15.9243 15.5561L22.0592 9.42343L26.2126 13.5791C26.3204 13.6866 26.4483 13.7719 26.5891 13.8299C26.7299 13.888 26.8807 13.9177 27.033 13.9175C27.1849 13.9167 27.3351 13.8868 27.4757 13.8294C27.6876 13.7418 27.8688 13.5933 27.9963 13.4027C28.1238 13.2121 28.1918 12.9879 28.1919 12.7586V1.17008C28.1919 0.862738 28.0698 0.567979 27.8525 0.350652C27.6351 0.133325 27.3404 0.0112323 27.033 0.0112323Z" fill="#5AB2F8" />
                        </svg>
                    </div>
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() ?>/images/logo/testimonials-review.png" alt="">
                </div>
            </div>
        </div>

        <div class="testimonial_slider" id="homepage_testimonial_slider_1">
            <?php for ($i = 0; $i < 10; $i++) : ?>
                <div class="bg-[#EEF1F6] rounded-[10px] p-5">
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
                    <div class="font-extrabold text-main-blue py-4">Alexander Roussekov</div>
                    <div class="border border-light-blue w-[45px]"></div>
                    <div class="font-articulat text-grey pt-5 text-sm leading-loose">Fix & Flow provides a terrific service at reasonable price. Their team consists of very capable and experienced professionals with "can do" attitude. The boys are creative and able to design and execute solutions in environment like my two bathrooms and a toilet with non-standard sizes, strange angles and custom made completions. The team is very friendly and customer focused...</div>
                </div>
            <?php endfor; ?>
        </div>

        <div class="testimonial_slider mt-4" id="homepage_testimonial_slider_2">
            <?php for ($i = 0; $i < 10; $i++) : ?>
                <div class="bg-[#EEF1F6] rounded-[10px] p-5">
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
                    <div class="font-extrabold text-main-blue py-4">Alexander Roussekov</div>
                    <div class="border border-light-blue w-[45px]"></div>
                    <div class="font-articulat text-grey pt-5 text-sm leading-loose">Fix & Flow provides a terrific service at reasonable price. Their team consists of very capable and experienced professionals with "can do" attitude. The boys are creative and able to design and execute solutions in environment like my two bathrooms and a toilet with non-standard sizes, strange angles and custom made completions. The team is very friendly and customer focused...</div>
                </div>
            <?php endfor; ?>
        </div>

        <div class="bg-no-repeat bg-contain" style="background-image:url(<?= get_template_directory_uri() ?>/images/background/brands-bg.png)">
            <div class="container pt-16 md:pt-40">
                <div class="md:text-center text-4xl md:text-heading text-grey font-bold leading-tight">At Fix N Flow, we work with <span class="text-main-blue">leading brands</span> in the plumbing industry...</div>
                <div class="font-articulat text-grey md:text-center py-7 md:py-10">
                    We ensure that we provide our customers with the best quality products. Some of the brands we work with include:
                </div>
                <div class="w-full lg:w-10/12 h-[162px] mx-auto bg-light rounded-[35px] shadow-[inset_0px_0px_36px_0px_rgba(0, 0, 0, 0.05)] py-8 px-4 md:px-12">
                    <div id="brand_slider" class="brand_slider">
                        <?php
                        if (have_rows('leading_brands')) :
                            while (have_rows('leading_brands')) : the_row();
                                $brand_logo = get_sub_field('image');
                        ?>
                                <div><img src="<?= $brand_logo['url'] ?>" alt="<?= $brand_logo['alt'] ?>"></div>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light-grey pt-20 pb-40 md:pt-40 md:pb-52 relative">
        <div class="container">
            <div class="md:text-center text-4xl md:text-heading text-grey font-bold leading-tight">Fix n Flow are <span class="text-main-blue">proud sponsors</span></div>
            <div class="w-full lg:w-1/2 mx-auto my-10 md:my-12 p-7 border-t border-b border-light-blue text-grey font-articulat text-center leading-loose">
                <div class="w-full lg:w-10/12 mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            </div>

            <div class="w-full lg:w-10/12 mx-auto">
                <div class="flex flex-wrap -mx-2 gap-y-5">
                    <div class="w-full lg:w-1/3 px-2">
                        <div class="bg-white shadow p-2 rounded-[10px] h-full">
                            <div class="h-[166px] w-full rounded-[10px] overflow-hidden">
                                <img src="<?= get_template_directory_uri() ?>/images/lib/sponsors-1.jpg" class="w-full object-cover object-center h-full" alt="">
                            </div>
                            <div class="mx-auto -mt-7 w-fit h-[57px] rounded-full bg-main-blue px-10 py-1 flex justify-center items-center relative">
                                <img src="<?= get_template_directory_uri() ?>/images/logo/wish-foundation.png" alt="">
                            </div>
                            <div class="flex flex-wrap justify-between items-center mx-auto w-10/12 pt-4 pb-2">
                                <div class="font-articulat text-dark-blue leading-relaxed text-sm">
                                    <span class="text-xs font-bold">Proudly supporting</span> <br />Wish Foundation
                                </div>
                                <div class="">
                                    <img src="<?= get_template_directory_uri() ?>/images/icons/sponsor-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 px-2">
                        <div class="bg-white shadow p-2 rounded-[10px] h-full">
                            <div class="h-[166px] w-full rounded-[10px] overflow-hidden">
                                <img src="<?= get_template_directory_uri() ?>/images/lib/sponsors-2.jpg" class="w-full object-cover object-center h-full" alt="">
                            </div>
                            <div class="mx-auto -mt-7 w-fit h-[57px] rounded-full bg-dark-blue px-10 py-1 flex justify-center items-center relative">
                                <img src="<?= get_template_directory_uri() ?>/images/logo/save-the-children.png" alt="">
                            </div>
                            <div class="flex flex-wrap justify-between items-center mx-auto w-10/12 pt-4 pb-2">
                                <div class="font-articulat text-dark-blue leading-relaxed text-sm">
                                    <span class="text-xs font-bold">Proudly supporting</span> <br />Wish Foundation
                                </div>
                                <div class="">
                                    <img src="<?= get_template_directory_uri() ?>/images/icons/sponsor-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 px-2">
                        <div class="bg-dark-blue shadow p-2 rounded-[10px] h-full">
                            <div class="h-[166px] w-full rounded-[10px] overflow-hidden">
                                <img src="<?= get_template_directory_uri() ?>/images/lib/sponsors-3.jpg" class="w-full object-cover object-center h-full" alt="">
                            </div>
                            <div class="mx-auto -mt-12 w-fit relative">
                                <img src="<?= get_template_directory_uri() ?>/images/logo/earlwood-wanderers.png" alt="">
                            </div>
                            <div class="flex flex-wrap justify-between items-center mx-auto w-10/12 pt-2 pb-2">
                                <div class="font-articulat text-white leading-relaxed text-sm">
                                    <span class="text-xs font-bold">Proudly supporting</span> <br />Wish Foundation
                                </div>
                                <div class="">
                                    <img src="<?= get_template_directory_uri() ?>/images/icons/sponsor-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>