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
                <div class="h-[274px] rounded-xl bg-no-repeat bg-cover flex items-center p-8" style="background-image:url('<?= get_template_directory_uri() ?>/images/background/cta-1.jpg')">
                    <div>
                        <div class="text-4xl font-bold text-dark-blue pb-10">Same day service<div class="text-white">guarantee or its free!</div>
                        </div>
                        <a href="" class="bg-yellow rounded-[10px] h-14 px-14 text-white inline-flex items-center font-bold">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/4 px-2">
                <div class="h-[274px] rounded-xl bg-no-repeat bg-cover flex items-end p-7" style="background-image:url('<?= get_template_directory_uri() ?>/images/background/cta-2.jpg')">
                    <div class="flex items-center">
                        <div class="text-4xl font-bold text-light-blue">10% off <span class="text-white">online bookings</span></div>
                        <a href="">
                            <svg width="19" height="33" viewBox="0 0 19 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.04346 30.0151L15.1987 17.8598C16.0131 17.0455 16.0131 15.7251 15.1987 14.9107L3.04346 2.75537" stroke="#F7F8FA" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/4 px-2">
                <div class="h-[274px] rounded-xl bg-no-repeat bg-cover flex items-end p-7" style="background-image:url('<?= get_template_directory_uri() ?>/images/background/cta-3.jpg')">
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
</div>
<?php get_footer(); ?>