<?php
/**
 * Co możemy zapakować single entry block template
 *
 * @branch  feature/co-zapakowac-pages
 * @package kbf
 */

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'block__copakujemy-single';

if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}

$blockID =  substr($block['id'], 0, 12);

// Load values and assign defaults.
$fields = get_fields();
?>
<style>
    .block__copakujemy-single__title{
        background: url(<?php echo get_the_post_thumbnail_url(); ?>);
        background-size: cover;
        padding: 70px;
    }
</style>
<section class="<?php echo $class_name; ?>">
    <div class="container my-5">
        <h2 class="kbf__title-2 fc-orange mt-3 mb-0 text-uppercase">Co możemy zapakować</h2>
        <div class="block__copakujemy-single__title text-center my-3">
            <div class="block__copakujemy-single__title__inner d-inline-block">
                <h3 class="m-0 lh-1 text-uppercase fw-600"><?php echo get_the_title(); ?></h3>
            </div>
        </div>
    </div>

    <div class="container px-lg-5">
        <div class="row">
            <div class="col-8">
                <?php foreach($fields['tresci'] as $item): ?>
                <div class="block__copakujemy-single__content-item border-bottom border-2 border-orange">
                    <h4 class="fs-22 fw-800 text-uppercase"><?php echo $item['tytul'] ?></h4>
                    <ul>
                        <?php foreach($item['elementy_listy'] as $listEl): ?>
                            <li><?php echo $listEl['tekst'] ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="col-4">
                <?php foreach($fields['obrazki'] as $item): ?>
                    <img src="<?php echo $item['obraz']['url'] ?>" alt="<?php echo $item['obraz']['alt'] ?>" class="w-100 my-3">
                <?php endforeach; ?>
            </div>
        </div>

        <div class="border-top border-1 border-black opacity-25 pb-5"></div>
    </div>
</section>