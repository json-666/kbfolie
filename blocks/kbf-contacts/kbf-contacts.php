<?php
/**
 * Contacts block template
 *
 * @package kbf
 */

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'block__contacts';

if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}

$blockID =  substr($block['id'], 0, 12);

// Load values and assign defaults.
$fields = get_fields();
?>
<section class="<?php echo $class_name; ?>">
    <div class="container">
        <h2 class="kbf__title-2 fc-orange mt-3 mb-0"><?php echo $fields['tytul']; ?></h2>
        <div class="row p-4 pt-3">
            <?php foreach ($fields['kontakty'] as $index => $contacts): ?>
                <div class="col-lg-6 p-4 pt-4 pb-0">
                    <div class="row pb-4 m-0">
                        <div class="col-4 p-0">
                            <img src="<?php echo $contacts['obrazek']['url'] ?>" alt="<?php echo $contacts['obrazek']['alt'] ?>">
                        </div>
                        <div class="col-8 align-content-center">
                            <p class="lh-1 fs-23 fw-700 mb-2 p-0"><?php echo $contacts['stanowisko']; ?></p>
                            <p class="lh-1 fs-20 fw-600 mb-3"><?php echo $contacts['imie']; ?></p>
                            <p class="block__contacts__icone-phone lh-1 fs-20 fw-300 mb-2"><?php echo $contacts['telefon']; ?></p>
                            <p class="block__contacts__icone-mail lh-1 fs-20 fw-300 mb-0"><?php echo $contacts['mail']; ?></p>
                        </div>
                    </div>
                    <hr class="block__contacts__line-<?php echo $index; ?> p-0">
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>