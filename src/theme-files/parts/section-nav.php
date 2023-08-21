    <div class="fixed w-full z-50 navigation_bar">
        <div class="container">
            <div class="flex flex-wrap justify-between items-center py-3 md:py-8 lg:py-12 text-white">
                <div class="w-1/2 md:w-fit xl:w-1/2 link_section">
                    <div class="flex flex-wrap justify-between items-center">
                        <div class="w-fit">
                            <a href="<?= get_site_url() ?>" class="logo_img">
                                <img src="<?= get_template_directory_uri() ?>/images/logo/logo.png" alt="<?php bloginfo('name'); ?>" class="white_logo">
                                <img src="<?= get_template_directory_uri() ?>/images/logo/color_logo.png" alt="<?php bloginfo('name'); ?>" class="color_logo">
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
                            <a href="<?= get_site_url() ?>/booking-form" class="font-articulat font-semibold text-base flex items-center justify-center gap-x-3 bg-main-blue rounded-md h-[41px] min-w-[155px] px-3.5">
                                Book Now
                            </a>
                        </div>
                        <div class="w-fit px-4">
                            <div class="flex items-center gap-x-3">
                                <div class="w-fit md:hidden">
                                    <a href="tel:<?= get_field('phone_number', 'options') ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#f4a938" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="w-fit">
                                    <a href="javascript:void(0)" id="openGiantMenu" class="font-articulat font-semibold text-base flex items-center justify-center gap-x-3 bg-dark-blue rounded-md h-[41px] px-3.5">
                                        <svg width="35" height="32" viewBox="0 0 35 32" fill="none" xmlns="http://www.w3.org/2000/svg">
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
        </div>
    </div>

    <div id="giantMenu" class="h-full w-full bg-dark-blue fixed z-[10000000] duration-300 flex items-center -translate-x-[150%]">
        <div class="container text-white">
            <div class="flex flex-wrap -mx-3 xl:-mx-10 gap-y-5">
                <div class="w-full lg:w-1/3 px-3 xl:px-10">
                    <div class="flex lg:flex-col">
                        <div class="w-9/12 md:w-8/12 lg:w-full">
                            <div class="rounded-[30px] bg-main-blue py-9 px-5 xl:px-14">
                                <h3 class="text-xl md:text-2xl text-light-blue font-semibold">Discover Fix n Flow</h3>
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

                                <?php if (have_rows('socials', 'options')) :
                                    while (have_rows('socials', 'options')) : the_row();
                                        $icon = get_sub_field('icon');
                                        $link = get_sub_field('link');
                                ?>
                                        <a href="<?= $link['url'] ?>" target="<?= $link['target'] ?>" class="px-1">
                                            <img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>">
                                        </a>
                                <?php endwhile;
                                endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-2/3 px-3 xl:px-10">
                    <div class="flex flex-wrap -mx-2">
                        <div class="w-1/2 lg:w-5/12 xl:w-1/3 px-2">
                            <a href="<?= get_site_url() ?>/contact-us" class="bg-white rounded-[20px] p-4 h-full flex flex-wrap md:flex-nowrap items-center justify-between">
                                <div class="w-full md:w-fit"><img src="<?= get_template_directory_uri() ?>/images/icons/messaging.png" alt="<?php bloginfo('name'); ?>"></div>
                                <div class="text-xl md:text-2xl text-dark-blue font-bold w-10/12 md:w-fit md:px-4">Contact us today</div>
                                <div class="w-2/12 md:w-fit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="33" viewBox="0 0 19 33" fill="none">
                                        <path d="M3 30.2598L15.1553 18.1045C15.9697 17.2901 15.9697 15.9697 15.1553 15.1553L3 3" stroke="#5AB2F8" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="w-1/2 lg:w-5/12 xl:w-1/3 px-2">
                            <a href="<?= get_site_url() ?>/booking-form" class="bg-light-blue rounded-[20px] p-4 h-full flex flex-wrap md:flex-nowrap items-center justify-between">
                                <div class="w-full md:w-fit"><img src="<?= get_template_directory_uri() ?>/images/icons/calendar.png" alt="<?php bloginfo('name'); ?>"></div>
                                <div class="text-xl md:text-2xl text-dark-blue font-bold w-10/12 md:w-fit md:px-4">Make a booking</div>
                                <div class="w-2/12 md:w-fit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="33" viewBox="0 0 19 33" fill="none">
                                        <path d="M3 30.2598L15.1553 18.1045C15.9697 17.2901 15.9697 15.9697 15.1553 15.1553L3 3" stroke="#1B427D" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </a>
                        </div>

                        <div class="w-1/12 xl:w-1/3 px-2 hidden lg:flex justify-end h-full">
                            <button class="closeGiantMenu">
                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                    <path d="M32.2929 0.707143C31.35 -0.235714 29.9357 -0.235714 28.9929 0.707143L16.5 13.2L4.00714 0.707143C3.06429 -0.235714 1.65 -0.235714 0.707143 0.707143C-0.235714 1.65 -0.235714 3.06429 0.707143 4.00714L13.2 16.5L0.707143 28.9929C-0.235714 29.9357 -0.235714 31.35 0.707143 32.2929C1.17857 32.7643 1.65 33 2.35714 33C3.06429 33 3.53571 32.7643 4.00714 32.2929L16.5 19.8L28.9929 32.2929C29.4643 32.7643 30.1714 33 30.6429 33C31.1143 33 31.8214 32.7643 32.2929 32.2929C33.2357 31.35 33.2357 29.9357 32.2929 28.9929L19.8 16.5L32.2929 4.00714C33.2357 3.06429 33.2357 1.65 32.2929 0.707143Z" fill="#5AB2F8" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <article class="hidden xl:flex flex-wrap gap-x-10 items-center py-4">
                        <p class="text-2xl text-light-blue font-semibold">Explore our services</p>
                        <p class="text-white text-sm">See what else we offer when you click on a major service</p>
                    </article>

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