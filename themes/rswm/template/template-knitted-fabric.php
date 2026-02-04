<?php
/* Template Name: Knitted Fabric*/
get_header('knitting');
global $post;
?>
<style>
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
        z-index: 9;
        right: 0px;
        top: 0px;
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
        background: url("https://rswm.in/wp-content/themes/rswm/images/added-icon.png");
        background-size: 26px 26px;
    }

    .melangProductArea ul {
        margin: 0;
    }

    a.swatch_inline,
    a.enquirylistbox {
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
        z-index: 1;
        text-align: center;
        left: 0;
        display: none;
        background: transparent;
        width: 100%;
        height: 100%;
    }

    .melangProductArea ul li {
        position: relative;
    }

    .melangProductArea ul li:hover .img_layer {
        display: block;
    }

    .img_layerbtn {
        float: left;
        margin-left: 17px;
    }

    .g-recaptcha {
        margin: 18px auto;
        padding: 1px 43px;
    }

    .end_usage_section li input,
    .end_usage_section li label,
    .category_section li input,
    .category_section li label,
    .blind_section li input,
    .blind_section li label {
        cursor: pointer;
    }

    a.enquirylistbox.text {
        position: relative;
    }

    a.enquirylistbox.text:after {
        content: "";
        position: absolute;
        width: 90%;
        height: 1px;
        background: #d7b369;
        left: 5%;
        bottom: 0;
    }

    .melangProductright .add_swatchs {
        background: url("https://rswm.in/wp-content/themes/rswm/images/add-icon.png");
        background-size: 20px 20px;
        cursor: pointer;
    }

    .fancybox-skin {
        background: #fff;
    }

    .listbox_reponsive .img img {
        width: 100%;
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
        padding-left: 0px;
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
        margin-left: 10px;
    }

    .melangColorBoxLeft.end_usage_section ul li {
        width: fit-content !important;
        padding-right: 20px;
    }

    .melangProductArea ul li:nth-child(4n+1) {
        clear: none !important;
    }
</style>

<section class="homeSliderBlock">
    <a class="scroll-down-arrow" href="javascript:void(0);"> <i class="icon-arrow-down">&nbsp;</i></a>
    <div class="sliderContent">
        <div class="captionSlider">
            <div class="item">
                <h1 style="color:#fff;">LNJ Knits</h1>
                <p>World-class fabrics suitable for active wear</p>
            </div>
            <!--div class="item">Art, History, <br />Lifestyle</div>
            <div class="item">Art, History, <br />Design, Culture,</div>
            <div class="item">Art, History, Design, <br />Culture, Lifestyle</div-->
        </div>
    </div>
    <div class="homeSlider">
        <div class="item"
            style="background-image: url('<?php bloginfo('template_url'); ?>/images/knitted-fabric-main-banner.jpg');no-repeat top center / cover;">
            <!--  <video width="100%" autoplay loop muted>
              <source src="<?php echo get_template_directory_uri() ?>/images/knitted-fabric-2022.mp4" type="video/mp4"> 
            </video> -->
        </div>
    </div>
</section>
<div class="testimonials-block">
    <div class="container">
        <div class="lnjBhilwaraContent">
            <p>In a fast paced world, it is of prime importance to wear something of ease. Knitted fabrics are the
                answer to our modern day lifestyle as they come with promise of comfort, weightlessness,
                wrinkle-resistance and a multitude of properties built in especially for the world we thrive in. With a
                robust establishment fueled by immense creativity, LNJ Knits offers a dynamic product range that
                comprises of knitted fabrics like Single Jersey, Interlock, Rib, Fleece, Flat Back Rib, Terry, Foma,
                Honey Comb, Pique, Waffel and many more.</p>
            <p>&nbsp;</p>
            <p>LNJ Knits offers a tremendous manufacturing capacity of 9000+ tonnes in Phase One. Over time, the
                production capacity will be gradually increased. With unparalleled expertise earned by being pioneers in
                the textile industry, we offer our clients the choicest blends ranging from cotton and cotton blends,
                Modal, high performance synthetics, Spandex, Nylon and many more produced using yarns made with
                exceptional fibres.</p>
        </div>

    </div>
</div>
<section class="sub-category" id="jamp">
    <div class="container">
        <div class="row knitted-rswm-desktop">
            <div class="col span_6">
                <div class="img-block">

                    <img src="<?php echo get_template_directory_uri() ?>/images/Knits.jpg" alt=""
                        style="display: block; max-width: 100%; width: auto;">

                </div>
            </div>

            <div class="col span_6">
                <div style="position: absolute;top: 25%;">
                    <div class="col span_3" style="width: 20%;">
                        <div class="block-heading"><img
                                src="<?php echo get_template_directory_uri() ?>/images/Knits2022.png" alt=""
                                style="display: block; max-width: 100%; width: auto;">

                        </div>
                    </div>
                    <div class="col span_9" style="width: 80%;">
                        <p
                            style="text-align:left;    color: #000;font-size: 14px;line-height: 22px;font-family: gotham_htfbook;">
                            Thanks to superior circular knitting machines from renowned institutions such as Pailung,
                            Fukuhara, Terrot, Unitex and flat knitting ones from Kauo Heng, our in-house textile
                            engineers are enabled to craft products that rival the best in the world. These machines
                            ensure precision and quality control to deliver the finest results at every step.</p>
                    </div>
                </div>


            </div>


        </div>






        <div class="row knitted-rswm-mobile">
            <div class="col span_6">
                <div class="img-block">

                    <img src="<?php echo get_template_directory_uri() ?>/images/Knits.jpg" alt=""
                        style="display: block; max-width: 100%; width: auto;">

                </div>
            </div>

            <div class="col span_6">
                <div>
                    <div class="col span_3" style="width: 20%;">
                        <div class="block-heading"><img
                                src="<?php echo get_template_directory_uri() ?>/images/Knits2022.png" alt=""
                                style="display: block; max-width: 100%; width: auto;">

                        </div>
                    </div>
                    <div class="col span_9" style="width: 80%;">
                        <p
                            style="text-align:left;    color: #000;font-size: 14px;line-height: 22px;font-family: gotham_htfbook;">
                            Thanks to superior circular knitting machines from renowned institutions such as Pailung,
                            Fukuhara, Terrot, Unitex and flat knitting ones from Kauo Heng, our in-house textile
                            engineers are enabled to craft products that rival the best in the world. These machines
                            ensure precision and quality control to deliver the finest results at every step.</p>
                    </div>
                </div>


            </div>


        </div>



    </div>
    </div>
</section>
<section>
    <div class="melangColorBox new">
        <div class="container">
            <div class="col span_8">
                <div class="melangColorBoxLeft end_usage_section">
                    <h2>Category</h2>
                    <ul>
                        <li>
                            <input type="checkbox" name="all" value="all" id="all" class="chb"
                                onclick='handleClick(this);' checked>
                            <label for="all">All</label>
                        </li>
                        <li>
                            <input type="checkbox" name="corizon" onclick='handleClick(this);' value="CORIZON"
                                id="corizon" class="chb">
                            <label for="corizon">Corizon</label>
                        </li>
                        <li>
                            <input type="checkbox" name="cotton-blends" class="chb" onclick='handleClick(this);'
                                value="Cotton Blends" id="cotton-blends">
                            <label for="cotton-blends">Cotton Blends</label>
                        </li>
                        <li>
                            <input type="checkbox" name="poly-spdx" class="chb" onclick='handleClick(this);'
                                value="Poly/ Poly Spdx" id="poly-spdx">
                            <label for="poly-spdx">Poly/ Poly Spdx</label>
                        </li>
                        <li>
                            <input type="checkbox" name="special-blends" class="chb" onclick='handleClick(this);'
                                value="Special Blends" id="special-blends">
                            <label for="special-blends">Special Blends</label>
                        </li>
                    </ul>
                </div>
            </div>
            <script>
                function loadFilterKnits(filter) {
                    var ajaxscript = {
                        ajax_url: "<?php echo admin_url('/admin-ajax.php'); ?>",
                    };
                    var kData = '';
                    jQuery.ajax({
                        url: ajaxscript.ajax_url,
                        data: {
                            action: 'knitted_product__filter',
                            filterV: filter,
                        },

                        method: 'POST', //Post method
                        beforeSend: function(xhr) {
                            jQuery(document).find('.sub-loader').css({
                                'display': 'block',
                                'background': 'rgba(0, 0, 0, 0.25) url(https://rswm.in/wp-content/themes/rswm/images/preload.svg) no-repeat center center',
                                'background-size': '100px 100px'
                            });
                        },

                        success: function(response) {
                            //console.log(response);
                            jQuery(document).find('.sub-loader').css({
                                'display': 'none'
                            });
                            var obj = JSON.parse(response);
                            //alert(obj);
                            kData += '<h2 style="padding:0 40px 20px;">' + obj.filter + '</h2>';
                            //kData += '<br />'
                            obj.data.forEach(function(element) {
                                let knitImg = element.knit_thumb;
                                let kniTitle = element.knit_title;
                                let kniID = element.knit_id;

                                //console.log(kniTitle);
                                //kData += '<a href="'+kniID+'">&raquo;Chapter '+kniTitle+'</a>'
                                kData += '<li class="melangProducdetails">';
                                kData += '<a href="javascript:void(0)" data-tag="' + kniID +
                                    '" class="add_swatch pop_open">';
                                kData += '<img src="' + knitImg + '" alt="' + kniTitle + '">';
                                kData += '<span class="img_layer" style="display: none;">';
                                kData += '< span class="img_layerbtnEnquire" data-tag="' + kniID +
                                    '"> Enquiry </span></span>';
                                kData += '</a>';
                                kData += '<div class="melangProducDescription">';
                                kData += '<div class="melangProductleft">';
                                kData += '<h2>' + kniTitle + '</h2>';
                                kData += '<p> </p>';
                                kData += '</div>';
                                kData += '<div class="melangProductright">';
                                kData += '<span class="img_layerbtn add_swatchs"> </span>';
                                kData += '<input type="checkbox" value="' + kniID +
                                    '" class="melange_product" style="display:none">';
                                kData += '</div></div></li>';


                            });

                            $('.product_details_categroy_wise_responsive').html(kData);
                        },
                        error: function(error) {
                            console.log(error);
                        },
                    });
                }

                function handleClick(checkbox) {
                    $(".chb").change(function() {
                        $(".chb").prop('checked', false);
                        $(this).prop('checked', true);
                    });

                    //alert("Clicked, new value = " + cb.checked);
                    if (checkbox.checked) {
                        //alert(checkbox.value);
                        switch (checkbox.value) {
                            case 'all':
                                loadFilterKnits(checkbox.value);
                                break;
                            case 'Special Blends':
                                loadFilterKnits(checkbox.value);
                                break;
                            case 'Poly/ Poly Spdx':
                                loadFilterKnits(checkbox.value);
                                break;
                            case 'Cotton Blends':
                                loadFilterKnits(checkbox.value);
                                break;
                            case 'CORIZON':
                                loadFilterKnits(checkbox.value);
                                break;
                        }

                        //console.log(checkbox.value + "True")
                    } else {
                        //console.log(checkbox.value + "False")
                    }
                }
            </script>
            <div class="col span_2">
                <div class="melangColorBoxLeft end_usage_section">
                    <h2>Brochure</h2>
                    <ul>
                        <li>
                            <a target="_blank" href="<?php echo site_url('/assets/Knits_Brochure.pdf') ?>"
                                style="color: #fff; text-decoration: none; font: size 14px;">Download
                                Brochure</a>

                        </li>
                    </ul>
                </div>
            </div>
            <!-- -->
            <div class="col span_2">
                <div class="melangColorBoxLeft end_usage_section">
                    <h2>Collection</h2>
                    <ul>
                        <li style="display: block;">
                            <a target="_blank"
                                href="<?php echo site_url('/wp-content/uploads/2024/07/ACTIVE-WEAR-FINAL-2024-DIGITAL.pdf') ?>"
                                style="color: #fff; text-decoration: none; font: size 14px;">ACTIVE WEAR</a>

                        </li>
                        <li style="display: block;">
                            <a target="_blank" href="https://rswm.in/collections/soul-aw-25/"
                                style="color: #fff; text-decoration: none; font: size 14px;">SOUL AW 25</a>

                        </li>
                        <li style="display: block; width:100px !important">
                            <a target="_blank" href="https://rswm.in/collections/knitscape/"
                                style="color: #fff; text-decoration: none; font: size 14px;">KNITSCAP</a>

                        </li>
                        <li style="display: block; width:100px !important">
                            <a target="_blank" href="https://rswm.in/collections/knit-fits-ss-26/"
                                style="color: #fff; text-decoration: none; font: size 14px;">KNIT-FIT </a>

                        </li>
                    </ul>
                </div>
            </div>
            <!-- -->
        </div>
    </div>
</section>
<!-- swatches -->
<section>
    <style>
        .melange-rightside p {
            border: none !important;
        }
    </style>
    <div class="inner-design-pop" id="data-form" style="display:none;">
        <div class="row product_details11" style="min-width:500px;min-height:300px;">
            <div class="col span_6" id="proImage">
                <!-- <img id="zoom_08" src="https://rswm.in/wp-content/uploads/2020/07/IMG_20200624_0029.jpg"
                    data-zoom-image="https://rswm.in/wp-content/uploads/2020/07/IMG_20200624_0029.jpg"
                    alt="NPD 18483 /1810100889"> -->
            </div>
            <div class="col span_6">
                <div class="melange-rightside">
                    <h3 id="moData">&nbsp;</h3>

                    <div class="melange-popup-detail-list" id="tableData">
                        <!-- <p>MO# <span>NPD 18483 /1810100889</span></p> -->
                    </div>

                    <!-- <p style="display: inline-block;border-right:none;">Blend# <span>Cotton &amp; Viscose /
                            Linen<br></span></p> -->

                </div>
            </div>

        </div>
    </div>
    <?php $Args = array('post_type' => 'knitted', 'posts_per_page' => -1, 'post_status' => 'publish', 'orderby' => 'title', 'order' => 'DESC');  ?>
    <?php $query = new WP_Query($Args); ?>
    <?php if ($query->have_posts()) { ?>
        <div class="melangProductArea">
            <div class="container">
                <div class="melangselectedlist" style="display:none;"><a class="enquirylistbox text"
                        href="javascript:void(0)">VIEW <span>1</span> <span class="multiSelect">SELECTION</span></a> <a
                        class="swatch_inline" href="javascript:void(0)">Enquire</a></div>
                <input type="hidden" value="" id="selectedswetch_list" class="selectedswetch_list">
                <div class="sub-loader"></div>
                <ul class="product_details_categroy_wise_responsive" id="scroll_To_It">
                    <h2 style="padding: 0 40px 20px;">All</h2>
                    <?php while ($query->have_posts()) {
                        $query->the_post() ?>
                        <?php //$shadeNo = get_post_meta(get_the_ID(), 'wpcf-shade-no', true); 
                        ?>
                        <?php //$wpcflotno = get_post_meta(get_the_ID(), 'wpcf-lot-no', true); 
                        ?>
                        <?php //echo $imgsrc =  wp_get_attachment_image_src(get_post_meta(get_the_ID(), 'knitted_image', 1, 'medium'))[0];
                        $imgsrc =  get_post_meta(get_the_ID(), 'knitted_image', true);
                        //print_r($imgsrc);
                        ?>
                        <?php //$imgsrc = $imgsrc != '' ? $imgsrc : get_template_directory_uri() . "/images/melangProductArea3.jpg" 
                        ?>
                        <?php $wpcfbrandname = get_post_meta(get_the_ID(), "wpcf-brand-name", true);  ?>
                        <?php $wpcfbrandname1 = $wpcfbrandname != '' ? $wpcfbrandname : get_the_title(); ?>
                        <?php

                        $image_url = get_post_meta(get_the_ID(), 'knitted_image', true);
                        $attachment_id = attachment_url_to_postid($image_url);
                        //echo $attachment_id;
                        $imgsrc = wp_get_attachment_image_src($attachment_id, 'medium')[0];

                        ?>
                        <li class="melangProducdetails" id="<?php echo str_replace(' ', '_', get_post_meta(get_the_ID(), 'knitted_category', true));
                                                            ?>">
                            <a href="javascript:void(0)" data-tag="<?php the_ID(); ?>" class="add_swatch pop_open">
                                <img src="<?php echo $imgsrc; ?>" alt="<?php echo get_the_title(); ?>">
                                <span class="img_layer" style="display: none;"><span class="img_layerbtnEnquire"
                                        data-tag="<?php the_ID(); ?>">Enquiry</span></span>
                            </a>
                            <div class="melangProducDescription">
                                <div class="melangProductleft">
                                    <h2><?php echo substr(get_the_title(), 0, 12); ?>
                                        <? // echo get_post_meta(get_the_ID(), 'knitted_category', true); 
                                        ?>
                                    </h2>
                                    <p></p>
                                </div>
                                <div class="melangProductright">
                                    <span class="img_layerbtn add_swatchs"></span>
                                    <input type="checkbox" value="<?php the_ID(); ?>" class="melange_product"
                                        style="display:none">
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    <?php } ?>
</section>
<!-- swatches -->
<!-- <section class="manufacturing-facts">
    <div class="container">
        <div class="blcok-heading">
            <ul>
                <li><img src="<?php echo get_template_directory_uri() ?>/images/lnj-logo.png" /></li>
                <li>Latest<br /> collections</li>
            </ul>
        </div>
        
        <div class="row">
            <div class="col span_6" style="display:none;">
                <a href="http://lnjdenim.in/collections/rebound-aw21/" target="_blank">
                <div class="image-block">
                    <span>Autumn/Winter&nbsp;2021</span>
                    <img src="<?php echo site_url() ?>/wp-content/uploads/2020/05/collectionhpM.jpg" />
                </div>
                </a>
            </div>
            <div class="col span_6">
                <a href="http://lnjdenim.in/collections/denimverse-ss21/" target="_blank">
                <div class="image-block">
                    <span>Spring/Summer&nbsp;2021</span>
                    <img src="<?php echo site_url() ?>/wp-content/uploads/2020/01/rswmss2021.jpg" />
                </div>
                </a>
            </div>
            <div class="col span_6">
                <a href="http://lnjdenim.in/collections/autumn-winter-2020/" target="_blank">
                <div class="image-block">
                    <span>Autumn/Winter&nbsp;2020</span>
                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/01/rswmaw2020.jpg" />
                </div>
                </a>
            </div>
            <div class="col span_12">
                <a href="http://lnjdenim.in/collections/" target="_blank" class="all-collections">view all collections</a>
            </div>
        </div>
        
    </div>
</section> -->

<div class="testimonials-block">
    <div class="container">
        <div class="block-heading">Our Business Units</div>
        <?php get_header('ourbusiness');   ?>

    </div>
</div>
<section class="aboutContact_form denim-range-about-1">
    <?php get_template_part('contact-form') ?>
</section>

<div style="display:none;">
    <div id="swetchenqueryform">
        <div class="forBusibess edgeForBusibess">
            <h3>For Business Enquiries</h3>
            <form method="post" id="swetch_melange_product_details" name="swetch_melange_product_details">
                <input type="text" name="melange_name" id="swetch_melange_name" placeholder="name" />
                <input type="text" name="melange_phone" id="swetch_melange_phone" placeholder="phone number" />
                <input type="text" name="melange_email" id="swetch_melange_email" placeholder="email address" />
                <input type="text" name="melange_company" id="swetch_melange_company" placeholder="company" />
                <textarea name="melange_message" id="swetch_melange_message" placeholder="message"></textarea>
                <div class="g-recaptcha" data-sitekey="6LdzQXMUAAAAAEAPL3b4FpDYCHwZ01yjSOwnuyS2"></div>
                <div class="error-recaptcha-response"></div>
                <input type="hidden" name="melange_post_id" id="swetch_melange_post_id" value="" />
                <input type="hidden" name="action" value="swetch_melange_form_submission">
                <button id="swetch_melange_product_details_subbtn">Submit</button>
            </form>
            <div class="swetch_melange_responsive_scuess"></div>
        </div>
    </div>
</div>

<div class="enquerylistfboxs" style="display:none;">
    <div id="enquerylistform">
        <div class="listbox_reponsive col span_12"></div>
        <div class="enquerylistform-btn"><a class="swatch_inline" href="javascript:void(0)">Enquire</a></div>
    </div>
</div>
<!-- Footer Start -->
<?php get_footer('knitted'); ?>
<style type="text/css">
    .denim-range-about-1 {
        background: url(<?php echo site_url('/');
                        ?>wp-content/themes/rswm/images/knitted-fabric-main-banner.jpg) no-repeat center center;
        background-size: cover;
        background-attachment: fixed;
    }
</style>

<style type="text/css">
    @media screen and (min-width: 501px) {
        .knitted-rswm-mobile {
            display: none !important;
        }
    }

    @media screen and (max-width: 500px) {
        .knitted-rswm-desktop {
            display: none !important;
        }
    }
</style>
<script>
    jQuery(document).ready(function() {

        jQuery(document).on('click', ".fancybox-close", function() {
            jQuery(document).find('.zoomContainer').remove();
            jQuery.removeData(jQuery(document).find('.zoomContainer'), 'elevateZoom');
        });
        jQuery(document).on('click', "a.inline, .img_layerbtnEnquire", function() {
            jQuery(document).find('.loader').css({
                'display': 'block',
                'background': 'rgba(0, 0, 0, 0.25) url(https://rswm.in/wp-content/themes/rswm/images/preload.svg) no-repeat center center',
                'background-size': '100px 100px'
            });


            jQuery(document).find('.zoomContainer').remove();
            jQuery.removeData(jQuery(document).find('.zoomContainer'), 'elevateZoom');
            jQuery(".product_details11").html('<div class="loadingicon">loading..</div>');
            var pid = jQuery(this).data('tag');
            jQuery('#melange_post_id').val(pid);
            jQuery('.melange_responsive_scuess').html('');
            jQuery.post("https://rswm.in/wp-admin/admin-ajax.php", {
                'postid': pid,
                'action': 'product_details_popup'
            }, function(resp) {
                jQuery(".product_details11").html(resp);


                /*
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
                                    $('#data-form').html(popup); // Reset popup content
                                }
                            });

                */

                jQuery(document).find('.loader').css({
                    'display': 'none'
                });

            });

        });

        grecaptcha.ready(function() {
            grecaptcha.execute('6Ld2WawZAAAAAMdgXl2Kf6xSMu19ZCkn7uhzTPoo').then(function(token) {
                $('#enquire').prepend('<input type="hidden" name="g-recaptcha-response" value="' +
                    token + '">');
            });
        });
        //
        var swetch_post_id = new Array();
        jQuery(document).ready(function() {

            jQuery(document).on("click", ".melange_product", function() {
                var $this = jQuery(this).parents("li").find("a");
                var datatag = $this.data("tag");
                $this.find(this).removeAttr("checked");
                $this.find(this).css("display", "none");
                swetch_post_id.splice($.inArray(datatag, swetch_post_id), 1);
                var joinsss = swetch_post_id.join(",");
                var n = swetch_post_id.length;
                //console.log(n);
                //console.log("testing");
                //console.log(joinsss);
                jQuery(document).find(".melangselectedlist > .enquirylistbox > span").html(n);
                if (n > 1) {
                    jQuery(document).find(
                        ".melangselectedlist > .enquirylistbox > span.multiSelect").html(
                        "SELECTIONS");
                } else jQuery(document).find(
                    ".melangselectedlist > .enquirylistbox > span.multiSelect").html(
                    "SELECTION");
                jQuery(".selectedswetch_list").val(joinsss);
                if (n == 0) {
                    jQuery(".melangselectedlist ").css("display", "none");
                }
            });
        });
        //
        jQuery(document).on('click', '.add_swatchs', function() {
            var $this = jQuery(this).parents("li").find("a");
            var checkedinput = jQuery(this).parents("li");
            var datatag = $this.data("tag");
            //console.log(datatag);
            var ischeck = checkedinput.find(".melange_product").attr("checked");
            if (ischeck == "checked") {
                checkedinput.find(".melange_product").removeAttr("checked");
                checkedinput.find(".melange_product").css("display", "none");
                swetch_post_id.splice($.inArray(datatag, swetch_post_id), 1);
                var joinsss = swetch_post_id.join(",");
                var n = swetch_post_id.length;
            } else {
                checkedinput.find(".melange_product").attr("checked", true);
                checkedinput.find(".melange_product").css("display", "block");
                swetch_post_id.push(datatag);
                var joinsss = swetch_post_id.join(",");
                var n = swetch_post_id.length;
                jQuery(".melangselectedlist ").css("display", "block");
            }
            jQuery(document).find(".melangselectedlist > .enquirylistbox > span").html(n);
            if (n > 1) {
                jQuery(document).find(".melangselectedlist > .enquirylistbox > span.multiSelect").html(
                    "SELECTIONS");
            } else jQuery(document).find(".melangselectedlist > .enquirylistbox > span.multiSelect").html(
                "SELECTION");
            jQuery(".selectedswetch_list").val(joinsss);
            if (n == 0) {
                jQuery(".melangselectedlist ").css("display", "none");
            }
        });

        jQuery(document).on("click", ".melangselectedlist a.swatch_inline, #enquerylistform a.swatch_inline",
            function() {
                var post_id = jQuery(document).find("#selectedswetch_list").val();
                jQuery(document).find("#swetch_melange_post_id").val(post_id);
                $.fancybox.open({
                    href: "#swetchenqueryform",
                    width: "100%",
                    height: "auto",
                    maxWidth: 550,
                    arrows: false,
                    closeBtn: true,
                    helpers: {
                        overlay: {
                            css: {
                                background: "rgba(0, 0, 0, 0.5)",
                            },
                            locked: false,
                        },
                    },
                    afterClose: function() {},
                });
            });
        jQuery(document).on("click", ".melangselectedlist a.enquirylistbox", function() {
            var post_id = jQuery(document).find("#selectedswetch_list").val();
            jQuery(document).find(".loader").css({
                display: "block",
                background: "rgba(0, 0, 0, 0.25) url(https://rswm.in/wp-content/themes/rswm/images/preload.svg) no-repeat center center",
                "background-size": "100px 100px"
            });
            jQuery.post(
                'https://rswm.in/wp-admin/admin-ajax.php', {
                    post_type: "knitted",
                    postid: post_id,
                    action: "knitted_more_enquirylistbox"
                },
                function(resp) {
                    jQuery(document).find(".loader").css({
                        display: "none"
                    });
                    if (resp.status == 1) {
                        var item = resp.list;
                        var $html = "";
                        for (var i = 0; i < item.length; i++) {
                            $html += '<div class="col span_12 p_list">';
                            $html += '<div class="col span_2 img"><img src="' + item[i]["img"] +
                                '" alt="' + item[i]["title"] + '"/></div>';
                            $html += '<div class=" col span_8 listbox melangProducDescription">';
                            $html += '<div class="listboxpleft melangProductleft">';
                            $html += "<h2>" + item[i]["title"] + "</h2><p>";

                            if (item[i]["shadeNo"] != "") {
                                $html += "Shade# " + item[i]["shadeNo"];
                            }
                            if (item[i]["shadeNo"] != "" && item[i]["lotno"] != "") {
                                $html += " | ";
                            }
                            if (item[i]["lotno"] != "") {
                                $html += " Lot No.- " + item[i]["lotno"];
                            }
                            $html += " <br>";
                            if (item[i]["blend"] != "") {
                                $html += " Blend- " + item[i]["blend"];
                            }
                            $html += "</p>";
                            $html += "</div>";
                            $html += "</div>";
                            $html +=
                                '<div class="col span_2 main_remove_div" style="margin-top: 7%;cursor:pointer;"><span class="p_remove_list" data-postid=' +
                                item[i]["postid"] + ">X</span></div>";
                            $html += "</div>";
                        }
                        jQuery(".listbox_reponsive").html($html);
                        $.fancybox.open({
                            href: "#enquerylistform",
                            width: "100%",
                            height: "auto",
                            maxWidth: 550,
                            arrows: false,
                            closeBtn: true,
                            helpers: {
                                overlay: {
                                    css: {
                                        background: "rgba(0, 0, 0, 0.5)",
                                    },
                                    locked: false,
                                },
                            },
                            afterClose: function() {},
                        });
                    }
                },
                "json"
            );
        });

        jQuery(document).on("click", ".p_remove_list", function() {
            var postid = jQuery(this).data("postid");
            var pid_list = jQuery(document).find("#selectedswetch_list").val();
            var plist = jQuery(document).find("#selectedswetch_list").val(pid_list.replace(postid));
            swetch_post_id.splice(jQuery.inArray(postid, swetch_post_id), 1);
            var joinsss = swetch_post_id.join(",");
            var n = swetch_post_id.length;
            jQuery(this).parents(".p_list").remove();
            jQuery(document).find(".melangselectedlist > .enquirylistbox > span").html(n);
            jQuery(document).find(".selectedswetch_list").val(joinsss);
            var checkedboxdisbale = jQuery(document).find('input[value="' + postid + '"].melange_product');
            //console.log(checkedboxdisbale);
            checkedboxdisbale.removeAttr("checked");
            checkedboxdisbale.css("display", "none");
            if (n == 0) {
                jQuery(document).find(".melangselectedlist ").css("display", "none");
                jQuery.fancybox.close();
            }
        });

        jQuery(document).on('click', '#swetch_melange_product_details_subbtn', function() {
            jQuery(this).html('Please wait...');
            jQuery(this).prop('disabled', true);
            jQuery.post('https://rswm.in/wp-admin/admin-ajax.php', jQuery(
                "#swetch_melange_product_details").serialize(), function(resp) {
                jQuery("#swetch_melange_product_details_subbtn").html("Submit");
                jQuery("#swetch_melange_product_details_subbtn").prop("disabled", false);
                jQuery(".swetch_melange_responsive_scuess").html("");
                if (resp == "name") {
                    jQuery("#swetch_melange_name").css("border", "1px solid red");
                } else {
                    jQuery("#swetch_melange_name").css("border", "1px solid #b7b7b7");
                }
                if (resp == "phone") {
                    jQuery("#swetch_melange_phone").css("border", "1px solid red");
                } else {
                    jQuery("#swetch_melange_phone").css("border", "1px solid #b7b7b7");
                }
                if (resp == "email") {
                    jQuery("#swetch_melange_email").css("border", "1px solid red");
                } else {
                    jQuery("#swetch_melange_email").css("border", "1px solid #b7b7b7");
                }
                if (resp == "company") {
                    jQuery("#swetch_melange_company").css("border", "1px solid red");
                } else {
                    jQuery("#swetch_melange_company").css("border", "1px solid #b7b7b7");
                }
                if (resp == "g-recaptcha-response") {
                    jQuery(".error-recaptcha-response").html("Please check the checkbox recaptcha")
                        .css({
                            color: "red",
                            "text-align": "center",
                            "margin-top": "-14px"
                        });
                } else if (resp == "g-recaptcha-response1") {
                    jQuery(".error-recaptcha-response").html(
                        "Please recheck the checkbox recaptcha").css({
                        color: "red",
                        "text-align": "center",
                        "margin-top": "-14px"
                    });
                } else {
                    jQuery(".error-recaptcha-response").html("");
                }
                if (resp == 1) {
                    jQuery("#swetch_melange_product_details")[0].reset();
                    grecaptcha.reset();
                    jQuery(".swetch_melange_responsive_scuess").html(
                        "Your enquiry has been submitted!");
                    jQuery(".swetch_melange_responsive_scuess").css({
                        color: "green",
                        "text-align": "left",
                        "margin-top": "11px",
                        "font-size": "14px",
                        "text-align": "center"
                    });
                }
            });
            return false;
        });
    });

    jQuery(document).ready(function() {
        jQuery("body").on("click", ".pop_open", function() {
            var kpid = $(this).attr("data-tag");
            // $('#data-form').html(kpid); // Reset popup content
            var ajaxscript = {
                ajax_url: "<?php echo admin_url('/admin-ajax.php'); ?>",
            };
            jQuery.ajax({
                url: ajaxscript.ajax_url,
                data: {
                    action: 'knitted_product_details_popup',
                    postid: kpid,
                },

                method: 'POST', //Post method
                beforeSend: function(xhr) {
                    jQuery(document).find('.loader').css({
                        'display': 'block',
                        'background': 'rgba(0, 0, 0, 0.25) url(https://rswm.in/wp-content/themes/rswm/images/preload.svg) no-repeat center center',
                        'background-size': '100px 100px'
                    });
                },
                success: function(response) {
                    //console.log(response);
                    jQuery(document).find('.loader').css({
                        'display': 'none'
                    });
                    var obj = JSON.parse(response);
                    //alert(obj);
                    $('#proImage').html('<img id="zoom_08" src="' + obj.image +
                        '" data-zoom-image="' + obj.image + '" alt="' + obj.mo + '">'
                    );
                    var mData = '<p>Structure# <span>' + obj.structure + '</span></p><br>' +
                        '<p>GSM# <span>' + obj.gsm + '</span></p><br>' +
                        '<p>Width# <span>' + obj.width + '</span></p><br>' +
                        '<p>Content# <span>' + obj.content + '</span></p><br>' +
                        '<p>FabFin# <span>' + obj.fabfin + '</span></p><br>' +
                        '<p>Shade# <span>' + obj.shade + '</span></p><br>'; //+
                    //'<p>Category# <span>' + obj.category + '</span></p>';
                    $('#moData').html(obj.mo);
                    $('#tableData').html(mData);

                },
                error: function(error) {
                    console.log(error);
                },
            });

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
                afterShow: function() {
                    $('.zoomContainer').remove();
                    $('img#zoom_08').elevateZoom({
                        //zoomType: "inner",
                        cursor: "crosshair",
                        zoomWindowFadeIn: 475,
                        zoomWindowFadeOut: 495
                    });
                },

                afterClose: function() {
                    //$('#data-form').html(popup); // Reset popup content
                    jQuery(document).find('.zoomContainer').remove();
                    jQuery.removeData(jQuery(document).find('.zoomContainer'), 'elevateZoom');

                }
            });

        });

    });

    jQuery(document).ready(function() {
        jQuery(".dropdown").click(function() {
            jQuery(this).toggleClass("active");
            jQuery(this).find(".dropdown-menu").slideToggle(300);
        });
        jQuery(".dropdown").focusout(function() {
            jQuery(this).removeClass("active");
            jQuery(this).find(".dropdown-menu").slideUp(300);
        });
        jQuery(".book_section .dropdown .dropdown-menu li").click(function() {
            jQuery(this).parents(".dropdown").find("input").attr("value", jQuery(this).val());
        });
    });
</script>