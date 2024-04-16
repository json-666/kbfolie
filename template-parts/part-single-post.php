<div class="container">
    <h1 class="kbf__title-2 fc-orange my-5"><?php echo get_the_title() ?></h1>

    <div class="single__featured" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>

    <?php the_content(); ?>
</div>