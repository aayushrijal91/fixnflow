<?php
/*
 * Template Name: Areas Page
 * The areas page
 *
 */
get_header();
?>

<div class="areasPage bg-off-white">
    <?php get_template_part('parts/section', 'banner');
    $section_1_left = get_field('section_1_left');
    $section_1_right = get_field('section_1_right');
    ?>
    <div class="container py-24">
        <div class="flex flex-wrap -mx-3">
            <?php if ($section_1_left) : ?>
                <div class="w-full lg:w-1/2 px-3" data-aos="zoom-in">
                    <div class="text-center bg-contain rounded-[30px] pt-11 pb-28 px-16 h-full" style="background: linear-gradient(#171818 0 40%, rgba(0,0,0,0) 80% 100%), url(<?= get_template_directory_uri() ?>/images/background/membership-guy.jpg) no-repeat center bottom">
                        <div class="text-white text-[45px] leading-none font-bold"><?= $section_1_left['title'] ?></div>
                        <div class="text-white leading-relaxed py-6"><?= $section_1_left['description'] ?></div>
                        <a href="<?= $section_1_left['button']['url'] ?>" target="<?= $section_1_left['button']['target'] ?>" class="btn-yellow-hover-main-blue px-14 mt-10"><span class="relative z-10"><?= $section_1_left['button']['title'] ?></span></a>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($section_1_right) : ?>
                <div class="w-full lg:w-1/2 px-3" data-aos="zoom-in">
                    <div class="bg-main-blue rounded-[30px] p-12 h-full text-white">
                        <div class="text-[35px] font-semibold leading-none pb-5"><?= $section_1_right['title'] ?></div>

                        <div class="font-articulat leading-relaxed description">
                            <?= $section_1_right['description'] ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="py-24 bg-white">
        <div class="container">
            <div class="text-center text-4xl md:text-5xl xl:text-heading text-main-blue font-bold">Select your region</div>

            <div class="w-full lg:w-10/12 rounded-3xl bg-off-white shadow-inner mx-auto mt-9 mb-14">
                <div class="flex flex-wrap justify-around min-h-[77px] items-center region_nav">
                    <?php
                    $target = 0;
                    if (have_rows('areas')) :
                        while (have_rows('areas')) : the_row();
                            $region = get_sub_field('region');
                    ?>
                            <a href="javascript:void(0)" slick-target=<?= $target ?> class="<?= $target == 0 ? 'active ' : '' ?>region_nav_link w-fit text-grey/50 hover:text-grey duration-300 font-bold text-xl"><?= $region ?></a>
                    <?php
                            $target++;
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>

            <div class="bg-off-white rounded-[30px] py-9">
                <div class="w-8/12 mx-auto" id="areas_suburb_slider">
                    <?php
                    if (have_rows('areas')) :
                        while (have_rows('areas')) : the_row();
                            $suburbs = explode(",", get_sub_field('suburbs'));
                    ?>
                            <div class="flex flex-wrap w-full justify-center">
                                <ul class="columns-4">
                                    <?php foreach ($suburbs as $suburb) :
                                        $slug = trim($suburb);
                                        $slug = str_replace(' ', '-', $slug);
                                        $slug = strtolower($slug);
                                        $slug = preg_replace('/[^a-z0-9-]/', '', $slug);
                                    ?>
                                        <li><a href="<?= get_site_url() . '/' . $slug ?>" class="text-xl font-articulat text-main-blue hover:text-dark-blue duration-200 leading-loose"><?= $suburb ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                    <?php
                            $target++;
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="py-24">
        <?php get_template_part('parts/section', 'contactCta') ?>
    </div>

    <?php get_template_part('parts/section', 'contact') ?>

    <div class="py-40 lg:pb-60">
        <?php get_template_part('parts/section', 'professionalPlumbing') ?>
    </div>
</div>

<?php get_footer() ?>