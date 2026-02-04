<?php 
	/* Template Name: Custom home */ 
	 
get_header();
global $post;
echo $postid = $post->ID; 
$wpcffootertext = get_post_meta($postid, 'wpcf-footer-text', true);
while( have_posts() ) { the_post();
$wpcfcaption = get_post_meta(get_the_ID(), 'wpcf-caption', false);
$wpcfbanner  = get_post_meta(get_the_ID(), 'wpcf-banner', true);
$wpcfvideofile  = get_post_meta(get_the_ID(), 'wpcf-video-file', true);
?>
<link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/css/custom-new.css" >
<style>.dem{padding: 40px 0px 0px 40px;}</style>
<section class="homeSliderBlock">
    <a class="scroll-down-arrow" href="javascript:void(0);"> <i class="icon-arrow-down">&nbsp;</i></a>
    <div class="sliderContent textalignleft">
        <div class="captionSlider">
			<?php foreach($wpcfcaption as $row ) { ?>
            <div class="item"><?php echo $row ?></div>
            <?php } ?>
         </div>
    </div>
    <div class="homeSlider">
		<?php //$wpcfvideofile ?>
        <div class="item" style="background-image: url('<?php echo $wpcfbanner ?>');no-repeat top center / cover; background-size: contain;">
            <video width="100%" autoplay loop muted id="homeslideid">
              <source src="<?php echo get_template_directory_uri() ?>/video/rswm_home_page.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</section>
<?php //} ?>
  <div class="testimonials-block dem" style=";">
    <div class="container">
		 <div class="lnjBhilwaraContent">
			 <h1>ABOUT RSWM LTD.</h1>
         <p>At RSWM, we produce and supply high-quality yarns to some of the most renowned brands in over 76 countries all over the world. So, there's a high chance that whatever you're wearing has <a href="<?php echo site_url('/');?>yarn-range/"> yarns </a> made by us.</p>
         <p>&nbsp;</p>
			<p>For the last 57 years, we have created stories through our high-quality cotton, <a href="<?php echo site_url('/');?>melange/"> melange,</a> synthetic and novelty yarns, along with suiting and denim fabric that’s used to drape populations around the world. While providing you with the best quality of yarns and fabrics, we are also committed to keeping our environment green and clean through our sustainable model.</p>
        </div>
    </div>
</div>
<div class="testimonials-block" id="jamp">
    <div class="container">
        <?php get_header("ourbusiness") ?>
        <div class="row">
            <div class="col span_12">
                <p class="footer_text"> 
                    <span class="quote">RSWM is one of the largest manufacturers and exporters of<br> synthetic and blended spun yarns from India.</span>  
                </p> 
                
            </div> 
        </div>
    </div>
</div> 
<?php get_footer(); ?>

