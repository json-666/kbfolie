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
        <div class="swiper sw_hero">
            <div class="swiper-wrapper align-items-center">
                <?php foreach($fields['slides'] ?? [] as $loop): ?>
                <div class="swiper-slide">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-10 mx-auto">
                            <img src="<?php echo $loop['obrazek']['url'] ?>" alt="<?php echo $loop['obrazek']['alt'] ?>">
                        </div>
                        <div class="col-md-5 text-center text-md-start">
                            <h1 class="fw-700"><?php echo $loop['tytul']; ?></h1>
                            <p class="my-4 mb-5 fw-500"><?php echo $loop['tekst']; ?></p>
                            <a href="<?php echo $loop['przycisk']['url'] ?? '#'; ?>" target="<?php echo $loop['przycisk']['target'] ?? ''; ?>" class="btn-primary"><?php echo $loop['przycisk']['title'] ?? 'Dowiedz się więcej'; ?></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
	</div>
</section>
<script>
    var heroSwiper = new Swiper(".sw_hero",{
        effect: "fade",
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
    });
</script>
<style>
    .sw_hero .swiper-slide{
        opacity: 0 !important;
    }
    .sw_hero .swiper-slide-active{
        opacity: 1 !important;
    }

</style>
