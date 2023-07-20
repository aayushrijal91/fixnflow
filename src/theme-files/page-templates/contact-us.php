<?php
/*
 * Template Name: Contact Us Page
 * The contact us page
 *
 */
get_header();
?>

<div class="contactUsPage bg-off-white">
    <?php get_template_part('parts/section', 'banner'); ?>

    <div class="py-24">
        <?php get_template_part('parts/section', 'contactCta') ?>
    </div>

    <?php get_template_part('parts/section', 'contact') ?>

    <div class="container pt-44 pb-20 md:pb-44">
        <?php get_template_part('parts/section', 'specialOffers') ?>
        <?php get_template_part('parts/section', 'globalcta') ?>
    </div>

    <?php get_template_part('parts/section', 'professionalPlumbing') ?>

    <div class="pb-40 lg:pb-60">
        <?php get_template_part('parts/section', 'leadingbrands') ?>
    </div>
</div>

<?php get_footer() ?>