<?php
if (isset($_POST['submit']) || $_SERVER["QUERY_STRING"] == "dev") {
  $PageTitle = "Free Trial Download Professional";
  include "header.php";
  include "inc/dbconfig.php";

  if (isset($_POST['submit']) && $_POST['confirmationCAP'] == "") {
    $salt = "ForesiteGroupInvestmentAccountManagerDownloadForm";

    $now = time();

    $result = $mysqli->query("SELECT * FROM downloads_pro WHERE email = '" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "'");

    if ($result->num_rows == 0) {
      $mysqli->query("INSERT INTO downloads_pro (firstname,lastname,phone,email,uptodate,feedback,download_date,reminder_sent) VALUES (
        '" . $_POST[md5('firstname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
        '" . $_POST[md5('lastname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
        '" . $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
        '" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
        '" . $_POST['uptodate'] . "',
        '', '$now', '')"
      ) or die($mysqli->error);

      $mysqli->query("UPDATE downloads_count SET number = number+1 WHERE product = 'iam_pro'");
    }
  }
  ?>

  <!-- Event snippet for Event|Free Trial conversion page -->
  <script>
    gtag('event', 'conversion', {'send_to': 'AW-721630910/1ZC1CJWv76YBEL7tjNgC'});
  </script>

  <script>
  function gtag_report_conversion(url) {
    var callback = function () {
      if (typeof(url) != 'undefined') {
        window.location = url;
      }
    };
    gtag('event', 'conversion', {
        'send_to': 'AW-721630910/1ZC1CJWv76YBEL7tjNgC',
        'event_callback': callback
    });
    return false;
  }
  </script>

  <div class="sub-header tall" style="background: url(images/sub-header-free-trial.jpg);">
    <article class="vert-center">
      <span class="bluetext">THANK YOU</span> FOR DOWNLOADING
    </article>
  </div>

  <article class="download-page">
    <small>Had trouble downloading the software?</small><br>
    <a href="software/IAM3_Pro_Demo_Setup.exe" class="redbutton bluebutton" id="demodl" onclick="gtag_report_conversion('software/IAM3_Pro_Demo_Setup.exe')" style="font-weight: bold;"><script type="text/javascript">var ssaUrl = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'clickserv.basis.net/conv/745a8af8dbc9f807';new Image().src = ssaUrl; (function(d) {  var syncUrl = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'pixel-a.basis.net/dmp/asyncPixelSync'; var iframe = d.createElement('iframe'); (iframe.frameElement || iframe).style.cssText = "width: 0; height: 0; border: 0;"; iframe.src = "javascript:false"; d.body.appendChild(iframe); var doc = iframe.contentWindow.document; doc.open().write('<body onload="window.location.href=\''+syncUrl+'\'">'); doc.close(); })(document); </script>BEGIN DOWNLOAD</a><br>
    <br>
    <br>
    <br>

    <ul style="text-align: left;">
      <li>When asked to Run or Save the file, choose <strong>Save / Save as</strong>.  When prompted where to save the Investment Account Manager Professional trial version, select a location that will be easy for you to find the file once the download is complete. Many users simply select either their "<strong>Desktop</strong>" or their "<strong>Downloads</strong>" folder for the download location.<br><br></li>

      <li>Once the trial version download has been completed, select "<strong>Run</strong>" when prompted by your browser.  <em>Note:</em> If your browser does not prompt to "<strong>Run</strong>", locate the IAM Professional trial version installation file where it was saved and double click the file name. The trial version installation will begin. Please follow the steps for installing the IAM Professional trial version.<br><br></li>

      <li>If you have any questions with the installation, please contact our technical support team at 800-247-6354 or send an email to <a href="mailto:techsupport@investmentaccountmanager.com">techsupport@investmentaccountmanager.com</a>.<br><br></li>
    </ul>
  </article>

  <div class="gray footer bt">
    <article>
      <h1>YOUR TRUSTED PARTNER SINCE 1985.</h1>
    </article>
  </div>

  <!-- Google Code for Free Trial Downloads Conversion Page -->
  <script type="text/javascript">
    /* <![CDATA[ */
    goog_snippet_vars = function() {
      var w = window;
      w.google_conversion_id = 1027131486;
      w.google_conversion_label = "qfwyCNzZn3QQ3pDj6QM";
      w.google_remarketing_only = false;
    }
    // DO NOT CHANGE THE CODE BELOW.
    goog_report_conversion = function(url) {
      goog_snippet_vars();
      window.google_conversion_format = "3";
      var opt = new Object();
      opt.onload_callback = function() {
      if (typeof(url) != 'undefined') {
        window.location = url;
      }
    }
    var conv_handler = window['google_trackConversion'];
    if (typeof(conv_handler) == 'function') {
      conv_handler(opt);
    }
  }
  /* ]]> */
  </script>
  <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion_async.js"></script>

  <!-- <iframe src="download.php?f=software/IAM3_Ind_Demo_Setup.exe" style="display: none;"></iframe> -->
  <script type="text/javascript">$(document).ready(function() { $("#demodl")[0].click(); });</script>

  <?php
  include "footer.php";
} else {
  header("Location: download-iam-pro.php");
}
?>