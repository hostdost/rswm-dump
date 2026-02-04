<?php /* Template Name: News-and-Events */ ?>
<?php get_header() ?>

<?php $args = array("post_type" => "news-and-event","post_status" => "publish","posts_per_page" => -1,"orderby" => "date", "order" => "DESC"); ?>
<?php $Query = new WP_Query($args); ?>
<div class="testimonials-block news_coverge" style="margin-top:20px;">
    <div class="container">
		<div class="row">
			<div class="col span_12" style="margin-top: 30px;">
		<h1 class="new_brd">NEWS COVERAGE</h1> 
		</div>
		</div>
<div class="row">
	<?php while($Query->have_posts()){ $Query->the_post(); ?>
		<?php $imgbanner = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), "full" )[0]; ?>
		<?php $wpcfmagazinelink = get_post_meta(get_the_ID(),'wpcf-magazine-link',true); ?>
		<?php $wpcfsource = get_post_meta(get_the_ID(),'wpcf-source',true); ?>
		<?php $wpcflargeimage = get_post_meta(get_the_ID(),'wpcf-large-image',true); ?>
		<?php if(isset($wpcfmagazinelink) && !empty($wpcfmagazinelink) ) { $imglink = $wpcfmagazinelink;} else { $imglink = $wpcflargeimage; } ?>
    <div class="col span_3" > 
		
        <a href="<?php echo $imglink ?>" target="_blank">
        <div class="servicesBlock">
			
            <img src="<?php echo $imgbanner ?>" title="<?php echo rswm_get_attachment_alt_title_url( $imgbanner, 'title' ) ?>" alt="<?php echo rswm_get_attachment_alt_title_url( $imgbanner, 'alt' ) ?>" />
            <div class="servicesContent">
				<h2 class="Source">the hindustan</h2>
                <!--h3><?php echo $wpcfsource ?>: <?php echo get_the_title() ?></h3-->
            </div>
            <div class="servicesHover">
                <div class="servicesTable">
                    <div class="servicesTablecell">
						
						<?php echo isset($wpcfsource) && !empty($wpcfsource) ? "<h2 class='Source'>".$wpcfsource."</h2>" : '' ?>
                        <h3><?php //echo isset($wpcfsource) && !empty($wpcfsource) ? $wpcfsource.":" : '' ?> <?php echo get_the_title() ?></h3>
                        
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <?php } ?>
  </div>

</div>
</div>


<style>
	h2.new_brd {
   position: relative;
}

h2.new_brd:before {
   content:"";
   position:absolute;
   width:40px;
   background:#d7b369;
   height:2px;
   top:25px;
   left:0px;
   right:0px;
   margin:0px auto;
   }
   .servicesBlock {
    margin: 5px 5px 5px 5px;
   /* box-shadow: 0px 0px 7px #000;*/
       border: 1px solid #ccc;
}
.col {
	padding:0 0px;
}
/*
.news_coverge .servicesHover {
    display: none;
    opacity: 0;
}

.news_coverge .servicesBlock:hover .servicesContent {
    opacity: 1;
}
.news_coverge .servicesContent {
    top: auto;
    bottom: 0px;
    transform: translate(-50%, 0%);
    width: 100%;
    background: rgba(0,0,0,0.67);
    padding: 10px;
    min-height: 50px;
}
 .news_coverge .servicesContent h3 {
    font-size: 14px;
    text-align: justify;
}
*/
.servicesContent h3, .servicesHover h3 {
	    text-transform: initial;
}
.news_coverge .servicesBlock:hover img{filter: none;}
.news_coverge .servicesContent {
    display: none;
}
.news_coverge .servicesBlock:hover .servicesHover{    background: rgba(0,0,0,0.67);}
.servicesTablecell h3 {
    
    font-size: 15px;
    line-height: 1.2;
}
h2.Source:before {content:'';
position:absolute;background: #fff;width: 40px;height: 2px;left: 0px;right: 0px;margin: 0px auto;top: 22px;}
h2.Source{
   position:relative;
   color:#fff;
   margin:15px;
       font-size: 16px;
}

</style>

<?php get_footer() ?>
