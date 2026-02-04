<?php /* Template Name: Spring Summer 2023 */ ?>
<?php get_header() ?>
<?php global $post; ?> 
<?php $ppid = 5852;?>
<?php
$gkj_collection_title       = get_post_meta($ppid,'gkj_collection_title',false);
$gkj_collection_description = get_post_meta($ppid,'gkj_collection_description',false);
$gkj_collection_color       = get_post_meta($ppid,'gkj_collection_color',false);
$gkj_collection_image       = get_post_meta($ppid,'gkj_collection_image',false);	
$gkj_collection_product_info_image       = get_post_meta($ppid,'gkj_collection_product_info_image',false);		
$gkj_collection_product_info_title       = get_post_meta($ppid,'gkj_collection_product_info_title',false);		
$gkj_collection_product_other_info_title = get_post_meta($ppid,'gkj_collection_product_other_info_title',false);
$imgsrc                     = wp_get_attachment_image_url( get_post_thumbnail_id($ppid), 'full' );
?>
    <link rel='stylesheet' href="<?php echo get_template_directory_uri() ?>/css/rswm.css?ver=1.1">
	<link rel='stylesheet' href="<?php echo get_template_directory_uri() ?>/css/template.css">
    <div class="banner">
        <div class="row">
            <div class="col span_12">
                <img src="<?php echo $imgsrc ?>" alt="<?php echo get_the_title($ppid) ?>">
				<h1 class="hider"><?php echo get_the_title($ppid) ?></h1>
            </div>
        </div>
    </div>

<div class="reneu-whole-wrap">
    <?php $ks = 1; ?>
    <?php for($i=0; $i<count($gkj_collection_title ); $i++) { ?>
    <?php $product_img = unserialize($gkj_collection_product_info_image[$i]); ?>
    <?php $product_title = unserialize($gkj_collection_product_info_title[$i]); ?>
    <?php $product_other_ingo_title = unserialize($gkj_collection_product_other_info_title[$i]); ?>
    <?php if($ks % 2 == 0 ) { ?>
    <section class="productZommer section2 mob-margin even A<?php echo $ks ?>">
        <div class="row MakeItTable">
            <div class="col span_6 padding-out reneuimage-wrap">
                <img src="<?php echo $gkj_collection_image[$i] ?>" alt="<?php echo $gkj_collection_title[$i] ?>">
            </div>
            <div class="col span_6 padding-out  make-it-res reneu-content" style="background-color:<?php echo $gkj_collection_color[$i] ?>">
                <div class="glamitude banner-button" style="color:<?php echo $gkj_collection_color[$i] ?>">
                    <h3>
                        <?php echo $gkj_collection_title[$i] ?>
                    </h3>
                </div>
                <div class="para2">
                    <?php echo wpautop(stripslashes($gkj_collection_description[$i])) ?>
                </div>
                <div class="rswm-btn opposite-rswm-btn" style="color:<?php echo $gkj_collection_color[$i] ?>">
                    <div class="rswm-enquire common-btn">
                        <h3><a href="#about_scroll_form" style="color:<?php echo $gkj_collection_color[$i] ?>">Enquire</a></h3>
                    </div>
                     <div class="btn-slide banner-button common-btn">
                    <h3> view</h3>
                </div>
                </div>
            </div>
        </div>
        <div class="section1" style="opacity:0;">
            <div class="container1">
                <div class="row section1-slider">
                    <?php for($pm=0;$pm<count($product_img) or $pm == $jk; $pm++) { ?>
                    <div class="col span_3 item" data-btr="<?php echo $i ?>,<?php echo $pm ?>">
                        <div class="collection-image">
                            <img src="<?php echo rswm_get_attachment_id_by_url( stripslashes($product_img[$pm]), 'medium' ) ?>" data-src="<?php echo stripslashes($product_img[$pm]) ?>">
                        </div>
                        <div class="imgcontent">
                            <h4><?php echo stripslashes($product_title[$pm]) ?></h4>
                        </div>
                    </div>
                    <?php } ?>
                </div>
				   <button class="back-button">back</button>
            </div>       
        </div>
    </section>
    <?php } else { ?>


    <section class="productZommer section2 mob-padding odd A<?php echo $ks ?>">
        <div class="row MakeItTable">
            <div class="col span_6 padding-out make-it-res reneu-content" style="background-color:<?php echo $gkj_collection_color[$i] ?>">
                <div class="blue banner-button" style="color:<?php echo $gkj_collection_color[$i] ?>">
                    <h3>
                        <?php echo $gkj_collection_title[$i] ?>
                    </h3>
                </div>
                <div class="para1">
                    <?php echo wpautop(stripslashes($gkj_collection_description[$i])) ?>
                </div>
                <div class="rswm-btn" style="color:<?php echo $gkj_collection_color[$i] ?>">
                     <div class="btn-slide banner-button common-btn">
                    <h3> view </h3>
                </div>
                    <div class="rswm-enquire common-btn">
                        <h3><a href="#about_scroll_form" style="color:<?php echo $gkj_collection_color[$i] ?>">Enquire</a></h3>
                    </div>
                </div>
            </div>
            <div class="col span_6 padding-out reneuimage-wrap">
                <img src="<?php echo $gkj_collection_image[$i] ?>" alt="<?php echo $gkj_collection_title[$i] ?>" >
            </div>
        </div>

        <div class="section1" style="opacity:0;">
            <div class="container1">
                <div class="row section1-slider">
                    <?php for($pm=0;$pm<count($product_img) or $pm == $jk; $pm++) { ?>
                    <div class="col span_3 item" data-btr="<?php echo $i ?>,<?php echo $pm ?>">
                        <div class="collection-image">
                            <img src="<?php echo rswm_get_attachment_id_by_url( stripslashes($product_img[$pm]), 'medium' ) ?>" data-src="<?php echo stripslashes($product_img[$pm]) ?>">
                        </div>
                        <div class="imgcontent">
                            <h4><?php echo stripslashes($product_title[$pm]) ?></h4>
                        </div>
                    </div>
                    <?php } ?>
                </div>
				<button class="back-button">back</button>
            </div>
        </div>
    </section>
    <?php } ?>
    <?php $ks++ ?>
    <?php } ?>

</div>

   <div class="inner-design-pop" id="data-form" style="display:none;">
    <div class="row product_details11" style="min-width:500px;min-height:300px;">
		<div>Please wait..</div> 
    </div>
 </div>

    
<section class="aboutContact_form collection-range-about reneu-range-summer" id="about_scroll_form">
    <?php get_template_part('contact-form') ?>
</section>

    <?php get_footer() ?>
    <script type="text/javascript" src="https://www.rswm.in/wp-content/themes/rswm/js/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            jQuery(document).on('click', ".collection-image", function() {
				 jQuery(".product_details11").html('<div style="text-align: center;"><img src="<?php echo get_template_directory_uri() ?>/images/preload.svg" style="width:100px;margin: 23px;"></div>');
				jQuery.fancybox({
                        width: '100%',
                        height: 'auto',
                        maxWidth: 1000,
                        'href': '#data-form'
                    });
               jQuery(document).find('.zoomContainer').remove();
				jQuery.removeData(jQuery(document).find('.zoomContainer'), 'elevateZoom');
                jQuery("#ZommerOnCollection").html('<div class="loadingicon">loading..</div>');
                var pid = jQuery(this).parent('.item').data('btr');
                jQuery('.melange_responsive_scuess').html('');
                jQuery.post("<?php echo admin_url('admin-ajax.php') ?>", {
					'pppid':<?php echo $ppid; ?>,
                    'indexid': pid,
                    'action': 'reneu_product_details_popup'
                }, function(resp) {
                    jQuery(".product_details11").html(resp);
                    $.fancybox.open({
    href: '#data-form',
   
    arrows: false,
    closeBtn: true,
    
    helpers: {
        overlay: {
            css: {
                'background': 'rgba(0, 0, 0, 0.5)'
            },
            locked: false
        }
    },
   
    afterClose: function() {
       // $('#data-form').html(popup);   // Reset popup content
    }
});

                    jQuery('.product_details11').find("#zoom_08").elevateZoom({
                        zoomWindowHeight: 475,
                        zoomWindowWidth: 495,
                        borderSize: 0,
                        <?php if(wp_is_mobile()) { ?>
                        zoomType : "inner",
                        <?php } ?>
                    });
                });

            });


            $(document).on('click',".section2 >.MakeItTable >.col >.banner-button", function() {
				
			   $(document).find('.MakeItTable').show("slide", {
                    direction: "left"
                }, 1000);
                $(document).find('.MakeItTable').siblings('.section1').css({
                    'opcity': '0'
                });

                $(this).parents(".MakeItTable").hide("slide", {
                    direction: "left"
                }, 1000);
                $(this).parents(".MakeItTable").siblings('.section1').css({
                    'opacity': '1'
                });

            });

            $(document).on('click',".back-button",function() {

               $(this).parents('.section2') .find(".MakeItTable").show("slide", {
                    direction: "left"
                }, 1000);
                $(this).parents('.section2') .find(".MakeItTable").siblings('.section1').css({
                    'opcity': '0'
                });

            });
            
            
              $(document).on('click',".btn-slide.banner-button", function() {
				
			   $(document).find('.MakeItTable').show("slide", {
                    direction: "left"
                }, 1000);
                $(document).find('.MakeItTable').siblings('.section1').css({
                    'opcity': '0'
                });

                $(this).parents(".MakeItTable").hide("slide", {
                    direction: "left"
                }, 1000);
                $(this).parents(".MakeItTable").siblings('.section1').css({
                    'opacity': '1'
                });

            });
            
              $(document).on('click',".back-button",function() {

               $(this).parents('.section2') .find(".MakeItTable").show("slide", {
                    direction: "left"
                }, 1000);
                $(this).parents('.section2') .find(".MakeItTable").siblings('.section1').css({
                    'opcity': '0'
                });

            });

            $('.section1-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 2000,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: true,
                            centerMode: true,
                            centerPadding: '18px',
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: true,
                            centerMode: true,
                            centerPadding: '18px',
                            slidesToShow: 1
                        }
                    }
                ]
            });


            $(window).load(function() {
                              
                sameHeight();
            });

            function sameHeight() {
                var wWidth = $(window).width();
                if(wWidth >= 770){
                $('.productZommer').each(function() {
                    var heights = $(this).find('.padding-out img').height();
                    $(this).find('.section1').outerHeight(heights);
                    $(this).find('.MakeItTable').outerHeight(heights);

                })
                } 
                else{
                   $('.reneu-whole-wrap >.productZommer').each(function(e) { 
                         var heightformobile = $('.productZommer >.row.MakeItTable > .reneu-content').height() + $('.productZommer >.row.MakeItTable > .reneuimage-wrap ').height();
                    $(this).height(heightformobile);
                      });
                }
            }
        });

    </script>
<style>	
.reneu-range-summer {
    background: url(https://www.rswm.in/wp-content/uploads/2022/05/wellbeing-footer-banner.png) no-repeat center center;
}
.aboutContact_form .forBusibess {
    padding: 20px 0 10px 0;
   /* background: #95ab6b;*/
    border-radius: 10px;
}
</style>