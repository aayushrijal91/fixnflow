<div class="fixed w-full z-50 navigation_bar">
    <div class="container">
        <div class="flex flex-wrap justify-between items-center py-12 text-white">
            <div class="w-1/2 link_section">
                <div class="flex flex-wrap justify-between items-center">
                    <div class="w-fit">
                        <a href="./" class="logo_img">
                            <img src="<?= get_template_directory_uri() ?>/images/logo/logo.png" alt="Fix N Flow" class="white_logo">
                            <img src="<?= get_template_directory_uri() ?>/images/logo/color_logo.png" alt="Fix N Flow" class="color_logo">
                        </a>
                    </div>
                    <div class="w-fit">
                        <div class="flex flex-wrap items-center -mx-4">
                            <div class="w-fit px-4">
                                <a href="/about-us" class="change_text_color_on_scroll font-articulat font-semibold text-base">About us</a>
                            </div>
                            <div class="w-fit px-4">
                                <a href="/contact-us" class="change_text_color_on_scroll font-articulat font-semibold text-base">Contact us</a>
                            </div>
                            <div class="w-fit px-4">
                                <a href="/contact-us" class="change_text_color_on_scroll font-articulat font-semibold text-base flex items-center justify-center gap-x-3 border border-yellow rounded-md h-[41px] px-3.5">
                                    See all services
                                    <svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.2041 16.2158L8.62199 9.79793C9.01252 9.4074 9.01252 8.77424 8.62199 8.38371L2.2041 1.96582" stroke="#FFAE35" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-fit bg-yellow rounded-[10px] p-1.5 contact_section">
                <div class="flex flex-wrap items-center -mx-4">
                    <div class="w-fit pl-7 pr-4">
                        <svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.12305 16.1162L8.54094 9.69832C8.93146 9.30779 8.93146 8.67463 8.54094 8.2841L2.12305 1.86621" stroke="#171818" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="w-fit px-3 contact_btn">
                        <a href="tel:<?= get_field('phone_number', 'options') ?>" class="font-articulat font-semibold text-base flex items-center justify-center gap-x-3 bg-dark-blue rounded-md h-[41px] h-[41px] min-w-[155px] px-3.5">
                            <?= get_field('phone_number', 'options') ?>
                        </a>
                    </div>
                    <div class="w-fit px-3 contact_btn">
                        <a href="/contact-us" class="font-articulat font-semibold text-base flex items-center justify-center gap-x-3 bg-main-blue rounded-md h-[41px] min-w-[155px] px-3.5">
                            Book Now
                        </a>
                    </div>
                    <div class="w-fit px-4">
                        <a href="./" class="font-articulat font-semibold text-base flex items-center justify-center gap-x-3 bg-dark-blue rounded-md h-[41px] px-3.5">
                            <svg width="27" height="24" viewBox="0 0 27 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.326172" y="0.865723" width="25.8588" height="2.67134" rx="1.33567" fill="#FFAE35" />
                                <rect x="9.01172" y="10.6553" width="17.1741" height="2.67134" rx="1.33567" fill="#FFAE35" />
                                <rect x="0.326172" y="20.4448" width="25.8588" height="2.67134" rx="1.33567" fill="#FFAE35" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>