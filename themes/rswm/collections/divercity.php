<?php /* Template Name: divercity collection */ ?>
<?php get_header() ?>
<?php global $post; ?>
<?php $ppid = 2795;

//die();
?>

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


    <div class="banner">
        <div class="row">
            <div class="col span_12">
                <img src="<?php echo $imgsrc ?>" alt="<?php echo get_the_title($ppid) ?>">
				<h1 class="hider"><?php echo get_the_title($ppid) ?></h1>
            </div>
        </div>
    </div>

    <!-- <section class="section1">
    <div class="container1">
     <div class="row">
         <div class="col span_3">
             <img src="<?php echo get_template_directory_uri() ?>/collections/images/a.jpg">
             <div class="imgcontent">
                 <h4>COTTWOOL</h4>
                 <p>Ne2/30 | 100% COTTON </p>
                 
             </div>
                
         </div>
         
         <div class="col span_3">
             <img src="<?php echo get_template_directory_uri() ?>/collections/images/s.jpg">
             
             <div class="imgcontent">
                 <h4>MULTI INTERSECT</h4>
                 <p>Ne2/30 | 60% COTTON 40% POLYSTER </p>
                 
             </div>
         </div>
         
         <div class="col span_3">
             <img src="<?php echo get_template_directory_uri() ?>/collections/images/d.jpg">
             
             <div class="imgcontent">
                 <h4>POLYCOTLIN</h4>
                 <p>Ne2/08 | 100% POLYSTER </p>
                 
             </div>
         </div>
         
         <div class="col span_3">
             <img src="<?php echo get_template_directory_uri() ?>/collections/images/f.jpg">
             
             <div class="imgcontent">
                 <h4>NOVELTY YARN</h4>
                 <p>Ne2/30 | 60% POLYSTER 40% COTTON </p>
                 
             </div>
         </div>
     </div>
      </div>
  </section> -->
    <?php $ks = 1; ?>
    <?php for($i=0; $i<count($gkj_collection_title ); $i++) { ?>
    <?php $product_img = unserialize($gkj_collection_product_info_image[$i]); ?>
    <?php $product_title = unserialize($gkj_collection_product_info_title[$i]); ?>
    <?php $product_other_ingo_title = unserialize($gkj_collection_product_other_info_title[$i]); ?>
    <?php if($ks % 2 == 0 ) { ?>
    <section class="productZommer section2">
        <div class="row MakeItTable">
            <div class="col span_6 padding-out ">
                <img src="<?php echo $gkj_collection_image[$i] ?>" alt="<?php echo $gkj_collection_title[$i] ?>">
            </div>
            <div class="col span_6 padding-out  make-it-res" style="background-color:<?php echo $gkj_collection_color[$i] ?>">



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
                    <h3>
                        view
                    </h3>
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
                            <h4>
                                <?php echo stripslashes($product_title[$pm]) ?>
                            </h4>
                            <p>
                                <?php //echo stripslashes($product_other_ingo_title[$pm]) ?>
                            </p>

                        </div>

                    </div>
                    <?php } ?>


                </div>
				<button class="back-button">back</button>
            </div>
            
        </div>

    </section>
    <?php } else { ?>


    <section class="productZommer section2">



        <div class="row MakeItTable">
            <div class="col span_6 padding-out make-it-res" style="background-color:<?php echo $gkj_collection_color[$i] ?>">


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
                    <h3>
                        view
                    </h3>
                </div>
                    <div class="rswm-enquire common-btn">
                        <h3><a href="#about_scroll_form" style="color:<?php echo $gkj_collection_color[$i] ?>">Enquire</a></h3>
                    </div>
                </div>

            </div>
            <div class="col span_6 padding-out">
                <img src="<?php echo $gkj_collection_image[$i] ?>" alt="<?php echo $gkj_collection_title[$i] ?>">
            </div>
        </div>

        <div class="section1" style="opacity:0;">
            <div class="container1">
                <div class="row section1-slider">
                    <?php for($pm=0;$pm<count($product_img) or $pm == $jk; $pm++) { ?>
                    <div class="col span_3 item" data-btr="<?php echo $i ?>,<?php echo $pm ?>">
                        <div class="collection-image">
                            <img src="<?php echo rswm_get_attachment_id_by_url( stripslashes($product_img[$pm]), 'medium' ) ?>">
                        </div>
                        <div class="imgcontent">
                            <h4>
                                <?php echo stripslashes($product_title[$pm]) ?>
                            </h4>
                            <p>
                                <?php //echo stripslashes($product_other_ingo_title[$pm]) ?>
                            </p>

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



   <div class="inner-design-pop" id="data-form" style="display:none;">
    <div class="row product_details11" style="min-width:500px;min-height:300px;">
		<div>Please wait..</div>
    </div>
 </div>

    
<section class="aboutContact_form divercity-range-about" id="about_scroll_form">
    <?php get_template_part('contact-form') ?>
</section>


    <?php get_footer() ?>


    <style>
        /*
    .section1{
        position: relative;
        padding-top:32px !important;
         position: absolute;
    top: 0;
    left: 0;
    right: 0;
    }
*/
.imgcontent h4 {
	    font-size: 14px;
}

        .section1 .back-button {
            position: absolute;
            top: 2%;
            left: 4%;
            padding: 5px 10px;
            color: #1b1918;
            text-transform: uppercase;
            background-color: #d7b369;
            border: 1px solid #d7b369;
            letter-spacing: 1px;
            box-shadow: 2px 2px 2px #ccc;
            cursor: pointer;
        }

        .imgcontent {
            padding-bottom: 30px !important;
        }

        .blue {
            cursor: pointer;
        }

        .section2 {
            position: relative;
        }

        .section2>.row.MakeItTable {
            position: absolute;
            left: 0px;
            right: 0px;
            top: 0px;
            bottom: 0px;
            z-index: 2;
        }

        .section1 {
            padding-top: 42px;
            margin-right: 15px;
        }

        .section3 {
            position: relative;
        }

        .section3>.row.MakeItTable {
            position: absolute;
            left: 0px;
            right: 0px;
            top: 0px;
            bottom: 0px;
            z-index: 2;
        }

        .glamitude {
            cursor: pointer;
        }

        .section1-slider .slick-prev {
            left: -43px;
            top: 40%;
            z-index: 1;
        }

        .section1-slider .slick-prev:before {
            color: #ccc;
            font-size: 30px;
        }

        .section1-slider .slick-next {
            right: -43px;
            top: 40%;
            z-index: 1;
        }

        .section1-slider .slick-next:before {
            color: #ccc;
            font-size: 30px;
        }

        .collection-image img {
          /*  transform: scale(1);
            transition: transform 1s ease-in-out;*/
            cursor:pointer;
        }

        .collection-image {
            overflow: hidden;
        }

        .collection-image:hover img {
           /* transform: scale(1.3);*/

        }

.melange-popup-detail-list p {
	        line-height: 24px;

}


        @media only screen and (max-width:767px) {
            .section1-slider .slick-prev {
                left: 3px;
            }
            .section1-slider .slick-next {
                right: 3px;
            }
            .section2 {
                padding: 0;

            }
            .col.span_6.padding-out.make-it-res {}
            .para2 {
                padding: 0px 20px 10px 15px;
            }
            .para1 p {
                padding: 0px 0 7px 5px;
            }
            .para2 p {
                padding: 3px 0 7px 5px;
                margin-top: 0;
            }
            .section1 {
                background-color: #fff;
                padding: 0;
                margin: 0;
                min-height: 77vh;
            }
            .col.span_6.padding-out.make-it-res {
                padding: 10px;
                min-height: 38vh;
            }
            .section1 .back-button {
                top: 1%;
                left: 4%;
            }
            .section1 {
                padding-top: 38px;
            }
        }

    </style>

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
                var postid = <?php echo $ppid ?>;
                jQuery('.melange_responsive_scuess').html('');
                jQuery.post("<?php echo admin_url('admin-ajax.php') ?>", {
                    'indexid': pid,
                    'postid' : postid,
                    'action': 'new_collection_product_details_popup'
                }, function(resp) {
                    jQuery(".product_details11").html(resp);
                    jQuery.fancybox({
                        width: '100%',
                        height: 'auto',
                        maxWidth: 1000,
                        'href': '#data-form'
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
                    'opacity': '0'
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
                    'opacity': '0'
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
            $(window).resize(function() {
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
            }


        });

    </script>
    <style>

   .rswm-btn {
    text-align: right;
    padding: 30px 30px 0 80px;
}
    .rswm-btn .common-btn {
    display: inline-block;
    background-color: white;
    
    z-index: 5;
    width: 100%;
    max-width: 140px;
    cursor: pointer;
    text-align: center;
            margin: 0 2px;
}
    section#about_scroll_form {
    padding-top: 60px;
}
    .rswm-btn .common-btn h3 {
    font-style: inherit;
    font-family: sans-serif;
    letter-spacing: 0.3px;
    font-size: 13px;
    text-transform: uppercase;
        padding: 12px;
        max-width: 140px;
}
    .rswm-btn .common-btn h3 a{
        text-decoration: none;
    }
    .rswm-btn.opposite-rswm-btn {
    text-align: left;
    padding: 30px 30px 0 30px;
}
        .rswm-enquire.common-btn h3{
                padding: 0;    
        }
        .rswm-enquire.common-btn h3 a {
    padding: 12px;
    display: block; 
}
        
        
        @media only screen and (max-width: 767px){
                    .rswm-btn{
                text-align: center;
                padding: 15px 30px 10px 30px;
        }
        .rswm-btn .common-btn{
                max-width: 130px;
            
        }
        .rswm-btn .common-btn h3{
                padding: 10px;
            max-width: 130px;
        }
        section#about_scroll_form {
    padding-top: 40px;
}
            .rswm-enquire.common-btn h3{
                padding: 0;
            }
            .rswm-enquire.common-btn h3 a{
                padding: 10px;
            }
        }
   






</style>
