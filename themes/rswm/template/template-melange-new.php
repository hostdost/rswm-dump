<?php
/* Template Name: Melange new */
?>
<?php get_header(); ?>
<style>
	.homeSlider {
		    position: relative;
	}
	input.melange_product {
   -webkit-appearance: none;

width: 26px;
height: 26px;
vertical-align: middle;
margin-right: 0px;
outline: none;
position: relative;
cursor: pointer;
position: absolute;
bottom: 12px;
z-index: 999;
right: 0px;
            top: 0px;
/*background: rgba(255, 255, 255, 0.8705882352941177);*/
   
        
}

a.add_swatch {
   position: relative;
   display: block;
}

input.melange_product:checked:after {
content: "";
display: inline-block;
width: 26px;
height: 26px;
/*
border-right: 1px solid green;
border-bottom: 1px solid green;
*/
/*transform: rotate(33deg);*/
/*
margin-left: 8px;
margin-top: 5px;
*/
    background: url('<?php bloginfo('template_url'); ?>/images/added-icon.png');
  
    background-size: 26px 26px;
    
}
.melangProductArea {
margin-top: 65px;
}
.melangProductArea ul {
margin: 0;
}
a.swatch_inline, a.enquirylistbox{
border: 1px solid #000;
display: inline-block;
text-transform: uppercase;
text-decoration: none;
color: #fff;
background: #000;
padding: 6px 13px;
margin-top: 0;
}
    .img_layer span {
    display: inline-block;
    float: none;
    margin: 0;
    padding: 10px;
    color: #fff;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.img_layer span.img_layerbtn {
    margin-left: -30px;
}

.img_layer span.img_layerbtnEnquire {
    margin-left: 0px;
        height: 100%;
    width: 100%;
    color: transparent;
}
.melangselectedlist {
	    text-align: right;
    margin-right: 26px;
    margin-bottom: 10px;
}
.img_layer {
	position: absolute;
    top: 0;
    z-index:1;
    text-align: center;
    left: 0;
    display: none;
    background:transparent;
    width: 100%;
    height: 100%;
}
    .melangProductArea ul li{
        position: relative;
    }
    .melangProductArea ul li:hover .img_layer{
        display: block;
    }
.img_layerbtn{
	    float: left;
    margin-left: 17px;
}
.end_usage_section li input, .end_usage_section li label, .category_section li input, .category_section li label ,.blind_section li input, .blind_section li label  {
    cursor: pointer;
}
.melangProductright .add_swatchs{
background: url('<?php bloginfo('template_url'); ?>/images/add-icon.png');
    background-size: 20px 20px;
    cursor: pointer;

}
    .fancybox-skin{
        background: #fff;
    }

/*.fancybox-opened {
    z-index: 998 !important;;
}
.fancybox-overlay {
    z-index: 997 !important;;
}*/

.listbox_reponsive .img img{
	width:100%
}
.listbox_reponsive .melangProducDescription {
    margin-top: 14px;
}
.listbox_reponsive .img {
    padding-left: 0px;
}
.listbox_reponsive .col.span_12 {
    margin-bottom: 10px;
        border-bottom: 1px solid #eee;
    padding-bottom: 9px;
    padding-left:0px;
}
.enquerylistform-btn {
    clear: both;
    text-align: center;
    padding: 10px 0px 10px 0px;
}
.listbox_reponsive.col.span_12 {
    min-height: 250px;
}
.enquirylistbox {
	margin-left:10px;
}
</style>
    <div class="homeSlider">
        <div class="item" style="background-image: url('<?php bloginfo('template_url'); ?>/images/melangeBg.jpg');no-repeat top center / cover;">
<div class="melangeBanner">
    <!--<img src="<?php echo get_template_directory_uri() ?>/images/melangeBanner1.jpg" alt=""/>-->
    <div class="melangeOverlay">
        <div class="melangeContent" style="padding: 20px;">
            <h2>Melange Yarns</h2>
            <p>
   With a total of 75,000 spindles, we produce 14,000 metric tons of melange yarns every year.
            </p>
        </div>
    </div>
</div>
        </div></div> 
          <div class="testimonials-block" style="    padding: 40px 0px 0px 40px;">
    <div class="container">
		 <div class="lnjBhilwaraContent">
         <p>Blending a spectrum of colours and a plethora of different fibres, we breathe a beautiful range of dyed and non-dyed yarns into existence. Our colour pallette is ever-expanding and strives to capture attention with its vibrant visuals and diverse shades.</p>
<p>&nbsp;</p>
<p>You never know the number of outcomes that become possible when there’s a will to innovate. Hence, at RSWM we don’t just encourage but appreciate unconventional blending ideas, colour combinations and spinning techniques to ultimately produce a magnificent line of products that evolve into jewels of our crown.</p>
<p>&nbsp;</p>
<p>Melange yarn is widely used for undergarments, shirts, business suits, socks and all sportswear, as well as bed linen, towels and other home fabric products.</p>
        </div>
     
    </div>
</div>
<?php $trems = get_terms('yarns', array('hide_empty' => true));?>
<div class="melange_filter_conainer">
<button class="filter_button">Filter</button>
</div>
<div class="melangColorBox new">
    <div class="container">
        <div class="col span_3">
            <div class="melangColorBoxLeft category_section">
                <h2>Yarns</h2>
                <ul>
					<?php foreach($trems as $return) { ?>
                    <li>
                        <input type="checkbox" name="category[]" value="<?php echo $return->term_id ?>" id="<?php echo $return->slug ?>">
                        <label for="<?php echo $return->slug ?>"><?php echo $return->name ?></label>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <?php $endusageterms = get_terms('end-usage', array('hide_empty' => true));?>
         <div class="col span_6">
             <?php $swatche_terms = get_terms('swatche', array('hide_empty' => true));?>
        <div class="col span_12">
            <div class="melangColorBoxRight color_section">
                <h2>Swatches</h2>
                <ul>
					<?php foreach($swatche_terms as $term ){ ?>
						<?php //$colorTerm = get_term_meta( $term->term_id, "wpcf-color-code", true ); ?>
						<?php if($term->term_id == 74 ) { ?>
							<?php $colorTerm = '#28304c'; ?>
						<?php } elseif($term->term_id == 179 ) { ?>
							<?php $colorTerm = '#000080'; ?>
							<?php } else { ?>
						<?php $colorTerm = $term->slug; ?>
						<?php } ?>
                    <li>
                        <input type="radio" name="color[]" value="<?php echo $term->term_id ?>" id="<?php echo $term->slug ?>" style="background:<?php echo $colorTerm != '' ? $colorTerm : "#9d9e9d" ?>">
                        <label for="<?php echo $term->slug ?>"></label>
                 </li>
                    <?php } ?>
                   
                </ul>
            </div>
        </div>
             <div class="col span_12">
            <div class="melangColorBoxLeft end_usage_section">
                <h2>End Usage</h2>
                <ul>
					<?php foreach($endusageterms as $return) { ?>
                    <li>
                        <input type="checkbox" name="end_usage[]" value="<?php echo $return->term_id ?>" id="<?php echo $return->slug ?>">
                        <label for="<?php echo $return->slug ?>"><?php echo $return->name ?></label>
                    </li>
                    <?php } ?>
                </ul>
            </div>
             
             
             <?php $booktrems = get_terms('collection', array('hide_empty' => true));?>
              <div class="melangColorBoxLeft book_section">
                <h2>Collection</h2>
                <ul>
					<?php foreach($booktrems as $return) { ?>
                    <li>
                        <input type="checkbox" name="book[]" value="<?php echo $return->term_id ?>" id="<?php echo $return->slug ?>">
                        <label for="<?php echo $return->slug ?>"><?php echo $return->name ?></label>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        
             </div>
        </div>
         <?php $blendtrems = get_terms('blend', array('hide_empty' => true));?>
         <div class="col span_3">
            <div class="melangColorBoxLeft blind_section">
                <h2>Blend</h2>
                <ul>
					<?php foreach($blendtrems as $return) { ?>
                    <li>
                        <input type="checkbox" name="blend[]" value="<?php echo $return->term_id ?>" id="<?php echo $return->slug ?>">
                        <label for="<?php echo $return->slug ?>"><?php echo $return->name ?></label>
                    </li>
                    <?php } ?>
                </ul>
            </div>
         </div>
        
        
        
    </div>
</div>

<!--div class="melangColorBoxlink"><a href="javascript:void(0);">Show Filters +</a></div-->
<?php $Args = array('post_type' => 'melange', 'posts_per_page' =>12, 'post_status' => 'publish', 'orderby' => 'date', 'order' => 'DESC');  ?>
<?php $query = new WP_Query($Args); ?>
<?php if($query->have_posts() ) { ?>
<div class="melangProductArea">
    <div class="container">
		<div class="melangselectedlist" style="display:none;"><span>1</span> SWATCHES <a class="enquirylistbox" href="javascript:void(0)">Enquiry list</a> <a class="swatch_inline" href="javascript:void(0)">Enquire</a></div>
<input type="hidden" value="" id="selectedswetch_list" class="selectedswetch_list">

        <ul class="product_details_categroy_wise_responsive">
		<?php while($query->have_posts() ) { $query->the_post() ?>
			<?php $shadeNo = get_post_meta(get_the_ID(), 'wpcf-shade-no', true); ?>
			<?php $wpcflotno = get_post_meta(get_the_ID(), 'wpcf-lot-no', true); ?>
			<?php $imgsrc = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'large')[0];  ?>
			<?php $imgsrc = $imgsrc != '' ? $imgsrc : get_template_directory_uri()."/images/melangProductArea3.jpg" ?>
			<?php $wpcfbrandname = get_post_meta(get_the_ID(),"wpcf-brand-name",true);  ?>
			<?php $wpcfbrandname1 = $wpcfbrandname != '' ? $wpcfbrandname : get_the_title(); ?>
            <li class="melangProducdetails">
                <a href="javascript:void(0)" data-tag="<?php echo get_the_ID() ?>" class="add_swatch">
                    <img src="<?php echo $imgsrc ?>" alt="<?php echo get_the_title() ?>"/>
                    <span class="img_layer">
						<!--span class="img_layerbtn add_swatchs">Add</span--> 
						<span class="img_layerbtnEnquire" data-tag="<?php echo get_the_ID() ?>">Enquiry</span>
                    </span>
                </a>
                <div class="melangProducDescription">
                    
                    
                     <div class="melangProductleft">
                    
                    <h2><?php echo $wpcfbrandname1; ?></h2>
                    <p><?php /*if($shadeNo != '') { ?>
						Shade# <?php echo $shadeNo ?>
						<?php } ?>
<!--
						<?php echo  $shadeNo != '' ? '|' : '' ?>
					<?php if($wpcflotno != '') { ?>
					  Lot No.- <?php echo $wpcflotno ?>
					  <?php } */?>

					</p>
                    </div>
                    <div class="melangProductright">
						<span class="img_layerbtn add_swatchs">
                        
                        </span> 

						 <input type="checkbox" value="<?php echo get_the_ID() ?>" class="melange_product" style="display:none">
                            
                    </div>
                    
                    
                    
                </div>
            </li>
           <?php } ?>
        </ul>
    </div>
   
</div>
<?php } ?>
<?php if( $query->found_posts > 12 ) { ?>
	<div style="clear: both;"></div>
   <input type="hidden" name="category_id" id="category_id" value="">
	<input type="hidden" name="swatches_id" id="swatches_id" value="">
	  <input type="hidden" name="blend_id" id="blend_id" value="">
	<input type="hidden" name="end_usage_id" id="end_usage_id" value="">
	<input type="hidden" name="book_id" id="book_id" value="">
	<input type="hidden" name="current_page" id="current_page" value="2">
    <div class="load_more" style="text-align: center;position: static;clear: both;"><a href="javascript:void(0)" class="all-collections" id="load_more225">View more</a></div>
<?php } ?>


<div class="testimonials-block" id="jamp">
    <div class="container">
        <div class="lnjBhilwaraContent">
            <h2>Our Business Units</h2>
        </div>  
        <?php get_header('ourbusiness'); ?>
    </div>
</div>


<?php get_template_part('contact-form') ?>


<div class="inner-design-pop" id="data-form" style="display:none;">
    <div class="row product_details11" style="min-width:500px;min-height:300px;">
		
    </div>
    <!--div class="forBusibess edgeForBusibess">  
    <h3>For Business Enquiries</h3>
    <form method="post" id="melange_product_details" name="melange_product_details">
        <input type="text" name="melange_name" id="melange_name" placeholder="name"/>
        <input type="text" name="melange_phone" id="melange_phone" placeholder="phone number"/>
        <input type="text" name="melange_email" id="melange_email" placeholder="email address"/>
        <input type="text" name="melange_company" id="melange_company" placeholder="company"/>
        <textarea name="melange_message" id="melange_message" placeholder="message"></textarea>
        <input type="hidden" name="melange_post_id" id="melange_post_id" value=""/>
        <input type="hidden" name="action" value="melange_form_submission">
        <button id="melange_product_details_subbtn">Submit</button>
    </form>
    <div class="melange_responsive_scuess"></div>
</div-->

</div>



<div style="display:none;">
    <div id="swetchenqueryform">
     <div class="forBusibess edgeForBusibess">  
        <h3>For Business Enquiries</h3>
		<form method="post" id="swetch_melange_product_details" name="swetch_melange_product_details">
			<input type="text" name="melange_name" id="swetch_melange_name" placeholder="name"/>
			<input type="text" name="melange_phone" id="swetch_melange_phone" placeholder="phone number"/>
			<input type="text" name="melange_email" id="swetch_melange_email" placeholder="email address"/>
			<input type="text" name="melange_company" id="swetch_melange_company" placeholder="company"/>
			<textarea name="melange_message" id="swetch_melange_message" placeholder="message"></textarea>
			<input type="hidden" name="melange_post_id" id="swetch_melange_post_id" value=""/>
			<input type="hidden" name="action" value="swetch_melange_form_submission">
			<button id="swetch_melange_product_details_subbtn">Submit</button>
		</form>
		<div class="swetch_melange_responsive_scuess"></div>
    </div>
    </div>
</div>

<div class="enquerylistfboxs" style="display:none;">
<div id="enquerylistform">
		<div class="listbox_reponsive col span_12">
			
    	</div>
    	<div class="enquerylistform-btn"><a class="swatch_inline" href="javascript:void(0)">Enquire</a></div>
    </div>
</div>



<script>
	var swetch_post_id = new Array();
jQuery(document).ready(function(){
	
	jQuery(document).on('click','.melange_product',function(){
		var $this = jQuery(this).parents('li').find('a');
		var datatag = $this.data('tag');
		
			$this.find(this).removeAttr('checked');
			$this.find(this).css('display','none');
			swetch_post_id.splice( $.inArray(datatag, swetch_post_id), 1 );
			var joinsss = swetch_post_id.join(',');
			var n = swetch_post_id.length;
			console.log(joinsss);
			jQuery('.melangselectedlist > span').html(n);
			jQuery('.selectedswetch_list').val(joinsss);
			if(n == 0 ) {
				jQuery('.melangselectedlist ').css('display','none');
			}
	});
	
	jQuery(document).on('click','.add_swatchs',function(){
		
		var $this = jQuery(this).parents('li').find('a');
		var checkedinput = jQuery(this).parents('li');
		var datatag = $this.data('tag');
		console.log(datatag);
		var ischeck = checkedinput.find('.melange_product').attr('checked')
		if(ischeck == 'checked'){
			
			checkedinput.find('.melange_product').removeAttr('checked');
			checkedinput.find('.melange_product').css('display','none');
			swetch_post_id.splice( $.inArray(datatag, swetch_post_id), 1 );
			var joinsss = swetch_post_id.join(',');
			var n = swetch_post_id.length;
		
		
		} else {
			checkedinput.find('.melange_product').attr('checked',true);
			checkedinput.find('.melange_product').css('display','block');
			swetch_post_id.push(datatag);
			var joinsss = swetch_post_id.join(',');
			var n = swetch_post_id.length
			jQuery('.melangselectedlist ').css('display','block');
			
		
		}
		jQuery('.melangselectedlist > span').html(n);
		jQuery('.selectedswetch_list').val(joinsss);
		if(n == 0 ) {
			jQuery('.melangselectedlist ').css('display','none');
		}
	});
	

	
	jQuery(document).on('click','.melangselectedlist a.swatch_inline, #enquerylistform a.swatch_inline', function() {
	
		var post_id = jQuery(document).find('#selectedswetch_list').val();
		jQuery(document).find('#swetch_melange_post_id').val(post_id);
	   jQuery.fancybox({
		   width: '100%',
			height: 'auto',
			maxWidth: 550,
		   'href': '#swetchenqueryform'
		}); 
	});
    
    
    
    /*jQuery(document).on('click','.melangselectedlist', function() {
	   jQuery.fancybox({
		   width: '100%',
			height: 'auto',
			maxWidth: 550,
		   'href': '#enquerylistform'
		}); 
	});*/
	
	jQuery(document).on('click','.melangselectedlist a.enquirylistbox', function() {
		var post_id = jQuery(document).find('#selectedswetch_list').val();
		jQuery(document).find('.loader').css({'display':'block', 'background':'rgba(0, 0, 0, 0.25) url(<?php echo get_template_directory_uri() ?>/images/preload.svg) no-repeat center center','background-size': '100px 100px'});

		jQuery.post('<?php echo admin_url("admin-ajax.php") ?>',{"postid":post_id,"action": "more_enquirylistbox"},function(resp){
			jQuery(document).find('.loader').css({'display':'none'});
			if(resp.status == 1) {
				var item = resp.list
				var $html = '';
				for (var i = 0; i < item.length; i++) {
					 $html +='<div class="col span_12">';
					  $html +='<div class="col span_2 img"><img src="'+item[i]['img']+'" alt="'+item[i]['title']+'"/></div>';
					  $html +='<div class=" col span_8 listbox melangProducDescription">';
						$html +='<div class="listboxpleft melangProductleft">';
						$html +='<h2>'+item[i]['title']+'</h2><p>';
						
						  if(item[i]['shadeNo'] != '') {
							 $html += 'Shade# '+item[i]['shadeNo'];
						  }
						  if(item[i]['shadeNo'] != '' && item[i]['lotno'] != '') {
							 $html += ' | ';
						  }
						  if(item[i]['lotno'] != '') {
							 $html += ' Lot No.- '+item[i]['lotno'];
						  }
							$html +='</p>';
							$html +='</div>';
						  $html +='</div>';
						  
						 $html +='</div>';
					}
				jQuery(".listbox_reponsive").html($html);
				
				
				jQuery.fancybox({
				   width: '100%',
					height: 'auto',
					maxWidth: 550,
				   'href': '#enquerylistform'
				});
				
				
			}
		},'json');
	    
	});
	
    
    
	jQuery(document).on('click','#swetch_melange_product_details_subbtn', function(){
				jQuery(this).html('Please wait...');
				jQuery(this).prop('disabled', true);
				jQuery.post('<?php echo admin_url('admin-ajax.php'); ?>',jQuery("#swetch_melange_product_details").serialize(),function(resp){
				jQuery('#swetch_melange_product_details_subbtn').html('Submit');
				jQuery('#swetch_melange_product_details_subbtn').prop('disabled', false);
				jQuery(".swetch_melange_responsive_scuess").html('');
					if(resp == 'name' ) {
						jQuery('#swetch_melange_name').css('border','1px solid red');
					} else { 
						jQuery('#swetch_melange_name').css('border','1px solid #b7b7b7');
					}
					if(resp == 'phone' ) {
						jQuery('#swetch_melange_phone').css('border','1px solid red');
					} else {
						jQuery('#swetch_melange_phone').css('border','1px solid #b7b7b7');
					}
					if(resp == 'email' ) {
						jQuery('#swetch_melange_email').css('border','1px solid red');
					} else {
						jQuery('#swetch_melange_email').css('border','1px solid #b7b7b7');
					}
					if(resp == 'company' ) {
						jQuery('#swetch_melange_company').css('border','1px solid red');
					} else {
						jQuery('#swetch_melange_company').css('border','1px solid #b7b7b7');
					}
					if(resp == 1 ) {
						jQuery("#swetch_melange_product_details")[0].reset();
						jQuery(".swetch_melange_responsive_scuess").html('Your enquiry has been submitted!');
						jQuery(".swetch_melange_responsive_scuess").css({'color':'green', "text-align": "left","margin-top": "11px","font-size": "14px","text-align": "center"});
					}
				});
				return false;
		});
});
</script>
<?php get_footer(); ?>
