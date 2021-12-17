<?php
$cutofftime = time() - 82800;

include_once("/home/investme/public_html/inc/dbconfig.php");


// Individual reminder
$result = $mysqli->query("SELECT * FROM downloads WHERE reminder_sent = '' AND download_date <= '$cutofftime'");

while($row = $result->fetch_array(MYSQLI_ASSOC)) {
  $SendTo = $row['email'];

  $Subject = "Investment Account Manager v3 Trial";
  $Header = "From: Peter Willms <techsupport@investmentaccountmanager.com>\r\n";
  $Message = "\nHi,\n\nMy name is Peter Willms, one of the developers of Investment Account Manager (IAM).\n\nI would like to personally thank you for taking the time to download our Free 60 Day Trial Version. If during this trial period you have any questions, or would like to schedule a one-on-one free webinar to review IAM, please feel free to email me directly or call 262-241-3990 for assistance.\n\nWe suggest that you review our Getting Started document, which is available for download: https://www.investmentaccountmanager.com/pdf/Getting_Started_IAMv3_Individual_Demo.pdf.\n\nWhile you are using the 60 day free trial, we will be sending you informative emails with the goal of helping you to learn and utilize IAM. Please add our email address techsupport@investmentaccountmanager.com to your safe senders list so you can receive these weekly emails.\n\nOur website also provides many video tutorials to help you learn IAM during the 60 day free trial period, found here:  https://www.investmentaccountmanager.com/iam-tutorials.php.\n\nOur team is keenly knowledgeable about IAM, and we're confident as you use the 60 day free trial, you'll learn why our existing customers have come to rely on IAM for their portfolio management needs. So, if you get stuck along the way, please don't hesitate to contact us. We are here to help.\n\nThank you again for your consideration.\n\nSincerely,\n\nPeter Willms\n";

  mail($SendTo, $Subject, $Message, $Header);

  $mysqli->query("UPDATE downloads SET reminder_sent = 'yes' WHERE id = '" . $row['id'] . "'");
}


// Pro reminder
$result = $mysqli->query("SELECT * FROM downloads_pro WHERE reminder_sent = '' AND download_date <= '$cutofftime'");

while($row = $result->fetch_array(MYSQLI_ASSOC)) {
  $SendTo = $row['email'];

  $Subject = "Investment Account Manager v3 Professional Trial";
  $Header = "From: Matthew Willms <techsupport@investmentaccountmanager.com>\r\n";
  $Message = "\nHi,\n\nMy name is Matthew Willms, one of the developers of Investment Account Manager 3 Professional.\n\nI would like to personally thank you for taking the time to download our free 60 day trial version. If during this trial period you have any questions, or would like to schedule a one-on-one free webinar to review IAM3 Professional, please feel free to email me directly or call 262-241-3990 for assistance.\n\nWhile you are using the 60 day free trial, we will be sending you informative emails with the goal of helping you to learn and utilize IAM3 Professional. Please add our email address techsupport@investmentaccountmanager.com to your safe senders list so you can receive these weekly emails.\n\nOur website also provides some video tutorials to help you learn IAM during the 60 day free trial period, found here:\nhttps://www.investmentaccountmanager.com/iam-pro-tutorials.php\n\nOur team is keenly knowledgeable about IAM3 Professional, and we're confident as you use the 60 day free trial, you'll learn why our existing customers have come to rely on IAM for their portfolio management needs. So, if you get stuck along the way, please don't hesitate to contact us. We are here to help.\n\nThank you again for your consideration.\n\nSincerely,\n\nMatthew Willms\n";

  mail($SendTo, $Subject, $Message, $Header);

  $mysqli->query("UPDATE downloads_pro SET reminder_sent = 'yes' WHERE id = '" . $row['id'] . "'");
}


// Mobile reminder
$result = $mysqli->query("SELECT * FROM download_reminder WHERE reminder_sent = '' AND reminder_date <= '$cutofftime'");

while($row = $result->fetch_array(MYSQLI_ASSOC)) {
  $SendTo = $row['email'];

  $Subject = "Investment Account Manager Trial Download";
  $Header = "From: Investment Account Manager <techsupport@investmentaccountmanager.com>\r\n";
  $Message = "Hello.\n\nThank you for your interest in the Investment Account Manager 3 Individual investment software program. You are receiving this email because you recently visited our web site download page on a mobile device and requested a reminder to download the trial demo when you were at a desktop computer. If you did not make this request, we apologize for the mistake and you can simply ignore this email.\n\nTo download the free 60 day demo version of Investment Account Manager 3, please visit https://www.investmentaccountmanager.com/download-iam.php using a desktop computer. No credit card is required. During the free 60 day demo period, we offer free unlimited support to answer any questions you may have.  You'll also receive weekly email tips on learning IAM3 Individual during the free 60 day demo period. If we can answer any questions, please contact us.\n\nWe thank you for your interest.\n\nSincerely,\n\nQUANT IX SOFTWARE, Inc.\nProviding Investment Software Solutions to Investors Since 1985\nwww.investmentaccountmanager.com\n";

  mail($SendTo, $Subject, $Message, $Header);

  $mysqli->query("UPDATE download_reminder SET reminder_sent = 'yes' WHERE id = '" . $row['id'] . "'");
}
?>