<?php
/*
 * Template Name: Front Page
 * The front page
 *
 */
get_header();
get_template_part('parts/section', 'homebanner');
?>
<div class="homePage">
    <div class="container">
        <div class="flex flex-wrap -mx-2 py-44">
            <div class="w-full md:w-1/2 px-2">
                <div class="h-[274px] rounded-xl bg-no-repeat bg-cover flex items-center p-8 transition-all duration-300 hover:-translate-x-2 hover:-translate-y-2 hover:shadow-[10px_10px_#0067B9]" style="background-image:url('<?= get_template_directory_uri() ?>/images/background/cta-1.jpg')">
                    <div>
                        <div class="text-4xl font-bold text-dark-blue pb-10">Same day service<div class="text-white">guarantee or its free!</div>
                        </div>
                        <a href="./" class="btn-yellow-hover-main-blue px-14 "><span class="relative z-10">Learn More</span></a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/4 px-2">
                <div class="h-[274px] rounded-xl bg-no-repeat bg-cover flex items-end p-7 transition-all duration-300 hover:-translate-x-2 hover:-translate-y-2 hover:shadow-[10px_10px_#0067B9]" style="background-image:url('<?= get_template_directory_uri() ?>/images/background/cta-2.jpg')">
                    <div class="flex items-center">
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
                <div class="h-[274px] rounded-xl bg-no-repeat bg-cover flex items-end p-7 transition-all duration-300 hover:-translate-x-2 hover:-translate-y-2 hover:shadow-[10px_10px_#0067B9]" style="background-image:url('<?= get_template_directory_uri() ?>/images/background/cta-3.jpg')">
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

    <div class="container">
        <div class="flex justify-center group relative">
            <div class="w-full lg:w-5/12 absolute top-0 left-0 opacity-0 group-hover:opacity-100 translate-y-96 group-hover:translate-y-0 duration-1000">
                <div class="text-[65px] leading-none font-bold text-main-blue">From leaks to clogs, <span class="text-light-blue">we fix it all</span></div>
                <div class="text-grey font-articulat py-16 leading-loose">
                    <p class="pb-5">Fix N Flow is a local, family-owned plumbing company providing top-quality services to residents and businesses in <span class="font-bold">Sydney Metro, Central Coast, South Coast & Illawarra, Hunter Valley, and Blue Mountains.</span> Our team of expert plumbers is <span class="font-bold">available 24/7 for all your plumbing needs,</span> from emergency repairs to regular maintenance.</p>
                    <p>Our mission is to provide you with efficient and reliable plumbing services with a 60-minutes response time guarantee.</p>
                </div>
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full md:w-1/2 px-2">
                        <a href="" class="btn-yellow-hover-main-blue w-full">Button name here</a>
                    </div>
                    <div class="w-full md:w-1/2 px-2">
                        <a href="" class="btn-main-blue-hover-yellow w-full">Button name here</a>
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

    <div class="py-28 bg-no-repeat bg-contain" style="background-image: url('<?= get_template_directory_uri() ?>/images/background/homepage_services.png')">
        <div class="container py-20">
            <div class="mx-auto w-11/12 lg:w-2/3 text-grey text-[65px] leading-none font-bold text-center">Our wide range of <span class="text-main-blue">professional plumbing</span> services</div>
            <div class="mx-auto w-11/12 lg:w-1/2 text-grey font-articulat text-center pt-14">Our team of experienced plumbers provides services to both residential and commercial customers. Here is a list of some of the services we offer:</div>
            <div id="homepage_service_slider" class="homepage_service_slider pt-28 pb-16">
                <?php for ($i = 0; $i < 10; $i++) : ?>
                    <div class="bg-quaternary rounded-2xl p-4 flex flex-col justify-between">
                        <div class="pb-16">
                            <div class="h-[147px] w-full bg-grey rounded-[10px] p-3 flex items-end bg-no-repeat bg-cover" style="background-image: url('<?= get_template_directory_uri() ?>/images/background/cta-1.jpg')">
                                <img src="<?= get_template_directory_uri() ?>/images/icons/service-icon.png" alt="">
                            </div>
                            <div class="text-2xl font-bold text-main-blue pt-3">Service name</div>
                        </div>
                        <a href="" class="border border-light-blue rounded-md h-[48px] flex items-center justify-center text-center text-main-blue font-articulat font-semibold gap-x-4">
                            Explore now
                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.86279 16.0078L8.28068 9.58992C8.67121 9.1994 8.67121 8.56623 8.28069 8.17571L1.86279 1.75781" stroke="#5AB2F8" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="flex justify-center">
                <a href="./" class="btn-yellow-hover-main-blue px-14"><span class="relative z-10">Button name here</span></a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>