<?php
add_action('add_meta_boxes', 'wpdocs_register_meta_boxes');

function wpdocs_my_display_callback()
{
	global $post;
	$getcontent = json_decode(get_post_meta($post->ID, 'wpfc-text-after-content', true));
	$getlink = json_decode(get_post_meta($post->ID, 'wpfc-linked_url_after-content', true));
	$ppr = 0;
?>
	<style>
		hr {
			margin-top: 20px;
			margin-bottom: 20px;
		}

		.remove span {
			padding: 6px 8px;
			background: #f6921e;
			border-radius: 63%;
			color: #fff;
			cursor: pointer;
		}
	</style>
	<div class="afterContent_maindiv">
		<?php for ($pst = 0; $pst < count($getcontent) or $pst < count($getlink) or $pst === $ppr; $pst++) { ?>
			<div class="afterContent_clone">
				<div style="width:94%;float:left">
					<div><label class="wpt-form-label wpt-form-textfield-label">Text</label></div>
					<div><textarea name="wpfc-text-after-content[]" rows="4"
							cols="80"><?php echo $getcontent[$pst] ?></textarea></div>
					<div><label class="wpt-form-label wpt-form-textfield-label">Link URL</label></div>
					<div><input type="text" name="wpfc-linked_url_after-content[]" value="<?php echo $getlink[$pst] ?>"
							style="width: 671px;"></div>
				</div>
				<div class="remove" style="width:5%;float:right;<?php echo $pst == 0 ? 'display:none' : 'display:block' ?>">
					<span>X</span>
				</div>
				<div style="clear:both;"></div>
				<hr>

			</div>
		<?php } ?>
	</div>
	<div style="margin-top:25px;"><a href="javascript:void(0)" id="btncontentul"
			class="button button-primary button-large">Add New</a></div>
	<script>
		$(document).ready(function() {
			$('#btncontentul').on('click', function() {
				var clone = $(".afterContent_clone:last").clone();
				clone.find('input').val('');
				clone.find('textarea').val('');
				clone.find('.remove').css('display', 'block');
				$('.afterContent_maindiv').append(clone);
			});
			$('.remove span').live('click', function() {
				$(this).parents('.afterContent_clone').remove();
			})
		})
	</script>
<?php
}

function wpdocs_my_display_callback_client()
{
	global $post;
	$ppid = $post->ID;
	$logopath = json_decode(stripslashes(get_post_meta($ppid, 'wpfc_logo_path', true)));

?>
	<style>
		.remove_main_div {
			width: 4%;
			float: right;
			margin-top: 10px;

		}

		.remove_main_div .client_remove_section {
			padding: 6px 8px;
			background: #f6921e;
			border-radius: 63%;
			color: #fff;
			cursor: pointer;
		}

		.section_main_div {
			width: 95%;
			float: left;
		}

		hr {
			clear: both;
		}
	</style>
	<div class="client_main_div">
		<?php
		$pk = 0;
		for ($jk = 0; $jk < count($logopath) or $jk == $pk; $jk++) {
		?>
			<div class="client_div_clone">
				<div class="section_main_div">
					<div><label class="wpt-form-label wpt-form-textfield-label">Logo</label></div>
					<input class="image99" name="wpfc_logo_path[]" type="text" value="<?php echo $logopath[$jk] ?>" rel="abc"
						style="width: 504px;" />
					<input class="upload_image_button" type="button" value="Upload">
				</div>
				<div class="remove_main_div" style="<?php echo $jk == 0 ? 'display:none' : 'dispaly:block' ?>"><span
						class="client_remove_section">X</span></div>
				<hr>
			</div>
		<?php } ?>
	</div>
	<div><a href="javascript:void(0)" id="dublicate_div" class="button button-primary button-large">Add New</a></div>

	<script>
		jQuery(document).ready(function($) {

			jQuery('#dublicate_div').on('click', function() {

				var clone =
					'<div class="client_div_clone"><div class="section_main_div"><div><label class="wpt-form-label wpt-form-textfield-label">Logo</label></div><input class="image99" name="wpfc_logo_path[]" type="text"  value="" rel="abcdddd" style="width: 504px;"/><input class="upload_image_button" type="button" value="Upload"> </div><div class="remove_main_div"><span class="client_remove_section">X</span></div><hr></div>';

				jQuery('.client_main_div').append(clone);
			});


			jQuery('.client_remove_section').live('click', function() {
				jQuery(this).parents(".client_div_clone").remove();
			});

			var mediaUploader;

			jQuery('.upload_image_button').live('click', function(e) {
				event.preventDefault();
				var input = jQuery(this).parents('.section_main_div').find('.image99');

				// Extend the wp.media object
				mediaUploader = wp.media.frames.file_frame = wp.media({
					title: 'Choose Logo',
					button: {
						text: 'Choose Client Logo'
					},
					multiple: false
				});

				// When a file is selected, grab the URL and set it as the text field's value
				mediaUploader.on('select', function() {
					var attachment = mediaUploader.state().get('selection').first().toJSON();
					$(input).val(attachment.url);
				});
				// Open the uploader dialog
				mediaUploader.open();

			});

		});
	</script>
<?php
}

function wpdocs_my_display_callback_Latest_Collections()
{
	global $post;
	$ppids = $post->ID;
	$collectionimg = json_decode(get_post_meta($ppids, 'wpfc_latest_collection_image_path', true));
	$collectiontitle = json_decode(get_post_meta($ppids, 'wpfc_latest_collection_title', true));
	$collectionlink = json_decode(get_post_meta($ppids, 'wpfc_latest_collection_url', true));
?>
	<style>
		.remove_main_div {
			width: 4%;
			float: right;
			margin-top: 10px;

		}

		.remove_main_div .latest_collection_remove_section {
			padding: 6px 8px;
			background: #f6921e;
			border-radius: 63%;
			color: #fff;
			cursor: pointer;
		}

		.latest_collectionsection_main_div {
			width: 95%;
			float: left;
		}

		hr {
			clear: both;
		}
	</style>
	<div class="latest_collection_main_div">
		<?php
		$pks = 0;
		for ($jkp = 0; $jkp < count($collectionimg) or $jkp < count($collectiontitle) or $jkp < count($collectionlink) or $jkp == $pks; $jkp++) {
		?>
			<div class="latest_collection_div_clone">
				<div class="latest_collectionsection_main_div">
					<div><label class="wpt-form-label wpt-form-textfield-label">Image</label></div>
					<input class="latatest_img" name="wpfc_latest_collection_image_path[]" type="text"
						value="<?php echo $collectionimg[$jkp] ?>" rel="abc" style="width: 504px;" />
					<input class="upload_image_button_latest" type="button" value="Upload">
					<div><label class="wpt-form-label wpt-form-textfield-label">Title</label></div>
					<input name="wpfc_latest_collection_title[]" type="text" value="<?php echo $collectiontitle[$jkp] ?>"
						style="width: 504px;" />
					<div><label class="wpt-form-label wpt-form-textfield-label">Collection Url</label></div>
					<input name="wpfc_latest_collection_url[]" type="text" value="<?php echo $collectionlink[$jkp] ?>"
						style="width: 504px;margin-bottom: 28px;" />

				</div>
				<div class="remove_main_div" style="<?php echo $jkp == 0 ? 'display:none' : 'dispaly:block' ?>"><span
						class="latest_collection_remove_section">X</span></div>
				<hr>
			</div>
		<?php } ?>
	</div>
	<div><a href="javascript:void(0)" id="dublicate_div2" class="button button-primary button-large">Add New</a></div>

	<script>
		jQuery(document).ready(function($) {

			jQuery('#dublicate_div2').on('click', function() {
				var clone =
					'<div class="latest_collection_div_clone"><div class="latest_collectionsection_main_div"><div><label class="wpt-form-label wpt-form-textfield-label">Image</label></div><input class="latatest_img" name="wpfc_latest_collection_image_path[]" type="text"  value=""  style="width: 504px;"/><input class="upload_image_button_latest" type="button" value="Upload"><div><label class="wpt-form-label wpt-form-textfield-label">Title</label></div><input name="wpfc_latest_collection_title[]" type="text"  value="" style="width: 504px;"/><div><label class="wpt-form-label wpt-form-textfield-label">Logo Url</label></div><input name="wpfc_latest_collection_url[]" type="text"  value="" style="width: 504px;margin-bottom: 28px;"/></div><div class="remove_main_div"><span class="latest_collection_remove_section">X</span></div><hr></div>';
				jQuery('.latest_collection_main_div').append(clone);
			});


			jQuery('.latest_collection_remove_section').live('click', function() {
				jQuery(this).parents(".latest_collection_div_clone").remove();
			});


			var mediaUploader;

			jQuery('.upload_image_button_latest').live('click', function(e) {
				event.preventDefault();
				var input = jQuery(this).parents('.latest_collectionsection_main_div').find('.latatest_img');

				// Extend the wp.media object
				mediaUploader = wp.media.frames.file_frame = wp.media({
					title: 'Choose Logo',
					button: {
						text: 'Choose Client Logo'
					},
					multiple: false
				});

				// When a file is selected, grab the URL and set it as the text field's value
				mediaUploader.on('select', function() {
					var attachment = mediaUploader.state().get('selection').first().toJSON();
					$(input).val(attachment.url);
				});
				// Open the uploader dialog
				mediaUploader.open();

			});

		});
	</script>
<?php
}

function save_custom_meta_fields($post_id)
{
	if ($post_id == 8 || $post_id == 10 || $post_id == 5) {
		if ($post_id == 8 || $post_id == 10) {
			$wpfctextaftercontent     		=   $_POST['wpfc-text-after-content'];
			$wpfclinkedurlaftercontent     	=   $_POST['wpfc-linked_url_after-content'];

			delete_post_meta($post_id, 'wpfc-text-after-content');
			delete_post_meta($post_id, 'wpfc-linked_url_after-content');
			add_post_meta($post_id, 'wpfc-text-after-content', json_encode($wpfctextaftercontent));
			add_post_meta($post_id, 'wpfc-linked_url_after-content', json_encode($wpfclinkedurlaftercontent));
		}
		$wpfc_logo_path     =   $_POST['wpfc_logo_path'];

		delete_post_meta($post_id, 'wpfc_logo_path');

		add_post_meta($post_id, 'wpfc_logo_path', addslashes(json_encode($wpfc_logo_path)));

		if ($post_id == 8 || $post_id == 10) {
			$wpfc_latest_collection_image_path     =   $_POST['wpfc_latest_collection_image_path'];
			$wpfc_latest_collection_title     	=   $_POST['wpfc_latest_collection_title'];
			$wpfc_latest_collection_url     	=   $_POST['wpfc_latest_collection_url'];

			delete_post_meta($post_id, 'wpfc_latest_collection_image_path');
			delete_post_meta($post_id, 'wpfc_latest_collection_title');
			delete_post_meta($post_id, 'wpfc_latest_collection_url');
			add_post_meta($post_id, 'wpfc_latest_collection_image_path', json_encode($wpfc_latest_collection_image_path));
			add_post_meta($post_id, 'wpfc_latest_collection_title', json_encode($wpfc_latest_collection_title));
			add_post_meta($post_id, 'wpfc_latest_collection_url', json_encode($wpfc_latest_collection_url));
		}
	}
}

add_action('save_post', 'save_custom_meta_fields');
function curl_send_request_googleCaptcha($secret, $recaptcharesponsive)
{
	// set post fields
	$post = [
		'secret' => $secret,
		'response' => $recaptcharesponsive,

	];

	$ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

	// execute!
	$response = curl_exec($ch);

	// close the connection, release resources used
	curl_close($ch);
	return $response;
}
function enquire_form_submission()
{
	global $wpdb;
	//print_r($_POST);
	$captcha = $_POST['g-recaptcha-response'];
	$secretKey = '6Ld2WawZAAAAAIYEvNU57YDXlxFNQt_7D4fcQ4c2';
	//$url = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$captcha. "&remoteip=" . $_SERVER['REMOTE_ADDR'];
	/* $data = array('secret' => $secretKey, 'response' => $captcha,'remoteip' => $_SERVER['REMOTE_ADDR']);
  
  $verify = curl_init();
    curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($verify, CURLOPT_POST, true);
    curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
    $jsonresponse = json_decode(curl_exec($verify));
	
	$res = $jsonresponse->success; 
	$score = $jsonresponse->score;
	
  //var_dump($jsonresponse);
  //echo '<br>'.$res.' and '.$score;
  //header('Content-type: application/json');
  if($res !=true &&  $score< 0.5) {
    echo 'captcha';
	//var_dump($jsonresponse);	
	exit;
  }*/

	date_default_timezone_set('Asia/Kolkata');
	$name     =   trim($_POST['name']) != '' ? html_entity_decode(strip_tags($_POST['name'])) : trim($_POST['name']);
	$phone    =   trim($_POST['phone']) != '' ? html_entity_decode(strip_tags($_POST['phone'])) : trim($_POST['phone']);
	$email    =   trim($_POST['email']);
	$company  =   trim($_POST['company']) != '' ? html_entity_decode(strip_tags($_POST['company'])) : trim($_POST['company']);
	$target_market_location  =   trim($_POST['target_market_location']) != '' ? html_entity_decode(strip_tags($_POST['target_market_location'])) : trim($_POST['target_market_location']);
	$target_state  =   trim($_POST['target_state']) != '' ? html_entity_decode(strip_tags($_POST['target_state'])) : trim($_POST['target_state']);
	$message  =   trim($_POST['message']) != '' ? html_entity_decode(strip_tags($_POST['message'])) : trim($_POST['message']);
	$post_id  =   trim($_POST['post_id']) != '' ? html_entity_decode(strip_tags($_POST['post_id'])) : trim($_POST['post_id']);
	$pageName =   get_the_title($post_id);
	if ($name == '') {
		echo 'name';
		exit;
	} elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
		echo 'name';
		exit;
	}
	if ($phone == '') {
		echo 'phone';
		exit;
	} elseif (!is_numeric($phone)) {
		echo 'phone';
		exit;
	} elseif (strlen($phone) < 10 || strlen($phone) > 14) {
		echo 'phone';
		exit;
	}
	if ($email == '') {
		echo 'email';
		exit;
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo 'email';
		exit;
	}
	if ($company == '') {
		echo 'company';
		exit;
	}
	if ($target_market_location == '') {
		echo 'target_market_location';
		exit;
	}

	$sql = 'INSERT INTO enquire_report SET name="' . $name . '",phone="' . $phone . '",email="' . $email . '",target_market_location="' . $target_market_location . '",target_state="' . $target_state . '",company="' . $company . '",message="' . addslashes($message) . '",post_id="' . $post_id . '",page_name="' . $pageName . '",date="' . date('Y-m-d') . '" ';
	$wpdb->query($sql);
	$subject = 'New enquiry';
	$usersubject = 'We have received your query at RSWM';
	$mesg .= '<table>
					<tr><td colspan="2">Dear Admin,</td></tr>
					<tr><td colspan="2">New enquiry credential below.</td></tr> 
					<tr><td>Name:</td><td>' . $name . '</td></tr>
					<tr><td>Phone:</td><td>' . $phone . '</td></tr>
					<tr><td>Email id:</td><td>' . $email . '</td></tr>
					<tr><td>Company:</td><td>' . $company . '</td></tr>
					<tr><td>Target State:</td><td>' . $target_state . '</td></tr>
					<tr><td>Target Country:</td><td>' . $target_market_location . '</td></tr>
					<tr><td>Message:</td><td>' . $message . '</td></tr>
					<tr><td>date:</td><td>' . date('j-m-Y h:i') . '</td></tr>
				</table>';
	$usermesg .= '<table>
					<tr><td>Dear ' . $name . ',</td></tr>
					<tr><td>Thank you for writing to us at RSWM. We value your suggestions and queries. One of us will get back to you soon.</td></tr> 
					<tr><td><br>Thank you<br> Team: RSWM </td></tr>
				</table>';
	//info.rswm@lnjbhilwara.com



	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: RSWM < info.rswm@lnjbhilwara.com >' . "\r\n";




	wp_mail('mktg.denim@lnjbhilwara.com', $subject, $mesg, $headers);
	wp_mail('info.rswm@lnjbhilwara.com', $subject, $mesg, $headers);
	wp_mail($email, $usersubject, $usermesg, $headers);
	echo 1;
	die();
}
add_action('wp_ajax_enquire_form_submission', 'enquire_form_submission');
add_action('wp_ajax_nopriv_enquire_form_submission', 'enquire_form_submission');


function melange_form_submission()
{
	global $wpdb;
	date_default_timezone_set('Asia/Kolkata');
	$name     =   trim($_POST['melange_name']) != '' ? html_entity_decode(strip_tags($_POST['melange_name'])) : trim($_POST['melange_name']);
	$phone    =   trim($_POST['melange_phone']) != '' ? html_entity_decode(strip_tags($_POST['melange_phone'])) : trim($_POST['melange_phone']);
	$email    =   trim($_POST['melange_email']) != '' ? strip_tags($_POST['melange_email']) : trim($_POST['melange_email']);;
	$company  =   trim($_POST['melange_company']) != '' ? html_entity_decode(strip_tags($_POST['melange_company'])) : trim($_POST['melange_company']);;
	$message  =   trim($_POST['melange_message'])  != '' ? html_entity_decode(strip_tags($_POST['melange_message'])) : trim($_POST['melange_message']);;;
	$post_id  =   $_POST['melange_post_id']  != '' ? html_entity_decode(strip_tags($_POST['melange_post_id'])) : trim($_POST['melange_post_id']);;;
	$pageName =   get_the_title($post_id);
	if ($name == '') {
		echo 'name';
		exit;
	}
	if ($phone == '') {
		echo 'phone';
		exit;
	} elseif (!is_numeric($phone)) {
		echo 'phone';
		exit;
	} elseif (strlen($phone) < 10 || strlen($phone) > 14) {
		echo 'phone';
		exit;
	}
	if ($email == '') {
		echo 'email';
		exit;
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo 'email';
		exit;
	}
	if ($company == '') {
		echo 'company';
		exit;
	}
	$wpdb->query('INSERT INTO melange_form_report SET name="' . $name . '",phone="' . $phone . '",email="' . $email . '",company="' . $company . '",message="' . addslashes($message) . '",post_id="' . $post_id . '",product_name="' . $pageName . '",date="' . date('d-m-Y h:i') . '" ');
	$subject = 'Melange Product Enquire';
	$mesg .= '<table>
					<tr><td>Dear Admin,</td></tr>
					<tr><td>New melange product enquire credential below.</td></tr> 
					<tr><td>Name: ' . $name . '</td></tr>
					<tr><td>Phone: ' . $phone . '</td></tr>
					<tr><td>Email id: ' . $email . '</td></tr>
					<tr><td>Company:' . $company . '</td></tr>
					<tr><td>Message:' . $message . '</td></tr>
					<tr><td>date:' . date('j-m-Y h:i') . '</td></tr>
				</table>';

	$usermesg .= '<table>
					<tr><td>Dear ' . $name . ',</td></tr>
					<tr><td>Thank you for filling out our form!.</td></tr> 
					<tr><td>Regards<br> Team: RSWM </td></tr>
				</table>';


	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: RSWM < info.rswm@lnjbhilwara.com >' . "\r\n";


	wp_mail('mktg.denim@lnjbhilwara.com', $subject, $mesg, $headers);
	wp_mail($email, $subject, $usermesg, $headers);
	echo 1;
	die();
}
add_action('wp_ajax_melange_form_submission', 'melange_form_submission');
add_action('wp_ajax_nopriv_melange_form_submission', 'melange_form_submission');

function url_get_contents($Url)
{
	if (!function_exists('curl_init')) {
		die('CURL is not installed!');
	}
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $Url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$output = curl_exec($ch);
	curl_close($ch);
	return $output;
}

function swetch_melange_form_submission()
{
	global $wpdb;

	date_default_timezone_set('Asia/Kolkata');
	$name     =   trim($_POST['melange_name']) != '' ? html_entity_decode(strip_tags($_POST['melange_name'])) : trim($_POST['melange_name']);
	$phone    =   trim($_POST['melange_phone']) != '' ? html_entity_decode(strip_tags($_POST['melange_phone'])) : trim($_POST['melange_phone']);
	$email    =   trim($_POST['melange_email']) != '' ? strip_tags($_POST['melange_email']) : trim($_POST['melange_email']);;
	$company  =   trim($_POST['melange_company']) != '' ? html_entity_decode(strip_tags($_POST['melange_company'])) : trim($_POST['melange_company']);
	$message  =   trim($_POST['melange_message']) != '' ? html_entity_decode(strip_tags($_POST['melange_message'])) : trim($_POST['melange_message']);;;
	$post_id  =   $_POST['melange_post_id'] != '' ? html_entity_decode(strip_tags($_POST['melange_post_id'])) : trim($_POST['melange_post_id']);
	$post_ids  =   array_filter(explode(',', $_POST['melange_post_id']));
	$page_title = array();

	if ($name == '') {
		echo 'name';
		exit;
	}
	if ($phone == '') {
		echo 'phone';
		exit;
	} elseif (!is_numeric($phone)) {
		echo 'phone';
		exit;
	} elseif (strlen($phone) < 10 || strlen($phone) > 14) {
		echo 'phone';
		exit;
	}
	if ($email == '') {
		echo 'email';
		exit;
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo 'email';
		exit;
	}
	if ($company == '') {
		echo 'company';
		exit;
	}
	if (empty($_POST['g-recaptcha-response'])) {
		echo 'g-recaptcha-response';
		exit;
	} elseif (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
		$secret = '6LdzQXMUAAAAAAaQyCsJHKqrz7_EdRRyx09eJYfy';
		//$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
		$Url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response'];
		$verifyResponse = url_get_contents($Url);

		$responseData = json_decode($verifyResponse);
	}


	$subject = 'Melange Product Enquire';
	$mesg .= '<table>
					<tr><td>Dear Admin,</td></tr>
					<tr><td>New melange product enquire credential below.</td></tr> 
					<tr><td>Name: ' . $name . '</td></tr>
					<tr><td>Phone: ' . $phone . '</td></tr>
					<tr><td>Email id: ' . $email . '</td></tr>
					<tr><td>Company: ' . $company . '</td></tr>
					<tr><td>Message: ' . $message . '</td></tr>';
	$mesg .= '<tr><td>date: ' . date('j-m-Y h:i') . '</td></tr>
			<tr><td><b>Product Enquiry List:</b></td></tr>
				</table>';
	$mesg .= '<table rules="all" style="border: 1px solid #333;" cellpadding="10">';

	$mesg .= '<tr><th>Title</th><th>Image</th><th>Shade No</th><th>Lot No</th></tr>';

	foreach ($post_ids as $ppid) {
		$page_title[] = get_the_title($ppid);
		$wpcfbrandname = get_post_meta($ppid, "wpcf-brand-name", true);
		$imgsrc = wp_get_attachment_image_src(get_post_thumbnail_id($ppid), 'large')[0];
		$wpcflotno = get_post_meta($ppid, 'wpcf-lot-no', true);
		$shadeNo = get_post_meta($ppid, 'wpcf-shade-no', true);
		$wpcfbrandname = $wpcfbrandname != '' ? $wpcfbrandname : get_the_title($ppid);
		$mesg .= '<tr>';
		$mesg .= '<td>' . $wpcfbrandname . '</td>';
		if ($imgsrc != '') {
			$mesg .= '<td><img src="' . $imgsrc . '" width="100"></td>';
		}
		$mesg .= '<td>' . $shadeNo . '</td>';
		$mesg .= '<td>' . $wpcflotno . '</td>';
		$mesg .= '</tr>';
	}
	$mesg .= '</table> <div>&nbsp;</div>';

	$usermesg .= '<table>
					<tr><td>Dear ' . $name . ',</td></tr>
					<tr><td>Thank you for filling out our form!. Please review your product enquiry details below.</td></tr><br>';

	$usermesg .=  '<tr><td>Name: ' . $name . '</td></tr>
					<tr><td>Phone: ' . $phone . '</td></tr>
					<tr><td>Email id: ' . $email . '</td></tr>
					<tr><td>Company: ' . $company . '</td></tr>
					<tr><td>Message: ' . $message . '</td></tr>';
	$usermesg .= '<tr><td>date: ' . date('j-m-Y h:i') . '</td></tr><br> 
			<tr><td><b>Product Enquiry List:</b></td></tr>
				</table>';
	$usermesg .= '<table rules="all" style="border: 1px solid #333;" cellpadding="10">';

	$usermesg .= '<tr><th>Title</th><th>Image</th><th>Shade No.</th><th>Lot No.</th></tr>';

	foreach ($post_ids as $ppid) {
		$page_title[] = get_the_title($ppid);
		$wpcfbrandname1 = get_post_meta($ppid, "wpcf-brand-name", true);
		$imgsrc = wp_get_attachment_image_src(get_post_thumbnail_id($ppid), 'large')[0];
		$wpcflotno = get_post_meta($ppid, 'wpcf-lot-no', true);
		$shadeNo = get_post_meta($ppid, 'wpcf-shade-no', true);
		$wpcfbrandname1 = $wpcfbrandname1 != '' ? $wpcfbrandname1 : get_the_title($ppid);
		$usermesg .= '<tr>';
		$usermesg .= '<td>' . $wpcfbrandname1 . '</td>';
		if ($imgsrc != '') {
			$usermesg .= '<td><img src="' . $imgsrc . '" width="100"></td>';
		}
		$usermesg .= '<td>' . $shadeNo . '</td>';
		$usermesg .= '<td>' . $wpcflotno . '</td>';
		$usermesg .= '</tr>';
	}

	$usermesg .= '</table> 
		<table> 
		<tr><td><br><br><br>Regards<br> Team RSWM </td></tr>
		</table>';


	$pageName = implode(',', $page_title);


	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	//$headers .= 'From: RSWM < info.rswm@lnjbhilwara.com >' . "\r\n";
	$headers .= 'From: RSWM < inforswm@gmail.com >' . "\r\n";
	$headers .= 'Cc: Kulbhushan@lnjbhilwara.com' . "\r\n";


	$headers1 = "MIME-Version: 1.0" . "\r\n";
	$headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers1 .= 'From: RSWM < info.rswm@lnjbhilwara.com >' . "\r\n";


	if ($responseData->success == true) {
		wp_mail('mktg.denim@lnjbhilwara.com', $subject, $mesg, $headers);
		wp_mail($email, $subject, $usermesg, $headers1);



		$wpdb->query('INSERT INTO melange_form_report SET name="' . $name . '",phone="' . $phone . '",email="' . $email . '",company="' . $company . '",message="' . addslashes($message) . '",post_id="' . $post_id . '",product_name="' . addslashes($pageName) . '",date="' . date('d-m-Y h:i') . '" ');
		echo 1;
	} else {
		echo 'g-recaptcha-response1';
		exit;
	}
	die();
}
add_action('wp_ajax_swetch_melange_form_submission', 'swetch_melange_form_submission');
add_action('wp_ajax_nopriv_swetch_melange_form_submission', 'swetch_melange_form_submission');

function product_details_popup()
{

	$postid = $_POST['postid'];
	$post_type = get_post_type($postid);

	$shadeNo = get_post_meta($postid, 'wpcf-shade-no', true);
	$wpcflotno = get_post_meta($postid, 'wpcf-lot-no', true);
	$wpcfsize = get_post_meta($postid, 'wpcf-size', true);
	$wpcfcount = get_post_meta($postid, 'wpcf-count', true);
	$wpcfnewarrival = get_post_meta($postid, 'wpcf-new-arrival', true);
	$wpcfbrandname = get_post_meta($postid, "wpcf-brand-name", true);
	$wpcfblend = get_post_meta($postid, "wpcf-blend", true);
	//$blind = wp_get_post_terms($postid, 'blend', array("fields" => "names"));
	$blindtext = get_post_meta($postid, 'wpcf-blend', true);
	$wpcfbrandname1 = $wpcfbrandname != '' ? $wpcfbrandname : get_the_title($postid);
?>

	<?php
	$imgsrc = wp_get_attachment_image_src(get_post_thumbnail_id($postid), 'full')[0];
	$imgsrcthumb = wp_get_attachment_image_src(get_post_thumbnail_id($postid), 'medium')[0];
	$imgsrc = $imgsrc != '' ? $imgsrc : get_template_directory_uri() . "/images/melangProductArea3.jpg";
	$imgsrcthumb = $imgsrcthumb != '' ? $imgsrcthumb : get_template_directory_uri() . "/images/melangProductArea3.jpg";
	?>
	<div class="col span_6">
		<img id="zoom_08" src="<?php echo $imgsrc ?>" data-zoom-image="<?php echo $imgsrc ?>"
			alt="<?php echo get_the_title($postid) ?>" />
	</div>
	<?php if ($post_type == 'melange') {  ?>
		<div class="col span_6">
			<div class="melange-rightside">
				<h3><?php echo $wpcfbrandname1 ?></h3>

				<div class="melange-popup-detail-list">
					<?php if ($shadeNo != '') { ?>
						<p>Shade# <span><?php echo $shadeNo ?></span></p>
					<?php } ?>
					<?php if ($wpcflotno != '') { ?>
						<p>Lot# <span><?php echo $wpcflotno ?></span></p>
					<?php } ?>

				</div>

				<?php if ($blindtext != '') {
					$check = preg_match('/[0-9]/', $blindtext, $math, PREG_OFFSET_CAPTURE);
					//echo count($math);
					if (count($math) > 0) {
						$cc = $math;
						$blindtext = substr($blindtext, 0, $cc[0][1]);
					}
				?>
					<p style="display: inline-block;border-right:none;">Blend# <span><?php echo $blindtext; ?><br></span></p>
				<?php } ?>
				<?php /* if($wpcfsize != '' ) { ?>
        <p>Size- <span><?php echo $wpcfsize ?></span></p>
        <?php } */ ?>

				<?php /* 
          <div class="melange-popup-detail-list">
        
	<?php if($wpcfcount != '' ) { ?>
        <p>Count- <span><?php echo $wpcfcount ?></span></p>
        <?php }  ?>
        <?php if($wpcfnewarrival != '' && $wpcfnewarrival == 1 ) { ?>
        <p>New Arrival - <span>Yes</span></p>
        <?php } ?>
    </div>
    */ ?>

			</div>
		</div>
	<?php } elseif ($post_type == 'greige') { ?>
		<div class="col span_6">
			<div class="melange-rightside">
				<h3><?php echo $wpcfbrandname1 ?></h3>

				<div class="melange-popup-detail-list">
					<?php if ($shadeNo != '') { ?>
						<p>Shade# <span><?php echo $shadeNo ?></span></p>
					<?php } ?>
					<?php if ($wpcflotno != '') { ?>
						<p>Lot# <span><?php echo $wpcflotno ?></span></p>
					<?php } ?>

				</div>

				<?php if ($blindtext != '') {
					//$blindArr = explode(' ' , $blindtext); 
				?>
					<p style="display: inline-block;border-right:none;">Blend# <span><?php echo $blindtext; ?><br></span></p>
				<?php } ?>

			</div>
		</div>
	<?php } elseif ($post_type == 'dyed') { ?>
		<div class="col span_6">
			<div class="melange-rightside">
				<h3><?php echo $wpcfbrandname1 ?></h3>

				<div class="melange-popup-detail-list">
					<?php if ($shadeNo != '') { ?>
						<p>Shade# <span><?php echo $shadeNo ?></span></p>
					<?php } ?>
					<?php if ($wpcflotno != '') { ?>
						<p>Lot# <span><?php echo $wpcflotno ?></span></p>
					<?php } ?>

				</div>

				<?php if ($blindtext != '') {
					//$blindArr = explode(' ' , $blindtext); 
				?>
					<p style="display: inline-block;border-right:none;">Blend# <span><?php echo $blindtext; ?><br></span></p>
				<?php } ?>
				<?php /* if($wpcfsize != '' ) { ?>
        <p>Size- <span><?php echo $wpcfsize ?></span></p>
        <?php } */ ?>

				<?php /* 
          <div class="melange-popup-detail-list">
        
	<?php if($wpcfcount != '' ) { ?>
        <p>Count- <span><?php echo $wpcfcount ?></span></p>
        <?php }  ?>
        <?php if($wpcfnewarrival != '' && $wpcfnewarrival == 1 ) { ?>
        <p>New Arrival - <span>Yes</span></p>
        <?php } ?>
    </div>
    */ ?>
			</div>
		</div>


	<?php } ?>

<?php
	die();
}
add_action('wp_ajax_product_details_popup', 'product_details_popup');
add_action('wp_ajax_nopriv_product_details_popup', 'product_details_popup');

function category_filter_post_melange_test()
{
	$post_type = trim($_POST['post_type']);

	$category_name = trim($_POST['category_name']);
	$catid = explode(',', $_POST['catid']);
	$catid = array_values(array_filter($catid));

	$end_usage_name = trim($_POST['end_usage_name']);
	$end_usage_id = explode(',', $_POST['end_usage_id']);
	$end_usage_id = array_values(array_filter($end_usage_id));

	$blend_name = trim($_POST['blend_name']);
	$blend_id = explode(',', $_POST['blend_id']);
	$blend_id = array_values(array_filter($blend_id));

	$colorcode = explode(',', $_POST['colorcode']);
	$colorcode = array_values(array_filter($colorcode));

	$book_name = trim($_POST['book_name']);
	$book_id = explode(',', $_POST['book_id']);
	$book_id = array_values(array_filter($book_id));


	$paged = trim($_POST["paged"]);
	$paged = $paged != '' ? $paged : 1;

	$taxquery = array();
	//$taxquery = array ()
	if (count($end_usage_id) > 0 && $end_usage_id[0] != '') {
		foreach ($end_usage_id as $end_termid) {
			$taxquery[] = array('taxonomy' => $end_usage_name, 'field' => 'term_id', 'terms' => array($end_termid));
		}
	}
	if (count($book_id) > 0 && $book_id[0] != '') {
		foreach ($book_id as $book_termid) {
			$taxquery[] = array('taxonomy' => $book_name, 'field' => 'term_id', 'terms' => array($book_termid));
		}
	}
	if (count($blend_id) > 0 && $blend_id[0] != '') {
		foreach ($blend_id as $blend_termid) {
			$taxquery[] = array('taxonomy' => $blend_name, 'field' => 'term_id', 'terms' => array($blend_termid));
		}
	}
	if (count($catid) > 0 && $catid[0] != '') {
		foreach ($catid as $termid) {
			$taxquery[] = array('taxonomy' => $category_name, 'field' => 'term_id', 'terms' => array($termid));
		}
	}
	if (count($colorcode) > 0 && $colorcode[0] != '') {
		$taxquery[] = array('taxonomy' => 'swatche', 'field' => 'term_id', 'terms' => $colorcode);
	}
	if ((count($end_usage_id) > 0 && $end_usage_id[0] != '') || (count($blend_id) > 0 && $blend_id[0] != '') ||  (count($catid) > 0 && $catid[0] != '') || (count($colorcode) > 0 && $colorcode[0] != '') || (count($book_id) > 0 && $book_id[0] != '')) {
		$Args = array(
			'post_type' => $post_type,
			'fields' => 'ids',
			'posts_per_page' => -1,
			'post_status' => 'publish',
			'orderby' => 'date',
			'order' => 'DESC',
			'tax_query' => $taxquery
		);
	} else {
		$Args = array(
			'post_type' => $post_type,
			'fields' => 'ids',
			'paged' => $paged,
			'posts_per_page' => 12,
			'post_status' => 'publish',
			'orderby' => 'date',
			'order' => 'DESC',
			'tax_query' => $taxquery
		);
	}

	$result = get_posts($Args);

	$output =  array();
	$data =  array();
	foreach ($result as $pid) {
		$wpcfbrandname = get_post_meta($pid, "wpcf-brand-name", true);
		$wpcfbrandname1 = $wpcfbrandname != '' ? $wpcfbrandname : get_the_title($pid);
		$output[] = array(
			'postid' 	=> $pid,
			'title' 	=> $wpcfbrandname1,
			'img' 		=> get_the_post_thumbnail_url($pid, 'medium'),
			'shadeNo'	=> get_post_meta($pid, 'wpcf-shade-no', true),
			'lotno' 	=> get_post_meta($pid, 'wpcf-lot-no', true),
		);
	}

	if (count($result) > 0) {
		$data = array(
			'status' => 1,
			'list'   => $output
		);
	} else {
		$data = array(
			'status' => 0,
			'list'   => $output
		);
	}

	echo json_encode($data);
	die();
}
add_action('wp_ajax_category_filter_post_melange_test', 'category_filter_post_melange_test');
add_action('wp_ajax_nopriv_category_filter_post_melange_test', 'category_filter_post_melange_test');

function category_filter_post_melange()
{

	$catid = explode(',', $_POST['catid']);
	$catid = array_values(array_filter($catid));

	$end_usage_id = explode(',', $_POST['end_usage_id']);
	$end_usage_id = array_values(array_filter($end_usage_id));

	$blend_id = explode(',', $_POST['blend_id']);
	$blend_id = array_values(array_filter($blend_id));

	$colorcode = explode(',', $_POST['colorcode']);
	$colorcode = array_values(array_filter($colorcode));

	$book_id = explode(',', $_POST['book_id']);
	$book_id = array_values(array_filter($book_id));


	$paged = trim($_POST["paged"]);
	$paged = $paged != '' ? $paged : 1;

	$taxquery = array();
	//$taxquery = array ()
	if (count($end_usage_id) > 0 && $end_usage_id[0] != '') {
		foreach ($end_usage_id as $end_termid) {
			$taxquery[] = array('taxonomy' => 'end-usage', 'field' => 'term_id', 'terms' => array($end_termid));
		}
	}
	if (count($book_id) > 0 && $book_id[0] != '') {
		foreach ($book_id as $book_termid) {
			$taxquery[] = array('taxonomy' => 'collection', 'field' => 'term_id', 'terms' => array($book_termid));
		}
	}
	if (count($blend_id) > 0 && $blend_id[0] != '') {
		foreach ($blend_id as $blend_termid) {
			$taxquery[] = array('taxonomy' => 'blend', 'field' => 'term_id', 'terms' => array($blend_termid));
		}
	}
	if (count($catid) > 0 && $catid[0] != '') {
		foreach ($catid as $termid) {
			$taxquery[] = array('taxonomy' => 'yarns', 'field' => 'term_id', 'terms' => array($termid));
		}
	}
	if (count($colorcode) > 0 && $colorcode[0] != '') {
		$taxquery[] = array('taxonomy' => 'swatche', 'field' => 'term_id', 'terms' => $colorcode);
	}
	if ((count($end_usage_id) > 0 && $end_usage_id[0] != '') || (count($blend_id) > 0 && $blend_id[0] != '') ||  (count($catid) > 0 && $catid[0] != '') || (count($colorcode) > 0 && $colorcode[0] != '') || (count($book_id) > 0 && $book_id[0] != '')) {
		$Args = array(
			'post_type' => 'melange',
			'fields' => 'ids',
			'posts_per_page' => -1,
			'post_status' => 'publish',
			'orderby' => 'date',
			'order' => 'DESC',
			'tax_query' => $taxquery
		);
	} else {
		$Args = array(
			'post_type' => 'melange',
			'fields' => 'ids',
			'paged' => $paged,
			'posts_per_page' => 12,
			'post_status' => 'publish',
			'orderby' => 'date',
			'order' => 'DESC',
			'tax_query' => $taxquery
		);
	}

	$result = get_posts($Args);

	$output =  array();
	$data =  array();
	foreach ($result as $pid) {
		$wpcfbrandname = get_post_meta($pid, "wpcf-brand-name", true);
		$wpcfbrandname1 = $wpcfbrandname != '' ? $wpcfbrandname : get_the_title($pid);
		$output[] = array(
			'postid' 	=> $pid,
			'title' 	=> $wpcfbrandname1,
			'img' 		=> get_the_post_thumbnail_url($pid, 'medium'),
			'shadeNo'	=> get_post_meta($pid, 'wpcf-shade-no', true),
			'lotno' 	=> get_post_meta($pid, 'wpcf-lot-no', true),
		);
	}

	if (count($result) > 0) {
		$data = array(
			'status' => 1,
			'list'   => $output
		);
	} else {
		$data = array(
			'status' => 0,
			'list'   => $output
		);
	}

	echo json_encode($data);
	die();
}
add_action('wp_ajax_category_filter_post_melange', 'category_filter_post_melange');
add_action('wp_ajax_nopriv_category_filter_post_melange', 'category_filter_post_melange');




function page_children($parent_id, $limit = -1)
{
	return get_posts(array(
		'post_type' => 'page',
		'post_parent' => $parent_id,
		'posts_per_page' => $limit,
		'posts_per_page'   => 7,
		'orderby'		=> 'menu_order',
		'order'			=> 'ASC'
	));
}

function save_hashtag_brand_request()
{
	global $wpdb;
	date_default_timezone_set('Asia/Kolkata');
	$error = array();

	unset($_POST['action']);

	$requestor_product 												= trim($_POST['requestor_product']) != '' ? html_entity_decode(strip_tags($_POST['requestor_product'])) : trim($_POST['requestor_product']);
	$requestor_name 												= trim($_POST['requestor_name']) != '' ? html_entity_decode(strip_tags($_POST['requestor_name'])) : trim($_POST['requestor_name']);
	$requestor_email_address										= trim($_POST['requestor_email_address']) != '' ? strip_tags($_POST['requestor_email_address']) : trim($_POST['requestor_email_address']);
	$requestor_company_name 										= trim($_POST['requestor_company_name']) != '' ? html_entity_decode(strip_tags($_POST['requestor_company_name'])) : trim($_POST['requestor_company_name']);
	$requestor_telephone    										= trim($_POST['requestor_telephone']) != '' ? html_entity_decode(strip_tags($_POST['requestor_telephone'])) : trim($_POST['requestor_telephone']);
	$hangtag_company_name  											= trim($_POST['hangtag_company_name']) != '' ? html_entity_decode(strip_tags($_POST['hangtag_company_name'])) : trim($_POST['hangtag_company_name']);
	$hangtag_kind_attention 										= trim($_POST['hangtag_kind_attention']) != '' ? html_entity_decode(strip_tags($_POST['hangtag_kind_attention'])) : trim($_POST['hangtag_kind_attention']);
	$hangtag_telephone 												= trim($_POST['hangtag_telephone']) != '' ? html_entity_decode(strip_tags($_POST['hangtag_telephone'])) : trim($_POST['hangtag_telephone']);
	$hangtag_address_postal_code   									= trim($_POST['hangtag_address_postal_code']) != '' ? html_entity_decode(strip_tags($_POST['hangtag_address_postal_code'])) : trim($_POST['hangtag_address_postal_code']);;

	$information_purchase_invoice   								= trim($_POST['information_purchase_invoice']) != '' ? html_entity_decode(strip_tags($_POST['information_purchase_invoice'])) : trim($_POST['information_purchase_invoice']);
	$qty_of_fabric_per_unit   										= trim($_POST['qty_of_fabric_per_unit']) != '' ? html_entity_decode(strip_tags($_POST['qty_of_fabric_per_unit'])) : trim($_POST['qty_of_fabric_per_unit']);

	$hangtag_fax_email   											= trim($_POST['hangtag_fax_email']) != '' ? strip_tags($_POST['hangtag_fax_email']) : trim($_POST['hangtag_fax_email']);
	$information_quality_quantity   								= trim($_POST['information_quality_quantity']) != '' ? html_entity_decode(strip_tags($_POST['information_quality_quantity'])) : trim($_POST['information_quality_quantity']);
	$Fabric_mill_information_company_name   						= trim($_POST['Fabric_mill_information_company_name']) != '' ? html_entity_decode(strip_tags($_POST['Fabric_mill_information_company_name'])) : trim($_POST['Fabric_mill_information_company_name']);
	$Fabric_mill_information_country   								= trim($_POST['Fabric_mill_information_country']) != '' ? html_entity_decode(strip_tags($_POST['Fabric_mill_information_country'])) : trim($_POST['Fabric_mill_information_country']);
	$Fabric_mill_information_contact_person_name   					= trim($_POST['Fabric_mill_information_contact_person_name'])  != '' ? html_entity_decode(strip_tags($_POST['Fabric_mill_information_contact_person_name'])) : trim($_POST['Fabric_mill_information_contact_person_name']);
	$fabric_mill_information_contact_person_email_phone_number   	= trim($_POST['fabric_mill_information_contact_person_email_phone_number'])  != '' ? html_entity_decode(strip_tags($_POST['fabric_mill_information_contact_person_email_phone_number'])) : trim($_POST['fabric_mill_information_contact_person_email_phone_number']);;
	$hangtag_quantity_requested   									= trim($_POST['hangtag_quantity_requested']) != '' ? html_entity_decode(strip_tags($_POST['hangtag_quantity_requested'])) : trim($_POST['hangtag_quantity_requested']);
	$no_of_end_uses_produced   										= trim($_POST['no_of_end_uses_produced']) != '' ? html_entity_decode(strip_tags($_POST['no_of_end_uses_produced'])) : trim($_POST['no_of_end_uses_produced']);
	$Brand_Retailer   												= trim($_POST['Brand_Retailer']) != '' ? html_entity_decode(strip_tags($_POST['Brand_Retailer'])) : trim($_POST['Brand_Retailer']);
	$contact_person_at_brand_retailer   							= trim($_POST['contact_person_at_brand_retailer']) != '' ? html_entity_decode(strip_tags($_POST['contact_person_at_brand_retailer'])) : trim($_POST['contact_person_at_brand_retailer']);
	$Phone_email   													= trim($_POST['Phone_email'])  != '' ? strip_tags($_POST['Phone_email']) : trim($_POST['Phone_email']);
	$tag_requested  												= trim($_POST['tag_requested']) != '' ? html_entity_decode(strip_tags($_POST['tag_requested'])) : trim($_POST['tag_requested']);
	$selling_countries   											= trim($_POST['selling_countries']) != '' ? html_entity_decode(strip_tags($_POST['selling_countries'])) : trim($_POST['selling_countries']);
	$list_countries_where_product_retails   						= trim($_POST['list_countries_where_product_retails']) != '' ? html_entity_decode(strip_tags($_POST['list_countries_where_product_retails'])) : trim($_POST['list_countries_where_product_retails']);
	$launch_season   												= trim($_POST['launch_season']) != '' ? html_entity_decode(strip_tags($_POST['launch_season'])) : trim($_POST['launch_season']);

	$end_use_information_Gender   									= $_POST['end_use_information_Gender'];

	if (trim($end_use_information_Gender[0]) == '') {
		$error['end_use_information_Gender'] = 1;
	} else {
		$error['end_use_information_Gender'] = 0;
	}
	if (count($end_use_information_Gender) > 0) {
		$end_use_information_Gender =	implode(', ', $end_use_information_Gender);
	}
	$end_use_information_fabrication   								= $_POST['end_use_information_fabrication'];
	if (trim($end_use_information_fabrication[0]) == '') {
		$error['end_use_information_fabrication'] = 1;
	} else {
		$error['end_use_information_fabrication'] = 0;
	}
	if (count($end_use_information_fabrication) > 0) {
		$end_use_information_fabrication =	implode(', ', $end_use_information_fabrication);
	}
	$apparel_garment_type_fabrication   							= $_POST['apparel_garment_type_fabrication'];
	if (trim($apparel_garment_type_fabrication[0]) == '') {
		$error['apparel_garment_type_fabrication'] = 1;
	} else {
		$error['apparel_garment_type_fabrication'] = 0;
	}
	if (count($apparel_garment_type_fabrication) > 0) {
		$apparel_garment_type_fabrication =	implode(', ', $apparel_garment_type_fabrication);
	}



	if ($requestor_product == '') {
		$error['requestor_product'] = 1;
	} else {
		$error['requestor_product'] = 0;
	}

	if ($requestor_name == '') {
		$error['requestor_name'] = 1;
	} elseif (!preg_match('/^[a-zA-Z ]*$/', $requestor_name)) {
		$error['requestor_name'] = 1;
	} else {
		$error['requestor_name'] = 0;
	}

	if ($requestor_email_address == '') {
		$error['requestor_email_address'] = 1;
	} elseif (!filter_var($requestor_email_address, FILTER_VALIDATE_EMAIL)) {
		$error['requestor_email_address'] = 1;
	} else {
		$error['requestor_email_address'] = 0;
	}

	if ($requestor_company_name == '') {
		$error['requestor_company_name'] = 1;
	} elseif (!preg_match('/^[a-zA-Z0-9 ]*$/', $requestor_company_name)) {
		$error['requestor_company_name'] = 1;
	} else {
		$error['requestor_company_name'] = 0;
	}

	if ($requestor_telephone == '') {
		$error['requestor_telephone'] = 1;
	} elseif (!preg_match('/^[0-9]{10,15}$/', $requestor_telephone)) {
		$error['requestor_telephone'] = 1;
	} else {
		$error['requestor_telephone'] = 0;
	}

	if ($hangtag_company_name == '') {
		$error['hangtag_company_name'] = 1;
	} elseif (!preg_match('/^[a-zA-Z0-9  ,.-]*$/', $hangtag_company_name)) {
		$error['hangtag_company_name'] = 1;
	} else {
		$error['hangtag_company_name'] = 0;
	}

	if ($hangtag_kind_attention == '') {
		$error['hangtag_kind_attention'] = 1;
	} elseif (!preg_match('/^[a-zA-Z0-9  ,.-]*$/', $hangtag_kind_attention)) {
		$error['hangtag_kind_attention'] = 1;
	} else {
		$error['hangtag_kind_attention'] = 0;
	}

	if ($hangtag_telephone == '') {
		$error['hangtag_telephone'] = 1;
	} elseif (!preg_match('/^[0-9]{10,15}$/', $hangtag_telephone)) {
		$error['hangtag_telephone'] = 1;
	} else {
		$error['hangtag_telephone'] = 0;
	}

	if ($hangtag_address_postal_code == '') {
		$error['hangtag_address_postal_code'] = 1;
	} elseif (!preg_match('/^[a-zA-Z0-9  ,.-]*$/', $hangtag_address_postal_code)) {
		$error['hangtag_address_postal_code'] = 1;
	} else {
		$error['hangtag_address_postal_code'] = 0;
	}

	if ($hangtag_fax_email == '') {
		$error['hangtag_fax_email'] = 1;
	} elseif (!preg_match('/^[a-zA-Z0-9  ,.-@]*$/', $hangtag_fax_email)) {
		$error['hangtag_address_postal_code'] = 1;
	} else {
		$error['hangtag_fax_email'] = 0;
	}

	if ($information_quality_quantity == '') {
		$error['information_quality_quantity'] = 1;
	} elseif (!preg_match('/^[a-zA-Z0-9  ,.-]*$/', $information_quality_quantity)) {
		$error['information_quality_quantity'] = 1;
	} else {
		$error['information_quality_quantity'] = 0;
	}

	if ($Fabric_mill_information_company_name == '') {
		$error['Fabric_mill_information_company_name'] = 1;
	} elseif (!preg_match('/^[a-zA-Z0-9  ,.-]*$/', $Fabric_mill_information_company_name)) {
		$error['Fabric_mill_information_company_name'] = 1;
	} else {
		$error['Fabric_mill_information_company_name'] = 0;
	}

	if ($Fabric_mill_information_country == '') {
		$error['Fabric_mill_information_country'] = 1;
	} elseif (!preg_match('/^[a-zA-Z0-9  ,.-]*$/', $Fabric_mill_information_country)) {
		$error['Fabric_mill_information_country'] = 1;
	} else {
		$error['Fabric_mill_information_country'] = 0;
	}

	if ($Fabric_mill_information_contact_person_name == '') {
		$error['Fabric_mill_information_contact_person_name'] = 1;
	} elseif (!preg_match('/^[a-zA-Z0-9  ,.-]*$/', $Fabric_mill_information_contact_person_name)) {
		$error['Fabric_mill_information_contact_person_name'] = 1;
	} else {
		$error['Fabric_mill_information_contact_person_name'] = 0;
	}

	if ($fabric_mill_information_contact_person_email_phone_number == '') {
		$error['fabric_mill_information_contact_person_email_phone_number'] = 1;
	} else {
		$error['fabric_mill_information_contact_person_email_phone_number'] = 0;
	}

	if ($hangtag_quantity_requested == '') {
		$error['hangtag_quantity_requested'] = 1;
	} elseif (!preg_match('/^[a-zA-Z0-9  ,.-]*$/', $hangtag_quantity_requested)) {
		$error['hangtag_quantity_requested'] = 1;
	} else {
		$error['hangtag_quantity_requested'] = 0;
	}

	if ($no_of_end_uses_produced == '') {
		$error['no_of_end_uses_produced'] = 1;
	} elseif (!preg_match('/^[a-zA-Z0-9 ,.-]*$/', $no_of_end_uses_produced)) {
		$error['no_of_end_uses_produced'] = 1;
	} else {
		$error['no_of_end_uses_produced'] = 0;
	}

	if ($Brand_Retailer == '') {
		$error['Brand_Retailer'] = 1;
	} elseif (!preg_match('/^[a-zA-Z0-9  ,.-]*$/', $Brand_Retailer)) {
		$error['Brand_Retailer'] = 1;
	} else {
		$error['Brand_Retailer'] = 0;
	}

	if ($contact_person_at_brand_retailer == '') {
		$error['contact_person_at_brand_retailer'] = 1;
	} elseif (!preg_match('/^[a-zA-Z0-9  ,.-]*$/', $contact_person_at_brand_retailer)) {
		$error['contact_person_at_brand_retailer'] = 1;
	} else {
		$error['contact_person_at_brand_retailer'] = 0;
	}

	if ($Phone_email == '') {
		$error['Phone_email'] = 1;
	} elseif (!preg_match('/^[a-zA-Z0-9  ,.-_@]*$/', $contact_person_at_brand_retailer)) {
		$error['contact_person_at_brand_retailer'] = 1;
	} else {
		$error['Phone_email'] = 0;
	}

	if ($tag_requested == '') {
		$error['tag_requested'] = 1;
	} else {
		$error['tag_requested'] = 0;
	}

	if ($selling_countries == '') {
		$error['selling_countries'] = 1;
	} elseif (!preg_match('/^[a-zA-Z0-9  ,.-]*$/', $selling_countries)) {
		$error['selling_countries'] = 1;
	} else {
		$error['selling_countries'] = 0;
	}

	if ($list_countries_where_product_retails == '') {
		$error['list_countries_where_product_retails'] = 1;
	} elseif (!preg_match('/^[a-zA-Z0-9  ,.-]*$/', $list_countries_where_product_retails)) {
		$error['list_countries_where_product_retails'] = 1;
	} else {
		$error['list_countries_where_product_retails'] = 0;
	}

	if ($launch_season == '') {
		$error['launch_season'] = 1;
	} elseif (!preg_match('/^[a-zA-Z0-9  ,.-]*$/', $launch_season)) {
		$error['launch_season'] = 1;
	} else {
		$error['launch_season'] = 0;
	}
	if ($information_purchase_invoice == '') {
		$error['information_purchase_invoice'] = 1;
	} else {
		$error['information_purchase_invoice'] = 0;
	}

	if ($qty_of_fabric_per_unit == '') {
		$error['qty_of_fabric_per_unit'] = 1;
	} elseif (!preg_match('/^[a-zA-Z0-9  ,.-]*$/', $qty_of_fabric_per_unit)) {
		$error['qty_of_fabric_per_unit'] = 1;
	} else {
		$error['qty_of_fabric_per_unit'] = 0;
	}

	if (!in_array(1, $error)) {
		$wpdb->query('INSERT INTO ' . $wpdb->prefix . 'edge_from_submission_report SET 
						requestor_product="' . addslashes($requestor_product) . '",
						requestor_name="' . addslashes($requestor_name) . '",
						requestor_email_address="' . addslashes($requestor_email_address) . '",
						requestor_company_name="' . addslashes($requestor_company_name) . '",  
						requestor_telephone="' . addslashes($requestor_telephone) . '", 
						hangtag_company_name="' . addslashes($hangtag_company_name) . '", 
						hangtag_kind_attention="' . addslashes($hangtag_kind_attention) . '", 
						hangtag_telephone="' . addslashes($hangtag_telephone) . '", 
						hangtag_address_postal_code="' . addslashes($hangtag_address_postal_code) . '", 
						information_purchase_invoice="' . addslashes($information_purchase_invoice) . '", 
						qty_of_fabric_per_unit="' . addslashes($qty_of_fabric_per_unit) . '", 
						hangtag_fax_email="' . addslashes($hangtag_fax_email) . '", 
						information_quality_quantity="' . addslashes($information_quality_quantity) . '", 
						Fabric_mill_information_company_name="' . addslashes($Fabric_mill_information_company_name) . '", 
						Fabric_mill_information_country="' . addslashes($Fabric_mill_information_country) . '", 
						Fabric_mill_information_contact_person_name="' . addslashes($Fabric_mill_information_contact_person_name) . '", 
						fabric_mill_information_contact_person_email_phone_number="' . addslashes($fabric_mill_information_contact_person_email_phone_number) . '", 
						hangtag_quantity_requested="' . addslashes($hangtag_quantity_requested) . '", 
						no_of_end_uses_produced="' . addslashes($no_of_end_uses_produced) . '", 
						Brand_Retailer="' . addslashes($Brand_Retailer) . '", 
						contact_person_at_brand_retailer="' . addslashes($contact_person_at_brand_retailer) . '", 
						Phone_email="' . addslashes($Phone_email) . '", 
						tag_requested="' . addslashes($tag_requested) . '", 
						selling_countries="' . addslashes($selling_countries) . '", 
						list_countries_where_product_retails="' . addslashes($list_countries_where_product_retails) . '", 
						launch_season="' . addslashes($launch_season) . '", 
						end_use_information_Gender="' . addslashes($end_use_information_Gender) . '", 
						end_use_information_fabrication="' . addslashes($end_use_information_fabrication) . '", 
						apparel_garment_type_fabrication="' . addslashes($apparel_garment_type_fabrication) . '",
						 date ="' . date('d-m-Y h:i') . '" ');

		$postdata = '';
		foreach ($_POST as $key => $value) {
			if (is_array($value)) {
				$value = implode(', ', $value);
			}
			$postdata .=	'<tr><td>' . ucfirst(str_replace('_', ' ', $key)) . ':</td><td>' . $value . '</td></tr>';
		}

		$subject = 'Hangtags Brand Request - RSWM';
		$user_subject = 'Confirmation - Hangtags Brand Request';
		$message .= '<table>
								<tr><td>Dear Admin,</td></tr>
								<tr><td>New query has been received with following credentials.</td></tr>';
		$message .=	$postdata;
		$message .=	'<tr><td>date:</td><td>' . date('j-m-Y h:i') . '</td></tr>
							</table>';
		$usermessage .= '<table>
								<tr><td>Dear ' . $requestor_name . ',</td></tr>
								<tr><td>Thank you for filling out the form, W\'ll get back to you shortly. </td></tr> 
								<tr><td>You can review your brand details below.</td></tr>';

		$usermessage .=	$postdata;

		$usermessage .=	'<tr><td>date:</td><td>' . date('j-m-Y h:i') . '</td></tr>';

		$usermessage .= '<tr><td>Regards<br> Team RSWM </td></tr>
							</table>';

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		//$headers .= 'From: RSWM < info.rswm@lnjbhilwara.com >' . "\r\n";
		$headers .= 'From: RSWM < inforswm@gmail.com >' . "\r\n";
		//$headers .= 'Bcc: avinash@di91.com' . "\r\n";

		wp_mail('mktg.denim@lnjbhilwara.com', $subject, $message, $headers);
		wp_mail($requestor_email_address, $user_subject, $usermessage, $headers);

		$error['success'] = 1;
	}




	echo json_encode($error);
	die();
}
add_action('wp_ajax_save_hashtag_brand_request', 'save_hashtag_brand_request');
add_action('wp_ajax_nopriv_save_hashtag_brand_request', 'save_hashtag_brand_request');

function rswm_get_attachment_alt_title_url($url, $metakey)
{

	global $wpdb;
	$parsed_url  = explode(parse_url(WP_CONTENT_URL, PHP_URL_PATH), $url);
	$this_host   = str_ireplace('www.', '', parse_url(home_url(), PHP_URL_HOST));
	$file_host   = str_ireplace('www.', '', parse_url($url, PHP_URL_HOST));

	if (!isset($parsed_url[1]) || empty($parsed_url[1]) || ($this_host != $file_host)) {
		return;
	}

	$attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM {$wpdb->prefix}posts WHERE guid RLIKE %s;", $parsed_url[1]));
	$attached =  get_post($attachment[0]);

	if ($metakey == 'title') {
		return $attached->post_title;
	}
	if ($metakey == 'alt') {
		return get_post_meta($attachment[0], '_wp_attachment_image_alt', true); // Get post meta by ID		
	}
}

function taxonomy_init_register()
{

	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x('Yarns', 'taxonomy general name', 'textdomain'),
		'singular_name'     => _x('Yarns', 'taxonomy singular name', 'textdomain'),
		'search_items'      => __('Search Yarns', 'textdomain'),
		'all_items'         => __('All Yarns', 'textdomain'),
		'parent_item'       => __('Parent Yarns', 'textdomain'),
		'parent_item_colon' => __('Parent Yarns:', 'textdomain'),
		'edit_item'         => __('Edit Yarns', 'textdomain'),
		'update_item'       => __('Update Yarns', 'textdomain'),
		'add_new_item'      => __('Add New Yarns', 'textdomain'),
		'new_item_name'     => __('New Yarns Name', 'textdomain'),
		'menu_name'         => __('Yarns', 'textdomain'),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'public' 			=> false,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => false,
		'rewrite'           => array('slug' => 'yarns'),
	);

	register_taxonomy('yarns', array('melange'), $args);

	$labels_dyed_yarn_type = array(
		'name'              => _x('Dyed Yarn Types', 'taxonomy general name', 'textdomain'),
		'singular_name'     => _x('Dyed Yarn Type', 'taxonomy singular name', 'textdomain'),
		'search_items'      => __('Search Dyed Yarn Types', 'textdomain'),
		'all_items'         => __('All Dyed Yarn Types', 'textdomain'),
		'parent_item'       => __('Parent Dyed Yarn Type', 'textdomain'),
		'parent_item_colon' => __('Parent Dyed Yarn Type:', 'textdomain'),
		'edit_item'         => __('Edit Dyed Yarn Type', 'textdomain'),
		'update_item'       => __('Update Dyed Yarn Type', 'textdomain'),
		'add_new_item'      => __('Add New Dyed Yarn Type', 'textdomain'),
		'new_item_name'     => __('New Dyed Yarn Type Name', 'textdomain'),
		'menu_name'         => __('Dyed Yarn Types', 'textdomain'),
	);

	$args_dyed_yarn_type = array(
		'hierarchical'      => true,
		'labels'            => $labels_dyed_yarn_type,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'dyed-yarn-types'),
	);

	register_taxonomy('dyed-yarn-types', array('dyed'), $args_dyed_yarn_type);

	$labels_greige_yarn_type = array(
		'name'              => _x('Greige Yarn Types', 'taxonomy general name', 'textdomain'),
		'singular_name'     => _x('Greige Yarn Type', 'taxonomy singular name', 'textdomain'),
		'search_items'      => __('Search Greige Yarn Types', 'textdomain'),
		'all_items'         => __('All Greige Yarn Types', 'textdomain'),
		'parent_item'       => __('Parent Greige Yarn Type', 'textdomain'),
		'parent_item_colon' => __('Parent Greige Yarn Type:', 'textdomain'),
		'edit_item'         => __('Edit Greige Yarn Type', 'textdomain'),
		'update_item'       => __('Update Greige Yarn Type', 'textdomain'),
		'add_new_item'      => __('Add New Greige Yarn Type', 'textdomain'),
		'new_item_name'     => __('New Greige Yarn Type Name', 'textdomain'),
		'menu_name'         => __('Greige Yarn Types', 'textdomain'),
	);

	$args_greige_yarn_type = array(
		'hierarchical'      => true,
		'labels'            => $labels_greige_yarn_type,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'greige-yarn-types'),
	);

	register_taxonomy('greige-yarn-types', array('greige'), $args_greige_yarn_type);


	$labels2 = array(
		'name'              => _x('Blend', 'taxonomy general name', 'textdomain'),
		'singular_name'     => _x('Blend', 'taxonomy singular name', 'textdomain'),
		'search_items'      => __('Search Blend', 'textdomain'),
		'all_items'         => __('All Blend', 'textdomain'),
		'parent_item'       => __('Parent Blend', 'textdomain'),
		'parent_item_colon' => __('Parent Blend:', 'textdomain'),
		'edit_item'         => __('Edit Blend', 'textdomain'),
		'update_item'       => __('Update Blend', 'textdomain'),
		'add_new_item'      => __('Add New Blend', 'textdomain'),
		'new_item_name'     => __('New Blend Name', 'textdomain'),
		'menu_name'         => __('Blend', 'textdomain'),
	);

	$args2 = array(
		'hierarchical'      => true,
		'labels'            => $labels2,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'blend'),
	);

	register_taxonomy('blend',  array('melange'), $args2);

	$labels_dyed_yarn_blends = array(
		'name'              => _x('Dyed Yarn Blends', 'taxonomy general name', 'textdomain'),
		'singular_name'     => _x('Dyed Yarn Blend', 'taxonomy singular name', 'textdomain'),
		'search_items'      => __('Search Dyed Yarn Blends', 'textdomain'),
		'all_items'         => __('All Dyed Yarn Blends', 'textdomain'),
		'parent_item'       => __('Parent Dyed Yarn Blend', 'textdomain'),
		'parent_item_colon' => __('Parent Dyed Yarn Blend:', 'textdomain'),
		'edit_item'         => __('Edit Dyed Yarn Blend', 'textdomain'),
		'update_item'       => __('Update Dyed Yarn Blend', 'textdomain'),
		'add_new_item'      => __('Add New Dyed Yarn Blend', 'textdomain'),
		'new_item_name'     => __('New Blend Dyed Yarn Blend', 'textdomain'),
		'menu_name'         => __('Dyed Yarn Blends', 'textdomain'),
	);

	$args_dyed_yarn_blends = array(
		'hierarchical'      => true,
		'labels'            => $labels_dyed_yarn_blends,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'dyed-yarn-blends'),
	);

	register_taxonomy('dyed-yarn-blends',  array('dyed'), $args_dyed_yarn_blends);


	$labels_greige_yarn_blends = array(
		'name'              => _x('Greige Yarn Blends', 'taxonomy general name', 'textdomain'),
		'singular_name'     => _x('Greige Yarn Blend', 'taxonomy singular name', 'textdomain'),
		'search_items'      => __('Search Greige Yarn Blends', 'textdomain'),
		'all_items'         => __('All Greige Yarn Blends', 'textdomain'),
		'parent_item'       => __('Parent Greige Yarn Blend', 'textdomain'),
		'parent_item_colon' => __('Parent Greige Yarn Blend:', 'textdomain'),
		'edit_item'         => __('Edit Greige Yarn Blend', 'textdomain'),
		'update_item'       => __('Update Greige Yarn Blend', 'textdomain'),
		'add_new_item'      => __('Add New Greige Yarn Blend', 'textdomain'),
		'new_item_name'     => __('New Blend Greige Yarn Blend', 'textdomain'),
		'menu_name'         => __('Greige Yarn Blends', 'textdomain'),
	);

	$args_greige_yarn_blends = array(
		'hierarchical'      => true,
		'labels'            => $labels_greige_yarn_blends,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'greige-yarn-blends'),
	);

	register_taxonomy('greige-yarn-blends',  array('greige'), $args_greige_yarn_blends);

	$labels3 = array(
		'name'              => _x('End usage', 'taxonomy general name', 'textdomain'),
		'singular_name'     => _x('End usage', 'taxonomy singular name', 'textdomain'),
		'search_items'      => __('Search End usage', 'textdomain'),
		'all_items'         => __('All End usage', 'textdomain'),
		'parent_item'       => __('Parent End usage', 'textdomain'),
		'parent_item_colon' => __('Parent End usage:', 'textdomain'),
		'edit_item'         => __('Edit End usage', 'textdomain'),
		'update_item'       => __('Update End usage', 'textdomain'),
		'add_new_item'      => __('Add New End usage', 'textdomain'),
		'new_item_name'     => __('New End usage Name', 'textdomain'),
		'menu_name'         => __('End usage', 'textdomain'),
	);

	$args3 = array(
		'hierarchical'      => true,
		'labels'            => $labels3,
		'public' 			=> false,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => false,
		'rewrite'           => array('slug' => 'end-usage'),
	);

	register_taxonomy('end-usage',  array('melange'), $args3);


	$labels_dyed_yarn_end_usage = array(
		'name'              => _x('Dyed Yarn End usage', 'taxonomy general name', 'textdomain'),
		'singular_name'     => _x('Dyed Yarn End usage', 'taxonomy singular name', 'textdomain'),
		'search_items'      => __('Search Dyed Yarn End usage', 'textdomain'),
		'all_items'         => __('All Dyed Yarn End usage', 'textdomain'),
		'parent_item'       => __('Parent Dyed Yarn End usage', 'textdomain'),
		'parent_item_colon' => __('Parent Dyed Yarn End usage:', 'textdomain'),
		'edit_item'         => __('Edit Dyed Yarn End usage', 'textdomain'),
		'update_item'       => __('Update Dyed Yarn End usage', 'textdomain'),
		'add_new_item'      => __('Add New Dyed Yarn End usage', 'textdomain'),
		'new_item_name'     => __('New Dyed Yarn End usage Name', 'textdomain'),
		'menu_name'         => __('Dyed Yarn End usage', 'textdomain'),
	);

	$args_dyed_yarn_end_usage = array(
		'hierarchical'      => true,
		'labels'            => $labels_dyed_yarn_end_usage,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'dyed-yarn-end-usage'),
	);

	register_taxonomy('dyed-yarn-end-usage',  array('dyed'), $args_dyed_yarn_end_usage);


	$labels_greige_yarn_end_usage = array(
		'name'              => _x('Greige Yarn End usage', 'taxonomy general name', 'textdomain'),
		'singular_name'     => _x('Greige Yarn End usage', 'taxonomy singular name', 'textdomain'),
		'search_items'      => __('Search Greige Yarn End usage', 'textdomain'),
		'all_items'         => __('All Greige Yarn End usage', 'textdomain'),
		'parent_item'       => __('Parent Greige Yarn End usage', 'textdomain'),
		'parent_item_colon' => __('Parent Greige Yarn End usage:', 'textdomain'),
		'edit_item'         => __('Edit Greige Yarn End usage', 'textdomain'),
		'update_item'       => __('Update Greige Yarn End usage', 'textdomain'),
		'add_new_item'      => __('Add New Greige Yarn End usage', 'textdomain'),
		'new_item_name'     => __('New Greige Yarn End usage Name', 'textdomain'),
		'menu_name'         => __('Greige Yarn End usage', 'textdomain'),
	);

	$args_greige_yarn_end_usage = array(
		'hierarchical'      => true,
		'labels'            => $labels_greige_yarn_end_usage,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'greige-yarn-end-usage'),
	);

	register_taxonomy('greige-yarn-end-usage',  array('greige'), $args_greige_yarn_end_usage);

	$labels4 = array(
		'name'              => _x('Collection', 'taxonomy general name', 'textdomain'),
		'singular_name'     => _x('Collection', 'taxonomy singular name', 'textdomain'),
		'search_items'      => __('Search Collection', 'textdomain'),
		'all_items'         => __('All Collection', 'textdomain'),
		'parent_item'       => __('Parent Collection', 'textdomain'),
		'parent_item_colon' => __('Parent Collection:', 'textdomain'),
		'edit_item'         => __('Edit Collection', 'textdomain'),
		'update_item'       => __('Update Collection', 'textdomain'),
		'add_new_item'      => __('Add New Collection', 'textdomain'),
		'new_item_name'     => __('New Collection Name', 'textdomain'),
		'menu_name'         => __('Collection', 'textdomain'),
	);

	$args4 = array(
		'hierarchical'      => true,
		'labels'            => $labels4,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'collection'),
	);

	register_taxonomy('collection',  array('melange'), $args4);

	$labels_dyed_yarn_collections = array(
		'name'              => _x('Dyed Yarn Collections', 'taxonomy general name', 'textdomain'),
		'singular_name'     => _x('Dyed Yarn Collection', 'taxonomy singular name', 'textdomain'),
		'search_items'      => __('Search Dyed Yarn Collection', 'textdomain'),
		'all_items'         => __('All Dyed Yarn Collections', 'textdomain'),
		'parent_item'       => __('Parent Dyed Yarn Collections', 'textdomain'),
		'parent_item_colon' => __('Parent Dyed Yarn Collections:', 'textdomain'),
		'edit_item'         => __('Edit Dyed Yarn Collection', 'textdomain'),
		'update_item'       => __('Update Dyed Yarn Collection', 'textdomain'),
		'add_new_item'      => __('Add New Dyed Yarn Collection', 'textdomain'),
		'new_item_name'     => __('New Dyed Yarn Collection Name', 'textdomain'),
		'menu_name'         => __('Dyed Yarn Collection', 'textdomain'),
	);

	$args_dyed_yarn_collections = array(
		'hierarchical'      => true,
		'labels'            => $labels_dyed_yarn_collections,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'dyed-yarn-collections'),
	);

	register_taxonomy('dyed-yarn-collections',  array('dyed'), $args_dyed_yarn_collections);

	$labels_greige_yarn_collections = array(
		'name'              => _x('Greige Yarn Collections', 'taxonomy general name', 'textdomain'),
		'singular_name'     => _x('Greige Yarn Collection', 'taxonomy singular name', 'textdomain'),
		'search_items'      => __('Search Greige Yarn Collection', 'textdomain'),
		'all_items'         => __('All Greige Yarn Collections', 'textdomain'),
		'parent_item'       => __('Parent Greige Yarn Collections', 'textdomain'),
		'parent_item_colon' => __('Parent Greige Yarn Collections:', 'textdomain'),
		'edit_item'         => __('Edit Greige Yarn Collection', 'textdomain'),
		'update_item'       => __('Update Greige Yarn Collection', 'textdomain'),
		'add_new_item'      => __('Add New Greige Yarn Collection', 'textdomain'),
		'new_item_name'     => __('New Greige Yarn Collection Name', 'textdomain'),
		'menu_name'         => __('Greige Yarn Collection', 'textdomain'),
	);

	$args_greige_yarn_collections = array(
		'hierarchical'      => true,
		'labels'            => $labels_greige_yarn_collections,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'greige-yarn-collections'),
	);

	register_taxonomy('greige-yarn-collections',  array('greige'), $args_greige_yarn_collections);




	register_taxonomy(
		'year',
		'investor',
		array(
			'label' => __('Year'),
			'public' => true,
			'rewrite' => false,
			'hierarchical' => true,
		)
	);

	register_taxonomy(
		'annual-year',
		'investor',
		array(
			'label' => __('Annual Year'),
			'public' => true,
			'rewrite' => false,
			'hierarchical' => true,
		)
	);
}
add_action('init', 'taxonomy_init_register');


function filter_shareholder_more_data()
{
	global $wpdb;
	$slug = $_POST['slug'];
	$termid = $_POST['termid'];


	$shareholder_args = array(
		"post_type" => "investor",
		"post_status" => "publish",
		"posts_per_page" => -1,
		"orderby" => 'menu_order',
		"tax_query"  => array(
			array("taxonomy" => "category", "field" => "id", "terms" => array($termid),),
			array("taxonomy" => "year", "field" => "slug", "terms" => $slug,),
		)
	);

	$shareholder_query   = 	new WP_Query($shareholder_args);
	if ($shareholder_query->have_posts()) {
		while ($shareholder_query->have_posts()) {
			$shareholder_query->the_post();
			$wpcfpdfurl   =  get_post_meta(get_the_ID(), 'wpcf-pdf-url', true);
			$wpcfpdfurl2   =  get_post_meta(get_the_ID(), 'wpcf-pdf-url-hindi', true);
			if ($wpcfpdfurl != '' && $wpcfpdfurl2 == '') {
				$wpcfpdfurl1   = $wpcfpdfurl != '' ? $wpcfpdfurl : 'javascript:void(0)';
				echo '<li><a href="' . $wpcfpdfurl1 . '" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>' . get_the_title() . '</a></li>';
			} elseif ($wpcfpdfurl2 != '') {
				$wpcfpdfurl1   = $wpcfpdfurl != '' ? $wpcfpdfurl : 'javascript:void(0)';
				$wpcfpdfurl2   = $wpcfpdfurl2 != '' ? $wpcfpdfurl2 : 'javascript:void(0)';
				echo '<li><span class="newspaper-text"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>' . get_the_title() . '</span><span class="newspaper-vers"><a href="' . $wpcfpdfurl1 . '" target="_blank">English </a> <span>|</span><a href="' . $wpcfpdfurl2 . '" target="_blank">Hindi </a></span></li>';
			}
		}
	} else {
		echo "<li><p>No data available for this request.</li>";;
	}



	die();
}

add_action("wp_ajax_filter_shareholder_more_data", "filter_shareholder_more_data");
add_action("wp_ajax_nopriv_filter_shareholder_more_data", "filter_shareholder_more_data");

function rswm_insvestor_more_data()
{

	$yearslug = $_POST['slug'];
	$main_term_id = $_POST['main_term_id'];
	$taxonomy_name = $_POST['taxonomy_name'];
	$Investor_args = array(
		"post_type" => "investor",
		'fields' => 'ids',
		"post_status" => "publish",
		"posts_per_page" => -1,
		"orderby" => 'menu_order',
		"tax_query"  => array(
			array("taxonomy" => "category", "field" => "id", "terms" => array($main_term_id),),
			array("taxonomy" => $taxonomy_name, "field" => "slug", "terms" => $yearslug,),
		)
	);

	$Investor_query   = 	new WP_Query($Investor_args);

	if ($Investor_query->have_posts()) {
		while ($Investor_query->have_posts()) {
			$Investor_query->the_post();
			$wpcfpdfurl   =  get_post_meta(get_the_ID(), 'wpcf-pdf-url', true);
			$wpcfpdfurl1   = $wpcfpdfurl != '' ? $wpcfpdfurl : 'javascript:void(0)';
			echo "<a href='" . $wpcfpdfurl1 . "'><p>" . get_the_title() . "</p ></a>";
		}
	} else {
		echo "<p>No data available for this request.</p>";;
	}

	die();
}

add_action("wp_ajax_rswm_insvestor_more_data", "rswm_insvestor_more_data");
add_action("wp_ajax_nopriv_rswm_insvestor_more_data", "rswm_insvestor_more_data");

function show_archive_inverstor_presentation()
{
	$yearslug 		= $_POST['slug'];
	$main_term_id 	= $_POST['main_term_id'];
	$taxonomy_name 	= $_POST['taxonomy_name'];
	$archive		= $_POST['archive'];
	$slugs = get_terms($taxonomy_name, array("fields" => "id=>slug", "exclude" => $yearslug, "orderby" => "slug", "order" => "DESC"));

	if ($archive == 'hide') {
		$tax = array("taxonomy" => $taxonomy_name, "field" => "slug", "terms" => $yearslug);
	} else {
		$tax = array("taxonomy" => $taxonomy_name, "field" => "slug", "terms" => $slugs);
	}
	$Investor_args = array(
		"post_type" => "investor",
		'fields' => 'ids',
		"post_status" => "publish",
		"posts_per_page" => -1,
		"orderby" => 'menu_order',
		"tax_query"  => array(
			array("taxonomy" => "category", "field" => "id", "terms" => array($main_term_id),),
			$tax,
		)
	);


	$Investor_query   = 	new WP_Query($Investor_args);

	if ($Investor_query->have_posts()) {
		while ($Investor_query->have_posts()) {
			$Investor_query->the_post();
			$wpcfpdfurl   =  get_post_meta(get_the_ID(), 'wpcf-pdf-url', true);
			$wpcfpdfurl1   = $wpcfpdfurl != '' ? $wpcfpdfurl : 'javascript:void(0)';
			echo "<a href='" . $wpcfpdfurl1 . "'><p>" . get_the_title() . "</p ></a>";
		}
	} else {
		echo "<p>No data available for this request.</p>";;
	}
	die();
}

add_action("wp_ajax_show_archive_inverstor_presentation", "show_archive_inverstor_presentation");
add_action("wp_ajax_nopriv_show_archive_inverstor_presentation", "show_archive_inverstor_presentation");

// Knitted filter
add_action('wp_ajax_knitted_product__filter', 'knitted_product__filter_fn');
add_action('wp_ajax_nopriv_knitted_product__filter', 'knitted_product__filter_fn');

function knitted_product__filter_fn()
{

	if (isset($_POST['filterV'])) {
		$filterV = $_POST['filterV'];
		$result = array();
		if ($filterV == 'all') {
			$result['filter'] = 'ALL';
			$Args = array('post_type' => 'knitted', 'posts_per_page' => -1, 'post_status' => 'publish', 'orderby' => 'title', 'order' => 'DESC');
			//$result['arg'] = $Args;
			$query = new WP_Query($Args);
			if ($query->have_posts()) {
				while ($query->have_posts()) {
					$query->the_post();
					$image_url = get_post_meta(get_the_ID(), 'knitted_image', true);
					$attachment_id = attachment_url_to_postid($image_url);
					$result['data'][] = array('knit_id' => get_the_ID(), 'knit_thumb' => wp_get_attachment_image_src($attachment_id, 'medium')[0], 'knit_title' => substr(get_the_title(), 0, 12));
					//echo $attachment_id;
					// $result[]['knit_thumb'] = wp_get_attachment_image_src($attachment_id, 'medium')[0];
					// $result[]['knit_title'] = get_the_title();
				}
			}
			wp_reset_postdata();
		} else {
			$result['filter'] = $filterV;
			$Args = array(
				'post_type' => 'knitted',
				'posts_per_page' => -1,
				'post_status' => 'publish',
				'orderby' => 'title',
				'order' => 'DESC',
				'meta_query'    => array(
					//'relation' => 'OR',
					array(
						'key'       => 'knitted_category',
						'value'     => $filterV,
						'compare'   => '=',
					)
				)
			);
			//$result['arg'] = $Args;
			$query = new WP_Query($Args);

			if ($query->have_posts()) {
				while ($query->have_posts()) {
					$query->the_post();
					$image_url = get_post_meta(get_the_ID(), 'knitted_image', true);
					$attachment_id = attachment_url_to_postid($image_url);
					$result['data'][] = array('knit_id' => get_the_ID(), 'knit_thumb' => wp_get_attachment_image_src($attachment_id, 'medium')[0], 'knit_title' => get_the_title());
				}
			}
			wp_reset_postdata();
		}

		//$result['status'] = 'Hello Moto!';
		echo json_encode($result);
	}
	die();
}

// knitted detail
add_action('wp_ajax_knitted_product_details_popup', 'knitted_product_details_popup_fn');
add_action('wp_ajax_nopriv_knitted_product_details_popup', 'knitted_product_details_popup_fn');


function knitted_product_details_popup_fn()
{
	$post_id = $_POST['postid'];
	$image_url = get_post_meta($post_id, 'knitted_image', true);
	$attachment_id = attachment_url_to_postid($image_url);
	//echo $attachment_id;
	$imgsrc = wp_get_attachment_image_src($attachment_id, 'large')[0];
	$result = array();
	$result['image'] = $imgsrc;
	$result['mo'] =	get_the_title($post_id);
	$result['structure'] =	get_post_meta($post_id, 'knitted_structure', true);
	$result['gsm'] =	get_post_meta($post_id, 'knitted_gsm', true);
	$result['width'] =	get_post_meta($post_id, 'knitted_width', true);
	$result['content'] =	get_post_meta($post_id, 'knitted_content', true);
	$result['fabfin'] =	get_post_meta($post_id, 'knitted_fabfin', true);
	$result['shade'] =	get_post_meta($post_id, 'knitted_shade', true);
	$result['category'] =	get_post_meta($post_id, 'knitted_category', true);


	echo json_encode($result);
	die();
}

function knitted_more_enquirylistbox()
{
	$explode = explode(",", $_POST['postid']);
	$post_type = isset($_POST['post_type']) ? $_POST['post_type'] : "knitted";
	$args = array('post_type' => $post_type, 'fields' => 'ids', 'post_status' => 'publish', 'posts_per_page' => -1, 'post__in' => $explode);
	$result = get_posts($args);

	$output = array();
	$data = array();
	foreach ($result as $pid) {
		$wpcfbrandname = get_post_meta($pid, "wpcf-brand-name", true);
		$wpcfbrandname1 = $wpcfbrandname != '' ? $wpcfbrandname : get_the_title($pid);
		$output[] = array(
			'postid' => $pid,
			'title' => $wpcfbrandname1,
			'img' => get_the_post_thumbnail_url($pid, 'full'),
			'shadeNo' => get_post_meta($pid, 'wpcf-shade-no', true),
			'lotno' => get_post_meta($pid, 'wpcf-lot-no', true),
			'blend' => get_post_meta($pid, 'wpcf-blend', true),
		);
	}

	/*if (count($result) > 0) {
		$data = array(
			'status' => 1,
			'list' => $output
		);
	} else {
		$data = array(
			'status' => 0,
			'list' => $output
		);
	}
	*/
	$data = array(
		'status' => 1,
		'list' => 'hello'
	);
	echo json_encode($data);
	die();
}
add_action("wp_ajax_knitted_more_enquirylistbox", "knitted_more_enquirylistbox");
add_action("wp_ajax_nopriv_knitted_more_enquirylistbox", "knitted_more_enquirylistbox");
//
function more_enquirylistbox()
{
	$explode = explode(",", $_POST['postid']);
	$post_type = isset($_POST['post_type']) ? $_POST['post_type'] : "melange";
	$args = array('post_type' => $post_type, 'fields' => 'ids', 'post_status' => 'publish', 'posts_per_page' => -1, 'post__in' => $explode);
	$result = get_posts($args);

	$output =  array();
	$data =  array();
	foreach ($result as $pid) {
		$wpcfbrandname = get_post_meta($pid, "wpcf-brand-name", true);
		$wpcfbrandname1 = $wpcfbrandname != '' ? $wpcfbrandname : get_the_title($pid);
		$output[] = array(
			'postid' 	=> $pid,
			'title' 	=> $wpcfbrandname1,
			'img' 		=> get_the_post_thumbnail_url($pid, 'full'),
			'shadeNo'	=> get_post_meta($pid, 'wpcf-shade-no', true),
			'lotno' 	=> get_post_meta($pid, 'wpcf-lot-no', true),
			'blend'     => get_post_meta($pid, 'wpcf-blend', true),
		);
	}

	if (count($result) > 0) {
		$data = array(
			'status' => 1,
			'list'   => $output
		);
	} else {
		$data = array(
			'status' => 0,
			'list'   => $output
		);
	}

	echo json_encode($data);
	die();
}
add_action("wp_ajax_more_enquirylistbox", "more_enquirylistbox");
add_action("wp_ajax_nopriv_more_enquirylistbox", "more_enquirylistbox");


function getLatestPrice()
{
	$request =  'https://api.stockdio.com/data/financial/prices/v1/getlatestprices?app-key=0B5E1BE97E0B4F84A14C23CDA5A8DD2D&stockExchange=NSE&symbols=RSWM';
	$ch = curl_init($request);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);

	if ($response === FALSE) {
		die(curl_error($ch));
	}

	$responseData = json_decode($response, TRUE);

	return $responseData;
}

function getStockPrice()
{
	$request = "http://api.marketstack.com/v1/eod?access_key=563e50a3972ca0d63a9aca3a360a05fd&symbols=RSWM.XNSE";
	$session = curl_init($request);

	curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($session);
	curl_close($session);

	if ($response === FALSE) {
		die(curl_error($session));
	}

	$responseData = json_decode($response, TRUE);

	$data = array();

	$current_price 	 = $responseData['data'][0]['price'];
	$price_change = $responseData['data'][0]['day_change'];
	$change_pct = $responseData['data'][0]['change_pct'];
	$last_trade_time = $responseData['data'][0]['last_trade_time'];

	$data['price'] = $current_price;
	$data['price_change'] = $price_change;
	$data['price_change_percent'] = $change_pct;
	$data['last_trade'] = $last_trade_time;

	return $data;
}
/*
function getStockPriceLastEOD(){
		$marketstack = unserialize(get_option( 'marketstack' ));
		$current_price 	 = $marketstack['open'];
		$price_change = $marketstack['close'];
		$price_f = $marketstack['close'];
		$change_pct = round((($price_change - $current_price) / $current_price),2) ;
		$price_change = $marketstack['close']-$marketstack['open'];
		
		
		$last_trade_time = $marketstack['date'];
		$data = array();
		$data['price'] = $price_f;
		$data['price_change'] = $price_change;	
		$data['price_change_percent'] = $change_pct;
		$data['last_trade'] = $last_trade_time;

return $data;
}
*/

function getStockPriceLastEOD()
{
	//$request-old = "http://api.marketstack.com/v1/eod?access_key=563e50a3972ca0d63a9aca3a360a05fd&symbols=RSWM.XNSE";
	$request = "http://api.marketstack.com/v1/eod?access_key=b1a92c8075012a3b17066b8801baaa05&symbols=RSWM.XNSE";

	$session = curl_init($request);

	curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($session);
	curl_close($session);

	if ($response === FALSE) {
		die(curl_error($session));
	}

	$responseData = json_decode($response, TRUE);

	$current_price 	= $responseData['data'][0]['open'];
	$end_price = 	$responseData['data'][0]['close'];
	$price_change = $end_price - $current_price;
	$change_pct = round((($price_change) / $current_price), 2);
	$last_trade_time = $responseData['data'][0]['date'];

	$data = array();
	$data['price'] = $end_price;
	$data['price_change'] = $price_change;
	$data['price_change_percent'] = $change_pct;
	$data['last_trade'] = $last_trade_time;

	return $data;
}


function adding_custom_meta_boxes($post_type, $post)
{
	add_meta_box('collection-meta-box', __('Collection:'), 'collection_meta_html', 'page', 'normal', 'default');
	if (isset($_GET['post']) && (trim($_GET['post']) == 2093 || trim($_GET['post']) == 2272 || trim($_GET['post']) == 2732 || trim($_GET['post']) == 2795 || trim($_GET['post']) == 2925) || trim($_GET['post']) == 4944 || trim($_GET['post']) == 5456 || trim($_GET['post']) == 5783 || trim($_GET['post']) == 5852 || trim($_GET['post']) == 5942) {
	}
}

function collection_meta_html()
{
	$post_id = $_GET['post'];
	$gkj_collection_title       = get_post_meta($post_id, 'gkj_collection_title', false);
	$gkj_collection_description = get_post_meta($post_id, 'gkj_collection_description', false);
	$gkj_collection_color       = get_post_meta($post_id, 'gkj_collection_color', false);
	$gkj_collection_image       = get_post_meta($post_id, 'gkj_collection_image', false);

	$gkj_collection_product_info_image       = get_post_meta($post_id, 'gkj_collection_product_info_image', false);

	$gkj_collection_product_info_title       = get_post_meta($post_id, 'gkj_collection_product_info_title', false);

	$gkj_collection_product_other_info_title = get_post_meta($post_id, 'gkj_collection_product_other_info_title', false);

	$jk = 0;
?>
	<style>
		.wpt-form-label {
			font-size: 1em;
			font-weight: bold;
			display: block;
		}

		.remove {
			padding: 3px 6px;
			background: red;
			border-radius: 48%;
			color: #fff;
			cursor: pointer;
		}

		.product_remove {
			background: orange;
			padding: 3px 6px;
			border-radius: 63%;
			color: #fff;
		}

		.add_new_product {
			margin-top: 13px;
			margin-bottom: 13px;
		}

		.add_new_product a {
			background: orange;
			border-color: orange;
			box-shadow: 0 1px 0 orange;
			padding: 5px 6px;
			color: #fff;
			text-decoration: none;
			cursor: pointer;
		}
	</style>
	<div class="collection_main_div">
		<div class="collection_child1_div">
			<?php for ($k = 0; $k < count($gkj_collection_title) or $k == $jk; $k++) { ?>
				<div class="collection_child2_div" data-tag='<?php echo $k ?>'>
					<div style="text-align: right;"><span class="remove">x</span></div>
					<div class="collection_title">
						<label class="wpt-form-label wpt-form-textfield-label">Title</label>
						<input type="text" name="gkj_collection_title[]"
							value="<?php echo stripslashes($gkj_collection_title[$k]) ?>"
							class="wpt-form-textfield form-textfield textfield" style="width: 80%;margin-bottom: 19px;">
					</div>
					<div class="collection_title">
						<label class="wpt-form-label wpt-form-textfield-label">Description</label><br>
						<?php wp_editor(stripslashes($gkj_collection_description[$k]), 'gkj_collection_description_' . $k, array('textarea_name' => 'gkj_collection_description[]')) ?>
					</div>
					<div class="collection_color">
						<br><br><label class="wpt-form-label wpt-form-textfield-label">Choose Color:</label>
						<input type="color" name="gkj_collection_color[]"
							value="<?php echo stripslashes($gkj_collection_color[$k]) ?>"
							style="width: 20%; height: 48px;margin-top: 10px; margin-bottom: 14px;">

					</div>
					<div class="collection_image">
						<label class="wpt-form-label wpt-form-textfield-label">Image:</label>
						<input type="text" name="gkj_collection_image[]"
							value="<?php echo stripslashes($gkj_collection_image[$k]) ?>" style="width: 60%;height: 30px;">
						<button class="image-upload button button-primary button-medium">Upload</button>
						<br>
						<img src="<?php echo stripslashes($gkj_collection_image[$k]) ?>" class="image-preview"
							style="height:50px;">
					</div>
					<div class="product_information">
						<br>
						<label class="wpt-form-label wpt-form-textfield-label">Product Information:</label>
						<hr>
						<?php $product_img = unserialize($gkj_collection_product_info_image[$k]); ?>
						<?php $product_title = unserialize($gkj_collection_product_info_title[$k]); ?>
						<?php $product_other_ingo_title = unserialize($gkj_collection_product_other_info_title[$k]); ?>

						<div class="product_information_label1">
							<?php for ($pm = 0; $pm < count($product_img) or $pm == $jk; $pm++) { ?>
								<div class="product_information_label2">
									<div style="text-align:right;"><span class="product_remove">x</span></div>
									<div class="collection_image">
										<label class="wpt-form-label wpt-form-textfield-label">Image:</label>
										<input type="text" name="gkj_collection_product_info_image[<?php echo $k ?>][]"
											value="<?php echo stripslashes($product_img[$pm]) ?>" style="width: 60%;height: 30px;">
										<button class="image-upload button button-primary button-medium">Upload</button>

									</div>
									<div><label class="wpt-form-label wpt-form-textfield-label">Title</label></div>
									<input name="gkj_collection_product_info_title[<?php echo $k ?>][]" type="text"
										value="<?php echo stripslashes($product_title[$pm]) ?>" style="width: 504px;" />
									<div><label class="wpt-form-label wpt-form-textfield-label">Other Information</label></div>
									<input name="gkj_collection_product_other_info_title[<?php echo $k ?>][]" type="text"
										value="<?php echo stripslashes($product_other_ingo_title[$pm]) ?>" style="width: 504px;" />
								</div>
							<?php } ?>
						</div>

						<div class="add_new_product"><a href="javascript:void(0)" class="add_new_product_btn">Add product</a>
						</div>
					</div>



					<hr>
				</div>
			<?php } ?>
		</div>
		<div style="margin-top:20px;"><a href="javascript:void(0)"
				class="add_new_collection_field button-small button button-primary" id="add_new_collection_field">Add
				new</a></div>
	</div>
	<script>
		jQuery(document).ready(function() {
			jQuery(document).on('click', '.add_new_product_btn', function() {
				jQuery(this).html('Please wait..');
				jQuery(this).attr('disabled', true);
				var NewProduct = jQuery(this).parents('.product_information').find(
					'.product_information_label1 .product_information_label2:last').clone();
				NewProduct.find('input[type="text"]').val('');
				NewProduct.appendTo(jQuery(this).parents('.product_information').find(
					'.product_information_label1'));
				jQuery(this).html('Add product');
				jQuery(this).attr('disabled', false);
			});

			jQuery(document).on('click', '.product_remove', function() {
				jQuery(this).parents('.product_information_label2').remove();
			});

			jQuery(document).on('click', '.remove', function() {
				jQuery(this).parents('.collection_child2_div').remove();
			});
			jQuery(document).on('click', '.image-upload', function() {
				var send_attachment_bkp = wp.media.editor.send.attachment;
				var button = jQuery(this);
				wp.media.editor.send.attachment = function(props, attachment) {
					jQuery(button).parent('.collection_image').find('img.image-preview ').attr('src',
						attachment.url);
					jQuery(button).prev().val(attachment.url);
					wp.media.editor.send.attachment = send_attachment_bkp;
				}
				wp.media.editor.open(button);
				return false;
			});
		});
		jQuery(document).on('click', '#add_new_collection_field', function() {
			jQuery(this).html('Please wait..')
			jQuery(this).attr('disabled', true)
			var My_New_Global_Settings2 = tinyMCEPreInit.mceInit.content;
			var datatag = jQuery(this).parents('.collection_main_div').find(
				'.collection_child1_div .collection_child2_div:last').data('tag');
			var expid1 = 'gkj_collection_description_' + parseInt(datatag + 1);
			jQuery.post('<?php echo admin_url("admin-ajax.php") ?>', {
				'action': 'collection_duplicate_html',
				'editorid': datatag
			}, function(reposive) {
				jQuery('#add_new_collection_field').html('Add new')
				jQuery('#add_new_collection_field').attr('disabled', false)
				jQuery('.collection_child1_div').append(reposive);
				tinymce.init(My_New_Global_Settings2);
				tinyMCE.execCommand('mceAddEditor', false, expid1);
				console.log('In ' + My_New_Global_Settings2);
				quicktags({
					id: expid1
				});
			});


		})
	</script>
<?php

}

function collection_duplicate_html()
{
	$editorid = $_POST['editorid'];
	++$editorid;
?>
	<div class="collection_child2_div" data-tag='<?php echo $editorid ?>'>
		<div style="text-align: right;"><span class="remove">x</span></div>
		<div class="collection_title">
			<label class="wpt-form-label wpt-form-textfield-label">Title</label>
			<input type="text" name="gkj_collection_title[]" value="" class="wpt-form-textfield form-textfield textfield"
				style="width: 80%;margin-bottom: 19px;">
		</div>
		<div class="collection_title">
			<label class="wpt-form-label wpt-form-textfield-label">Description</label><br>
			<?php wp_editor('', 'gkj_collection_description_' . $editorid, array('textarea_name' => 'gkj_collection_description[]')) ?>
		</div>
		<div class="collection_color">
			<br><br><label class="wpt-form-label wpt-form-textfield-label">Choose Color:</label>
			<input type="color" name="gkj_collection_color[]" value=""
				style="width: 20%; height: 48px;margin-top: 10px; margin-bottom: 14px;">

		</div>
		<div class="collection_image">
			<label class="wpt-form-label wpt-form-textfield-label">Image:</label>
			<input type="text" name="gkj_collection_image[]" value="" style="width: 60%;height: 30px;">
			<button class="image-upload button button-primary button-medium">Upload</button>
			<br>
			<img src="" class="image-preview" style="height:50px;">
		</div>

		<div class="product_information">
			<br>
			<label class="wpt-form-label wpt-form-textfield-label">Product Information:</label>
			<hr>
			<div class="product_information_label1">
				<div class="product_information_label2">
					<div style="text-align:right;"><span class="product_remove">x</span></div>
					<div class="collection_image">
						<label class="wpt-form-label wpt-form-textfield-label">Image:</label>
						<input type="text" name="gkj_collection_product_info_image[<?php echo $editorid ?>][]" value=""
							style="width: 60%;height: 30px;">
						<button class="image-upload button button-primary button-medium">Upload</button>

					</div>
					<div><label class="wpt-form-label wpt-form-textfield-label">Title</label></div>
					<input name="gkj_collection_product_info_title[<?php echo $editorid ?>][]" type="text" value=""
						style="width: 504px;" />
					<div><label class="wpt-form-label wpt-form-textfield-label">Other Information</label></div>
					<input name="gkj_collection_product_other_info_title[<?php echo $editorid ?>][]" type="text" value=""
						style="width: 504px;" />
				</div>
			</div>
			<div class="add_new_product"><a href="javascript:void(0)" class="add_new_product_btn">Add product</a></div>
		</div>



		<hr>
	</div>
<?php
	die();
}
add_action('wp_ajax_collection_duplicate_html', 'collection_duplicate_html');
add_action('wp_ajax_nopriv_collection_duplicate_html', 'collection_duplicate_html');

add_action('save_post', 'save_custom_data');
add_action('draft_to_publish', 'save_custom_data');
function save_custom_data($post_id)
{
	if (get_post_type($post_id) == 'page' && ($post_id == 2093 || $post_id == 2272 || $post_id == 2732 || $post_id == 2795  || $post_id == 2925 || $post_id == 4944 || $post_id == 5456 || $post_id == 5783 || $post_id == 5852 || $post_id == 5942)) {

		$gkj_collection_title = $_POST['gkj_collection_title'];
		$gkj_collection_description = $_POST['gkj_collection_description'];
		$gkj_collection_color = $_POST['gkj_collection_color'];
		$gkj_collection_image = $_POST['gkj_collection_image'];

		$gkj_collection_product_info_image = $_POST['gkj_collection_product_info_image'];
		$gkj_collection_product_info_title = $_POST['gkj_collection_product_info_title'];
		$gkj_collection_product_other_info_title = $_POST['gkj_collection_product_other_info_title'];

		delete_post_meta($post_id, 'gkj_collection_title');
		delete_post_meta($post_id, 'gkj_collection_description');
		delete_post_meta($post_id, 'gkj_collection_color');
		delete_post_meta($post_id, 'gkj_collection_image');

		delete_post_meta($post_id, 'gkj_collection_product_info_image');

		delete_post_meta($post_id, 'gkj_collection_product_info_title');

		delete_post_meta($post_id, 'gkj_collection_product_other_info_title');
		for ($i = 0; $i < count($gkj_collection_title); $i++) {
			add_post_meta($post_id, 'gkj_collection_title', addslashes($gkj_collection_title[$i]));
			add_post_meta($post_id, 'gkj_collection_description', addslashes($gkj_collection_description[$i]));
			add_post_meta($post_id, 'gkj_collection_color', addslashes($gkj_collection_color[$i]));
			add_post_meta($post_id, 'gkj_collection_image', addslashes($gkj_collection_image[$i]));

			add_post_meta($post_id, 'gkj_collection_product_info_image', addslashes(serialize($gkj_collection_product_info_image[$i])));
			add_post_meta($post_id, 'gkj_collection_product_info_title', addslashes(serialize($gkj_collection_product_info_title[$i])));
			add_post_meta($post_id, 'gkj_collection_product_other_info_title', addslashes(serialize($gkj_collection_product_other_info_title[$i])));
		}
	}
}


function rswm_get_attachment_id_by_url($url, $size)
{

	$parsed_url  = explode(parse_url(WP_CONTENT_URL, PHP_URL_PATH), $url);
	$this_host = str_ireplace('www.', '', parse_url(home_url(), PHP_URL_HOST));
	$file_host = str_ireplace('www.', '', parse_url($url, PHP_URL_HOST));
	if (!isset($parsed_url[1]) || empty($parsed_url[1]) || ($this_host != $file_host)) {
		return;
	}
	global $wpdb;
	$attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM {$wpdb->prefix}posts WHERE guid RLIKE %s;", $parsed_url[1]));

	$imgURL =   wp_get_attachment_image_src($attachment[0], $size);

	return $imgURL[0];
}
function new_collection_product_details_popup()
{

	$indexid = $_POST['indexid'];
	$explode = explode(',', $indexid);
	$postid 	= $_POST['postid'];
	$gkj_collection_product_info_image       = get_post_meta($postid, 'gkj_collection_product_info_image', false);
	$gkj_collection_product_info_title       = get_post_meta($postid, 'gkj_collection_product_info_title', false);
	$gkj_collection_product_other_info_title = get_post_meta($postid, 'gkj_collection_product_other_info_title', false);
	$product_img = unserialize($gkj_collection_product_info_image[$explode[0]]);
	$product_title = unserialize($gkj_collection_product_info_title[$explode[0]]);
	$product_other_ingo_title = unserialize($gkj_collection_product_other_info_title[$explode[0]]);
?>


	<div class="col span_6">
		<img id="zoom_08" src="<?php echo stripslashes($product_img[$explode[1]]) ?>"
			data-zoom-image="<?php echo stripslashes($product_img[$explode[1]]) ?>" />
	</div>
	<div class="col span_6">
		<div class="melange-rightside">
			<h3><?php echo stripslashes($product_title[$explode[1]]) ?></h3>
			<div class="melange-popup-detail-list">
				<?php if ($product_other_ingo_title[$explode[1]] != '') { ?>
					<p><span><?php echo $product_other_ingo_title[$explode[1]] ?></span></p>
				<?php } ?>
			</div>
		</div>
	</div>
<?php
	die();
}
add_action('wp_ajax_new_collection_product_details_popup', 'new_collection_product_details_popup');
add_action('wp_ajax_nopriv_new_collection_product_details_popup', 'new_collection_product_details_popup');
function escapism_product_details_popup()
{

	$indexid = $_POST['indexid'];
	$explode = explode(',', $indexid);
	$postid 	= 2732;
	$gkj_collection_product_info_image       = get_post_meta($postid, 'gkj_collection_product_info_image', false);
	$gkj_collection_product_info_title       = get_post_meta($postid, 'gkj_collection_product_info_title', false);
	$gkj_collection_product_other_info_title = get_post_meta($postid, 'gkj_collection_product_other_info_title', false);
	$product_img = unserialize($gkj_collection_product_info_image[$explode[0]]);
	$product_title = unserialize($gkj_collection_product_info_title[$explode[0]]);
	$product_other_ingo_title = unserialize($gkj_collection_product_other_info_title[$explode[0]]);
?>


	<div class="col span_6">
		<img id="zoom_08" src="<?php echo stripslashes($product_img[$explode[1]]) ?>"
			data-zoom-image="<?php echo stripslashes($product_img[$explode[1]]) ?>" />
	</div>
	<div class="col span_6">
		<div class="melange-rightside">
			<h3><?php echo stripslashes($product_title[$explode[1]]) ?></h3>
			<div class="melange-popup-detail-list">
				<?php if ($product_other_ingo_title[$explode[1]] != '') { ?>
					<p><span><?php echo $product_other_ingo_title[$explode[1]] ?></span></p>
				<?php } ?>
			</div>



		</div>
	</div>



<?php
	die();
}
add_action('wp_ajax_escapism_product_details_popup', 'escapism_product_details_popup');
add_action('wp_ajax_nopriv_escapism_product_details_popup', 'escapism_product_details_popup');

function collection_product_details_popup()
{

	$indexid = $_POST['indexid'];
	$explode = explode(',', $indexid);
	$postid 	= 2093;
	$gkj_collection_product_info_image       = get_post_meta($postid, 'gkj_collection_product_info_image', false);
	$gkj_collection_product_info_title       = get_post_meta($postid, 'gkj_collection_product_info_title', false);
	$gkj_collection_product_other_info_title = get_post_meta($postid, 'gkj_collection_product_other_info_title', false);
	$product_img = unserialize($gkj_collection_product_info_image[$explode[0]]);
	$product_title = unserialize($gkj_collection_product_info_title[$explode[0]]);
	$product_other_ingo_title = unserialize($gkj_collection_product_other_info_title[$explode[0]]);
?>


	<div class="col span_6">
		<img id="zoom_08" src="<?php echo stripslashes($product_img[$explode[1]]) ?>"
			data-zoom-image="<?php echo stripslashes($product_img[$explode[1]]) ?>" />
	</div>
	<div class="col span_6">
		<div class="melange-rightside">
			<h3><?php echo stripslashes($product_title[$explode[1]]) ?></h3>
			<div class="melange-popup-detail-list">
				<?php if ($product_other_ingo_title[$explode[1]] != '') { ?>
					<p><span><?php echo $product_other_ingo_title[$explode[1]] ?></span></p>
				<?php } ?>
			</div>



		</div>
	</div>



<?php
	die();
}
add_action('wp_ajax_collection_product_details_popup', 'collection_product_details_popup');
add_action('wp_ajax_nopriv_collection_product_details_popup', 'collection_product_details_popup');



function reneu_product_details_popup()
{

	$indexid = $_POST['indexid'];
	$explode = explode(',', $indexid);
	$postid 	= $_POST['pppid'];
	$gkj_collection_product_info_image       = get_post_meta($postid, 'gkj_collection_product_info_image', false);
	$gkj_collection_product_info_title       = get_post_meta($postid, 'gkj_collection_product_info_title', false);
	$gkj_collection_product_other_info_title = get_post_meta($postid, 'gkj_collection_product_other_info_title', false);

	$gkj_collection_product_info_sort_no = get_post_meta($postid, 'gkj_collection_product_info_sort_no', false);
	$gkj_collection_product_info_structure = get_post_meta($postid, 'gkj_collection_product_info_structure', false);
	$gkj_collection_product_info_gsm = get_post_meta($postid, 'gkj_collection_product_info_gsm', false);
	$gkj_collection_product_info_width = get_post_meta($postid, 'gkj_collection_product_info_width', false);
	$gkj_collection_product_info_finish = get_post_meta($postid, 'gkj_collection_product_info_finish', false);
	$gkj_collection_product_other_info_count = get_post_meta($postid, 'gkj_collection_product_other_info_count', false);

	$product_img = unserialize($gkj_collection_product_info_image[$explode[0]]);
	$product_title = unserialize($gkj_collection_product_info_title[$explode[0]]);
	$product_other_ingo_title = unserialize($gkj_collection_product_other_info_title[$explode[0]]);

	$product_other_info_sort = unserialize($gkj_collection_product_info_sort_no[$explode[0]]);
	$product_other_info_structure = unserialize($gkj_collection_product_info_structure[$explode[0]]);
	$product_other_info_gsm = unserialize($gkj_collection_product_info_gsm[$explode[0]]);
	$product_other_info_width = unserialize($gkj_collection_product_info_width[$explode[0]]);
	$product_other_info_finish = unserialize($gkj_collection_product_info_finish[$explode[0]]);
	$product_other_info_count = unserialize($gkj_collection_product_other_info_count[$explode[0]]);
?>


	<div class="col span_6">
		<img id="zoom_08" src="<?php echo stripslashes($product_img[$explode[1]]) ?>"
			data-zoom-image="<?php echo stripslashes($product_img[$explode[1]]) ?>" />
	</div>
	<div class="col span_6">
		<div class="melange-rightside">
			<h3><?php echo stripslashes($product_title[$explode[1]]) ?></h3>
			<div class="melange-popup-detail-list">
				<?php if ($product_other_ingo_title[$explode[1]] != '') { ?>
					<p><span><?php echo 'Blend: ' . stripcslashes($product_other_ingo_title[$explode[1]]) ?></span></p><br>
				<?php } ?>

				<?php if ($product_other_info_sort[$explode[1]] != '') { ?>
					<p><span><?php echo 'Sort No.: ' . stripcslashes($product_other_info_sort[$explode[1]]) ?></span></p><br>
				<?php } ?>


				<?php if ($product_other_info_structure[$explode[1]] != '') { ?>
					<p><span><?php echo 'Structure: ' . stripcslashes($product_other_info_structure[$explode[1]]) ?></span></p>
					<br>
				<?php } ?>

				<?php if ($product_other_info_gsm[$explode[1]] != '') { ?>
					<p><span><?php echo 'GSM: ' . stripcslashes($product_other_info_gsm[$explode[1]]) ?></span></p><br>
				<?php } ?>

				<?php if ($product_other_info_width[$explode[1]] != '') { ?>
					<p><span><?php echo 'Width: ' . stripcslashes($product_other_info_width[$explode[1]]) ?></span></p><br>
				<?php } ?>

				<?php if ($product_other_info_finish[$explode[1]] != '') { ?>
					<p><span><?php echo 'Finish: ' . stripcslashes($product_other_info_finish[$explode[1]]) ?></span></p><br>
				<?php } ?>
				<?php if ($product_other_info_count[$explode[1]] != '') { ?>
					<p><span><?php echo 'Count: ' . stripcslashes($product_other_info_count[$explode[1]]) ?></span></p>
				<?php } ?>
			</div>



		</div>
	</div>



<?php
	die();
}
add_action('wp_ajax_reneu_product_details_popup', 'reneu_product_details_popup');
add_action('wp_ajax_nopriv_reneu_product_details_popup', 'reneu_product_details_popup');

function modify_opengraph_type_products($type)
{
	if (get_queried_object_id() === 1021) {
		$type = 'business.business';
	} else {
		$type = 'website';
	}

	return $type;
}
add_filter('wpseo_opengraph_type', 'modify_opengraph_type_products');

// start code for inquiry page for showing and exporting data
add_action('admin_menu', 'inquiry_page_setup_menu');
if (!function_exists('inquiry_page_setup_menu')) {
	function inquiry_page_setup_menu()
	{
		add_menu_page('Enquiry Data', 'Enquiry Data', 'manage_options', 'inquiry-data', 'inquiry_data_show', 'dashicons-media-text');
	}
}
if (!function_exists('inquiry_data_show')) {
	function inquiry_data_show()
	{
		require_once 'enquiry_show_data.php';
	}
}

// end code for inquiry page

// == function for custom field of Dyed Yarn Start == //

add_action("add_meta_boxes", "custom_dyed_yarn");
function custom_dyed_yarn()
{

	global $post;

	if (!empty($post)) {
		$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

		if ($pageTemplate == 'template/template-yarn-range.php') {
			add_meta_box("Dyed_id", "Dyed Yarn Fields", "callback", "page", "normal", "high");
		}
	}
}
function callback()
{
	global $post;
	// create id key
	wp_nonce_field(basename(__FILE__), "wpcf-nonce");
	$img_url = get_post_meta($post->ID, 'wpcf-yarn', true);
	$text_yarn = get_post_meta($post->ID, "wpcf-text-yarn", true);
	$desc_yarn = get_post_meta($post->ID, "wpcf-desc-yarn", true);
?>

	Image Url : <input type="text" style="width: 100%;margin-bottom:10px;" placeholder="image url" name="wpcf-yarn"
		value="<?php echo $img_url; ?>"><br>
	Title : <input type="text" style="width: 100%;margin-bottom:10px;" name="wpcf-text-yarn"
		value="<?php echo $text_yarn; ?>"><br>
	Desccription : <textarea style="width: 100%;margin-bottom:10px;" rows="4" cols="80"
		name="wpcf-desc-yarn"><?php echo $desc_yarn; ?></textarea>
<?php
}
//save your data
add_action('save_post', 'save_callback');
function save_callback()
{
	global $post;
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post->ID;
	}
	update_post_meta($post->ID, "wpcf-yarn", $_POST["wpcf-yarn"]);
	update_post_meta($post->ID, "wpcf-text-yarn", $_POST["wpcf-text-yarn"]);
	update_post_meta($post->ID, "wpcf-desc-yarn", $_POST["wpcf-desc-yarn"]);
}

// == function for custom field of Dyed Yarn End == //

// function for contact form submission response
add_action('wp_ajax_responser', 'responser');
add_action('wp_ajax_nopriv_responser', 'responser');

function responser()
{

	echo "<pre>";
	print_r($_POST);
	echo "</pre>";

	//$captcha=$_POST['captcha'];
	$captcha = $_POST['captcha'];
	$secretKey = "6LfOtsYZAAAAAOtKKOumL5Z4lwpMuDTHt21XpPKL";
	$ch = curl_init();

	curl_setopt_array($ch, [
		CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
		CURLOPT_POST => true,
		CURLOPT_POSTFIELDS => [
			'secret' => $secretKey,
			'response' => $captcha,
			'remoteip' => $_SERVER['REMOTE_ADDR']
		],
		CURLOPT_RETURNTRANSFER => true
	]);

	$output = curl_exec($ch);
	curl_close($ch);

	if (strpos($output, '"success": true') !== FALSE) {
		//echo "<script type='text/javascript'>alert('success');</script>";
		echo '<h3>Thanks for your message!</h3>' . $output;
	} else {
		//echo "<script type='text/javascript'>alert('failed');</script>";
		echo "<h3>Error</h3>" . $output . "<br> Captcha : " . $captcha;
	}
}

/* remove unused css and js file code */
if (!function_exists('unused_css_and_js_remove')) {
	function unused_css_and_js_remove()
	{
		if (is_front_page() || is_home()) {
			wp_deregister_style('wp-block-library');
			wp_deregister_style('stock-ticker');
			wp_deregister_style('stock-ticker-custom');
		}
	}
	add_action('wp_enqueue_scripts', 'unused_css_and_js_remove', 999);
}

/* end */


function myprefix_custom_cron_schedule($schedules)
{

	$schedules['15min'] = array(
		'interval' => 15 * 60, // Every 6 hours
		'display'  => __('Every 15 minute'),
	);
	return $schedules;
}
add_filter('cron_schedules', 'myprefix_custom_cron_schedule');

//Schedule an action if it's not already scheduled
if (!wp_next_scheduled('myprefix_cron_hook')) {
	wp_schedule_event(time(), '15min', 'myprefix_cron_hook');
}

///Hook into that action that'll fire every six hours
add_action('myprefix_cron_hook', 'myprefix_cron_function');

//create your function, that runs on cron
function myprefix_cron_function()
{

	$TodayDate = date("Y-m-d H:i:s");
	$compareTime = date('H:i', strtotime('+5 hour +30 minutes', strtotime($TodayDate)));
	$nameOfDay = date('D', strtotime($TodayDate));
	$starttimeStock = "09:00";
	$endtimeStock = "16:00";

	if (strtotime($starttimeStock) < strtotime($compareTime)  && strtotime($endtimeStock) > strtotime($compareTime) && $nameOfDay != "Sat" && $nameOfDay != "Sun") {
		$indus_storswm_stock_prvious_day_close_priceck_date = json_decode(get_option("rswm_stock_prvious_day_close_price"));
		$day_before = date('Y-m-d', strtotime(date("Y-m-d") . ' -1 day'));
		$rswm_stock_price = json_decode(get_option("rswm_stock_price"));
		if ($rswm_stock_prvious_day_close_price->previous_date != $day_before && date('Y-m-d') == date('Y-m-d', strtotime($rswm_stock_price->date))) {
			$pppp = $rswm_stock_price->quote->{"Current Price"};
			$previousday = '{"previous_day":' . $pppp . ',"previous_date":"' . $day_before . '"}';
			update_option('rswm_stock_prvious_day_close_price', $previousday);
		}

		$curl = curl_init();

		curl_setopt_array($curl, [
			CURLOPT_URL => "https://stock-market-data.p.rapidapi.com/stock/quote?ticker_symbol=RSWM.NS",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => [
				"x-rapidapi-host: stock-market-data.p.rapidapi.com",
				"x-rapidapi-key: 110ec333d4mshf0863d3b9bd7ea4p1e8cc1jsnbe7217703a5c"
			],
		]);

		$response = curl_exec($curl);
		$err = curl_error($curl);
		if ($err) {
		} else {

			update_option('rswm_stock_date', date("d-m-Y H:i:s"));
			update_option('rswm_stock_price', $response);
		}

		curl_close($curl);
	}
}

//Remove Google ReCaptcha code/badge everywhere apart from select pages
add_action('wp_print_scripts', function () {
	//Add pages you want to allow to array
	wp_dequeue_script('google-recaptcha');
});

add_filter('wpseo_canonical', 'canonical_slash_add');
function canonical_slash_add($canonical_url)
{
	global $wp;
	$current_url =  home_url($wp->request);
	$pos = strpos($current_url, '/page');
	//$canonical_url = home_url();
	$canonical_url = substr($current_url, 0, $pos);
	return $canonical_url;
}

if (!function_exists('remove_pages_from_search')) {
	function remove_pages_from_search()
	{
		global $wp_post_types;
		$wp_post_types['page']->exclude_from_search = true;
	}
	add_action('init', 'remove_pages_from_search', 99);
}
add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts()
{
	echo '<style>
    .mustuse {
      display:none!important;
    } 
	.update-nag {
      display:none!important;
    } 
  </style>';
}

add_filter('wpseo_canonical', 'yoast_seo_canonical_slash_add');
function yoast_seo_canonical_slash_add($canonical_url)
{
	global $wp;
	$canonical_url =  home_url($wp->request);
	return $canonical_url;
}
