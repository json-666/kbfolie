<?php get_header(); ?>

    <main class="posts" data-page="<?= $post->post_name ?>">
        <div class="container">
            <h1 class="kbf__title-2 fc-orange mt-5 text-uppercase">Blog</h1>
            <div class="row justify-content-end">
                <div class="col-auto text-end">
                    <?php $cats = get_categories( ['post_type' => 'post'] ) ; ?>
                    <?php foreach ( $cats as $category ): ?>
                        <?php
                            $postsCount = $category->category_count > 9 ? $category->category_count : "0" . $category->category_count;
                        ?>
                        <a href="#<?php echo $category->slug; ?>" class="fc-black fw-600 d-block text-decoration-none"><?php echo $category->name; ?> (<?php echo $postsCount ?>)</a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <?php foreach($cats as $category): ?>
        <section class="blog__category my-5" id="<?php echo $category->slug ?>">
            <div class="container">
                <div class="row align-items-center my-4">
                    <div class="col-auto">
                        <h2 class="fs-24 fw-600 mb-0 text-uppercase"><?php echo $category->name ?></h2>
                    </div>
                    <div class="col">
                        <div class="border border-1 border-orange"></div>
                    </div>
                </div>

                <?php get_template_part('template-parts/part-posts-loop','',['name'=>$category->slug]) ?>
            </div>
        </section>
        <?php endforeach; ?>
<?php get_footer(); ?>