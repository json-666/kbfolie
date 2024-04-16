<div class="col-xl-3 col-lg-4 col-md-6 col-12 my-3">
    <a href="<?php echo get_permalink($args->ID) ?>" class="block__products-home__overlay d-flex fc-black text-decoration-none h-100 justify-content-center" style="background-image: url(<?php echo get_the_post_thumbnail_url($args->ID) ?>)">
        <div class="block__products-home__overlay__title text-center d-flex align-items-center">
            <h3 class="text-uppercase fw-600 fs-22 mb-0"><?php echo $args->post_title ?></h3>
        </div>
    </a>
</div>
