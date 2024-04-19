<?php
/**
 * Localization block template
 *
 * @package kbf
 */

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'block__localization';

if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}

$blockID =  substr($block['id'], 0, 12);

// Load values and assign defaults.
$fields = get_fields();
?>
<section class="<?php echo $class_name; ?>" <?php echo $anchor; ?>>
    <div class="container">
        <h2 class="kbf__title-2 fc-orange mt-3 text-uppercase"><?php echo $fields['tytul']; ?></h2>
        <div class="container p-5 ">
            <div class="row pb-3">
                <p class="lh1 d-block d-lg-none fw-500 fs-20 mb-4 "><?php echo $fields['opis']; ?></p>
                <div class="block__localization__map col-lg-6 m-3 m-lg-0">
                    <?php echo $fields['mapka-1']; ?>
                </div>
                <div class="col-lg-6 align-content-center">
                    <p class="lh1 d-lg-block d-none fw-500 fs-20 mb-4 "><?php echo $fields['opis']; ?></p>
                    <p class="lh1 fw-600 fs-25 mb-3 "><?php echo $fields['lokalizacja-1']; ?></p>
                    <p class="lh1 fw-600 fs-20 mb-3 "><?php echo $fields['adres-1']; ?></p>
                    <p class="icone-phone lh1 fw-600 fs-20 mb-3 "><?php echo $fields['telefon-1']; ?></p>
                    <p class="d-block d-lg-none p-0 m-0"></p>
                    <p class="icone-mail lh1 fw-600 fs-20 mb-3"><?php echo $fields['mail-1']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 align-content-center order-2 order-lg-1">
                    <p class="lh1 fw-600 fs-25 mb-3"><?php echo $fields['lokalizacja-2']; ?></p>
                    <p class="lh1 fw-600 fs-20 mb-3"><?php echo $fields['adres-2']; ?></p>
                    <p class="icone-phone lh1 fw-600 fs-20 mb-3"><?php echo $fields['telefon-2']; ?></p>
                    <p class="d-block d-lg-none p-0 m-0"></p>
                    <p class="icone-mail lh1 fw-600 fs-20 mb-3"><?php echo $fields['mail-2']; ?></p>
                </div>
                <div class="block__localization__map col-lg-6 order-1 order-lg-2 m-3 m-lg-0">
                    <?php echo $fields['mapka-2']; ?>
                </div>
            </div>
        </div>
</section>