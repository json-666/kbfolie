<?php get_header(); ?>

    <main class="page__<?= $post->post_name ?> my-5" data-page="<?= $post->post_name ?>">
        <?php if(is_singular('post')): ?>
            <?php get_template_part('template-parts/part-single-post','',$post); ?>
        <?php else: ?>
            <?php the_content(); ?>
        <?php endif; ?>
    </main>

<?php get_footer(); ?>