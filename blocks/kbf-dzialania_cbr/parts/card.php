<div class="row d-flex bg-white rounded-lg-5 rounded-pill ps-lg-5 py-3 gap-4">
    <div class="col-lg-auto d-lg-flex align-items-center text-center"><img src="<?php echo $args['ikona']['url'] ?? get_template_directory_uri().'/images/coronavirus-covid19-virus-insurance-protect.png'?>" alt="" class="w-100 kbf-mw-fit"></div>
    <div class="col-lg d-lg-flex align-items-center text-lg-start text-center"><p class="fs-20 mb-0"><?php echo $args['tekst'] ?? _LOREM?></p></div>
    <div class="col-lg-3 text-center d-lg-flex align-items-center position-relative">
        <img src="<?php echo $args['obrazek']['url'] ?? get_template_directory_uri().'/images/coronavirus-covid19-virus-insurance-protect.png'?>" alt="" class="position-lg-absolute position-absolute" style="right: 0;top: -130%;">
    </div>
</div>