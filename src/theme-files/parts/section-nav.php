<div class="fixed w-full z-50 navigation_bar">
    <div class="container">
        <div class="flex flex-wrap justify-between items-center py-3 md:py-8 lg:py-12 text-white">
            <div class="w-1/2 md:w-fit xl:w-1/2 link_section">
                <div class="flex flex-wrap justify-between items-center">
                    <div class="w-fit">
                        <a href="<?= get_site_url() ?>" class="logo_img">
                            <img src="<?= get_template_directory_uri() ?>/images/logo/logo.png" alt="<?php bloginfo( 'name' ); ?>" class="white_logo">
                            <img src="<?= get_template_directory_uri() ?>/images/logo/color_logo.png" alt="<?php bloginfo( 'name' ); ?>" class="color_logo">
                        </a>
                    </div>
                    <div class="w-fit hidden xl:block">
                        <div class="flex flex-wrap items-center -mx-4">
                            <div class="w-fit px-4">
                                <a href="<?= get_site_url() ?>/about-us" class="change_text_color_on_scroll font-articulat font-semibold text-base">About us</a>
                            </div>
                            <div class="w-fit px-4">
                                <a href="<?= get_site_url() ?>/contact-us" class="change_text_color_on_scroll font-articulat font-semibold text-base">Contact us</a>
                            </div>
                            <div class="w-fit px-4">
                                <a href="<?= get_site_url() ?>/service" class="change_text_color_on_scroll font-articulat font-semibold text-base flex items-center justify-center gap-x-3 border border-yellow rounded-md h-[41px] px-3.5">
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
            <div class="w-fit bg-transparent md:bg-yellow rounded-[10px] p-1.5 contact_section">
                <div class="flex flex-wrap items-center -mx-4">
                    <div class="w-fit pl-7 pr-4 hidden md:block">
                        <svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.12305 16.1162L8.54094 9.69832C8.93146 9.30779 8.93146 8.67463 8.54094 8.2841L2.12305 1.86621" stroke="#171818" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="w-fit px-3 contact_btn hidden md:block">
                        <a href="tel:<?= get_field('phone_number', 'options') ?>" class="font-articulat font-semibold text-base flex items-center justify-center gap-x-3 bg-dark-blue rounded-md h-[41px] h-[41px] min-w-[155px] px-3.5">
                            <?= get_field('phone_number', 'options') ?>
                        </a>
                    </div>
                    <div class="w-fit px-3 contact_btn hidden md:block">
                        <a href="/contact-us" class="font-articulat font-semibold text-base flex items-center justify-center gap-x-3 bg-main-blue rounded-md h-[41px] min-w-[155px] px-3.5">
                            Book Now
                        </a>
                    </div>
                    <div class="w-fit px-4">
                        <a href="javascript:void(0)" id="openGiantMenu" class="font-articulat font-semibold text-base flex items-center justify-center gap-x-3 bg-dark-blue rounded-md h-[41px] px-3.5">
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

<div id="giantMenu" class="h-full w-full bg-dark-blue fixed z-[10000000] duration-300 flex items-center -translate-x-[150%]">
    <div class="container text-white">
        <div class="flex flex-wrap -mx-3 xl:-mx-10 gap-y-5">
            <div class="w-full lg:w-1/3 px-3 xl:px-10">
                <div class="flex lg:flex-col">
                    <div class="w-9/12 md:w-8/12 lg:w-full">
                        <div class="rounded-[30px] bg-main-blue py-9 px-5 xl:px-14">
                            <div class="text-xl md:text-2xl text-light-blue font-semibold">Discover Fix n Flow</div>
                            <?php wp_nav_menu(array(
                                'menu' => 'Quick Links',
                                'item_class' => 'nav-item py-3',
                                'link_class' => 'nav-link leading-loose text-primary-light text-2xl md:text-3xl lg:text-[45px] font-semibold leading-none text-white',
                                'container_class' => 'footer_menu pt-4',
                            )); ?>
                        </div>
                    </div>
                    <div class="w-3/12 md:w-4/12 lg:w-full">
                        <div class="flex flex-wrap flex-col lg:flex-row justify-center items-center lg:py-14 gap-y-2">
                            <div class="lg:hidden pb-8">
                                <button class="closeGiantMenu">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="53" height="42" viewBox="0 0 53 42" fill="none">
                                        <rect opacity="0.3" x="0.827637" width="52.1725" height="41.5532" rx="5" fill="#16253C" />
                                        <path d="M18.5615 12.4243L35.2661 29.1289" stroke="#5AB2F8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M35.2661 12.4243L18.5615 29.1289" stroke="#5AB2F8" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>

                            <a href="" target="_blank" class="px-1">
                                <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="26.1914" cy="26.4004" r="25" stroke="#5AB2F8" />
                                    <path d="M24.7143 34.9004L24.6914 27.9004H21.6914V24.9004H24.6914V22.9004C24.6914 20.2012 26.3629 18.9004 28.7708 18.9004C29.9242 18.9004 30.9155 18.9863 31.2043 19.0246V21.8455L29.5344 21.8462C28.2248 21.8462 27.9713 22.4685 27.9713 23.3816V24.9004H31.6914L30.6914 27.9004H27.9713V34.9004H24.7143Z" fill="#F7F8FA" />
                                </svg>
                            </a>
                            <a href="" target="_blank" class="px-1">
                                <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="26.1914" cy="26.4004" r="25" stroke="#5AB2F8" />
                                    <path d="M34.6914 21.4004C34.0914 21.7004 33.4914 21.8004 32.7914 21.9004C33.4914 21.5004 33.9914 20.9004 34.1914 20.1004C33.5914 20.5004 32.8914 20.7004 32.0914 20.9004C31.4914 20.3004 30.5914 19.9004 29.6914 19.9004C27.9914 19.9004 26.4914 21.4004 26.4914 23.2004C26.4914 23.5004 26.4914 23.7004 26.5914 23.9004C23.8914 23.8004 21.3914 22.5004 19.7914 20.5004C19.4914 21.0004 19.3914 21.5004 19.3914 22.2004C19.3914 23.3004 19.9914 24.3004 20.8914 24.9004C20.3914 24.9004 19.8914 24.7004 19.3914 24.5004C19.3914 26.1004 20.4914 27.4004 21.9914 27.7004C21.6914 27.8004 21.3914 27.8004 21.0914 27.8004C20.8914 27.8004 20.6914 27.8004 20.4914 27.7004C20.8914 29.0004 22.0914 30.0004 23.5914 30.0004C22.4914 30.9004 21.0914 31.4004 19.4914 31.4004C19.1914 31.4004 18.9914 31.4004 18.6914 31.4004C20.1914 32.3004 21.8914 32.9004 23.6914 32.9004C29.6914 32.9004 32.9914 27.9004 32.9914 23.6004C32.9914 23.5004 32.9914 23.3004 32.9914 23.2004C33.6914 22.7004 34.2914 22.1004 34.6914 21.4004Z" fill="#F7F8FA" />
                                </svg>
                            </a>
                            <a href="" target="_blank" class="px-1">
                                <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="26.1914" cy="26.4004" r="25" stroke="#5AB2F8" />
                                    <path d="M26.6914 20.3414C28.8274 20.3414 29.0804 20.3504 29.9244 20.3884C30.4316 20.3945 30.9339 20.4878 31.4094 20.6644C31.7572 20.7929 32.0716 20.9979 32.3294 21.2644C32.5959 21.5222 32.8009 21.8366 32.9294 22.1844C33.1059 22.6599 33.1993 23.1622 33.2054 23.6694C33.2434 24.5134 33.2524 24.7694 33.2524 26.9024C33.2524 29.0354 33.2434 29.2914 33.2054 30.1354C33.1993 30.6426 33.1059 31.1449 32.9294 31.6204C32.7966 31.9655 32.5929 32.2789 32.3314 32.5404C32.0699 32.8019 31.7565 33.0056 31.4114 33.1384C30.9359 33.3149 30.4336 33.4083 29.9264 33.4144C29.0824 33.4524 28.8264 33.4614 26.6934 33.4614C24.5604 33.4614 24.3044 33.4524 23.4604 33.4144C22.9532 33.4083 22.4509 33.3149 21.9754 33.1384C21.6276 33.0099 21.3132 32.8049 21.0554 32.5384C20.7889 32.2806 20.5839 31.9662 20.4554 31.6184C20.2789 31.1429 20.1855 30.6406 20.1794 30.1334C20.1414 29.2894 20.1324 29.0334 20.1324 26.9004C20.1324 24.7674 20.1414 24.5114 20.1794 23.6674C20.1855 23.1602 20.2789 22.6579 20.4554 22.1824C20.5839 21.8346 20.7889 21.5202 21.0554 21.2624C21.3132 20.9959 21.6276 20.7909 21.9754 20.6624C22.4509 20.4858 22.9532 20.3925 23.4604 20.3864C24.3044 20.3484 24.5604 20.3394 26.6934 20.3394M26.6914 18.9004C24.5184 18.9004 24.2464 18.9094 23.3914 18.9484C22.7284 18.9619 22.0724 19.0877 21.4514 19.3204C20.9174 19.5209 20.4337 19.836 20.0344 20.2434C19.627 20.6427 19.312 21.1264 19.1114 21.6604C18.8787 22.2814 18.7529 22.9373 18.7394 23.6004C18.7004 24.4554 18.6914 24.7274 18.6914 26.9004C18.6914 29.0734 18.7004 29.3454 18.7394 30.2004C18.7529 30.8634 18.8787 31.5194 19.1114 32.1404C19.312 32.6744 19.627 33.1581 20.0344 33.5574C20.4337 33.9648 20.9174 34.2798 21.4514 34.4804C22.073 34.7133 22.7297 34.8391 23.3934 34.8524C24.2464 34.8914 24.5184 34.9004 26.6914 34.9004C28.8644 34.9004 29.1364 34.8914 29.9914 34.8524C30.6551 34.8391 31.3118 34.7133 31.9334 34.4804C32.4648 34.2747 32.9474 33.9603 33.3504 33.5574C33.7533 33.1544 34.0677 32.6718 34.2734 32.1404C34.5064 31.5188 34.6321 30.8621 34.6454 30.1984C34.6844 29.3454 34.6934 29.0734 34.6934 26.8984C34.6934 24.7234 34.6844 24.4534 34.6454 23.5984C34.6311 22.9359 34.5046 22.2806 34.2714 21.6604C34.0708 21.1264 33.7558 20.6427 33.3484 20.2434C32.9491 19.836 32.4654 19.5209 31.9314 19.3204C31.3104 19.0877 30.6544 18.9619 29.9914 18.9484C29.1364 18.9094 28.8644 18.9004 26.6914 18.9004Z" fill="#F7F8FA" />
                                    <path d="M26.6914 22.7924C25.8789 22.7924 25.0847 23.0333 24.4091 23.4847C23.7336 23.9361 23.207 24.5777 22.8961 25.3283C22.5852 26.079 22.5038 26.9049 22.6623 27.7018C22.8208 28.4987 23.2121 29.2307 23.7866 29.8052C24.3611 30.3797 25.0931 30.7709 25.89 30.9295C26.6868 31.088 27.5128 31.0066 28.2635 30.6957C29.0141 30.3848 29.6557 29.8582 30.1071 29.1827C30.5585 28.5071 30.7994 27.7129 30.7994 26.9004C30.7994 26.3609 30.6931 25.8267 30.4867 25.3283C30.2803 24.8299 29.9777 24.3771 29.5962 23.9956C29.2147 23.6141 28.7619 23.3115 28.2635 23.1051C27.7651 22.8986 27.2309 22.7924 26.6914 22.7924ZM26.6914 29.5674C26.1639 29.5674 25.6483 29.411 25.2097 29.1179C24.7711 28.8249 24.4293 28.4083 24.2274 27.921C24.0256 27.4337 23.9727 26.8974 24.0757 26.3801C24.1786 25.8627 24.4326 25.3875 24.8056 25.0145C25.1785 24.6416 25.6538 24.3875 26.1711 24.2846C26.6884 24.1817 27.2247 24.2345 27.712 24.4364C28.1994 24.6383 28.6159 24.9801 28.9089 25.4187C29.202 25.8573 29.3584 26.3729 29.3584 26.9004C29.3584 27.6077 29.0774 28.2861 28.5773 28.7862C28.0771 29.2864 27.3987 29.5674 26.6914 29.5674Z" fill="#F7F8FA" />
                                    <path d="M30.9614 23.5904C31.4916 23.5904 31.9214 23.1606 31.9214 22.6304C31.9214 22.1002 31.4916 21.6704 30.9614 21.6704C30.4312 21.6704 30.0014 22.1002 30.0014 22.6304C30.0014 23.1606 30.4312 23.5904 30.9614 23.5904Z" fill="#F7F8FA" />
                                </svg>
                            </a>

                            <a href="" target="_blank" class="px-1">
                                <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="26.1914" cy="26.4004" r="25" stroke="#5AB2F8" />
                                    <path d="M33.9914 18.9004H19.3914C18.9914 18.9004 18.6914 19.2004 18.6914 19.6004V34.3004C18.6914 34.6004 18.9914 34.9004 19.3914 34.9004H34.0914C34.4914 34.9004 34.7914 34.6004 34.7914 34.2004V19.6004C34.6914 19.2004 34.3914 18.9004 33.9914 18.9004ZM21.0914 32.5004V24.9004H23.4914V32.5004H21.0914ZM22.2914 23.9004C21.4914 23.9004 20.8914 23.2004 20.8914 22.5004C20.8914 21.7004 21.4914 21.1004 22.2914 21.1004C23.0914 21.1004 23.6914 21.7004 23.6914 22.5004C23.5914 23.2004 22.9914 23.9004 22.2914 23.9004ZM32.2914 32.5004H29.8914V28.8004C29.8914 27.9004 29.8914 26.8004 28.6914 26.8004C27.4914 26.8004 27.2914 27.8004 27.2914 28.8004V32.6004H24.8914V24.9004H27.1914V25.9004C27.4914 25.3004 28.2914 24.7004 29.3914 24.7004C31.7914 24.7004 32.1914 26.3004 32.1914 28.3004V32.5004H32.2914Z" fill="#F7F8FA" />
                                </svg>
                            </a>

                            <a href="" target="_blank" class="px-1">
                                <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="26.1914" cy="26.4004" r="25" stroke="#5AB2F8" />
                                    <path d="M35.4664 23.1671C35.2414 21.6504 34.5664 20.6004 32.9914 20.3671C30.5164 19.9004 26.6914 19.9004 26.6914 19.9004C26.6914 19.9004 22.8664 19.9004 20.3914 20.3671C18.8164 20.6004 18.0289 21.6504 17.9164 23.1671C17.6914 24.6837 17.6914 26.9004 17.6914 26.9004C17.6914 26.9004 17.6914 29.1171 17.9164 30.6337C18.1414 32.1504 18.8164 33.2004 20.3914 33.4337C22.8664 33.9004 26.6914 33.9004 26.6914 33.9004C26.6914 33.9004 30.5164 33.9004 32.9914 33.4337C34.5664 33.0837 35.2414 32.1504 35.4664 30.6337C35.6914 29.1171 35.6914 26.9004 35.6914 26.9004C35.6914 26.9004 35.6914 24.6837 35.4664 23.1671ZM24.4414 30.4004V23.4004L30.0664 26.9004L24.4414 30.4004Z" fill="#F7F8FA" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-2/3 px-3 xl:px-10">
                <div class="flex flex-wrap -mx-2">
                    <div class="w-1/2 lg:w-5/12 xl:w-1/3 px-2">
                        <div class="bg-white rounded-[20px] p-4 h-full flex flex-wrap md:flex-nowrap items-center justify-between">
                            <div class="w-full md:w-fit"><img src="<?= get_template_directory_uri() ?>/images/icons/messaging.png" alt="<?php bloginfo( 'name' ); ?>"></div>
                            <div class="text-xl md:text-2xl text-dark-blue font-bold w-10/12 md:w-fit md:px-4">Contact us today</div>
                            <div class="w-2/12 md:w-fit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="33" viewBox="0 0 19 33" fill="none">
                                    <path d="M3 30.2598L15.1553 18.1045C15.9697 17.2901 15.9697 15.9697 15.1553 15.1553L3 3" stroke="#5AB2F8" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2 lg:w-5/12 xl:w-1/3 px-2">
                        <div class="bg-light-blue rounded-[20px] p-4 h-full flex flex-wrap md:flex-nowrap items-center justify-between">
                            <div class="w-full md:w-fit"><img src="<?= get_template_directory_uri() ?>/images/icons/calendar.png" alt="<?php bloginfo( 'name' ); ?>"></div>
                            <div class="text-xl md:text-2xl text-dark-blue font-bold w-10/12 md:w-fit md:px-4">Make a booking</div>
                            <div class="w-2/12 md:w-fit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="33" viewBox="0 0 19 33" fill="none">
                                    <path d="M3 30.2598L15.1553 18.1045C15.9697 17.2901 15.9697 15.9697 15.1553 15.1553L3 3" stroke="#1B427D" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="w-1/12 xl:w-1/3 px-2 hidden lg:flex justify-end h-full">
                        <button class="closeGiantMenu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                <path d="M32.2929 0.707143C31.35 -0.235714 29.9357 -0.235714 28.9929 0.707143L16.5 13.2L4.00714 0.707143C3.06429 -0.235714 1.65 -0.235714 0.707143 0.707143C-0.235714 1.65 -0.235714 3.06429 0.707143 4.00714L13.2 16.5L0.707143 28.9929C-0.235714 29.9357 -0.235714 31.35 0.707143 32.2929C1.17857 32.7643 1.65 33 2.35714 33C3.06429 33 3.53571 32.7643 4.00714 32.2929L16.5 19.8L28.9929 32.2929C29.4643 32.7643 30.1714 33 30.6429 33C31.1143 33 31.8214 32.7643 32.2929 32.2929C33.2357 31.35 33.2357 29.9357 32.2929 28.9929L19.8 16.5L32.2929 4.00714C33.2357 3.06429 33.2357 1.65 32.2929 0.707143Z" fill="#5AB2F8" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="hidden xl:flex flex-wrap gap-x-10 items-center py-4">
                    <div class="text-2xl text-light-blue font-semibold">Explore our services</div>
                    <div class="text-white text-sm">See what else we offer when you click on a major service</div>
                </div>

                <div class="hidden xl:flex flex-wrap -mx-1 gap-y-2">
                    <?php
                    $args = array(
                        'post_type'      => 'page',
                        'posts_per_page' => -1,
                        'order'          => 'ASC',
                        'orderby'        => 'publish_date',
                        'meta_query' => array(
                            array(
                                'key' => '_wp_page_template',
                                'value' => array('page-templates/inner-service.php', 'page-templates/inner-service-no-child.php'),
                            ),
                        )
                    );
                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post();
                            $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                    ?>
                            <div class="w-1/3 px-1"><a href="<?= get_the_permalink() ?>" class="bg-main-blue text-white font-bold w-full block rounded-md px-6 py-4 text-sm"><?= get_the_title() ?></a></div>
                    <?php endwhile;
                    endif;
                    wp_reset_query();
                    ?>
                </div>

                <div class="flex flex-wrap -mx-2 items-center pt-10">
                    <div class="w-fit px-2 hidden lg:block">
                        <div class="font-semibold text-light-blue">Call us today</div>
                        <a href="tel:<?= get_field('phone_number', 'options') ?>" class="text-white text-[35px] font-bold"><?= get_field('phone_number', 'options') ?></a>
                    </div>
                    <div class="w-fit px-2 flex-1 hidden lg:block">
                        <div class="font-semibold text-light-blue">Email us today</div>
                        <a href="mailto:<?= get_field('admin_email', 'options') ?>" class="text-white text-[35px] font-bold"><?= get_field('admin_email', 'options') ?></a>
                    </div>
                    <div class="w-fit px-2 flex lg:flex-col">
                        <div class="py-2 px-2 lg:px-0"><a class="text-light-blue underline underline-offset-4 font-semibold text-sm md:text-base" href="<?= get_site_url() ?>/conditions">Read our terms & conditions</a></div>
                        <div class="py-2 px-2 lg:px-0"><a class="text-light-blue underline underline-offset-4 font-semibold text-sm md:text-base" href="<?= get_site_url() ?>/policies">Read our privacy policy</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>