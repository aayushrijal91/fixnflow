<?php $leadingBrands = get_field('leading_brands', 'options') ?>
<div class="partLeadingBrands bg-no-repeat bg-contain" style="background-image:url(<?= get_template_directory_uri() ?>/images/background/brands-bg.png)">
    <div class="container pt-16 md:pt-40" data-aos="fade-up">
        <h2 class="md:text-center text-4xl md:text-5xl lg:text-heading text-grey font-bold leading-tight"><?= $leadingBrands['heading'] ?></h2>
        <p class="font-articulat text-grey md:text-center py-7 md:py-10">
            <?= $leadingBrands['subheading'] ?>
        </p>

        <div class="w-full lg:w-10/12 h-[162px] mx-auto shadow-inner rounded-[35px] py-8 px-4 md:px-12">
            <div id="brand_slider" class="brand_slider">
                <?php foreach ($leadingBrands['brands'] as $brand) { ?>
                    <div><img src="<?= $brand['url'] ?>" alt="<?= $brand['alt'] ?>"></div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>