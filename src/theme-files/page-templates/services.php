<?php
/*
 * Template Name: Services Page
 * The services page
 *
 */
get_header();
$banner = get_field('banner');

$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'orderby'        => 'publish_date',
    'meta_query' => array(
        array(
            'key' => '_wp_page_template',
            'value' => 'page-templates/inner-service.php'
        )
    )
);
$the_query = new WP_Query($args);
?>
<div class="servicesPage">
    <?php get_template_part('parts/section', 'serviceBanner'); ?>

    <div class="py-24">
        <div class="container">
            <div class="text-center text-4xl md:text-5xl xl:text-heading text-grey font-bold leading-none">Explore all <span class="text-main-blue">Services</span></div>
            <div class="pt-24 flex flex-wrap -mx-2 gap-y-4">
                <?php
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                        $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                ?>
                        <div class="w-full md:w-1/2 lg:w-1/3 px-2">
                            <div class="bg-off-white hover:bg-quaternary duration-300 rounded-2xl p-6 flex flex-col justify-between items-center h-full" data-aos="zoom-in">
                                <div class="h-[147px] w-full bg-grey rounded-[10px] p-3 flex items-end bg-no-repeat bg-cover" style="background-image: url('<?= $featured_img_url ?>'); background-size: cover;"></div>
                                <div class="text-2xl font-bold text-main-blue pt-8 text-center"><?= get_the_title() ?></div>
                                <div class="font-articulat leading-loose text-grey text-center pt-6 pb-8"><?= get_the_content() ?></div>
                                <a href="<?= get_the_permalink() ?>" class="border border-light-blue rounded-md h-[48px] px-14 flex items-center justify-center text-center text-main-blue font-articulat font-semibold gap-x-4">
                                    Explore now
                                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.86279 16.0078L8.28068 9.58992C8.67121 9.1994 8.67121 8.56623 8.28069 8.17571L1.86279 1.75781" stroke="#5AB2F8" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                <?php endwhile;
                endif;
                wp_reset_query();
                ?>
            </div>
        </div>
    </div>

    <div class="pt-24 pb-52 bg-off-white">
        <?php get_template_part('parts/section', 'professionalPlumbing') ?>
    </div>

    <?php get_template_part('parts/section', 'whyus') ?>

    <div class="pb-40 lg:pb-60">
        <?php get_template_part('parts/section', 'leadingbrands') ?>
    </div>
</div>


<?php get_footer() ?>