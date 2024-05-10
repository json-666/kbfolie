<?php
/**
 * Eko page Hero block template
 *
 * @package kbf
 */

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'block__ekohero my-5';

if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}

$blockID =  substr($block['id'], 0, 12);

// Load values and assign defaults.
$fields = get_fields();
?>
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
<section class="<?php echo $class_name; ?>" <?php echo $anchor; ?>>
    <div class="container px-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 pt-5 text-center text-lg-start">
                <h2 class="fs-45 fw-700"><?php echo $fields['tytul'] ?? 'Strategoa zrównoważonego rozwoju' ?></h2>
                <img src="<?php echo $fields['cele_-_obrazek']['url'] ?? ''; ?>" alt="<?php echo $fields['cele_-_obrazek']['alt'] ?? ''; ?>" class="w-100 kbf-mw-fit mt-5 pt-lg-5 mb-lg-0 mb-5">
            </div>
            <div class="col-lg-6">
                <img src="<?php echo $fields['obraz']['url'] ?? ''; ?>" alt="<?php echo $fields['obraz']['alt'] ?? ''; ?>" class="w-100">
                <p class="fs-20 mb-0 fw-400 mt-4 pt-lg-3"><?php echo $fields['tekst'] ?? 'Strategoa zrównoważonego rozwoju' ?></p>
            </div>
        </div>
        <div class="col-lg-11 mx-auto mt-5">
			<!-- data-masonry='{"percentPosition": true }' -->
            <div class="row justify-content-between">
                <?php foreach ($fields['cele_-_lista'] as $key => $item): ?>
                    <div class="col-lg-6 mt-5 mt-sm-4">
                        <div class="row justify-content-center justify-content-lg-evenly <?php if($item['czy_wysrodkowac_tekst']){echo "align-items-center";} ?>">
                            <div class="col-auto"><img src="<?php echo $item['cel']['url'] ?>" alt="<?php echo $item['cel']['alt'] ?>" style="width: 135px;"></div>
                            <div class="col-8 text-center text-sm-start">
                                <p class="fs-20 fs-400 mb-0 text-center text-sm-start"><?php echo $item['opis'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>