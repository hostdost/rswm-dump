
<?php
/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
*/
//$captcha=$_POST['g-recaptcha-response'];

$captcha=$_POST['captcha'];
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

if(strpos($output, '"success": true') !== FALSE) {
    echo '<h3>Thanks for your message!</h3>';
} else {
	echo '<h3>Failed!</h3>';
}

/*
if(strpos($output, '"success": true') !== FALSE) {
	//echo "<script type='text/javascript'>alert('success');</script>";
    echo '<h3>Thanks for your message!</h3>'.$output."<br>".$captcha;
	//return $output;
} else {
	//echo '<h3>Failed!</h3>'.$output."<br>".$captcha;
	//echo "<script type='text/javascript'>alert('failed');</script>";
    //return $output;
}
*/

//$json = json_decode($output);

/*
$captcha=$_POST['captcha'];
$secretKey = "6LfOtsYZAAAAAOtKKOumL5Z4lwpMuDTHt21XpPKL";
$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
$response = file_get_contents($url);
echo $response;
$responseKeys = json_decode($response,true);
if($responseKeys["success"]) {
	echo "<script type='text/javascript'>alert('success');</script>";
//echo '<p>Your submission was successful</p>';
} else 
{
	echo "<script type='text/javascript'>alert('.$url.');</script>";
	//echo '<p>Your submission attempt has been blocked by anti-spam measures.</p>';
}
*/

	   //$captcha = $_POST["g-recaptcha-response"];
	   //$captcha = $_POST['captcha'];
       //$secretKey = "6LfOtsYZAAAAAOtKKOumL5Z4lwpMuDTHt21XpPKL";
/*	   
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array(
		'secret' => '6LfOtsYZAAAAAOtKKOumL5Z4lwpMuDTHt21XpPKL',
		'response' => $_POST["captcha"]
	);
	$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success=json_decode($verify);

	if ($captcha_success->success==false) {
		echo "<script type='text/javascript'>alert('failed');</script>";
		//echo "<p>You are a bot! Go away!</p>";
	} else if ($captcha_success->success==true) {
		echo "<script type='text/javascript'>alert('success');</script>";
		//echo "<p>You are not not a bot!</p>";
	}
*/	   
	   
/*	   
	       $url = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$captcha;
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        // should return JSON with success as true
        if($responseKeys['success']) {
			//return true;
               echo "<script type='text/javascript'>alert('.$secretKey.');</script>";
        } else {
			//return false;
                //echo '<h2>You are spammer ! Get the @$%K out</h2>';
			echo "<script type='text/javascript'>alert('.$response.');</script>";
        }
*/		
?>