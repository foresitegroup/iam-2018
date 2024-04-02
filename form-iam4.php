<?php
include_once "inc/dbconfig.php";

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".RECAPTCHA_SECRET_KEY."&response=".$_POST['g-recaptcha-response']);
$responsekeys = json_decode($response);

if ($responsekeys->success) {

  if ($_POST['name'] != "" && $_POST['email'] != "") {
    $now = time();

    $mysqli->query("INSERT INTO iam4_request (name,email,comment,submitdate) VALUES (
      '".$_POST['name']."',
      '".$_POST['email']."',
      '".$_POST['comment']."',
      '".$now."'
    )") or die($mysqli->error);

    $SendTo = "techsupport@investmentaccountmanager.com";
    $Subject = "IAM4 Request";
    $Headers = "From: IAM4 Request Form <contactform@investmentaccountmanager.com>\r\n";
    $Headers .= "Reply-To: " . $_POST['email'] . "\r\n";
    $Headers .= "Bcc: foresitegroupllc@gmail.com\r\n";

    $Message = $_POST['name']."\n";
    $Message .= $_POST['email']."\n\n";

    if (!empty($_POST['comment'])) $Message .= $_POST['comment'] . "\n";
    
    $Message = stripslashes($Message);
    
    mail($SendTo, $Subject, $Message, $Headers);

    $feedback = "Thank you! We will send you a notice when the free 60 day demo version of IAMv4 is available.";
  } else {
    $feedback = "Some required information is missing! Please go back and make sure all required fields are filled.";
  }
} else {
  $feedback = "";
}

echo $feedback;
?>