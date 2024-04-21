<?php
/**
 * Poznaj nas bliżej block template
 *
 * @package kbf
 */

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'block__poznaj';

if (!empty($block['className'])) {
	$class_name .= ' ' . $block['className'];
}

$blockID =  substr($block['id'], 0, 12);

// Load values and assign defaults.
$fields = get_fields();
?>
<section class="<?php echo $class_name; ?>">
	<div class="container container-large">
        <h2 class="fc-white fs-35 fw-600 text-center">Poznaj nas bliżej</h2>
        <div class="mt-5 mb-3 row">
            <?php foreach($fields['ikony'] as $ikona): ?>
                <div class="col my-3 p-0 block__poznaj__single__wrapper">
                    <div class="block__poznaj__si4ngle d-flex justify-content-center">
                        <img src="<?php echo $ikona['ikona']['url'] ?>" alt="<?php echo $ikona['ikona']['alt'] ?>">
                    </div>
                    <div class="text-center mt-2">
                        <p class="fc-white fs-20 text-uppercase"><?php echo $ikona['opis']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
