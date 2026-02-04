<?php
/* 
Template Name: Capture
*/
get_header();
?>
<section class="aboutContact_form yarn-range-about">
	<div class="gapi"></div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- contact-form -->
	<script src="https://www.google.com/recaptcha/api.js"></script>
	<script>
		$(document).ready(function() {
			$("#press").on('submit', function(e) {
				e.preventDefault();
				var url = '/wp-content/themes/rswm/template/template-ajax.php';
				//var response = grecaptcha.getResponse();
				$.ajax({
					type: "POST",
					url: url,
					data: {
						captcha: grecaptcha.getResponse()
					},
					success: function(data) {
						$("div#result").css('display', 'inline', 'important');
						$("div#result").html(data);
					}
				});
			});
		});
	</script>
	<script>
		/*
    $("#enquire").on('submit', function(e) {
       e.preventDefault();
     //var url = '/wp-content/themes/rswm/template/template-ajax.php';
      var response = grecaptcha.getResponse();
	  var form = $(this);
	  function verifyCaptcha() {
        document.getElementById('g-recaptcha-error').innerHTML = '';
       }
          
	$.ajax({
        type: "POST",
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
		data: $(this).serialize(),
        success: function(data){ 
		if(data == "success"){
            if(onfoucs != 'NULL') {
				$(onfoucs).focus();
			}
		}
       else {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        return false;
		}
		}
      });
	  
	});
	*/
	</script>
	<!-- custom check -->
	<div class="testers">
		<h3>Ajax Test</h3>
		<form method="post" name="enquire" class="recap" id="press">
			<div class="newform-group form-fields">
				<input type="text" id="name" name="name" placeholder="name" class="isvalid" />
			</div>

			<div class="newform-group form-fields">
				<input type="text" id="phone" name="phone" placeholder="phone number" class="isvalid" />
			</div>

			<div class="newform-group form-fields">
				<input type="text" id="email" name="email" placeholder="email address" class="isvalid" />
			</div>
			<div class="newform-group form-fields">
				<input type="text" id="company" name="company" placeholder="company" class="isvalid" />
			</div>

			<div class="newform-group">
				<input type="text" id="target_market_location" name="target_market_location" placeholder="Target market location" />
			</div>
			<div class="newform-group">
				<textarea name="message" placeholder="message"></textarea>
			</div>
			<div class="newform-group">
				<div class="business-enquires-text" style="width: 59%;margin: 25px auto;">
				</div>
			</div>
			<!-- set captcha -->
			<div class="newform-group">
				<div class="g-recaptcha" data-sitekey="6LfOtsYZAAAAAB9N4mqthsvmpZ-cxltQGlbEVwMh"></div>
			</div>
			<!--/ set captcha -->
			<div class="newform-group">
				<button id="submiter">Submit</button>
				<div id="result"></div>
			</div>
		</form>
		<div class="responsive"></div>
	</div>
	<style>
		.testers {
			max-width: 600px;
			margin: 35px auto 62px;
		}

		.testers input {
			width: 100%;
			display: block;
			float: unset;
			margin: 0px 0px;
			margin-bottom: 0;
			border: 1px solid #b7b7b7;
			padding: 7px;
			outline: none;
		}

		.testers textarea {
			width: 100%;
			height: 6rem;
			padding: 10px;
		}

		#submiter {
			width: auto;
			padding: 10px;
			min-width: 98px;
			background: #b68113;
			letter-spacing: 1px;
			color: #fff;
			border: none;
			border-radius: 2px;
		}
	</style>
	<!--/ custom check -->
	<?php //$qj = get_queried_object(); 
	?>
	<!--
<div class="forBusibess edgeForBusibess">  
    <h3>For Business Enquiries</h3>
    <form method="post" name="enquire" id="enquire" class="recap">
        <div class="newform-group form-fields">
            <input type="text" id="name" name="name" placeholder="name" class="isvalid"/>
        </div>
        
        <div class="newform-group form-fields">
        <input type="text" id="phone" name="phone" placeholder="phone number" class="isvalid"/>
        </div>
        
        <div class="newform-group form-fields">    
        <input type="text" id="email" name="email" placeholder="email address" class="isvalid"/>
        </div>
        <div class="newform-group form-fields">
        <input type="text" id="company" name="company" placeholder="company" class="isvalid"/>
        </div>
        
        <div class="newform-group">
		<input type="text" id="target_market_location" name="target_market_location" placeholder="Target market location"/>
        </div>
        <div class="newform-group">
        <textarea name="message" placeholder="message"></textarea>
        </div> 
        <div class="newform-group">
        <input type="hidden" name="action" value="enquire_form_submission">
        <input type="hidden" name="post_id" value="<?php echo $qj->ID ?>">
        </div>
        <div class="newform-group">
        <div class="business-enquires-text" style="width: 59%;margin: 25px auto;">
        </div>
        </div>
		-->
	<!-- set captcha 		
        <div class="newform-group">
         <div class="g-recaptcha" data-sitekey="6LfOtsYZAAAAAB9N4mqthsvmpZ-cxltQGlbEVwMh"></div>
        </div>	
-->
	<!--/ set captcha 		
        <div class="newform-group">
        <button id="submit_btn">Submit</button>
		<div id="result"></div>
        </div>
    </form>
    <div class="responsive"></div>
</div>  
-->
	<script>
		/*
$(document).ready(function(){
$('#enquire').on('submit', function(event) {
		event.preventDefault();
		var $form = $(this);
        var recap = $(#g-recaptcha-response).val();
		
		$.post($form.attr('action'), $form.serialize(), function(data) {
			 $("div#result").css('display', 'inline', 'important');
             $("div#result").html(data);
		});
		
	});
});
*/
		/*
		$(document).ready(function(){
		$('#enquire').on('submit', function(event) {
			event.preventDefault();
		   var url = "<?php echo admin_url('admin-ajax.php'); ?>";
		   var response = grecaptcha.getResponse();
		   document.getElementById("miu").value = grecaptcha.getResponse();
		    $.ajax({
		        type: "POST",
		        url: url,
		        data: {captcha: response},
		        success: function(data) { 
					 $("div#result").css('display', 'inline', 'important');
		             $("div#result").html(data);
				}

		    });
			});
		});
		*/
	</script>
	<style>
		.forBusibess input {
			width: 100%;
			display: block;
			float: unset;
			margin: 0px 0px;
			margin-bottom: 0;
			border: 1px solid #b7b7b7;
			padding: 7px;
			outline: none;
		}

		.newform-group.form-fields {
			width: 50%;
			float: left;


		}

		.newform-group {
			margin-bottom: 20px;
			padding: 0 10px;
		}

		.newform-group input#target_market_location {
			width: 100%;
		}

		.forBusibess textarea {
			width: 100%;
		}

		form#enquire {
			margin: 0 -10px;
		}

		.newform-group span.en_error {
			display: block;
			color: red;
			margin-top: 5px;
		}

		@media screen and (max-width: 767px) {
			.newform-group.form-fields {
				width: 100%;
				float: left;
			}

			.newform-group {
				margin-bottom: 15px;
				padding: 0 10px;
			}

			.forBusibess form {
				padding: 0px 20px;
			}

		}
	</style>
	<!--/ contact form -->
</section>

<!-- footer section start -->

<footer>

	<div class="stickyButtontwo">
		<a href="<?php echo site_url('/'); ?>wp-content/uploads/2020/04/RSWM_Cares_covid19.pdf" target="blank" style=""> RSWM's Response to <span class="covid"> COVID-19 </span></a>
	</div>
	<div class="stickyButtonthree">
		<a href="<?php echo site_url('/'); ?>wp-content/themes/rswm/images/pdf/RSWM_SOP_Back_to_Work.pdf" target="blank" style=""> Back to work <span class="covid"> after COVID-19</span></a>
	</div>

	<div class="container">
		<div class="row">
			<div class="col span_12">
				<ul class="footer_menu">
					<?php $obj = get_queried_object(); ?>
					<li><a href="<?php echo get_permalink(95) ?>" class="<?php echo $obj->ID == 95 ? 'active' : '' ?>" title="Yarn Supplier and Manufacturer">About</a></li>
					<li><a href="<?php echo get_permalink(1066) ?>" class="<?php echo $obj->ID == 1066 ? 'active' : '' ?>" title="Events by RSWM Ltd.">Events</a></li>
					<li><a href="<?php echo get_permalink(5); ?>#business-units" class="<?php echo $obj->ID == 5 ? 'active' : '' ?>" title="Premier Yarns Manufacturer">Business Units</a></li>
					<li><a href="<?php echo get_permalink(103) ?>" class="<?php echo $obj->ID == 103 ? 'active' : '' ?>" title="Functional Blended Yarns">RSWM Edge<sup>TM</sup></a></li>
					<li><a href="<?php echo get_permalink(131) ?>" class="<?php echo $obj->ID == 131 ? 'active' : '' ?>" title="Annual Reports and Investor Relations">Investors</a></li>
					<li><a href="<?php echo get_permalink(108) ?>" class="<?php echo $obj->ID == 108 ? 'active' : '' ?>" title="RSWM Sustainable Initiatives ">Sustainability</a></li>
					<li><a href="<?php echo get_permalink(95) ?>#locationBlock" class="location_menu" title="RSWM Ltd. Locations">Locations</a></li>
					<li><a href="<?php echo get_permalink(2093) ?>" class="<?php echo $obj->ID == 2093 ? 'active' : '' ?>" title="Yarn collections">Collections</a></li>
					<li><a href="<?php echo get_template_directory_uri() ?>/images/pdf/rswm-corporate-brochure.pdf" target="_blank" title="RSWM Corporate Brochure">Corporate Brochure</a></li>
					<li><a href="<?php echo get_permalink(1021) ?>" class="<?php echo $obj->ID == 1021 ? 'active' : '' ?>" title="Contact RSWM Ltd.">Contact</a></li>
					<li class="socials-icon">
						<ul>
							<li class="instagram1"><a href="https://www.instagram.com/rswmofficial/" target="_blank" title="RSWM Ltd. Official Instagram Page"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li class="twitter"><a href="https://twitter.com/rswmofficial?lang=en" target="_blank" title="RSWM Ltd. Official Twitter Page"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li class="facebook1"><a href="https://www.facebook.com/rswmofficial/" target="_blank" title="RSWM Ltd. Official Facebook Page"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
							<li class="facebook1"><a href="https://www.linkedin.com/company/rswmofficial/" target="_blank" title="RSWM Ltd. Official Linkedin Page"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						</ul>
					</li>
				</ul>
				<section class="subscribe-form" style="">
					<div class="container">
						<div class="row">
							<div class="col span_12">
								<div class="newsletter-head">
									<h2>SUBSCRIBE</h2>
									<p>Sign up with your email address to receive news and updates.</p>
								</div>
							</div>
						</div>
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

								// loop all elements but not submit button
								for (var i = 0, l = inputs.length - 1; i < l; i++) {
									var val = form[inputs[i].name].value;

									// clear all errors
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
						<?php
						/* Check duplicacy */

						?>
						<?php

						?>
						<div class="row">
							<div class="newsletter-form">


								<form action="" method="post" id="subscribe-details" class="fome" onsubmit="return validForm()" name="signup_form">
									<div class="subscribe-input-box">
										<input type="text" autocapitalize="off" autocorrect="off" spellcheck="false" name="fname" placeholder="First Name" id="first-name" title="First Name" class="input-text required-entry validate-email" required>



										<input type="text" autocapitalize="off" autocorrect="off" spellcheck="false" name="lname" placeholder="Last Name" id="last-name" title="Last Name" class="input-text required-entry validate-email" required>


										<input type="email" autocapitalize="off" autocorrect="off" spellcheck="false" name="email" placeholder="Email Address" id="email" title="Email Address" class="input-text required-entry validate-email" required><br><br>


									</div>
									<div class="subscribe-actions">
										<button type="submit" title="Sign up" name="signup" class="button" id="newsletter-subscribehome"><span><span>SIGN UP</span></span></button>
										<input type="hidden" name="action" value="newsletter_subscribe_hook">
									</div>

								</form>
							</div>
							<span class="error"></span>
						</div>


						<!--div class="row">
<div class="subscribe-privacy-text">
<p>We respect your policy</p>
</div>
</div-->
					</div>
				</section>

				<div class="copyright">
					All Rights Reserved <?php date('Y') ?> | rswm.in<br />
					<a href="http://www.hostdost.in" target="_blank">HOSTDOST</a>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>


<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery-2.1.4.min.js?var=255"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery-migrate-1.2.1.min.js?var=255"></script>
<script type='text/javascript' src="<?php echo get_template_directory_uri() ?>/js/jquery.elevatezoom.js?var=255"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/SmoothScroll.js?var=255"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.fancybox.js?var=255"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.fancybox.pack.js?var=255"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/imagesloaded.min.js?ver=3.2.01"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/masonry1.pkgd.min.js?ver=4.8.11"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/slick.min.js?var=255"></script>
<script type='text/javascript' src="<?php echo get_template_directory_uri() ?>/js/custom.js?var=<?php echo rand(); ?>"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>




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
			jQuery.post('<?php echo admin_url('admin-ajax.php'); ?>', jQuery("#melange_product_details").serialize(), function(resp) {
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
				$('#enquire').prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
			});
		});
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

		jQuery('#submit_btn').click(function() {

			//alert(jQuery('input[name="g-recaptcha-response"]').val());
			//alert(jQuery("#enquire").serialize());
			var onfoucs = "NULL";
			$("#enquire .isvalid").each(function(index, val) {

				var inputName = $(this).prop("name");
				var tagName = $(this).prop("tagName").toLowerCase()
				var labelName = $(tagName + "[name='" + inputName + "']").attr('placeholder').toLowerCase();
				$(tagName + "[name='" + inputName + "']").parent(".form-fields").find(".en_error").remove();
				if ($.trim($(tagName + "[name='" + inputName + "']").val()) == '') {

					$(tagName + "[name='" + inputName + "']").css("border", "1px solid red");
					$(tagName + "[name='" + inputName + "']").parent(".form-fields").append("<span class='en_error'>Enter your " + labelName + "</span>");
					if (onfoucs == 'NULL') {
						onfoucs = tagName + "[name='" + inputName + "']";
					}

				} else if ((inputName == "email") && $.trim($(tagName + "[name='" + inputName + "']").val()) != "" && reg.test($.trim($(tagName + "[name='" + inputName + "']").val())) == false) {
					$(tagName + "[name='" + inputName + "']").css("border", "1px solid red");
					$(tagName + "[name='" + inputName + "']").parent(".form-fields").append("<span class='en_error'>Enter your valid " + labelName + "</span>");

					if (onfoucs == 'NULL') {
						onfoucs = tagName + "[name='" + inputName + "']";
					}
				} else if ((inputName == "phone") && $.trim($(tagName + "[name='" + inputName + "']").val()) != "" && !$.trim($(tagName + "[name='" + inputName + "']").val()).match('[0-9]{10,15}')) {
					$(tagName + "[name='" + inputName + "']").css("border", "1px solid red");
					$(tagName + "[name='" + inputName + "']").parent(".form-fields").append("<span class='en_error'>Enter your valid " + labelName + " (10-15 digits)</span>");
					//$( "<p class='terror'>Enter your valid "+labelName+" (10-15)</p>" ).insertAfter( tagName+"[name='"+inputName+"']" );
					if (onfoucs == 'NULL') {
						onfoucs = tagName + "[name='" + inputName + "']";
					}
				} else if ($.trim($(tagName + "[name='" + inputName + "']").val()) != "") {
					$(tagName + "[name='" + inputName + "']").css("border", "");

					// $(tagName+"[name='"+inputName+"']").find(".terror").remove();
				}
			});
			if (onfoucs != 'NULL') {
				$(onfoucs).focus();
			}

			if (onfoucs == 'NULL') {
				jQuery(this).html('Please wait...');
				jQuery(this).prop('disabled', true);

				jQuery.post('<?php echo admin_url('admin-ajax.php'); ?>', jQuery("#enquire").serialize(), function(resp) {
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
						//grecaptcha.reset();
						jQuery(document).find("div.responsive").html('Your enquiry has been submitted!');
						jQuery(document).find("div.responsive").css({
							'color': 'green',
							"text-align": "center",
							"margin-top": "11px",
							"font-size": "14px"
						});
						window.location.href = "<?php echo site_url('/'); ?>thank-you/";
					}
				});
			}

			return false;
		});

		jQuery(document).on('click', '.checked12', function() {
			jQuery(this).removeAttr('checked', 'false')
			jQuery(this).removeClass('checked12')
		});
		var checkboxValues_color = [];
		jQuery(document).on('click', 'input[type="checkbox"], input[type="radio"] , .melangColorBoxLeft.book_section .dropdown .dropdown-menu li', function() {

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
				checkboxValues_end_usage.splice(jQuery.inArray(jQuery(this).val(), checkboxValues_end_usage), 1);
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


			end_usage_id = checkboxValues_end_usage.toString()
			jQuery('#end_usage_id').val(end_usage_id);

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
						var imgs = item[i]['img'] != '' ? item[i]['img'] : '<?php echo get_template_directory_uri() . "/images/melangProductArea3.jpg" ?>';
						$html += '<li class="melangProducdetails">';
						$html += '<a href="javascript:void(0)" data-tag="' + item[i]['postid'] + '" class="add_swatch">';
						$html += '<img src="' + imgs + '" alt="' + item[i]['title'] + '"/>';

						$html += ' <span class="img_layer">';
						/* $html +='<span class="img_layerbtn add_swatchs">Add</span> ';*/
						$html += '<span class="img_layerbtnEnquire" data-tag="' + item[i]['postid'] + '">Enquiry</span>';
						$html += '</span>';

						$html += '</a>';
						$html += '<div class="melangProducDescription">';
						$html += '<div class="melangProductleft">';
						$html += '<h2>' + item[i]['title'] + '</h2><p>';
						$html += '</p>';
						$html += '</div>';

						$html += '<div class="melangProductright"><span class="img_layerbtn add_swatchs" ></span>';
						$html += '<input type="checkbox" value="' + item[i]['postid'] + '" class="melange_product" ' + $checked + ' style="display:' + $display + '">';
						$html += '</div>';
						$html += '</div>';
						$html += '</li>';
					}
					jQuery("#current_page").val(2)
					jQuery("#load_more225").html('View more');


					var cat_id = jQuery("#category_id").val();
					var swatches_id = jQuery("#swatches_id").val();
					var blend_id = jQuery("#blend_id").val();
					var end_usage_id = jQuery("#end_usage_id").val();
					var book_idsss = jQuery("#book_id").val();
					if (cat_id == '' && swatches_id == '' && blend_id == '' && end_usage_id == '' && book_idsss == '') {
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
						maxWidth: '100%'

					});
				} else {
					jQuery(".product_details_categroy_wise_responsive").html('<li class="noresultfound">No result found.</li>');
				}


			}, 'json');


		});
	})






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
					$html += '<a href="javascript:void(0)" data-tag="' + item[i]['postid'] + '" class="add_swatch">';
					$html += '<img src="' + item[i]['img'] + '" alt="' + item[i]['title'] + '"/>';
					/* $html +='<input type="checkbox" value="'+item[i]['postid']+'" class="melange_product" '+$checked+' style="display:'+$display+'">';*/
					$html += ' <span class="img_layer">';
					/*$html +='<span class="img_layerbtn add_swatchs">Add</span> ';*/
					$html += '<span class="img_layerbtnEnquire" data-tag="' + item[i]['postid'] + '">Enquiry</span>';
					$html += '</span>';
					$html += '</a>';
					$html += '<div class="melangProducDescription">';
					$html += '<div class="melangProductleft">';
					$html += '<h2>' + item[i]['title'] + '</h2><p>';
					/* if(item[i]['shadeNo'] != '') {
				 $html += 'Shade# '+item[i]['shadeNo'];
			  }*/
					/* if(item[i]['shadeNo'] != '' && item[i]['lotno'] != '') {
				 $html += ' | ';
			  }
			  if(item[i]['lotno'] != '') {
				 $html += ' Lot No.- '+item[i]['lotno'];
			  }*/
					$html += '</p>';
					$html += '</div>';


					$html += '<div class="melangProductright"><span class="img_layerbtn add_swatchs"></span>';
					$html += '<input type="checkbox" value="' + item[i]['postid'] + '" class="melange_product" ' + $checked + ' style="display:' + $display + '">';
					$html += '</div>';
					$html += '</div>';
					$html += '</li>';
				}

				jQuery(".product_details_categroy_wise_responsive").append($html);
				jQuery(".melangProducdetails a.inline").fancybox({
					wrapCSS: 'someClass',
					width: '100%',
					height: 'auto',
					maxWidth: 550

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
	jQuery(document).ready(function($) {
		$('.mapTabList ul li').mouseenter(function() {
			var mapImage = $(this).attr('data-tabb');
			$('.mapTabList ul').find('li').removeClass('activeMap');
			$('.mapTabList ul li').find('.map-Content-content').slideUp();
			$(this).addClass('activeMap');

			//$('.'+mapImage).addClass('map-Content-content').fadeIn();
			$(this).find('.map-Content-content.' + mapImage).slideDown();

			$(this).parents('.row').find('.mapImages li').hide();

			$(this).parents('.row').find('.mapImages .' + mapImage).hide(function() {
				$(this).css('display', 'block');


			});

		});
		$('.mapTabList ul li').mouseleave(function() {
			$(this).find('.map-Content-content:visible').css({
				'display': 'none'
			});
			//$('.mapTabList ul li').removeClass('activeMap');
		});
		var hash = window.location.hash;

		if (hash == '#locationBlock') {
			jQuery('nav li a, .footer_menu li a').removeClass('active');
			jQuery('nav .location_menu, .footer_menu .location_menu').addClass('active');
			console.log('done123');
		}
		$('nav .location_menu').on('click', function() {
			$(this).parents('nav').find('.active').removeClass('active');
			$(this).addClass('active');
			$('.footer_menu a.location_menu').addClass('active');

		});

		jQuery(document).on("click", "#newsletter-subscribehome", function() {
			jQuery(this).html("<span><span>PLEASE WAIT...</span></span>")
			jQuery(document).find(".error").html("").attr("style", "");
			$.post("<?php echo admin_url('admin-ajax.php') ?>", $("#subscribe-details").serialize(), function(data) {
				jQuery("#newsletter-subscribehome").html("<span><span>SIGN UP</span></span>")
				if (data.success != "undefined" && $.trim(data.success) != '') {
					$(document).find(".error").html(data.success).css({
						"color": "#856118",
						"font-size": "17px",
						"font-weight": "600",
						"line-height": "30px"
					});
					$("#subscribe-details")[0].reset();
				} else {
					$.each(data, function(key, val) {
						$(document).find("." + key).html(val).css({
							"font-size": "15px",
							"color": "red"
						});
					});
				}
			}, 'json');
			return false;
		})
	})
</script>

<?php wp_footer(); ?>


</body>

</html>
<style>
	.floating_badge {
		display: none !important;
	}

	.stickyButtonthree a,
	.stickyButtontwo a {
		font-family: 'gotham_lightregular', serif;
		font-size: 14px;
		color: #000;
		font-weight: 700;
		line-height: 20px;
		text-decoration: none;
	}

	.stickyButtontwo {
		bottom: 50%;
		right: 0;
		position: fixed;
		max-width: 160px;
		z-index: 9;
		background: #dec186;
		border-radius: 5px 0px 0px 5px;
		padding: 10px 3px;
	}

	.stickyButtonthree {
		bottom: 35%;
		right: 0;
		position: fixed;
		max-width: 160px;
		z-index: 9;
		background: #dec186;
		border-radius: 5px 0px 0px 5px;
		padding: 10px 3px;
	}

	.stickyButtonthree span.covid,
	.stickyButtontwo span.covid {
		font-family: 'gotham_htfbook';
	}


	@media only screen and (max-width:767px) {

		.stickyButtonthree a,
		.stickyButtontwo a {
			font-size: 13px;
		}

		.stickyButtontwo {
			bottom: 0;
			right: 0;
			position: fixed;
			max-width: 100%;
			z-index: 9;
			background: #dec186;
			border-radius: 0;
			padding: 5px 0;
			margin-top: 0;
			width: 100%;
		}

		.stickyButtonthree {
			bottom: 25px;
			right: 0;
			position: fixed;
			max-width: 100%;
			z-index: 9;
			background: #dec186;
			border-radius: 0;
			padding: 5px 0;
			margin-top: 0;
			width: 100%;
		}
	}

	/*7-august-2020*/

	section.subscribe-form .row:after {
		clear: both;
		display: block;
		content: '';
	}

	.newsletter-head {
		padding-bottom: 30px;
	}

	.newsletter-head h2 {
		font-size: 25px;
		line-height: 60px;
		font-family: 'gotham_htfbook';
	}

	.newsletter-head p {
		font-size: 13px;
		color: #000;
		font-family: 'gotham_htfbook';
		line-height: 20px;
	}

	.subscribe-input-box {
		display: inline-block;
		width: 85%;
		float: left;
	}

	form#subscribe-details .subscribe-input-box input {
		width: 295px;
		height: 49px;
		padding: 5px;
		background: no-repeat;
		outline: 0;
		border: 1px solid #ccc;
		font-family: 'gotham_htfbook';
		background: #fff;
		margin-left: 23px;
	}

	form#subscribe-details .subscribe-actions button#newsletter-subscribehome {
		width: 120px;
		outline: none;
		background: no-repeat;
		border: 1px solid #ccc;
		font-size: 14px;
		font-family: 'gotham_htfbook';
		background: #555;
		color: #fff;
		height: 49px;

	}

	.subscribe-privacy-text p {
		font-size: 13px;
		color: #000;
		font-family: 'gotham_htfbook';
	}

	.subscribe-privacy-text {
		padding: 30px 0px;
	}

	.subscribe-actions {
		width: 10%;
		float: left;
	}

	footer .copyright {
		padding-top: 30px !important;
	}

	footer .container {
		padding: 0px;
		marging: 0px;
		max-width: 100%;
	}

	footer ul {
		max-width: 1180px !important;
		margin: 10px auto !important;
	}

	section.subscribe-form .container {
		padding: 10px 0px 30px !important;
		background: #dec186;
		max-width: 100%;
	}

	section.subscribe-form .newsletter-form {
		width: 1200px;
		display: block;
		margin: 0px auto;
	}

	section.subscribe-form .newsletter-form:after {
		clear: both;
		display: block;
		content: '';
	}

	form#subscribe-details .subscribe-actions button#newsletter-subscribehome:hover {
		background-color: #ebd9b5;
		color: #555;
		font-weight: bold;
	}


	@media only screen and (max-width: 767px) {
		.subscribe-input-box {
			display: block;
			width: 100%;
			float: left;
		}

		section.subscribe-form .container {
			padding: 10px 0px 10px;
			max-width: 1180px;
			margin: 0px auto;
		}

		section.subscribe-form .subscribe-input-box {
			display: block;
			width: 100%;
			float: left;
		}

		section.subscribe-form form#subscribe-details .subscribe-input-box input {
			width: 90%;
			margin-bottom: 15px;
			margin-left: 0px;
		}

		section.subscribe-form .subscribe-actions {
			width: 100%;
		}

		section.subscribe-form .newsletter-head p {
			line-height: 20px;
		}

		section.subscribe-form .newsletter-form {
			width: 100%;
			display: block;
			margin: 0px auto;
		}

		section.subscribe-form script+div {
			width: 100% !important;
		}

		section.subscribe-form .row {
			margin: 0px;
		}
	}

	.gapi {
		padding-top: 60px;
	}
</style>

<!--/ footer section end -->