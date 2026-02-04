<div class="row">
    <div class="col span_4">
        <?php $wpcfimagesourbusinessunits = get_post_meta(5, 'wpcf-images-our-business-units', true); ?>
        <a href="<?php echo get_permalink(5) ?>"
            title="<?php echo rswm_get_attachment_alt_title_url($wpcfimagesourbusinessunits, 'title') ?>">
            <div class="servicesBlock">

                <img src="<?php echo $wpcfimagesourbusinessunits ?>"
                    title="<?php echo rswm_get_attachment_alt_title_url($wpcfimagesourbusinessunits, 'title') ?>"
                    alt="<?php echo rswm_get_attachment_alt_title_url($wpcfimagesourbusinessunits, 'alt') ?>" />
                <div class="servicesContent">
                    <h3><?php echo get_post_meta(5, 'wpcf-title-our-business-units', true) ?></h3>
                </div>
                <div class="servicesHover">
                    <div class="servicesTable">
                        <div class="servicesTablecell">
                            <h3><?php echo get_post_meta(5, 'wpcf-title-our-business-units', true) ?></h3>
                            <p class="spotlights">
                                <?php echo get_post_meta(5, 'wpcf-short-descrition-our-business-units', true) ?><br />
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- <div class="col span_4">
        <?php $wpcfimagesourbusinessunits = get_post_meta(5834, 'wpcf-images-our-business-units', true) ?>
        <a href="<?php echo get_permalink(5834) ?>" title="<?php echo rswm_get_attachment_alt_title_url($wpcfimagesourbusinessunits, 'title') ?>">
            <div class="servicesBlock">
                <img src="<?php echo $wpcfimagesourbusinessunits ?>" title="<?php echo rswm_get_attachment_alt_title_url($wpcfimagesourbusinessunits, 'title') ?>" alt="<?php echo rswm_get_attachment_alt_title_url($wpcfimagesourbusinessunits, 'alt') ?>" />
                <div class="servicesContent">
                    <h3><?php echo get_post_meta(5834, 'wpcf-title-our-business-units', true) ?></h3>
                </div>
                <div class="servicesHover">
                    <div class="servicesTable">
                        <div class="servicesTablecell">
                            <h3><?php echo get_post_meta(5834, 'wpcf-title-our-business-units', true) ?></h3>
                            <p class="spotlights"><?php echo get_post_meta(5834, 'wpcf-short-descrition-our-business-units', true) ?><br />
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div> -->

    <div class="col span_4">
        <?php $wpcfimagesourbusinessunits = get_post_meta(10, 'wpcf-images-our-business-units', true) ?>
        <a href="<?php echo get_permalink(10) ?>"
            title="<?php echo rswm_get_attachment_alt_title_url($wpcfimagesourbusinessunits, 'title') ?>">
            <div class="servicesBlock">
                <img src="<?php echo $wpcfimagesourbusinessunits ?>"
                    title="<?php echo rswm_get_attachment_alt_title_url($wpcfimagesourbusinessunits, 'title') ?>"
                    alt="<?php echo rswm_get_attachment_alt_title_url($wpcfimagesourbusinessunits, 'alt') ?>" />
                <div class="servicesContent">
                    <h3><?php echo get_post_meta(10, 'wpcf-title-our-business-units', true) ?></h3>
                </div>
                <div class="servicesHover">
                    <div class="servicesTable">
                        <div class="servicesTablecell">
                            <h3><?php echo get_post_meta(10, 'wpcf-title-our-business-units', true) ?></h3>
                            <p class="spotlights">
                                <?php echo get_post_meta(10, 'wpcf-short-descrition-our-business-units', true) ?><br />
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- knit -->
    <div class="col span_4">
        <?php $wpcfimagesourbusinessunits = 'https://rswm.in/wp-content/uploads/2018/05/knitted-plain.jpg'; //get_post_meta(5, 'wpcf-images-our-business-units', true); 
        ?>
        <a href="<?php echo get_permalink(5834) ?>"
            title="<?php echo 'World-class fabrics suitable for active wear'; ?>">
            <div class="servicesBlock">

                <img src="<?php echo $wpcfimagesourbusinessunits ?>"
                    title="<?php echo 'World-class fabrics suitable for active wear' ;//rswm_get_attachment_alt_title_url($wpcfimagesourbusinessunits, 'title') ?>"
                    alt="<?php echo rswm_get_attachment_alt_title_url($wpcfimagesourbusinessunits, 'alt') ?>" />
                <div class="servicesContent">
                    <h3>Knits<?php echo get_post_meta(5834, 'wpcf-title-our-business-units', true) ?></h3>
                </div>
                <div class="servicesHover">
                    <div class="servicesTable">
                        <div class="servicesTablecell">
                            <h3>Knits<?php echo get_post_meta(5834, 'wpcf-title-our-business-units', true) ?></h3>
                            <p class="spotlights">
                                <?php echo 'Knitted fabrics are the answer to our modern day lifestyle as they come with promise of comfort,'; //get_post_meta(5834, 'wpcf-short-descrition-our-business-units', true) 
                                ?><br />
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>