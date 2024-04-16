<?php get_header(); ?>

    <main class="posts" data-page="<?= $post->post_name ?>">
        <div class="container">
            <h1 class="kbf__title-2 fc-orange mt-5 text-uppercase">Blog</h1>
            <div class="row justify-content-end">
                <div class="col-auto text-end">
                    <a href="" class="fc-black d-block text-decoration-none">Aktualności (00)</a>
                    <a href="" class="fc-black d-block text-decoration-none">Artykuły (00)</a>
                </div>
            </div>
        </div>

        <section class="blog__category">
            <div class="container">
                <div class="row align-items-center my-4">
                    <div class="col-auto">
                        <h2 class="fs-24 fw-600 mb-0">AKTUALNOŚCI</h2>
                    </div>
                    <div class="col">
                        <div class="border border-1 border-orange"></div>
                    </div>
                </div>

                <?php get_template_part('template-parts/part-posts-loop','',['name'=>'aktualnosci']) ?>
            </div>
        </section>

        <section class="blog__category mt-5">
            <div class="container">
                <div class="row align-items-center my-4">
                    <div class="col-auto">
                        <h2 class="fs-24 fw-600 mb-0">AKTYKUŁY</h2>
                    </div>
                    <div class="col">
                        <div class="border border-1 border-orange"></div>
                    </div>
                </div>

                <?php get_template_part('template-parts/part-posts-loop','',['name'=>'artykuly']) ?>
            </div>
        </section>
    </main>

<?php get_footer(); ?>