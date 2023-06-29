<?= get_template_part('parts/section', 'nav') ?>

<div class="homeBanner h-[820px]">
    <div class="homeBannerInner h-full">
        <div class="container pt-[259px]">
            <div class="flex justify-center">
                <div class="w-full lg:w-2/3 text-white text-center">
                    <div class="font-articulat text-3xl">Your trusted plumbing partner in Sydney</div>
                    <div class="text-heading font-semibold leading-none pt-3.5">Flow with the Pros, Choose<br /> <span class="text-light-blue">Fix N Flow</span></div>
                </div>
            </div>
            <div class="flex flex-wrap justify-between items-center pt-32">
                <div class="w-full lg:w-7/12">
                    <div class="bg-white rounded-[30px] px-8 py-6">
                        <div class="text-dark-blue text-2xl font-extrabold pb-8">Check if we service your area</div>
                        <div class="hidden h-14 bg-light-grey rounded-md px-4 w-full mt-3 outline-none font-semibold gap-y-5"></div>
                        <?= do_shortcode('[contact-form-7 id="9" title="Check Service Area"]') ?>
                    </div>
                </div>
                <div class="w-full lg:w-4/12">
                    <div class="flex flex-wrap -mx-1 items-center pb-3">
                        <div class="w-1/3 px-1">
                            <img src="<?= get_template_directory_uri() ?>/images/icons/google-reviews.png" alt="google">
                        </div>
                        <div class="w-1/3 px-1">
                            <div class="border-b-4 border-r-4 border-light-blue rounded-[10px] bg-white py-2 px-3.5 font-articulat text-dark-blue font-bold leading-none">
                                <div class="text-3xl">124+</div>
                                <div class="text-xs">Customer reviews</div>
                            </div>
                        </div>
                        <div class="w-1/3 px-1">
                            <div class="border-b-4 border-r-4 border-yellow rounded-[10px] bg-main-blue py-2 px-3.5 font-articulat text-white font-bold leading-none">
                                <div class="text-3xl flex items-center gap-x-2">5.0
                                    <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.88515 0.857663C6.05318 0.439219 6.64555 0.439219 6.81358 0.857663L8.06134 3.96483C8.13289 4.14302 8.30013 4.26453 8.49171 4.27752L11.8324 4.50403C12.2823 4.53454 12.4653 5.09791 12.1193 5.38703L9.54977 7.53388C9.40241 7.657 9.33853 7.8536 9.38538 8.03982L10.2023 11.287C10.3123 11.7243 9.83305 12.0725 9.45115 11.8327L6.61535 10.0524C6.45272 9.95026 6.24601 9.95026 6.08338 10.0524L3.24758 11.8327C2.86568 12.0725 2.38644 11.7243 2.49646 11.287L3.31335 8.03982C3.3602 7.8536 3.29632 7.657 3.14896 7.53388L0.579446 5.38703C0.233408 5.09791 0.416459 4.53454 0.866348 4.50403L4.20702 4.27752C4.3986 4.26453 4.56584 4.14302 4.63739 3.96483L5.88515 0.857663Z" fill="#FFAE35" />
                                    </svg>
                                </div>
                                <div class="text-xs">Average rating</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-1">
                        <div class="w-1/3 px-1">
                            <div class="border border-light-blue rounded-full bg-light-blue bg-opacity-60 h-[41px] flex items-center justify-center p-2">
                                <img src="<?= get_template_directory_uri() ?>/images/icons/hipages-review.png" alt="hipages">
                            </div>
                        </div>
                        <div class="w-1/3 px-1">
                            <div class="border border-light-blue rounded-full bg-light-blue bg-opacity-60 h-[41px] flex items-center justify-center p-2">
                                <img src="<?= get_template_directory_uri() ?>/images/icons/facebook-review.png" alt="facebook">
                            </div>
                        </div>
                        <div class="w-1/3 px-1">
                            <div class="border border-light-blue rounded-full bg-light-blue bg-opacity-60 h-[41px] flex items-center justify-center p-2">
                                <img src="<?= get_template_directory_uri() ?>/images/icons/truelocal-review.png" alt="truelocal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>