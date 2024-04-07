<?php get_header(); ?>

<main class="page__<?= $post->post_name ?>" data-page="<?= $post->post_name ?>">
    <?php the_content(); ?>
</main>

<?php get_footer(); ?>