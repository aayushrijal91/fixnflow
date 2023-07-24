<?php
/*
 * Template Name: Policy Page
 * The privacy policy and terms and conditions page
 *
 */
get_header();
$banner = get_field('banner');
get_template_part('parts/section', 'nav');
?>

<div class="policyPage bg-off-white">
    <div class="p-1 lg:p-6">
        <div class="generalBanner max-w-[1874px] mx-auto md:h-[444px] rounded-[20px] md:rounded-[30px] overflow-hidden">
            <div class="pt-48 pb-24 text-white text-center px-5">
                <?php if($banner) : ?>
                    <div class="text-4xl md:text-5xl xl:text-heading font-bold"><?= $banner['title'] ? $banner['title'] : get_the_title(); ?> </div>
                    <?php if (isset($banner['subtitle'])) : ?>
                        <div class="text-base md:text-lg pt-10">
                            <?= $banner['subtitle'] ?>
                        </div>
                <?php endif;
                endif; ?>
            </div>
        </div>
    </div>

    <div class="policyPageContent container pt-16 pb-52">
        <div class="flex flex-wrap justify-center">
            <div class="w-full lg:w-8/12">
                <?= the_content() ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>