<?php get_header(); ?>

    <main class="page__<?= $post->post_name ?>" data-page="<?= $post->post_name ?>">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </main>

<?php get_footer(); ?>