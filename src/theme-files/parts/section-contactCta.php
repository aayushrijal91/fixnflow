<div class="container">
    <div class="flex flex-wrap -mx-2 gap-y-5 justify-center">
        <?php if (have_rows('contact_cta', 'options')) :
            while (have_rows('contact_cta', 'options')) : the_row();
                $image = get_sub_field('image');
                $icon = get_sub_field('icon');
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                $button = get_sub_field('button');
        ?>
                <div class="w-full md:w-1/3 px-2" data-aos="zoom-in">
                    <div class="rounded-[30px] bg-white hover:bg-quaternary p-5 hover:-translate-x-2 hover:-translate-y-2 hover:shadow-[10px_10px_#0067B9] transition-all duration-300">
                        <img src="<?= $image['url'] ?>" class="rounded-[30px] w-full h-[106px] object-center object-cover" alt="<?= $image['alt'] ?>">
                        <div class="flex flex-wrap items-center min-h-[65px] gap-x-5 py-3.5">
                            <?php if ($icon) : ?><div class="w-fit"><img src="<?= $icon['url'] ?>" alt="<?= $icon['url'] ?>"></div><?php endif; ?>
                            <div class="w-fit font-bold text-[35px] text-main-blue flex-1 leading-none"><?= $title ?></div>
                        </div>
                        <div class="font-articulat leading-loose text-grey pb-5"><?= $description ?></div>
                        <?php if ($button) : ?><a href="<?= $button['url'] ?>" class="btn-main-blue-hover-yellow px-14"><span class="relative z-10"><?= $button['title'] ?></span></a><?php endif; ?>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</div>