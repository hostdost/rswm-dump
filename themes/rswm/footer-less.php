<footer>

    <div class="stickyButtontwo"> <a href="<?php echo site_url(); ?>/wp-content/uploads/2021/05/RSWM_We-Care.pdf"
            target="blank" style=""> From the CMD's <span class="covid"> desk </span></a> </div>

    <div class="container">

        <div class="row">

            <div class="col span_12">

                <ul class="footer_menu">

                    <?php $obj = get_queried_object(); ?>

                    <li><a href="<?php echo get_permalink(95) ?>" class="<?php echo $obj->ID == 95 ? 'active' : '' ?>"
                            title="About">About</a></li>
                    <li><a href="<?php echo get_permalink(1066) ?>"
                            class="<?php echo $obj->ID == 1066 ? 'active' : '' ?>"
                            title="Exhibitions by RSWM Ltd.">Exhibitions</a></li>
                    <!-- <li><a href="<?php //echo get_permalink(5); 
                                        ?>#business-units" class="<?php echo $obj->ID == 5 ? 'active' : '' ?>" title="Premier Yarns Manufacturer">Business Units</a></li> -->
                    <!-- <li><a href="<?php //echo get_permalink(103) 
                                        ?>" class="<?php //echo $obj->ID == 103 ? 'active' : '' 
                                                    ?>" title="Functional Blended Yarns">RSWM Edge<sup>&reg;</sup></a></li> -->
                    <!-- <li><a href="https://rswm.in/blogs/" title="Our Blogs">Blogs</a></li> -->
                    <li><a href="https://news.rswm.in/" target="_blank" class="" title="R-Connect">R-Connect</a></li>

                    <!-- <li><a href="<?php //echo get_permalink(103) 
                                        ?>" class="<?php //echo $obj->ID == 103 ? 'active' : '' 
                                                    ?>"
                            title="Functional Blended Yarns">RSWM EDGE<sup>&reg;</sup></a></li> -->
                    <!-- <li><a href="<?php //echo get_permalink(131) 
                                        ?>" class="<?php //echo $obj->ID == 131 ? 'active' : '' 
                                                    ?>" title="Annual Reports and Investor Relations">Investors</a></li> -->
                    <!-- <li><a href="<?php //echo get_permalink(108) 
                                        ?>" class="<?php //echo $obj->ID == 108 ? 'active' : '' 
                                                    ?>" title="RSWM Sustainable Initiatives ">Sustainability</a></li> -->
                    <li><a href="<?php echo get_permalink(95) ?>#locationBlock" class="location_menu"
                            title="RSWM Ltd. Locations">Locations</a></li>
                    <li><a href="<?php echo get_permalink(2326) ?>"
                            class="<?php echo $obj->ID == 2326 ? 'active' : '' ?>" title="Collections">Collections</a>
                    </li>
                    <!-- <li><a href="<?php //echo get_template_directory_uri() 
                                        ?>/images/RSWM_Home_Furnishing.pdf" target="_blank" title="RSWM Corporate Brochure">Home Furnishing Range</a></li> -->
                    <li><a href="<?php echo get_permalink(6492) ?>"
                            class="<?php echo $obj->ID == 6492 ? 'active' : '' ?>"
                            title="Privacy Policy RSWM Ltd.">Privacy Policy</a>
                    <li><a href="<?php echo get_permalink(7056) ?>"
                            class="<?php echo $obj->ID == 7056 ? 'active' : '' ?>" title="Media Coverage">Media
                            Coverage</a>
                    </li>
                    <li><a href="<?php echo get_permalink(1021) ?>"
                            class="<?php echo $obj->ID == 7056 ? 'active' : '' ?>" title="Contact RSWM Ltd.">Contact</a>
                    </li>

                    <li class="socials-icon">

                        <ul>

                            <li class="instagram1"><a href="https://www.instagram.com/rswmofficial/" target="_blank"
                                    title="RSWM Ltd. Official Instagram Page"><i class="fa fa-instagram"
                                        aria-hidden="true"></i></a></li>

                            <li class="twitter"><a href="https://twitter.com/rswmofficial?lang=en" target="_blank"
                                    title="RSWM Ltd. Official Twitter Page"><i class="fa fa-twitter"
                                        aria-hidden="true"></i></a></li>

                            <li class="facebook1"><a href="https://www.facebook.com/rswmofficial/" target="_blank"
                                    title="RSWM Ltd. Official Facebook Page"><i class="fa fa-facebook-f"
                                        aria-hidden="true"></i></a></li>

                            <li class="facebook1"><a href="https://www.linkedin.com/company/rswmofficial/"
                                    target="_blank" title="RSWM Ltd. Official Linkedin Page"><i class="fa fa-linkedin"
                                        aria-hidden="true"></i></a></li>

                        </ul>

                    </li>

                </ul>

                <section class="subscribe-form" style="display:none!important;">

                    <div class="container">

                        <div class="row">

                            <div class="col span_12">

                                <div class="newsletter-head">

                                    <h2>SUBSCRIBE</h2>

                                    <p>Sign up with your email address to receive news and updates.</p>

                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="newsletter-form">

                                <form action="" method="post" id="subscribe-details" class="fome"
                                    onsubmit="return validForm()" name="signup_form">

                                    <div class="subscribe-input-box"> <input type="text" autocapitalize="off"
                                            autocorrect="off" spellcheck="false" name="fname" placeholder="First Name"
                                            id="first-name" title="First Name"
                                            class="input-text required-entry validate-email" required>

                                        <input type="text" autocapitalize="off" autocorrect="off" spellcheck="false"
                                            name="lname" placeholder="Last Name" id="last-name" title="Last Name"
                                            class="input-text required-entry validate-email" required> <input
                                            type="email" autocapitalize="off" autocorrect="off" spellcheck="false"
                                            name="email" placeholder="Email Address" id="email" title="Email Address"
                                            class="input-text required-entry validate-email" required><br><br>
                                    </div>

                                    <div class="subscribe-actions"> <button type="submit" title="Sign up" name="signup"
                                            class="button" id="newsletter-subscribehome"><span><span>SIGN
                                                    UP</span></span></button> <input type="hidden" name="action"
                                            value="newsletter_subscribe_hook"> </div>

                                </form>

                            </div> <span class="error"></span>
                        </div>

                </section>

                <div class="copyright"> All Rights Reserved

                    <?php date('Y') ?> | rswm.in<br />
                    Powered by <a href="https://www.hostdost.in" target="_blank">HOSTDOST</a>
                </div>

            </div>

        </div>

    </div>

</footer>

</div>

<link
    href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,400i,700|Roboto:100,100i,300,300i,400,500,700,900&display=swap"
    rel="stylesheet">

<link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script>
    function validForm() {

        var form = document.forms['signup_form'],

            inputs = form.getElementsByTagName('input'),

            errors = form.getElementsByClassName('error'),

            regex = /\S+@\S+\.\S+/,

            setErrorMsg = function(str, msg) {
                return str.replace('_', ' ') + ' ' + msg;
            },

            countErrors = 0;

        for (var i = 0, l = inputs.length - 1; i < l; i++) {

            var val = form[inputs[i].name].value;

            errors[i].innerHTML = '';

            // validate email

            if (inputs[i].name === 'email' && !regex.test(val)) {
                errors[i].textContent = setErrorMsg(inputs[i].name, 'should be valid');
                countErrors++;
            }

            // validate required

            if (!val) {
                errors[i].textContent = setErrorMsg(inputs[i].name, 'field is required');
                countErrors++;
            }

        }

        return countErrors === 0;

    }
</script>

<script defer src="https://www.google.com/recaptcha/api.js?render=6Ld2WawZAAAAAMdgXl2Kf6xSMu19ZCkn7uhzTPoo"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123368677-1"></script>

<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-123368677-1');
</script>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.4.1.js"></script>
<!-- <script type="text/javascript" src="<?php //echo get_template_directory_uri() 
                                            ?>/js/jquery-2.1.4.min.js"></script> -->
<!-- <script type="text/javascript" src="<?php //echo get_template_directory_uri() 
                                            ?>/js/jquery-migrate-1.2.1.min.js"></script> -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.pack.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js">
</script>

<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/imagesloaded.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/slick.min.js"></script>

<script type='text/javascript' src="<?php echo get_template_directory_uri() ?>/js/custom.js?var=1.11"></script>

<script async src='https://www.google.com/recaptcha/api.js'></script>

<script>
    var theToggle = document.getElementById('toggle');

    // hasClass

    function hasClass(elem, className) {
        return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
    }

    // addClass

    function addClass(elem, className) {
        if (!hasClass(elem, className)) {
            elem.className += ' ' + className;
        }
    }

    // removeClass

    function removeClass(elem, className) {
        var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
        if (hasClass(elem, className)) {
            while (newClass.indexOf(' ' + className + ' ') >= 0) {
                newClass = newClass.replace(' ' + className + ' ', ' ');
            }
            elem.className = newClass.replace(/^\s+|\s+$/g, '');
        }
    }

    // toggleClass

    function toggleClass(elem, className) {
        var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, " ") + ' ';
        if (hasClass(elem, className)) {
            while (newClass.indexOf(" " + className + " ") >= 0) {
                newClass = newClass.replace(" " + className + " ", " ");
            }
            elem.className = newClass.replace(/^\s+|\s+$/g, '');
        } else {
            elem.className += ' ' + className;
        }
    }
    theToggle.onclick = function() {
        toggleClass(this, 'on');
        return false;
    }
</script>

<!-- Footer End -->
<?php if (!is_page(131)) { ?>
    <script>
        jQuery(document).ready(function() {
            jQuery(document).on('click', "a.inline, .img_layerbtnEnquire", function() {
                jQuery(document).find('.zoomContainer').remove();
                jQuery.removeData(jQuery(document).find('.zoomContainer'), 'elevateZoom');
                jQuery(".product_details11").html('<div class="loadingicon">loading..</div>');
                var pid = jQuery(this).data('tag');
                jQuery('#melange_post_id').val(pid);
                jQuery('.melange_responsive_scuess').html('');
                jQuery.post("<?php echo admin_url('admin-ajax.php') ?>", {
                    'postid': pid,
                    'action': 'product_details_popup'
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
                        borderSize: 0
                    });
                });
            });
            jQuery('#melange_product_details_subbtn').click(function() {
                jQuery(this).html('Please wait...');
                jQuery(this).prop('disabled', true);
                jQuery.post('<?php echo admin_url('admin-ajax.php'); ?>', jQuery("#melange_product_details")
                    .serialize(),
                    function(resp) {
                        jQuery('#melange_product_details_subbtn').html('Submit');
                        jQuery('#melange_product_details_subbtn').prop('disabled', false);
                        jQuery(".melange_responsive_scuess").html('');
                        if (resp == 'name') {
                            jQuery('#melange_name').css('border', '1px solid red');
                        } else {
                            jQuery('#melange_name').css('border', '1px solid #b7b7b7');
                        }
                        if (resp == 'phone') {
                            jQuery('#melange_phone').css('border', '1px solid red');
                        } else {
                            jQuery('#melange_phone').css('border', '1px solid #b7b7b7');
                        }
                        if (resp == 'email') {
                            jQuery('#melange_email').css('border', '1px solid red');
                        } else {
                            jQuery('#melange_email').css('border', '1px solid #b7b7b7');
                        }
                        if (resp == 'company') {
                            jQuery('#melange_company').css('border', '1px solid red');
                        } else {
                            jQuery('#melange_company').css('border', '1px solid #b7b7b7');
                        }
                        if (resp == 1) {
                            jQuery("#melange_product_details")[0].reset();
                            jQuery(".melange_responsive_scuess").html('Your enquiry has been submitted!');
                            jQuery(".melange_responsive_scuess").css({
                                'color': 'green',
                                "text-align": "center",
                                "margin-top": "11px",
                                "font-size": "14px"
                            });
                        }
                    });
                return false;
            });

            grecaptcha.ready(function() {
                grecaptcha.execute('6Ld2WawZAAAAAMdgXl2Kf6xSMu19ZCkn7uhzTPoo').then(function(token) {
                    $('#enquire').prepend('<input type="hidden" name="g-recaptcha-response" value="' +
                        token + '">');
                });
            });

            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

            jQuery('#submit_btn').click(function() {
                var onfoucs = "NULL";
                $("#enquire .isvalid").each(function(index, val) {
                    var inputName = $(this).prop("name");
                    var tagName = $(this).prop("tagName").toLowerCase();
                    var labelName = $(tagName + "[name='" + inputName + "']").attr('placeholder')
                        .toLowerCase();
                    $(tagName + "[name='" + inputName + "']").parent(".form-fields").find(".en_error")
                        .remove();
                    if ($.trim($(tagName + "[name='" + inputName + "']").val()) == '') {
                        $(tagName + "[name='" + inputName + "']").css("border", "1px solid red");
                        $(tagName + "[name='" + inputName + "']").parent(".form-fields").append(
                            "<span class='en_error'>Enter your " + labelName + "</span>");
                        if (onfoucs == 'NULL') {
                            onfoucs = tagName + "[name='" + inputName + "']";
                        }
                    } else if ((inputName == "email") && $.trim($(tagName + "[name='" + inputName +
                            "']").val()) != "" && reg.test($.trim($(tagName + "[name='" + inputName +
                            "']").val())) == false) {
                        $(tagName + "[name='" + inputName + "']").css("border", "1px solid red");
                        $(tagName + "[name='" + inputName + "']").parent(".form-fields").append(
                            "<span class='en_error'>Enter your valid " + labelName + "</span>");
                        if (onfoucs == 'NULL') {
                            onfoucs = tagName + "[name='" + inputName + "']";
                        }
                    } else if ((inputName == "phone") && $.trim($(tagName + "[name='" + inputName +
                            "']").val()) != "" && !$.trim($(tagName + "[name='" + inputName + "']")
                            .val()).match('[0-9]{10,15}')) {
                        $(tagName + "[name='" + inputName + "']").css("border", "1px solid red");
                        $(tagName + "[name='" + inputName + "']").parent(".form-fields").append(
                            "<span class='en_error'>Enter your valid " + labelName +
                            " (10-15 digits)</span>");
                        if (onfoucs == 'NULL') {
                            onfoucs = tagName + "[name='" + inputName + "']";
                        }
                    } else if ($.trim($(tagName + "[name='" + inputName + "']").val()) != "") {
                        $(tagName + "[name='" + inputName + "']").css("border", "");
                    }
                });
                if (onfoucs != 'NULL') {
                    $(onfoucs).focus();
                }
                if (onfoucs == 'NULL') {
                    jQuery(this).html('Please wait...');
                    jQuery(this).prop('disabled', true);
                    jQuery.post('<?php echo admin_url('admin-ajax.php'); ?>', jQuery("#enquire").serialize(),
                        function(resp) {
                            jQuery('#submit_btn').html('Submit');
                            jQuery('#submit_btn').prop('disabled', false);
                            jQuery('#enquire input[type="text"]').css('border', '1px solid #b7b7b7');
                            jQuery(".responsive").html('');
                            if (resp != 1) {
                                if (resp == 'captcha') {
                                    jQuery("#enquire")[0].reset();
                                    alert('User is not valid');
                                    location.reload();
                                } else {
                                    jQuery('#' + resp).css('border', '1px solid red');
                                }
                            } else if (resp == 1) {
                                jQuery("#enquire")[0].reset();
                                jQuery(document).find("div.responsive").html(
                                    'Your enquiry has been submitted!');
                                jQuery(document).find("div.responsive").css({
                                    'color': 'green',
                                    "text-align": "center",
                                    "margin-top": "11px",
                                    "font-size": "14px"
                                });
                                window.location.href = "<?php echo site_url(); ?>/thank-you/";
                            }
                        });
                }
                return false;
            });

            jQuery(document).on('click', '.checked12', function() {
                jQuery(this).removeAttr('checked', 'false');
                jQuery(this).removeClass('checked12')
            });
            var checkboxValues_color = [];
            jQuery(document).on('click',
                'input[type="checkbox"], input[type="radio"] , .melangColorBoxLeft.book_section .dropdown .dropdown-menu li',
                function() {
                    jQuery('html, body').animate({
                        scrollTop: jQuery('.offsetdiv').offset().top - parseInt(30)
                    }, 1200);
                    var catid = jQuery(this).val();
                    var checkboxValues = [];
                    var checkboxValues_blind = [];
                    var checkboxValues_end_usage = [];
                    var checkboxValues_book = [];
                    if (jQuery('.melangColorBoxLeft.book_section input').val() != '') {
                        checkboxValues_book.splice(jQuery.inArray(jQuery(this).val(), checkboxValues_book), 1);
                        checkboxValues_book.push(jQuery(this).val());
                    }
                    if (jQuery('.blind_section input[type="checkbox"]').is(":checked")) {
                        jQuery('.blind_section input[type="checkbox"]:checked').map(function() {
                            checkboxValues_blind.push(jQuery(this).val());
                        });
                    } else {
                        checkboxValues_blind.splice(jQuery.inArray(jQuery(this).val(), checkboxValues_blind), 1);
                    }
                    if (jQuery('.end_usage_section input[type="checkbox"]').is(":checked")) {
                        jQuery('.end_usage_section input[type="checkbox"]:checked').map(function() {
                            checkboxValues_end_usage.push(jQuery(this).val());
                        });
                    } else {
                        checkboxValues_end_usage.splice(jQuery.inArray(jQuery(this).val(),
                            checkboxValues_end_usage), 1);
                    }
                    if (jQuery('.category_section input[type="checkbox"]').is(":checked")) {
                        jQuery('.category_section input[type="checkbox"]:checked').map(function() {
                            checkboxValues.push(jQuery(this).val());
                        });
                    } else {
                        checkboxValues.splice(jQuery.inArray(jQuery(this).val(), checkboxValues), 1);
                    }
                    if (jQuery(this).attr('type') == 'radio') {
                        checkboxValues_color.splice(jQuery.inArray(jQuery(this).val(), checkboxValues_color), 1);
                        if (jQuery('.color_section input[type="radio"]').is(":checked")) {
                            jQuery(this).parents(".color_section").find(".checked12").removeClass();
                            jQuery(this).addClass("checked12");
                            checkboxValues_color.push(jQuery(this).val());
                        }
                    }
                    book_id = checkboxValues_book.toString();
                    jQuery('#book_id').val(book_id);
                    if (book_id == '') {
                        book_id = '';
                    }
                    blend_id = checkboxValues_blind.toString();
                    jQuery('#blend_id').val(blend_id);
                    if (blend_id == '') {
                        blend_id = '';
                    }
                    end_usage_id = checkboxValues_end_usage.toString() jQuery('#end_usage_id').val(end_usage_id);
                    if (end_usage_id == '') {
                        end_usage_id = '';
                    }
                    catids = checkboxValues.toString();
                    jQuery('#category_id').val(catids);
                    if (catids == '') {
                        catids = '';
                    }
                    console.log(catids);
                    colorcode = checkboxValues_color.toString();
                    jQuery('#swatches_id').val(colorcode);
                    if (colorcode == '') {
                        colorcode = '';
                    }
                    console.log(catids);
                    console.log(blend_id);
                    console.log(end_usage_id);
                    console.log(colorcode);
                    jQuery.post("<?php echo admin_url('admin-ajax.php') ?>", {
                        'catid': catids,
                        'blend_id': blend_id,
                        'end_usage_id': end_usage_id,
                        'book_id': book_id,
                        'colorcode': colorcode,
                        'action': 'category_filter_post_melange'
                    }, function(res) {
                        if (res.status == 1) {
                            jQuery(".product_details11").html('');
                            var item = res.list
                            var $html = '';
                            for (var i = 0; i < item.length; i++) {
                                if (jQuery.inArray(item[i]['postid'], swetch_post_id) != -1) {
                                    var $checked = 'checked';
                                    var $display = 'block';
                                } else {
                                    var $checked = '';
                                    var $display = 'none';
                                }
                                var imgs = item[i]['img'] != '' ? item[i]['img'] :
                                    '<?php echo get_template_directory_uri() . "/images/melangProductArea3.jpg" ?>';
                                $html += '<li class="melangProducdetails">';
                                $html += '<a href="javascript:void(0)" data-tag="' + item[i]['postid'] +
                                    '" class="add_swatch">';
                                $html += '<img src="' + imgs + '" alt="' + item[i]['title'] + '"/>';
                                $html += ' <span class="img_layer">';
                                $html += '<span class="img_layerbtnEnquire" data-tag="' + item[i][
                                    'postid'
                                ] + '">Enquiry</span>';
                                $html += '</span>';
                                $html += '</a>';
                                $html += '<div class="melangProducDescription">';
                                $html += '<div class="melangProductleft">';
                                $html += '<h2>' + item[i]['title'] + '</h2><p>';
                                $html += '</p>';
                                $html += '</div>';
                                $html +=
                                    '<div class="melangProductright"><span class="img_layerbtn add_swatchs" ></span>';
                                $html += '<input type="checkbox" value="' + item[i]['postid'] +
                                    '" class="melange_product" ' + $checked + ' style="display:' +
                                    $display + '">';
                                $html += '</div>';
                                $html += '</div>';
                                $html += '</li>';
                            }
                            jQuery("#current_page").val(2) jQuery("#load_more225").html('View more');
                            var cat_id = jQuery("#category_id").val();
                            var swatches_id = jQuery("#swatches_id").val();
                            var blend_id = jQuery("#blend_id").val();
                            var end_usage_id = jQuery("#end_usage_id").val();
                            var book_idsss = jQuery("#book_id").val();
                            if (cat_id == '' && swatches_id == '' && blend_id == '' && end_usage_id == '' &&
                                book_idsss == '') {
                                jQuery(".load_more").css('display', 'block');
                            } else {
                                jQuery(".load_more").css('display', 'none');
                            }
                            jQuery("#load_more225").prop('disabled', false);
                            jQuery(".product_details_categroy_wise_responsive").html($html);
                            jQuery(".melangProducdetails a.inline").fancybox({
                                wrapCSS: 'someClass',
                                width: 850,
                                height: 'auto',
                                maxWidth: '100%',
                            });
                        } else {
                            jQuery(".product_details_categroy_wise_responsive").html(
                                '<li class="noresultfound">No result found.</li>');
                        }
                    }, 'json');
                });


        });

        jQuery(document).on("click", "#load_more225", function() {
            var cat_id = jQuery("#category_id").val();
            var swatches_id = jQuery("#swatches_id").val();
            var blend_id = jQuery("#blend_id").val();
            var end_usage_id = jQuery("#end_usage_id").val();
            var current_page = jQuery("#current_page").val();
            jQuery(this).html('Please wait...');
            jQuery(this).prop('disabled', true);
            jQuery.post("<?php echo admin_url('admin-ajax.php') ?>", {
                "catid": cat_id,
                "blend_id": blend_id,
                "end_usage_id": end_usage_id,
                "colorcode": swatches_id,
                "paged": current_page,
                "action": "category_filter_post_melange"
            }, function(resp) {
                if (resp.status == 1) {
                    jQuery(".product_details11").html('');
                    jQuery("#load_more225").html('View more');
                    jQuery("#load_more225").prop('disabled', false);
                    var currentpageINC = parseInt(jQuery("#current_page").val()) + 1;
                    jQuery("#current_page").val(currentpageINC);
                    var item = resp.list
                    var $html = '';
                    for (var i = 0; i < item.length; i++) {
                        if (jQuery.inArray(item[i]['postid'], swetch_post_id) != -1) {
                            var $checked = 'checked';
                            var $display = 'block';
                        } else {
                            var $checked = '';
                            var $display = 'none';
                        }
                        $html += '<li class="melangProducdetails">';
                        $html += '<a href="javascript:void(0)" data-tag="' + item[i]['postid'] +
                            '" class="add_swatch">';
                        $html += '<img src="' + item[i]['img'] + '" alt="' + item[i]['title'] + '"/>';
                        $html += ' <span class="img_layer">';
                        $html += '<span class="img_layerbtnEnquire" data-tag="' + item[i]['postid'] +
                            '">Enquiry</span>';
                        $html += '</span>';
                        $html += '</a>';
                        $html += '<div class="melangProducDescription">';
                        $html += '<div class="melangProductleft">';
                        $html += '<h2>' + item[i]['title'] + '</h2><p>';
                        $html += '</p>';
                        $html += '</div>';
                        $html +=
                            '<div class="melangProductright"><span class="img_layerbtn add_swatchs"></span>';
                        $html += '<input type="checkbox" value="' + item[i]['postid'] +
                            '" class="melange_product" ' + $checked + ' style="display:' + $display + '">';
                        $html += '</div>';
                        $html += '</div>';
                        $html += '</li>';
                    }
                    jQuery(".product_details_categroy_wise_responsive").append($html);
                    jQuery(".melangProducdetails a.inline").fancybox({
                        wrapCSS: 'someClass',
                        width: '100%',
                        height: 'auto',
                        maxWidth: 550,
                    });
                } else {
                    jQuery("#load_more225").html('No result found.');
                }
            }, 'json');
            return false;
        });

        jQuery(document).ready(function() {
            var submitIcon = jQuery('.searchbox-icon');
            var inputBox = jQuery('.searchbox-input');
            var searchBox = jQuery('.searchbox');
            var isOpen = false;
            submitIcon.click(function() {
                if (isOpen == false) {
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
                }
            });
            submitIcon.mouseup(function() {
                return false;
            });
            searchBox.mouseup(function() {
                return false;
            });
            jQuery(document).mouseup(function() {
                if (isOpen == true) {
                    jQuery('.searchbox-icon').css('display', 'block');
                    submitIcon.click();
                }
            });
        });

        function buttonUp() {
            var inputVal = jQuery('.searchbox-input').val();
            inputVal = jQuery.trim(inputVal).length;
            if (inputVal !== 0) {
                jQuery('.searchbox-icon').css('display', 'none');
            } else {
                jQuery('.searchbox-input').val('');
                jQuery('.searchbox-icon').css('display', 'block');
            }
        }
    </script>

    <script>
        jQuery(document).ready(function(e) {
            e(".mapTabList ul li").mouseenter(function() {
                var n = e(this).attr("data-tabb");
                e(".mapTabList ul").find("li").removeClass("activeMap"), e(".mapTabList ul li").find(
                        ".map-Content-content").slideUp(), e(this).addClass("activeMap"), e(this).find(
                        ".map-Content-content." + n).slideDown(), e(this).parents(".row").find(".mapImages li")
                    .hide(), e(this).parents(".row").find(".mapImages ." + n).hide(function() {
                        e(this).css("display", "block")
                    })
            }), e(".mapTabList ul li").mouseleave(function() {
                e(this).find(".map-Content-content:visible").css({
                    display: "none"
                })
            }), "#locationBlock" == window.location.hash && (jQuery("nav li a, .footer_menu li a").removeClass(
                    "active"), jQuery("nav .location_menu, .footer_menu .location_menu").addClass("active"), console
                .log("done123")), e("nav .location_menu").on("click", function() {
                e(this).parents("nav").find(".active").removeClass("active"), e(this).addClass("active"), e(
                    ".footer_menu a.location_menu").addClass("active")
            }), jQuery(document).on("click", "#newsletter-subscribehome", function() {
                return jQuery(this).html("<span><span>PLEASE WAIT...</span></span>"), jQuery(document).find(
                    ".error").html("").attr("style", ""), e.post(
                    "<?php echo admin_url('admin-ajax.php') ?>", e("#subscribe-details").serialize(),
                    function(n) {
                        jQuery("#newsletter-subscribehome").html("<span><span>SIGN UP</span></span>"),
                            "undefined" != n.success && "" != e.trim(n.success) ? (e(document).find(
                                ".error").html(n.success).css({
                                color: "#856118",
                                "font-size": "17px",
                                "font-weight": "600",
                                "line-height": "30px"
                            }), e("#subscribe-details")[0].reset()) : e.each(n, function(n, t) {
                                e(document).find("." + n).html(t).css({
                                    "font-size": "15px",
                                    color: "red"
                                })
                            })
                    }, "json"), !1
            })
        }), $("#homeslideid").on("loadstart", function() {
            console.log("page_video_loaded")
        });
    </script>
<?php } ?>
<?php wp_footer(); ?>

</body>

</html>
<?php
global $template;
if ($_GET['debug'] == '1') {
    echo 'template_name ' . basename($template);
}
?>