<?php

function submittedArt($privatekey){
if (isset($_POST['secID']) && isset($_POST['submitter']) && isset($_POST['email']) && isset($_POST['wcomname']) && isset($_POST['link']) && isset($_POST['desc']) && isset($_POST['terms'])){
//Escape The POST!
$id = mysql_real_escape_string(strip_tags($_POST['secID']));
$_SESSION['userNAME'] = mysql_real_escape_string(strip_tags($_POST['submitter']));
$_SESSION['userMAIL'] = mysql_real_escape_string(strip_tags($_POST['email']));
$_SESSION['userCOMMONS'] = mysql_real_escape_string(strip_tags($_POST['wcomname']));
$subLink = mysql_real_escape_string(strip_tags($_POST['link']));
$subDesc = mysql_real_escape_string(strip_tags($_POST['desc']));
$subTerms = mysql_real_escape_string(strip_tags($_POST['terms']));

$errors = '';
//reCAPTCHA check
$resp = recaptcha_check_answer ($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
if (!$resp->is_valid) {
	$errors = $errors . '<li>Invalid Captcha</li>';
}
//Session Check
if ($id != session_id()){
	$errors = $errors . '<li>POST Data did not match current user session.</li>';
}
//User Data Validity Checks
if (($_SESSION['userNAME'] == '') || ($_SESSION['userMAIL'] == '') || ($_SESSION['userCOMMONS'] == '') || ($_SESSION['userNAME'] == '') || ($subLink == '') || ($subDesc == '') || ($subTerms == '')){
	$errors = $errors . '<li>A Field was left empty.</li>';
}
//Check Email
if(!filter_var($_SESSION['userMAIL'], FILTER_VALIDATE_EMAIL)){
	$errors = $errors . '<li>Email was invalid.</li>';
}
if($errors == ''){
	return '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>' . $_SESSION['userNAME'] . '</strong>, your artwork has been submitted, please check your email to complete the submission process.</div>';
} else{
	$data = '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><strong>We encountered the following issue(s):</strong><ul>' . $errors . '</ul></div>';
	return $data;
}
}
}
?>