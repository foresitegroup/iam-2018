<?php
session_start();

$salt = "InvestmentAccountManagerSECForm";

if ($_POST['confirmationCAP'] == "") {
  if (
      $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('address' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('city' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('state' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('zip' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
     )
  {
    $Subject = "Request for SEC Publication";
    $SendTo = "techsupport@investmentaccountmanager.com";
    $Headers = "From: SEC Publication Form <donotreply@investmentaccountmanager.com>\r\n";
    $Headers .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";
    $Headers .= "Bcc: mark@foresitegrp.com\r\n";

    $Message = $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
    $Message .= $_POST[md5('address' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
    $Message .= $_POST[md5('city' . $_POST['ip'] . $salt . $_POST['timestamp'])] . " " . $_POST[md5('state' . $_POST['ip'] . $salt . $_POST['timestamp'])] . " " . $_POST[md5('zip' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
    $Message .= $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

    $Message = stripslashes($Message);

    mail($SendTo, $Subject, $Message, $Headers);
    
    $feedback = "Thank you for your request! We will be sending it soon!";
    
    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 200 OK");
      echo $feedback;
    }
  } else {
    $feedback = "Some required information is missing! Please go back and make sure all required fields are filled.";

    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 500 Internal Server Error");
      echo $feedback;
    }
  }
}

if (empty($_REQUEST['src'])) {
  $_SESSION['feedback'] = $feedback;
  header("Location: " . $_POST['referrer'] . "#form-messages");
}
?>