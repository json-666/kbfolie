<?php
/**
 * Hero block template
 *
 * @package kbf
 */

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'block__hero';

if (!empty($block['className'])) {
	$class_name .= ' ' . $block['className'];
}

$blockID =  substr($block['id'], 0, 12);

// Load values and assign defaults.
$fields = get_fields();
?>
<section class="<?php echo $class_name; ?>">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-7 col-10 mx-auto">
				<img src="<?php echo $fields['obrazek']['url'] ?>" alt="<?php echo $fields['obrazek']['alt'] ?>">
			</div>
			<div class="col-md-5 text-center text-md-start">
                <h1 class="fw-700"><?php echo $fields['tytul']; ?></h1>
				<p class="my-4 mb-5 fw-500"><?php echo $fields['tekst']; ?></p>
				<a href="<?php echo $fields['przycisk']['url']; ?>" target="<?php echo $fields['przycisk']['target']; ?>" class="btn-primary"><?php echo $fields['przycisk']['title']; ?></a>
			</div>
		</div>
	</div>
</section>
