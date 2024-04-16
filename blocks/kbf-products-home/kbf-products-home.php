<?php
/**
 * Products-Home block template
 *
 * @package kbf
 */

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'block__products-home';

if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}

$blockID =  substr($block['id'], 0, 12);

// Load values and assign defaults.
$fields = get_fields();
?>
<section class="<?php echo $class_name; ?>">
    <div class="mb-3">
        <h2 class="kbf__title mark-40"><?php echo $fields['categories-home']; ?></h2>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach (get_posts(['post_type'=>'cozapakowac','posts_per_page'=>-1]) as $coZapakowac): ?>
                <?php get_template_part('blocks/kbf-products-home/parts/card', '', $coZapakowac); ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>