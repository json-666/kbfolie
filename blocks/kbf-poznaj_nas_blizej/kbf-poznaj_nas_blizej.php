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
	<div class="container">
        <h2 class="fc-white fs-35 fw-600 text-center">Poznaj nas bliżej</h2>
    </div>
</section>
