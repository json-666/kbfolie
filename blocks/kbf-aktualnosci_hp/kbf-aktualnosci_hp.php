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
	<h2 class="kbf__title mark-40 my-5">Aktualności</h2>
	<div class="container container-large">
		<div class="row align-items-center">
			<div class="col-auto">
				<a href="">
					<img src="<?php echo get_template_directory_uri() ?>/images/Left_Arrow_4_.svg" alt="swiper-arrow">
				</a>
			</div>
            <div class="col-10">
                <div class="swiper sw-<?php echo $blockID;?>">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <?php get_template_part('blocks/kbf-aktualnosci_hp/parts/card') ?>
                        </div>
                        <div class="swiper-slide">
		                    <?php get_template_part('blocks/kbf-aktualnosci_hp/parts/card') ?>
                        </div>
                        <div class="swiper-slide">
		                    <?php get_template_part('blocks/kbf-aktualnosci_hp/parts/card') ?>
                        </div>
                        <div class="swiper-slide">
		                    <?php get_template_part('blocks/kbf-aktualnosci_hp/parts/card') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() ?>/images/Left_Arrow_4_.svg" alt="swiper-arrow" style="transform: rotate(180deg)">
                </a>
            </div>
		</div>
	</div>
</section>
<script>
    let swAktualnosciHome = new Swiper('.sw-<?php echo $blockID;?>',{});
</script>