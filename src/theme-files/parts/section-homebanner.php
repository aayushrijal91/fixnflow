<?= get_template_part('parts/section', 'nav') ?>

<div class="homeBanner h-[873px]">
    <div class="homeBannerInner h-full">
        <div class="container">
            <div class="flex justify-center">
                <div class="w-full lg:w-2/3 text-white text-center">
                    <div class="font-articulat text-3xl">Your trusted plumbing partner in Sydney</div>
                    <div class="text-[65px] font-semibold leading-none pt-3.5">Flow with the Pros, Choose<br /> <span class="text-light-blue">Fix N Flow</span></div>
                </div>
            </div>
            <div class="flex flex-wrap justify-between pt-32">
                <div class="w-full lg:w-7/12">
                    <div class="bg-white rounded-[30px] px-8 py-6">
                        <div class="text-dark-blue text-2xl font-extrabold pb-8">Check if we service your area</div>
                        <div class="flex flex-wrap -mx-2 gap-y-5">
                            <div class="w-full md:w-1/2 px-2">
                                <label class="font-articulat font-semibold text-grey">What services do you need?</label>
                                <input type="text" class="h-[58px] bg-light-grey rounded-md px-4 w-full mt-3 outline-none font-semibold" placeholder="E.g. Blocked drain">
                            </div>
                            <div class="w-full md:w-1/2 px-2">
                                <label class="font-articulat font-semibold text-grey">Your area</label>
                                <input type="text" class="h-[58px] bg-light-grey rounded-md px-4 w-full mt-3 outline-none font-semibold" placeholder="Enter postcode or suburb">
                            </div>
                            <div class="w-full px-2">
                                <input type="submit" class="bg-main-blue text-white font-articulat font-semibold w-full h-[58px] rounded-[10px]" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-4/12">
                    <div class="flex flex-wrap -mx-1">
                        <div class="w-1/3 px-1">
                            <img src="<?= get_template_directory_uri() ?>/images/icons/google-reviews.png" alt="google">
                        </div>
                        <div class="w-1/3 px-1">
                            <div class="border border-light-blue rounded-[10px] bg-white h-[64px] p-2">
                                <div class="">124+</div>
                                <div class="">Customer reviews</div>
                            </div>
                        </div>
                        <div class="w-1/3 px-1">
                            <div class="border border-light-blue rounded-full bg-light-blue bg-opacity-60 h-[41px] flex items-center justify-center p-2">
                                <img src="<?= get_template_directory_uri() ?>/images/icons/truelocal-review.png" alt="truelocal">
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