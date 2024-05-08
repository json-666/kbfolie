<?php
/**
 * Aktualności block template
 *
 * @package kbf
 */

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
	$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'block__aktualnosci';

if (!empty($block['className'])) {
	$class_name .= ' ' . $block['className'];
}

$blockID =  substr($block['id'], 0, 12);

// Load values and assign defaults.
$fields = get_fields();
?>
<section class="<?php echo $class_name; ?>">
	<h2 class="kbf__title mark-40 my-5"><?php echo $fields['tytul'] ?? 'Aktualności' ?></h2>
	<div class="container container-large pb-5">
		<div class="row align-items-center justify-content-center gap-4 gap-sm-2">
			<div class="col-sm col-1 order-2 order-sm-1 p-0 p-sm-auto">
				<a href="javascript:console.log(swAktualnosciHome.slidePrev());">
					<img src="<?php echo get_template_directory_uri() ?>/images/Left_Arrow_4_.svg" alt="swiper-arrow">
				</a>
			</div>
            <div class="col-sm-11 order-1 order-sm-2">
                <div class="swiper sw-<?php echo $blockID;?>">
                    <div class="swiper-wrapper">
                        <?php foreach(get_posts(['category'=>4,'numberposts'=>10]) as $post): ?>
                        <div class="swiper-slide">
                            <?php get_template_part('blocks/kbf-aktualnosci_hp/parts/card', '', $post) ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm col-1 p-0 p-sm-auto order-3">
                <a href="javascript:console.log(swAktualnosciHome.slideNext());">
                    <img src="<?php echo get_template_directory_uri() ?>/images/Left_Arrow_4_.svg" alt="swiper-arrow" style="transform: rotate(180deg)">
                </a>
            </div>
		</div>
	</div>
</section>
<script>
    var swAktualnosciHome = new Swiper(".sw-<?php echo $blockID;?>", {
        slidesPerView: 1,
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
        },
    });
</script>