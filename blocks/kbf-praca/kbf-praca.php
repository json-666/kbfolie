<?php
/**
 * Praca block template
 *
 * @package kbf
 */

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'block__praca';

if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}

$blockID =  substr($block['id'], 0, 12);

$inner_blocks_template =[
    [
        ['core/columns', []],
        ['core/heading', ['placeholder' => 'Add your title here...']],
        ['core/paragraph', ['placeholder' => 'Add your description here...']],
        ['core/button', ['placeholder' => 'Add link text...']],
    ]];

// Load values and assign defaults.
$fields = get_fields();
?>
<section class="<?php echo $class_name; ?>" <?php echo $anchor; ?>>
    <div class="container container-small">
        <h2 class="kbf__title-2 fc-orange mt-3 text-uppercase"><?php echo $fields['tytul'] ?? 'PRACA W KB FOLIE'; ?></h2>
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-6 col-md-6 col-12">
                <p class="fs-20 fw-500">
                    <?php echo $fields['tekst'] ?? 'Lorem Ipsum Dolor Sit Amet' ?>
                </p>
            </div>
            <div class="col-xl-5 col-md-6 col-12">
                <img src="<?php echo $fields['obraz']['url'] ?? '' ?>" alt="<?php echo $fields['obraz']['alt'] ?? '' ?>" class="w-100">
            </div>
        </div>
    </div>

    <div class="container px-5">
        <div class="row gap-5 mt-4 mb-5">
            <div class="col-xl-6">
                <div class="border-top border-1 border-orange"></div>
            </div>
        </div>
    </div>

    <div class="container container-small">
        <InnerBlocks template="<?php echo esc_attr(wp_json_encode($inner_blocks_template));?>" />
    </div>
</section>