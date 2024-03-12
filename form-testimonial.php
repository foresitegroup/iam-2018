<?php
include_once "inc/dbconfig.php";

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".RECAPTCHA_SECRET_KEY."&response=".$_POST['g-recaptcha-response']);
$responsekeys = json_decode($response);

if ($responsekeys->success && $_POST['username'] == "") {

  if ($_POST['comment'] != "") {
    $now = time();

    $mysqli->query("INSERT INTO testimonials (testimonial,order_id,order_name,submitdate) VALUES (
      '".$_POST['comment']."',
      '".$_POST['oid']."',
      '".$_POST['oname']."',
      '".$now."'
    )") or die($mysqli->error);

    $feedback = "<strong>Thank you for sharing!</strong><br>\n<br>\nNote your name and Identity will not be collected or used.<br>Note your testimony may be used for IAM marketing material.";
  } else {
    $feedback = "Please enter your testimonial in the text box.";
  }
} else {
  $feedback = "";
}

echo $feedback;
?>