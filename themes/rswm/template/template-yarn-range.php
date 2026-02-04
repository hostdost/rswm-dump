<?php 
	/* Template Name: Yarn range */ 
	get_header();
	global $post;
	$postid 						=  $post->ID;
	$wpcftitle 						=  get_post_meta($postid, 'wpcf-title', false);
	$wpcfcaption    				=  get_post_meta($postid, 'wpcf-caption', false);
	$wpcfbanner  					=  get_post_meta($postid, 'wpcf-banner', true);
	$wpcfvideofile  				=  get_post_meta($postid, 'wpcf-video-file', true);
	
	$imagegreigeyarn  				=  get_post_meta($postid, 'wpcf-image-greige-yarn', true);
	$titlegreigeyarn  				=  get_post_meta($postid, 'wpcf-title-greige-yarn', true);
	$shortdescriptiongreigeyarn  	=  get_post_meta($postid, 'wpcf-short-description-greige-yarn', true);
	
	$imagedyed 				        =  get_post_meta($postid, 'wpcf-yarn', true);
	$titledyedyarn  				=  get_post_meta($postid, 'wpcf-text-yarn', true);
	$shortdescriptiondyedyarn  	    =  get_post_meta($postid, 'wpcf-desc-yarn', true);	
	
	$imagemelangeyarns  			=  get_post_meta($postid, 'wpcf-image-melange-yarns', true);
	$titlemelangeyarns 				=  get_post_meta($postid, 'wpcf-title-melange-yarns', true);
	$shortdescriptionmelangeyarns  	=  get_post_meta($postid, 'wpcf-short-description-melange-yarns', true);
	
	$aboutdescription  				=  get_post_meta($postid, 'wpcf-about-description', true);
	$wpcfaboutimage  				=  get_post_meta($postid, 'wpcf-about-image', true);
	$wpcfabouttitle  				=  get_post_meta($postid, 'wpcf-about-title', true);
	$aboutdescription  				=  get_post_meta($postid, 'wpcf-about-description', true);
	$clent_logo 					=  json_decode(stripslashes(get_post_meta($postid,'wpfc_logo_path',true)));
?>
<section class="homeSliderBlock">
    <div class="homeSlider">
		<div class="item">
            <video width="100%" autoplay loop>
              <source src="<?php echo $wpcfvideofile ?>" type="video/mp4">
            </video>
            <img class="yarnPlaceHolder" src="<?php echo $wpcfbanner ?>" alt="<?php echo rswm_get_attachment_alt_title_url( $wpcfbanner, 'alt' ) ?>">
        </div>
    </div>
     <a class="scroll-down-arrow" href="javascript:void(0);"> <i class="icon-arrow-down">&nbsp;</i></a>
    <div class="sliderContent">
        <div class="captionSlider">
			<?php for($i=0; $i<count($wpcftitle);$i++ ) { ?>
            <div class="item">
                <h1><?php echo $wpcftitle[$i] ?></h1>
                <p><?php echo $wpcfcaption[$i] ?></p>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="sub-category">
    <div class="container">
        <div class="row">
		 <div class="col span_12">
			 <div class="lnjBhilwaraContent">
          <?php echo wpautop(get_post_field( 'post_content', $postid )); ?>
        </div>
        </div>
            <div class="col span_4" >
                <a href="<?php echo site_url('/dyed/') ?>">
                <div class="servicesBlock">
                    <img src="<?php echo $imagedyed ?>" alt="">
                    <div class="servicesContent">
                        <h3><?php echo $titledyedyarn; ?></h3>
                    </div>
                    <div class="servicesHover">
                        <div class="servicesTable">
                            <div class="servicesTablecell">
                                <h3><?php echo $titledyedyarn; ?></h3>
                                <p class="spotlights"><?php echo $shortdescriptiondyedyarn; ?><br>
                                <i class="fa fa-angle-right" aria-hidden="true"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>		
            <div class="col span_4">
                <a href="<?php echo site_url('/greige/') ?>">
                <div class="servicesBlock">
                    <img src="<?php echo $imagegreigeyarn ?>" alt="<?php echo rswm_get_attachment_alt_title_url( $imagegreigeyarn, 'alt' ) ?>">
                    <div class="servicesContent">
                        <h3><?php echo $titlegreigeyarn ?></h3>
                    </div>
                    <div class="servicesHover">
                        <div class="servicesTable">
                            <div class="servicesTablecell">
                                <h3><?php echo $titlegreigeyarn ?></h3>
                                <p class="spotlights"><?php echo $shortdescriptiongreigeyarn ?><br>
                                <i class="fa fa-angle-right" aria-hidden="true"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col span_4" onclick="javascript:setLocation('')">
                <a href="<?php echo site_url('/melange/') ?>">
                <div class="servicesBlock">
                    <img src="<?php echo $imagemelangeyarns ?>" alt="">
                    <div class="servicesContent">
                        <h3><?php echo $titlemelangeyarns ?></h3>
                    </div>
                    <div class="servicesHover">
                        <div class="servicesTable">
                            <div class="servicesTablecell">
                                <h3><?php echo $titlemelangeyarns ?></h3>
                                <p class="spotlights"><?php echo $shortdescriptionmelangeyarns ?><br>
                                <i class="fa fa-angle-right" aria-hidden="true"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
			
        </div>
     
    </div>
</section>
    
<!-- <section class="yarn-clients">
    <div class="container">
        <div class="block-heading">Clients</div>
        
        <div class="clientsSlider">
			<?php //for($ct=0; $ct<count($clent_logo); $ct++ ) { ?>
				<div class="item"><img src="<?php //echo $clent_logo[$ct] ?>" alt="<?php //echo rswm_get_attachment_alt_title_url( $clent_logo[$ct], 'alt' ) ?>" /></div>
            <?php //} ?>
        </div>
    </div>
</section> -->
<!-- <section class="manufacturing-facts" style="padding: 0px;">
    <div class="manufacturing-facts-content">
        <div class="block-heading"><?php echo $wpcfabouttitle ?></div>
        <p><?php //echo nl2br($aboutdescription) ?></p>
    </div>
    <img src="<?php //echo $wpcfaboutimage ?>" alt="<?php //echo rswm_get_attachment_alt_title_url( $wpcfaboutimage, 'alt' ) ?>">
</section> -->

<div class="testimonials-block" id="jamp">
    <div class="container">
        <div class="block-heading">Our Business Units</div>
       <?php get_header('ourbusiness'); ?>
      
    </div>
</div>
<section class="aboutContact_form yarn-range-about">
    <?php get_template_part('contact-form') ?>
</section>

<?php get_footer() ?>
