<div class="row">
    <?php $my_query = new WP_Query( 'category_name='.$args['name'].'&posts_per_page=12' );
    while ( $my_query->have_posts() ) : $my_query->the_post();
        $do_not_duplicate[] = $post->ID; ?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-3">
            <?php get_template_part('blocks/kbf-aktualnosci_hp/parts/card','',$post); ?>
        </div>
    <?php endwhile; ?>
</div>