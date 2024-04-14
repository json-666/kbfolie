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
        <div class="row g-0">
            <?php foreach (range(1, 8) as $variable): ?>
                <div class="col-6 col-lg-3 position-relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/macaroons.png" alt="" class="m-2">
                    <div class="block__products-home__overlay">
                        <p class="text-uppercase fw-600 fs-22">lorem ipsum</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>