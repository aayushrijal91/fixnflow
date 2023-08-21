<?php
/*
 * Template Name: Thank you Page
 * The thankyou page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>
<div class="thankyouPage bg-off-white">
    <div class="container pt-16 pb-60">
        <h2 class="text-grey text-[35px] text-center font-bold"><?= the_content(); ?></h2>
    </div>
</div>
<?php get_footer() ?>