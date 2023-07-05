<div class="partContact bg-light-blue xl:bg-[#D3E2EF] relative overflow-hidden group">
    <img src="<?= get_template_directory_uri() ?>/images/background/homepageContact-component.png" alt="" class="absolute top-0 left-0 group-hover:-top-[50%] duration-1000 hidden lg:block">

    <div class="container relative py-16 md:pb-20">
        <div class="flex flex-wrap justify-between gap-y-10">
            <div class="w-full lg:w-1/2">
                <img src="<?= get_template_directory_uri() ?>/images/icons/homepage-getintouch.png" alt="">
                <div class="text-4xl md:text-5xl lg:text-heading text-white font-bold leading-none pt-7 md:pt-10">Get in <span class="text-dark-blue">touch</span></div>
                <div class="text-white font-articulat font-semibold py-3 md:py-8">One of our expert plumbers will get back to you as soon as possible.</div>
                <div class="hidden h-14 bg-transparent border-b border-white w-full mt-3 mt-5 outline-none font-semibold text-white gap-y-5"></div>
                <?= do_shortcode('[contact-form-7 id="22" title="Homepage Contact"]') ?>
            </div>
            <div class="w-full lg:w-5/12 hidden lg:block">
                <img src="<?= get_template_directory_uri() ?>/images/icons/nearby.png" alt="">
                <div class="text-4xl md:text-5xl xl:text-heading text-grey lg:text-white xl:text-grey font-bold leading-none py-10">We're always <br /><span class="text-main-blue">nearby!</span></div>
                <div class="font-bold font-articulat text-main-blue pb-10">Call us today</div>

                <a href="tel:<?= get_field('phone_number', 'options') ?>" class="text-4xl md:text-5xl xl:text-heading text-main-blue font-bold"><?= get_field('phone_number', 'options') ?></a>

                <div class="text-sm md:text-base font-articulat text-grey leading-loose pt-5 pb-9 w-full xl:w-11/12 lg:text-white xl:text-grey">
                    <p class="pb-5">We’re here for all your plumbing needs. Our team of expert plumbers is available 24/7 to help you with any plumbing emergencies.</p>
                    <p>At Fix N Flow, we are committed to providing our customers with top-quality plumbing services. Contact us today for all your plumbing needs.</p>
                </div>

                <a href="./" class="btn-main-blue-hover-yellow px-14"><span class="relative z-10">Button name here</span></a>
            </div>
        </div>
    </div>
    <img src="<?= get_template_directory_uri() ?>/images/lib/contact_guy.png" class="absolute right-0 bottom-0 hidden xl:block" alt="">
</div>