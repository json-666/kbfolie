<?php
/**
 * Mission block template
 *
 * @package kbf
 */

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'block__mission';

if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}

$blockID =  substr($block['id'], 0, 12);

// Load values and assign defaults.
$fields = get_fields();
?>
<section class="<?php echo $class_name; ?>">
    <div class="container">
        <h2 class="kbf__title-3 fc-dark-green py-5"><?php echo $fields['tytul-sekcji']; ?></h2>
        <div class="row p-5 mt-5 mt-xxl-0 ">
            <?php foreach ($fields['kolumna'] as $index => $column): ?>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                <div class="block__mission__column py-5 py-xxl-0 py-lg-3 py-md-4">
                    <div class="block__mission__column__icon">
                        <img src="<?php echo $column['ikona']['url'] ?>" alt="<?php echo $column['ikona']['alt'] ?>">
                    </div>
                    <div class="block__mission__column__list pt-5">
                        <p class="lh-1 text-center fw-700 fs-20"><?php echo $column['tytul'] ?>
                        <div class="fw-400 fs-20 pb-5 pb-lg-0 px-2">
                            <?php echo $column['lista']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>

</section>
