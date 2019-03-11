<?php
$PageTitle = "Free Trial Download";
include "header.php";
include "inc/dbconfig.php";

if (isset($_POST['submit']) && $_POST['confirmationCAP'] == "") {
  $salt = "ForesiteGroupInvestmentAccountManagerDownloadForm";

  $uptodate = (isset($_POST['uptodate'])) ? $_POST['uptodate'] : "";

  $now = time();

  // Make sure address is not already in downloads table
  $result = $mysqli->query("SELECT * FROM downloads WHERE email = '" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "'");

  // ...and make sure they are not already registered users
  $rresult = $mysqli->query("SELECT * FROM registration WHERE email = '" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "'");

  if (mysqli_num_rows($result) == 0 && mysqli_num_rows($rresult) == 0) {
    $mysqli->query("INSERT INTO downloads (firstname,lastname,email,uptodate,download_date) VALUES ('" . $_POST[md5('firstname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "','" . $_POST[md5('lastname' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "','" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "','" . $uptodate . "','$now')");

    $mysqli->query("UPDATE downloads_count SET number = number+1, date = $now WHERE product = 'iam'");
  }

  mysqli_free_result($result);
}
?>

<div class="sub-header tall" style="background: url(images/sub-header-free-trial.jpg);">
  <article class="vert-center">
    <span class="redtext">FREE</span> TRIAL DOWNLOAD
  </article>
</div>

<article class="download-page">
  <img src="images/logo-download.png" alt="" style="max-width: 100%;"><br>
  <br>

  <div class="redtext" style="font-size: 120%;">
    Total IAM Individual Downloads: <?php echo $mysqli->query("SELECT number FROM downloads_count WHERE product = 'iam'")->fetch_object()->number; ?><br>
    Most Recent Download: <?php echo date("F j, Y", $mysqli->query("SELECT date FROM downloads_count WHERE product = 'iam'")->fetch_object()->date); ?><br>
  </div>
  <br>

  <div class="dl-note">
    <strong class="redtext">Please note:</strong> during the 90 day free trial period, we'll be sending helpful tips on learning and using IAMv3 Individual. Please be sure to add our email address <a href="mailto:techsupport@investmentaccountmanager.com">techsupport@investmentaccountmanager.com</a> to your "safe senders" list in order to receive these instructional emails.
  </div><br>
  <br>
  <br>

  <div style="text-align: left;">
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

    <div class="trial-number" style="font-size: 1em; float: none; display: inline-block; margin-bottom: 0;">1</div>
    <a href="pdf/Getting_Started_IAMv3_Individual_Demo.pdf">Click here for a helpful "Getting Started Guide"</a> while using the IAM3 Individual <?php echo $GLOBALS['demodays']; ?> day trial version<br>
    <br>

    <div class="trial-number" style="font-size: 1em; float: none; display: inline-block; margin-bottom: 0;">2</div>
    <a href="software/IAM3_Ind_Demo_Setup.exe" onclick="goog_report_conversion ('software/IAM3_Ind_Demo_Setup.exe')" style="font-weight: bold;"><script type="text/javascript">var ssaUrl = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'clickserv.basis.net/conv/745a8af8dbc9f807';new Image().src = ssaUrl; (function(d) {  var syncUrl = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'pixel-a.basis.net/dmp/asyncPixelSync'; var iframe = d.createElement('iframe'); (iframe.frameElement || iframe).style.cssText = "width: 0; height: 0; border: 0;"; iframe.src = "javascript:false"; d.body.appendChild(iframe); var doc = iframe.contentWindow.document; doc.open().write('<body onload="window.location.href=\''+syncUrl+'\'">'); doc.close(); })(document); </script>CLICK HERE TO BEGIN THE DOWNLOAD</a><br>
    <br>

    <div class="trial-number" style="font-size: 1em; float: none; display: inline-block; margin-bottom: 0;">3</div>
    When asked to Run or Save the file, choose <strong>Save / Save as</strong>.  When prompted where to save the Investment Account Manager Individual trial version, select a location that will be easy for you to find the file once the download is complete. Many users simply select either their "<strong>Desktop</strong>" or their "<strong>Downloads</strong>" folder for the download location.<br>
    <br>

    <div class="trial-number" style="font-size: 1em; float: none; display: inline-block; margin-bottom: 0;">4</div>
    Once the trial version download has been completed, select "<strong>Run</strong>" when prompted by your browser.  <em>Note:</em> If your browser does not prompt to "<strong>Run</strong>", locate the IAM Individual trial version installation file where it was saved and double click the file name. The trial version installation will begin. Please follow the steps for installing the IAM Individual trial version.<br>
    <br>

    <div class="trial-number" style="font-size: 1em; float: none; display: inline-block; margin-bottom: 0;">5</div>
    If you have any questions with the installation, please contact our technical support team at 800-247-6354 or send an email to <a href="mailto:techsupport@investmentaccountmanager.com">techsupport@investmentaccountmanager.com</a>.<br>
    <br>
  </div>
</article>

<div class="gray footer bt">
  <article>
    <h1>YOUR TRUSTED PARTNER SINCE 1985.</h1>
  </article>
</div>

<?php include "footer.php"; ?>