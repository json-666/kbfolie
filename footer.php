<footer>
    <section class="border-top border-1 border-black">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-between py-2">
                <div class="col-lg-auto col-sm-3 col-6 ps-lg-0 mx-auto">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo esc_url(wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0]); ?>" alt="KBFolie Logo" class="w-100 kbf-mx-fit">
                    </a>
                </div>
                <div class="col-lg-2 col-sm-4 mt-sm-4 col-12 text-center text-sm-start">
                    <a href="#" class="text-decoration-none fc-black fw-600 fs-20 text-uppercase d-block">FIRMA</a>
                    <a href="#" class="text-decoration-none fc-black fw-600 fs-20 text-uppercase d-block">PRODUKCJA</a>
                    <a href="#" class="text-decoration-none fc-black fw-600 fs-20 text-uppercase d-block">PRODUKTY</a>
                </div>
                <div class="col-lg-2 col-sm-4 mt-sm-4 col-12 text-center text-sm-start">
                    <a href="#" class="text-decoration-none fc-black fw-600 fs-20 text-uppercase d-block">CBR</a>
                    <a href="#" class="text-decoration-none fc-black fw-600 fs-20 text-uppercase d-block">BLOG</a>
                    <a href="#" class="text-decoration-none fc-black fw-600 fs-20 text-uppercase d-block">KONTAKT</a>
                </div>
                <div class="col-sm-4 col-12 mt-sm-4 text-center text-sm-start">
                    <a href="#" class="text-decoration-none fc-black fw-600 fs-20 text-uppercase d-block">
                        Ochrona danych osobowych
                    </a>
                    <a href="#" class="text-decoration-none fc-black fw-600 fs-20 text-uppercase d-block">
                        Polityka KB FOLIE POLSKA
                    </a>
                    <a href="#" class="text-decoration-none fc-black fw-600 fs-20 text-uppercase d-block">RODO</a>
                </div>
                <div class="col pe-lg-0 mt-sm-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ueA1.png" alt="" class="w-100">
                </div>
            </div>
            <div class="row align-items-center justify-content-center justify-content-lg-between">
                <div class="col-auto ps-lg-0">
                    <p class="fw-600 fs-15 text-center text-sm-start">
                        KB Folie Polska Sp.z o.o. <br/>
                        ul. Bieżuńska 2b, 03-578 Warszawa <br/>
                        NIP 524-12-08-638, KRS 0000087007, REGON 011944280 <br/>
                        tel. +48 22 679 99 27, fax +48 22 678 66 66, e-mail: kbfolie@kbfolie.pl
                    </p>
                </div>
                <div class="col-auto pe-lg-0">
                    <a href="https://www.linkedin.com/company/kb-folie-polska-sp-z-o-o/"><img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/04/Outline_Color_copy_2.svg" alt="linkedin"></a>
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

<?php wp_footer();
?>
