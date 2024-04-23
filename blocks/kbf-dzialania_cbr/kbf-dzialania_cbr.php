<?php
/**
 * Działania CBR block template
 *
 * @package kbf
 */

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'block__dzialania';

if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}

$blockID =  substr($block['id'], 0, 12);

// Load values and assign defaults.
$fields = get_fields();
?>
<section class="<?php echo $class_name; ?> py-5 mb-5" <?php echo $anchor; ?>>
    <div class="container">
        <h3 class="fs-25 fc-black fw-700 text-center"><?php echo $fields['tytul'] ?? 'Nasza działania w CBR' ?></h3>
        <p class="my-5 fw-600 fs-20 text-center"><?php echo $fields['opis'] ?? _LOREM ?></p>
        <p class="my-5 fw-600 text-center"><?php echo $fields['opis'] ?? "Główne kierunki działań obejmują:" ?></p>
        <?php foreach($fields['dzialania_lista'] as $key => $dzialanie): ?>
        <div class="my-5 py-4">
            <?php if($key%2 == 0): ?>
                <?php get_template_part("blocks/kbf-dzialania_cbr/parts/card",'',$dzialanie); ?>
            <?php else: ?>
                <?php get_template_part("blocks/kbf-dzialania_cbr/parts/card-left",'',$dzialanie); ?>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
<!--        <div class="my-5 py-4">-->
<!--            --><?php //get_template_part("blocks/kbf-dzialania_cbr/parts/card-left"); ?>
<!--        </div>-->
    </div>
</section>