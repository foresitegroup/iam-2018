<?php
if (isset($_POST['submit']) || $_SERVER["QUERY_STRING"] == "dev") {
  include "inc/dbconfig.php";

  $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".RECAPTCHA_SECRET_KEY."&response=".$_POST['g-recaptcha-response']);
  $responsekeys = json_decode($response);

  if ($responsekeys->success) {
    $PageTitle = "Free Trial Download";
    include "header.php";

    if (isset($_POST['submit']) && $_POST['confirmationCAP'] == "") {
      $salt = "ForesiteGroupInvestmentAccountManagerDownloadForm";

      $now = time();

      // Make sure address is not already in downloads table
      $result = $mysqli->query("SELECT * FROM downloads WHERE email = '" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "'");

      // ...and make sure they are not already registered users
      $rresult = $mysqli->query("SELECT * FROM registration WHERE email = '" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "'");

      if ($result->num_rows == 0 && $rresult->num_rows == 0) {
        $mysqli->query("INSERT INTO downloads (firstname,lastname,phone,email,uptodate,feedback,download_date,reminder_sent) VALUES (
          '" . $_POST[md5('firstname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
          '" . $_POST[md5('lastname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
          '" . $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
          '" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "',
          '', '', '$now', '')"
        ) or die($mysqli->error);

        $mysqli->query("UPDATE downloads_count SET number = number+1, date = $now WHERE product = 'iam'");
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
        <span class="redtext">THANK YOU</span> FOR DOWNLOADING
      </article>
    </div>

    <article class="download-page">
      <!-- <small>Had trouble downloading the software?</small><br> -->
      <a href="software/IAM3_Ind_Demo_Setup.exe" class="redbutton" onclick="return gtag_report_conversion('software/IAM3_Ind_Demo_Setup.exe')" style="font-weight: bold;"><script type="text/javascript">var ssaUrl = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'clickserv.basis.net/conv/745a8af8dbc9f807';new Image().src = ssaUrl; (function(d) {  var syncUrl = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'pixel-a.basis.net/dmp/asyncPixelSync'; var iframe = d.createElement('iframe'); (iframe.frameElement || iframe).style.cssText = "width: 0; height: 0; border: 0;"; iframe.src = "javascript:false"; d.body.appendChild(iframe); var doc = iframe.contentWindow.document; doc.open().write('<body onload="window.location.href=\''+syncUrl+'\'">'); doc.close(); })(document); </script>BEGIN DOWNLOAD</a><br>
      <br>
      <br>
      <br>

      <ul style="text-align: left;">
        <li>If you are using an ad blocker or popup blocker, you may need to disable it for the <strong>Begin Download</strong> button to work. Alternatively, you can right click on the <strong>Begin Download</strong> button and choose the <strong>Save Link As</strong> option.<br><br></li>

        <li>When asked to Run or Save the file, choose <strong>Save / Save as</strong>.  When prompted where to save the Investment Account Manager Individual trial version, select a location that will be easy for you to find the file once the download is complete. Many users simply select either their "<strong>Desktop</strong>" or their "<strong>Downloads</strong>" folder for the download location.<br><br></li>

        <li>Once the trial version download has been completed, select "<strong>Run</strong>" when prompted by your browser.  <em>Note:</em> If your browser does not prompt to "<strong>Run</strong>", locate the IAM Individual trial version installation file where it was saved and double click the file name. The trial version installation will begin. Please follow the steps for installing the IAM Individual trial version.<br><br></li>

        <li>If you have any questions with the installation, please contact our technical support team at 262-241-3990 or send an email to <a href="mailto:techsupport@investmentaccountmanager.com">techsupport@investmentaccountmanager.com</a>.<br><br></li>
      </ul><br>
      <br>

      <div class="dl-note">
        <strong class="redtext">Please note:</strong> during the <?php echo $GLOBALS['demodays']; ?> day free trial period, we'll be sending helpful tips on learning and using IAMv3 Individual. Please be sure to add our email address <a href="mailto:techsupport@investmentaccountmanager.com">techsupport@investmentaccountmanager.com</a> to your "safe senders" list in order to receive these instructional emails.
      </div>
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

    <?php
    include "footer.php";
  }
} else {
  header("Location: iam3.php");
}
?>