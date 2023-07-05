<?php $leadingBrands = get_field('leading_brands', 'options') ?>
<div class="partLeadingBrands bg-no-repeat bg-contain" style="background-image:url(<?= get_template_directory_uri() ?>/images/background/brands-bg.png)">
    <div class="container pt-16 md:pt-40">
        <div class="md:text-center text-4xl md:text-5xl lg:text-heading text-grey font-bold leading-tight"><?= $leadingBrands['heading'] ?></div>
        <div class="font-articulat text-grey md:text-center py-7 md:py-10">
            <?= $leadingBrands['subheading'] ?>
        </div>

        <div class="w-full lg:w-10/12 h-[162px] mx-auto bg-re rounded-[35px] shadow-[inset_0px_0px_36px_0px_rgba(0, 0, 0, 0.05)] py-8 px-4 md:px-12">
            <div id="brand_slider" class="brand_slider">
                <?php foreach($leadingBrands['brands'] as $brand) { ?>
                    <div><img src="<?= $brand['url'] ?>" alt="<?= $brand['alt'] ?>"></div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>