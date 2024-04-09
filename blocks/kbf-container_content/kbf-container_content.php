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

$blockID =  substr($block['id'], 0, 12);

$inner_blocks_template =[
	[
		['core/columns', []],
		['core/heading', ['placeholder' => 'Add your title here...']],
		['core/paragraph', ['placeholder' => 'Add your description here...']],
		['core/button', ['placeholder' => 'Add link text...']],
	]];
?>
<section class="block__container <?php echo $block['className']; ?>" <?php echo $anchor; ?>>
	<div class="container">
		<InnerBlocks template="<?php echo esc_attr(wp_json_encode($inner_blocks_template));?>" />
	</div>
</section>