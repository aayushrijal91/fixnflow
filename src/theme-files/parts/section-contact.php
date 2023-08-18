<div class="partContact bg-light-blue xl:bg-[#D3E2EF] relative overflow-hidden group">
    <img src="<?= get_template_directory_uri() ?>/images/background/homepageContact-component.png" alt="<?php bloginfo('name'); ?>" class="absolute top-0 left-[-5%] group-hover:-top-[50%] duration-1000 hidden lg:block">

    <div class="container relative py-16 md:pb-20">
        <div class="flex flex-wrap justify-between gap-y-10">
            <div class="w-full lg:w-1/2">
                <?= echo_theme_image('/images/icons/homepage-getintouch.png') ?>
                <h3 class="text-4xl md:text-5xl lg:text-heading text-white font-bold leading-none pt-7 md:pt-10">Get in <span class="text-dark-blue">touch</span></h3>
                <p class="text-white font-articulat font-semibold py-3 md:py-8">One of our expert plumbers will get back to you as soon as possible.</p>
                <div class="hidden h-14 bg-transparent border-b border-white w-full mt-3 mt-5 outline-none font-semibold text-white gap-y-5"></div>
                <?= do_shortcode('[contact-form-7 id="22" title="Homepage Contact"]') ?>
            </div>
            <div class="w-full lg:w-5/12 hidden lg:block">
                <?= echo_theme_image('/images/icons/nearby.png') ?>
                <h2 class="text-4xl md:text-5xl xl:text-heading text-grey lg:text-white xl:text-grey font-bold leading-none py-7">We're always <br /><span class="text-main-blue">nearby!</span></h2>
                <p class="font-bold font-articulat text-main-blue pb-10">Call us today</p>

                <a href="tel:<?= get_field('phone_number', 'options') ?>" class="text-4xl md:text-5xl xl:text-heading text-main-blue font-bold"><?= get_field('phone_number', 'options') ?></a>

                <article class="text-sm md:text-base font-articulat text-grey leading-loose pt-5 pb-6 w-full xl:w-10/12 lg:text-white xl:text-grey">
                    <p class="pb-5">We’re here for all your plumbing needs. Our team of expert plumbers is available 24/7 to help you with any plumbing emergencies.</p>
                    <p>At Fix N Flow, we are committed to providing our customers with top-quality plumbing services. Contact us today for all your plumbing needs.</p>
                </article>

                <a href="<?= get_site_url() ?>/contact-us" class="btn-main-blue-hover-yellow px-14"><span class="relative z-10">Contact Us</span></a>
            </div>
        </div>
    </div>
    <img src="<?= get_template_directory_uri() ?>/images/lib/contact_guy.png" class="absolute right-[-4%] bottom-0 hidden xl:block" alt="<?php bloginfo('name'); ?>">
</div>

<div class="lg:hidden bg-quaternary">
    <?= echo_theme_image('/images/background/mobile-contact-vector.png', 'w-full') ?>
    <div class="container pt-9 pb-16">
        <?= echo_theme_image('/images/icons/nearby.png') ?>
        <h3 class="text-4xl md:text-5xl lg:text-heading text-grey font-bold leading-none py-10">We're always <br /><span class="text-main-blue">nearby!</span></h3>
        <p class="font-bold font-articulat text-main-blue pb-10">Call us today</p>

        <a href="tel:<?= get_field('phone_number', 'options') ?>" class="text-4xl md:text-5xl lg:text-heading text-main-blue font-bold"><?= get_field('phone_number', 'options') ?></a>

        <article class="text-sm md:text-base font-articulat text-grey leading-loose pt-5 pb-8 w-full xl:w-11/12">
            <p class="pb-5">We’re here for all your plumbing needs. Our team of expert plumbers is available 24/7 to help you with any plumbing emergencies.</p>
            <p>At Fix N Flow, we are committed to providing our customers with top-quality plumbing services. Contact us today for all your plumbing needs.</p>
        </article>
        <a href="<?= get_site_url() ?>/contact-us" class="btn-main-blue-hover-yellow px-14 w-full md:w-fit"><span class="relative z-10">Enquire Now</span></a>
    </div>
</div>