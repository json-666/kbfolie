<?php
/**
 * Categories block template
 *
 * @package kbf
 */

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'block__categories';

if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}

$blockID =  substr($block['id'], 0, 12);

// Load values and assign defaults.
$fields = get_fields();
?>
<section class="<?php echo $class_name; ?>">
    <div class="container">
        <div class="row">
            <?php foreach ($fields['kategorie'] as $categories): ?>
                <div class="col-lg-4">
                    <a href="<?php echo $categories['link'] ?>" class="d-block text-decoration-none fc-black">
                        <div class="block__categories__image ">
                            <img src="<?php echo $categories['obrazek']['url'] ?>" alt="<?php echo $categories['obrazek']['alt'] ?>" class="w-100">
                        </div>
                        <p class="fw-700 fs-24 text-center mt-3"><?php echo $categories['podpis'] ?></p>
                    </a>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
