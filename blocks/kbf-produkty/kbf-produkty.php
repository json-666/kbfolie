<?php
/**
 * Produkty-single block template
 *
 * @package kbf
 */

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'block__produkty my-5';

if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}

$blockID =  substr($block['id'], 0, 12);

// Load values and assign defaults.
$fields = get_fields();
?>
<section class="<?php echo $class_name; ?>" <?php echo $anchor; ?>>
    <div class="container px-xl-4 my-5">
        <div class="block__produkty__single__title p-3 mb-5">
            <h2 class="fc-white fs-30 fw-700 mb-0 text-uppercase"><?php echo $fields['tytul_sekcji'] ?? 'Lorme Ipsum' ?></h2>
        </div>
        <?php foreach($fields['sekcje'] as $section): ?>
            <div class="block__produkty__single__section">
                <div class="row justify-content-between">
                    <div class="col-md-8 col-12">
                        <div class="fs-20 block__produkty__single__section__content">
                            <?php echo $section['tresc'] ?? '' ?>

                            <?php if($section['uklad'] == "in-col"): ?>
                                <img src="<?php echo $section['obraz_na_dole']['url'] ?? '' ?>" alt="<?php echo $section['obraz_na_dole']['alt'] ?? '' ?>" class="w-100 mt-4">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-4 col-12 text-center">
                        <img src="<?php echo $section['obraz_po_prawej']['url'] ?? '' ?>" alt="<?php echo $section['obraz_po_prawej']['alt'] ?? '' ?>" class="w-100 icons">
                    </div>
                </div>

                <?php if($section['uklad'] == "full-w"): ?>
                    <img src="<?php echo $section['obraz_na_dole']['url'] ?? '' ?>" alt="<?php echo $section['obraz_na_dole']['alt'] ?? '' ?>" class="w-100 mt-4">
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>