<?php
/**
 * Timeline block template
 *
 * @package kbf
 */

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'block__timeline';

if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}

$blockID =  substr($block['id'], 0, 12);

// Load values and assign defaults.
$fields = get_fields();
?>
<style>
    .block__timeline{
        overflow: scroll;
    }
    #timeline {
        min-width: 1919px;
        width: 100vw;
    }
</style>
<section class="<?php echo $class_name; ?>">
    <div class="timeline"></div>
    <div class="swiper sw-timeline">
        <div class="swiper-wrapper">
            <?php foreach($fields['elementy'] as $key=>$slide): ?>
                <div class="swiper-slide position-relative">
                    <div class="bg-orange py-1 w-100 position-absolute" style="top: 280px"></div>
                    <div class="text-center p-2 p-sm-0">
                        <?php if($key%2 != 0){ ?>
                            <div style="min-height: 272px" class="d-flex flex-column justify-content-end">
                                <p class="fs-30 fw-700"><?php echo $slide['rok'] ?></p>
                                <p class="fs-20 fw-300"><?php echo $slide['opis'] ?></p>
                            </div>
                            <div class="d-flex align-items-top justify-content-center position-relative" style="height: 300px">
                                <div class="position-absolute top-0 bg-white" style="width: 70px; height: 30px;"></div>
                                <img src="<?php echo $slide['ikona']['url'] ?? get_template_directory_uri().'/images/Group93.svg'; ?>" alt="" class="position-relative" style="height: fit-content">
                            </div>
                        <?php }else{ ?>
                                <div class="d-flex align-items-end justify-content-center position-relative" style="height: 300px">
                                    <div class="position-absolute bottom-0 bg-white" style="width: 70px; height: 30px;"></div>
                                    <img src="<?php echo $slide['ikona']['url'] ?? get_template_directory_uri().'/images/Group93.svg'; ?>" alt="" class="position-relative" style="height: fit-content">
                                </div>
                            <p class="fs-30 fw-700"><?php echo $slide['rok'] ?></p>
                            <p class="fs-20 fw-300"><?php echo $slide['opis'] ?></p>
                        <?php } ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>
<script>
    var timelineSwiper = new Swiper(".sw-timeline",{
        slidesPerView: 1,
        breakpoints: {
            370: {
                slidesPerView: 2,
            },
            420: {
                slidesPerView: 3,
            },
            670: {
                slidesPerView: 6,
            },
            920: {
                slidesPerView: 8,
            },
            1200: {
                slidesPerView: 11,
            },
        },
    });
</script>