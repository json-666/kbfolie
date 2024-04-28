<a class="block__aktualnosci__inner text-decoration-none fc-black" href="<?php echo get_permalink($args->ID) ?>">
    <div class="block__aktualnosci__inner__image" style="background-image: url(<?php echo get_the_post_thumbnail_url($args) ?>)"></div>
    <div class="block__aktualnosci__inner__content">
        <h4 class="fs-25 fw-700"><?php echo $args->post_title; ?></h4>
        <p class="block__aktualnosci__inner__content__excerpt"><?php echo get_the_excerpt($args->ID) ?></p>
        <a href="<?php echo get_permalink($args->ID) ?>" class="fc-orange fs-20 fw-500 text-uppercase text-decoration-none">Czytaj dalej</a>
        <div class="py-3"><div class="border-bottom border-1 border-black opacity-50"></div></div>
        <p class="fs-16 fw-300 opacity-50 mb-0">
            <?php $m = array('Styczeń','Luty','Marzec','Kwieceń','Maj','Czerwiec','Lipiec','Sierpień','Wrzesień','Październik','Listopad','Grudzień'); ?>
            <?php echo date("j",strtotime($args->post_date)) . ' ' . $m[date("n",strtotime($args->post_date)) - 1] . ' ' . date('Y',strtotime($args->post_date)); ?>
        </p>
    </div>
</a>
