<?php
/**
 * Products-Home block template
 *
 * @package kbf
 */

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'block__production mb-5 container';

if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}

$blockID =  substr($block['id'], 0, 12);

// Load values and assign defaults.
$fields = get_fields();
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

?>
<!-- mobile version -->
<div class="d-lg-none">

    <div class="row justify-content-center">
        <?php $idsList = [1,2,3,4,5,6,7,8] ?>
        <?php foreach($idsList as $item): ?>
        <div class="col-md-6 col-ms-8 col-11 my-sm-4 my-5">
            <?php if(is_int($fields['kafel_'.$item]['obrazek'])){
                $imageUrl = wp_get_attachment_image_url($fields['kafel_'.$item]['obrazek'], 'full');
            }elseif(is_array($fields['kafel_'.$item]['obrazek'])){
                $imageUrl = $fields['kafel_'.$item]['obrazek']['url'];
            }else{
                $imageUrl = '';
            }
            ?>
            <div class="text-center">
                <img src="<?php echo $imageUrl ?>" alt="" class="kbf-mw-fit w-100 mx-auto">
                <h4 class="fs-30 fw-600 my-3"><?php echo $fields['kafel_'.$item]['tytul']; ?></h4>
                <p class="fs-20 fw-300 my-4"><?php echo $fields['kafel_'.$item]['tresc'] ?></p>
                <?php if(!empty($fields['kafel_'.$item]['przycisk']['url'])){ ?>
                    <a href="<?php echo $fields['kafel_'.$item]['przycisk']['url'] ?? '' ?>" class="btn-primary d-inline-block">Dowiedz się więcej</a>
                <?php } ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</div>

<!-- dekstop version -->
<div class="d-none d-lg-block">
    <?php get_template_part("blocks/kbf-snake/internalization/".pll_current_language(),'',$fields); ?>
</div>