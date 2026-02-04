<?php
get_header();

$postid 		= 63;
$wpcffootertext = get_post_meta($postid, 'wpcf-footer-text', true);
$wpcfcaption 	= get_post_meta($postid, 'wpcf-caption', false);
$wpcfbanner  	= get_post_meta($postid, 'wpcf-banner', true);
$wpcfvideofile  = get_post_meta($postid, 'wpcf-video-file', true);
?>
<section class="homeSliderBlock">
	<a class="scroll-down-arrow" href="javascript:void(0);"> <i class="icon-arrow-down">&nbsp;</i></a>
	<div class="sliderContent textalignleft">
		<div class="captionSlider">
			<?php foreach ($wpcfcaption as $row) { ?>
				<div class="item"><?php echo $row ?></div>
			<?php } ?>
		</div>
	</div>
	<div class="homeSlider test">
		<div class="item" style="background-image: url('<?php echo $wpcfbanner ?>');no-repeat top center / cover; background-size: contain;">
			<video width="100%" autoplay loop>
				<source src="<?php echo $wpcfvideofile ?>" type="video/mp4">
			</video>
		</div>
	</div>
</section>

<div class="testimonials-block" id="jamp">
	<div class="container">
		<?php get_header("ourbusiness") ?>


		<div class="row">
			<div class="col span_12">
				<p>
					<span><?php echo $wpcffootertext ?></span>
				</p>

			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>