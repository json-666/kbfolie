<?php
    if(pll_current_language() == 'pl') {
        $fmenu = get_field('menu_w_stopce', 'options');
        $info = get_field('informacje','options');
    }else{
        $fmenu = get_field('menu_w_stopce-'.pll_current_language(), 'options');
        $info = get_field('informacje-'.pll_current_language(),'options');
    }
 ?>
<footer>
    <section class="border-top border-1 border-black">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-between py-2">
                <div class="col-lg-auto col-sm-3 col-4 ps-lg-0 mx-auto">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo esc_url(wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0]); ?>" alt="KBFolie Logo" class="w-100 kbf-mx-fit">
                    </a>
                </div>
                <div class="col-lg-2 col-sm-4 mt-sm-4 mt-5 col-12 text-center text-sm-start">
                    <?php foreach($fmenu['kolumna_1']['linki'] as $link): ?>
                        <a href="<?php echo $link['link']['url'] ?>" class="text-decoration-none fc-black fw-600 fs-20 text-uppercase d-block"><?php echo $link['link']['title'] ?></a>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-2 col-sm-4 mt-sm-4 mt-2 col-12 text-center text-sm-start">
                    <?php foreach($fmenu['kolumna_2']['linki'] as $link): ?>
                        <a href="<?php echo $link['link']['url'] ?>" class="text-decoration-none fc-black fw-600 fs-20 text-uppercase d-block"><?php echo $link['link']['title'] ?></a>
                    <?php endforeach; ?>
                </div>
                <div class="col-sm-4 col-12 mt-sm-4 mb-5 mb-sm-0 text-center text-sm-start">
                    <?php foreach($fmenu['kolumna_3']['linki'] as $link): ?>
                        <a href="<?php echo $link['link']['url'] ?>" class="text-decoration-none fc-black fw-600 fs-20 text-uppercase d-block"><?php echo $link['link']['title'] ?></a>
                    <?php endforeach; ?>
                </div>
                <div class="col pe-lg-0 mt-sm-4 mb-5 mb-sm-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ueA1.png" alt="" class="w-100">
                </div>
            </div>
            <div class="row align-items-center justify-content-center justify-content-lg-between">
                <div class="col-auto ps-lg-0">
                    <p class="fw-600 fs-15 text-center text-sm-start">
                        <?php echo $info;  ?>
                    </p>
                </div>
                <div class="col-auto pe-lg-0">
                    <a href="https://www.linkedin.com/company/kb-folie-polska-sp-z-o-o/"><img src="<?php echo $_ENV['HOME_URL'] ?>/wp-content/uploads/2024/04/Outline_Color_copy_2.svg" alt="linkedin"></a>
                </div>

            </div>
        </div>
    </section>
    <section class="bg-black py-2 mt-3 mt-sm-0 text-center text-sm-start">
        <div class="container">
            <div class="row justify-content-between align-item-between">
                <div class="col-auto">
                    <p class="mb-0 fs-16 fc-white">
                        Copyright © 2024 KB Folie Sp .z o.o.  All Rights Reserved
                    </p>
                </div>
                <div class="col-auto">
                    <p class="mb-0 fs-16 fc-white">
                        Designed by Munjo Design Studio
                    </p>
                </div>
            </div>
        </div>


    </section>
</footer>

<div class="up">
    <a href="javascript:window.scroll(0,0)">
        <img src="<?php echo $_ENV['HOME_URL'] ?>/wp-content/uploads/2024/04/Group-67.png" alt="">
    </a>
</div>
<style>
    .up{
        position: fixed;
        bottom: 25px;
        right: 25px;
    }
    @media screen and (max-width: 500px){
        .up > a > img{
            width: 60px;
        }
    }
</style>
<?php wp_footer();
?>
