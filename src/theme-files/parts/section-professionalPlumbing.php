<div class="container">
    <div class="bg-white rounded-xl relative pt-20 pb-[386px] md:pb-[442px] xl:py-32 overflow-hidden">
        <div class="flex flex-wrap items-center justify-between gap-y-5">
            <div class="w-full lg:w-6/12 text-center text-grey text-4xl md:text-5xl xl:text-heading font-bold highlight-main-blue">
                Our wide range of <span>professional<br> plumbing</span> services
            </div>
            <div class="w-full lg:w-5/12 text-center flex">
                <div class="w-full lg:w-11/12 xl:w-8/12">
                    <div class="font-articulat text-sm md:text-base leading-loose md:leading-loose text-grey pb-7">Our team of experienced plumbers provides services to both residential and commercial customers. These are just some of the services we offer:</div>
                    <a href="<?= get_site_url() ?>/contact-us" class="btn-yellow-hover-main-blue px-14"><span class="relative z-10">Enquire Now</span></a>
                </div>
            </div>
        </div>
        <?php $args = array(
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
        $the_query = new WP_Query($args); ?>
        <div class="mt-16 part_contactus_services" data-aos="fade-left">
            <?php
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
            ?>
                    <div><?= get_the_title() ?></div>
            <?php endwhile;
            endif;
            wp_reset_query();
            ?>
        </div>

        <?php $args = array(
            'post_type'      => 'page',
            'posts_per_page' => -1,
            'order'          => 'ASC',
            'orderby'        => 'publish_date',
            'meta_query' => array(
                array(
                    'key' => '_wp_page_template',
                    'value' => 'page-templates/inner-inner-service.php',
                ),
            )
        );
        $the_query = new WP_Query($args); ?>
        <div class="mt-5 part_contactus_services" data-aos="fade-right">
            <?php
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
            ?>
                    <div><?= get_the_title() ?></div>
            <?php endwhile;
            endif;
            wp_reset_query();
            ?>
        </div>
        <div class="absolute w-full bottom-0 flex justify-center">
            <?= echo_theme_image('/images/lib/professional_plumber.png') ?>
        </div>
    </div>
</div>