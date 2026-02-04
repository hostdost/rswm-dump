<?php get_header('greige'); ?>
<style>
    .greige-yarn-banner {
        position: relative;
        overflow: hidden;
    }

    .greige-yarn-banner-text h2 {
        font-size: 30px;
        color: #fff;
        text-align: center;
    }

    .gerige-next-banner img {
        width: 100%;
        display: block;
        max-width: 100%;
    }

    .greige-yarn-banner-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .greige-yarn-banner-text h2 {
        font-size: 30px;
        color: #fff;
        text-align: center;
    }

    .greige-yarn-banner-text h2 span {
        display: inline-block;
        border-bottom: 1px solid #fff;
        padding-bottom: 18px;
        margin-bottom: 18px;
        font-size: 30px;
    }

    .greige-yarn-banner-text p {
        color: #fff;
        width: 84%;
        text-align: center;
        margin: 0 auto;
        font-family: 'gotham_lightregular', serif;
        font-size: 25px;
        line-height: 36px;
    }

    .gerige-next-banner p {
        font-size: 14px;
        line-height: 25px;
        text-align: center;
        color: #000;
        margin: 18px 0;
    }

    ul.blend li {
        width: 50%;
        float: left;
    }

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
        background: url("<?php bloginfo("template_url"); ?>/images/added-icon.png");
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
        background: url("<?php bloginfo("template_url"); ?>/images/add-icon.png");
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

    .dropdown {
        width: 200px;
        display: inline-block;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 2px rgb(204, 204, 204);
        transition: all 0.5s ease;
        position: relative;
        font-size: 14px;
        color: #474747;
        height: 100%;
        text-align: left;
    }

    .dropdown .select {
        background-color: #dec186;
        cursor: pointer;
        display: block;
        padding: 10px;
        border-radius: 2px;
        color: white;
    }

    .dropdown .select>i {
        font-size: 13px;
        color: #fff;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
        float: right;
        line-height: 20px;
        transform: rotate(-90deg);
    }

    .dropdown:hover {
        box-shadow: 0 0 4px rgb(204, 204, 204);
    }

    .dropdown:active {
        background-color: #f8f8f8;
    }

    .dropdown.active:hover,
    .dropdown.active {
        box-shadow: 0 0 4px rgb(204, 204, 204);
        border-radius: 5px 5px 0 0;
        background-color: #f8f8f8;
    }

    .dropdown.active .select>i {
        transform: rotate(90deg);
    }

    .dropdown .dropdown-menu {
        position: absolute;
        background-color: #fff;
        width: 100%;
        left: 0;
        margin-top: 1px;
        box-shadow: 0 1px 2px rgb(204, 204, 204);
        border-radius: 0 1px 5px 5px;
        overflow: hidden;
        display: none;
        max-height: 144px;
        overflow-y: auto;
        z-index: 9;
    }

    .dropdown .dropdown-menu li {
        padding: 10px;
        transition: all 0.2s ease-in-out;
        cursor: pointer;
        margin-bottom: 2px;
    }

    .dropdown .dropdown-menu {
        padding: 0;
        list-style: none;
    }

    .dropdown .dropdown-menu li:hover {
        background-color: #d8c9aa;
    }

    .dropdown .dropdown-menu li:active {
        background-color: #e2e2e2;
    }

    h5 {
        font-size: 16px;
        color: black;
    }

    .lnjBhilwaraContent.txt_left {
        text-align: left;
        padding-top: 15px;
    }

    .col.flt-rgt.span_7 {
        float: right;
    }

    .greige-yarnlogo {
        text-align: left;
    }

    .greige-yarnlogo img {
        width: 130px !important;
    }

    .greige-yarnlogo {
        padding-top: 0px;
        padding-bottom: 0px;
    }

    .melangColorBox.new {
        margin-top: 40px;
    }

    @media only screen and (max-width: 600px) {
        .testimonials-block {
            padding: 40px 0px 0px 0px !important;
        }

        .testimonials-block .col.flt-rgt.span_7 {
            float: left;
            padding: 0;
            width: 100%;
            margin-bottom: 10px;
        }

        .testimonials-block .greige-yarnlogo {
            padding-bottom: 0px;
            padding-top: 25px;
            text-align: center;
        }

        .testimonials-block iframe {
            width: 100%;
        }

        .lnjBhilwaraContent.txt_left {
            padding-top: 30px;
        }
    }

    @media only screen and (max-width: 568px) {
        .melange_filter_conainer {
            padding: 0 20px;
        }
    }
</style>
<?php
$postid                          = 111;
$wpcfbanner                      = get_post_meta($postid, 'wpcf-banner', true);
$wpcftitlebanner                  = get_post_meta($postid, 'wpcf-title-banner', true);
$wpcfshortdescriptionbanner      = get_post_meta($postid, 'wpcf-short-description-banner', true);
$wpcfmiddlebannerimage          = get_post_meta($postid, 'wpcf-middle-banner-image', true);
$wpcfmiddledescription          = get_post_meta($postid, 'wpcf-middle-description', true);
$wpcfmiddlelogoimage              = get_post_meta($postid, 'wpcf-middle-logo-image', true);
?>
<div class="homeSlider">
    <div class="item"
        style="background-image: url('https://www.rswm.in/wp-content/uploads/2018/04/grg-yarn-mainbanner.jpg');no-repeat top center / cover;">
        <div class="melangeBanner">
            <div class="melangeOverlay">
                <div class="melangeContent" style="padding: 20px;">
                    <h1><?php echo $wpcftitlebanner; ?></h1>
                    <p><?php echo $wpcfshortdescriptionbanner; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="testimonials-block" style="padding: 40px 0px 0px 40px;">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-2 lnjBhilwaraContent">
                <p>We produce greige yarns that are widely used for weaving, knitting, sewing and industrial applications, These products are manufactured at facilities located in Kharigram (Bhilwara), Lodha (Banswara), Rishabhdev (Udaipur) & Chhata (Mathura). The manufacturing of this particular product range at RSWM utilizes advanced automation machinery with minimal human touch.</p>
                <br>
                <p>Equipped with advanced machinery from Switzerland, Germany and Italy, our greige yarn manufacturing units boast of cutting edge textile technology. They have a combined total production 1,21,000 MT (including Kapaas and U|tima) of yarn per year in a count range of Ne 6s-60s.
                </p>
            </div>
        </div>
        <div class="row" style="margin-top: 20px; margin-bottom:30px;"> 
            <div class="col-md-5 col-12">
                <iframe width="100%" height="290"
                    src="https://www.youtube.com/embed/hlWcg4TtKUE?autoplay=1&loop=1&playlist=hlWcg4TtKUE&rel=0&showinfo=0&color=white&iv_load_policy=3"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-7 col-12">
                <div class="greige-yarnlogo"><img src="<?php echo $wpcfmiddlelogoimage ?>" style="width: auto;"
                        alt="<?php echo rswm_get_attachment_alt_title_url($wpcfmiddlebannerimage, 'alt') ?>" /></div>
                <div class="lnjBhilwaraContent txt_left"><?php //echo wpautop(get_post_field('post_content', $postid)); 
                                                            ?>
                    <p>The company's unit in Bhilwara underwent a major expansion in 2011,
                        building SJ-11, India's most sophisticated automation plant. It resulted in
                        the addition to facilitate production. The yarn from this factory is sold under
                        the brand name ULTIMA<sup>®</sup> and is the finest polyester-viscose greige yarn in
                        the Indian market.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-12">
                <img src="<?php echo site_url('/assets/images/'); ?>kapash.jpg" class="img-fluid">
            </div>
            <div class="col-md-7 col-12">
            <div class="greige-yarnlogo"><img src="<?php echo site_url('/assets/images/');?>Kapaas-Logo.png" style="width: auto;"
                    alt="<?php echo rswm_get_attachment_alt_title_url($wpcfmiddlebannerimage, 'alt') ?>" /></div>
            <div class="lnjBhilwaraContent txt_left"><?php //echo wpautop(get_post_field('post_content', $postid)); 
                                                        ?>
                <p>Kapaas, a name that justifies itself through its intrinsic qualities and the
                    symbolism it carries. Just as cotton grows from the soil, it embodies the
                    purity and authenticity of nature's offerings., Kapaas captures the essence
                    of simplicity and elegance. It encompasses versatility in its various.
                    </p><br>
                    <p>
                    It aligns with sustainability and comfort. While being combed to provide
immense smoothness, its also environmentally conscious and is a versatile yarn that offers lightweight breathability, softness, and versatility,.
                    </p>
            </div>
            </div>
        </div>
        <!-- <iframe width="390" height="315"
            src="https://www.youtube.com/embed/hlWcg4TtKUE?autoplay=1&loop=1&playlist=hlWcg4TtKUE&rel=0&showinfo=0&color=white&iv_load_policy=3"
            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe> -->
        
        <div class="col span_7 flt-rgt">
            
        </div>
        <!--div class="lnjBhilwaraContent "> <?php echo wpautop($wpcfmiddledescription); ?> </div-->
    </div>
</div>


<div style="clear:both"></div>
<?php $trems = get_terms('greige-yarn-types', array('hide_empty' => true)); //152 for raw white 
?>
<?php if (wp_is_mobile()) { ?>
    <div class="melange_filter_conainer">
        <button class="filter_button">Filter</button>
    </div>
<?php } ?>
<div class="melangColorBox new">
    <div class="container">
        <div class="col span_3">
            <div class="melangColorBoxLeft category_section">
                <h2>Yarns</h2>
                <ul>
                    <?php foreach ($trems as $return) { ?>
                        <li>
                            <input type="checkbox" name="category[]" value="<?php echo $return->term_id ?>"
                                id="<?php echo $return->slug ?>">
                            <label for="<?php echo $return->slug ?>"><?php echo $return->name ?></label>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <?php $endusageterms = get_terms('greige-yarn-end-usage', array('hide_empty' => true)); ?>
        <div class="col span_3">
            <?php $swatche_terms = get_terms('swatche', array('hide_empty' => true)); ?>
            <?php foreach ($swatche_terms as $term) { ?>
                <?php $colorTerm = get_term_meta($term->term_id, "wpcf-color-code", true) == '' ? $term->slug : get_term_meta($term->term_id, "wpcf-color-code", true); ?>
                <?php
                if ($term->term_id == 246) {
                    $style = "background:  linear-gradient(136deg, rgba(185,139,53,1) 31%, rgba(249,227,126,1) 91%);";
                } else {
                    $style = "background:" . $colorTerm;
                } ?>
            <?php } ?>
            <div class="col span_12">
                <div class="melangColorBoxLeft end_usage_section">
                    <h2>End Usage</h2>
                    <ul>
                        <?php foreach ($endusageterms as $return) { ?>
                            <li>
                                <input type="checkbox" name="end_usage[]" value="<?php echo $return->term_id ?>"
                                    id="<?php echo $return->slug ?>">
                                <label for="<?php echo $return->slug ?>"><?php echo $return->name ?></label>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <?php $booktrems = get_terms('greige-yarn-collections', array('hide_empty' => true)); ?>
                <div class="melangColorBoxLeft book_section">
                    <h2>Collection</h2>
                    <div class="dropdown">
                        <div class="select">
                            <span>Select a collection</span>
                            <i class="fa fa-chevron-left"></i>
                        </div>
                        <input type="hidden" name="collection_booklet">
                        <ul class="dropdown-menu">
                            <?php foreach ($booktrems as $return) { ?>
                                <li id="<?php echo $return->slug; ?>" value="<?php echo $return->term_id; ?>">
                                    <?php echo $return->name ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php $blendtrems = get_terms('greige-yarn-blends', array('hide_empty' => true)); ?>
        <div class="col span_6">
            <div class="melangColorBoxLeft blind_section">
                <h2>Blend</h2>
                <ul class="blend">
                    <?php foreach ($blendtrems as $return) { ?>
                        <li>
                            <input type="checkbox" name="blend[]" value="<?php echo $return->term_id ?>"
                                id="<?php echo $return->slug ?>">
                            <label for="<?php echo $return->slug ?>"><?php echo $return->name ?></label>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

</div>
<div class="offsetdiv"></div>
<?php $Args = array('post_type' => 'greige', 'posts_per_page' => 12, 'post_status' => 'publish', 'orderby' => 'date', 'order' => 'DESC');  ?>
<?php $query = new WP_Query($Args); ?>
<?php if ($query->have_posts()) { ?>
    <div class="melangProductArea">
        <div class="container">
            <div class="melangselectedlist" style="display:none;"><a class="enquirylistbox text"
                    href="javascript:void(0)">VIEW <span>1</span> <span class="multiSelect">SELECTION</span></a> <a
                    class="swatch_inline" href="javascript:void(0)">Enquire</a></div>
            <input type="hidden" value="" id="selectedswetch_list" class="selectedswetch_list">

            <ul class="product_details_categroy_wise_responsive" id="scroll_To_It">
                <?php while ($query->have_posts()) {
                    $query->the_post() ?>
                    <?php $shadeNo = get_post_meta(get_the_ID(), 'wpcf-shade-no', true); ?>
                    <?php $wpcflotno = get_post_meta(get_the_ID(), 'wpcf-lot-no', true); ?>
                    <?php $imgsrc = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium')[0];  ?>
                    <?php $imgsrc = $imgsrc != '' ? $imgsrc : get_template_directory_uri() . "/images/melangProductArea3.jpg" ?>
                    <?php $wpcfbrandname = get_post_meta(get_the_ID(), "wpcf-brand-name", true);  ?>
                    <?php $wpcfbrandname1 = $wpcfbrandname != '' ? $wpcfbrandname : get_the_title(); ?>
                    <li class="melangProducdetails">
                        <a href="javascript:void(0)" data-tag="<?php echo get_the_ID() ?>" class="add_swatch">
                            <img src="<?php echo $imgsrc ?>" alt="<?php echo get_the_title() ?>" />
                            <span class="img_layer"> <span class="img_layerbtnEnquire"
                                    data-tag="<?php echo get_the_ID() ?>">Enquiry</span></span>
                        </a>
                        <div class="melangProducDescription">
                            <div class="melangProductleft">
                                <h2><?php echo $wpcfbrandname1; ?></h2>
                                <p></p>
                            </div>
                            <div class="melangProductright">
                                <span class="img_layerbtn add_swatchs"></span>
                                <input type="checkbox" value="<?php echo get_the_ID() ?>" class="melange_product"
                                    style="display:none">
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
<?php } ?>
<?php if ($query->found_posts > 12) { ?>
    <div style="clear: both;"></div>
    <input type="hidden" name="post_type" id="post_type" value="greige">
    <input type="hidden" name="category_name" id="category_name" value="greige-yarn-types">
    <input type="hidden" name="blend_name" id="blend_name" value="greige-yarn-blends">
    <input type="hidden" name="end_usage_name" id="end_usage_name" value="greige-yarn-end-usage">
    <input type="hidden" name="book_name" id="book_name" value="greige-yarn-collections">

    <input type="hidden" name="category_id" id="category_id" value="">
    <input type="hidden" name="swatches_id" id="swatches_id" value="">
    <input type="hidden" name="blend_id" id="blend_id" value="">
    <input type="hidden" name="end_usage_id" id="end_usage_id" value="">
    <input type="hidden" name="book_id" id="book_id" value="">
    <input type="hidden" name="current_page" id="current_page" value="2">
    <div class="load_more" style="text-align: center;position: static;clear: both;"><a href="javascript:void(0)"
            class="all-collections" id="load_more225">View more</a></div>
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
    <div class="row product_details11" style="min-width:500px;min-height:300px;"></div>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>
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

<?php get_footer('yarn'); ?>
<script>
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
            console.log(n);
            console.log("testing");
            console.log(joinsss);
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
        jQuery(document).on('click', '.add_swatchs', function() {
            var $this = jQuery(this).parents("li").find("a");
            var checkedinput = jQuery(this).parents("li");
            var datatag = $this.data("tag");
            console.log(datatag);
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
                background: "rgba(0, 0, 0, 0.25) url(<?php echo get_template_directory_uri() ?>/images/preload.svg) no-repeat center center",
                "background-size": "100px 100px"
            });
            jQuery.post(
                '<?php echo admin_url("admin-ajax.php") ?>', {
                    post_type: "melange",
                    postid: post_id,
                    action: "more_enquirylistbox"
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
            console.log(checkedboxdisbale);
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
            jQuery.post('<?php echo admin_url('admin-ajax.php'); ?>', jQuery(
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