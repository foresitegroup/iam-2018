<?php
session_start();
$PageTitle = "Free Trial Download Professional";
include "header.php";
include "inc/dbconfig.php";

// Settings for randomizing the field names
$ip = $_SERVER['REMOTE_ADDR'];
$timestamp = time();
$salt = "ForesiteGroupInvestmentAccountManagerDownloadForm";
?>

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
    <span class="bluetext">FREE</span> TRIAL DOWNLOAD
  </article>
</div>

<article class="download-page">
  <img src="images/logo-download-pro.png" alt="" style="max-width: 100%;"><br>
  <img src="images/windows.png" alt="" id="dl-win-logo"><br>
  <br>

  Thank you for your interest in the Investment Account Manager's IAM <span class="bluetext">Professional Version</span>.<br>To download IAM PRO for your free <?php echo $GLOBALS['demodayspro']; ?> day trial, please provide the following information.<br>
  <br>

  <span class="redtext">Downloads: <?php echo $mysqli->query("SELECT number FROM downloads_count WHERE product = 'iam_pro'")->fetch_object()->number; ?></span><br>
  <br>

  <strong>Please complete the form below to download the free <?php echo $GLOBALS['demodayspro']; ?> day demo of IAM Professional.</strong><br>
  <br>
  <br>

  <hr>
  <br>
  <br>

  <div class="desktop<?php if ($_SERVER["QUERY_STRING"] == "download") echo " desktop-on"; ?>">
    <script type="text/javascript">
      function checkform (form) {
        if (document.getElementById('firstname').value == "") { alert('First Name required.'); document.getElementById('firstname').focus(); return false ; }
        if (document.getElementById('lastname').value == "") { alert('Last Name required.'); document.getElementById('lastname').focus(); return false ; }
        if (document.getElementById('email').value == "") { alert('Email required.'); document.getElementById('email').focus(); return false ; }
        if (document.getElementById('confirmemail').value == "") { alert('Confirm Email required.'); document.getElementById('confirmemail').focus(); return false ; }
        if (document.getElementById('email').value != document.getElementById('confirmemail').value) {
          alert('The Email addresses provided do not match.  Please re-enter to confirm email.');
          document.getElementById('email').focus(); return false;
        }
        return true ;
      }
    </script>

    <form action="download-iam-pro-dl.php<?php if ($_SERVER["QUERY_STRING"] == "download") echo "?desktop"; ?>" method="POST" onSubmit="return checkform(this)" class="download-form">
      <div>
        <label for="firstname">First Name</label>
        <input type="text" name="<?php echo md5("firstname" . $ip . $salt . $timestamp); ?>" id="firstname" placeholder="* First Name"><br>
        <br>

        <label for="lastname">Last Name</label>
        <input type="text" name="<?php echo md5("lastname" . $ip . $salt . $timestamp); ?>" id="lastname" placeholder="* Last Name"><br>
        <br>

        <label for="phone">Phone Number</label>
        <input type="tel" name="<?php echo md5("phone" . $ip . $salt . $timestamp); ?>" id="phone" placeholder="Phone Number"><br>
        <br>

        <label for="email">Email</label>
        <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="* Email Address"><br>
        <br>

        <label for="confirmemail">Confirm Email</label>
        <input type="email" name="<?php echo md5("confirmemail" . $ip . $salt . $timestamp); ?>" id="confirmemail" placeholder="* Confirm Email"><br>
        <br>

        <input type="checkbox" name="uptodate" id="uptodate" value="Keep me up to date with IAM news, software updates, special offers and more." checked>
        <label for="uptodate" style="text-align: left;"><span></span>Keep me up to date with IAM news, software updates, special offers and more.</label><br>
        <br>

        <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

        <input type="hidden" name="ip" value="<?php echo $ip; ?>">
        <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

        <input type="submit" name="submit" value="DOWNLOAD NOW"><br>
        <br>

        <span style="font-size: 70%; text-decoration: none;">Requirements: <strong>Windows 7</strong> or higher with Internet Access.<br>
        Apple computer requires Windows emulations software.</span>
      </div>
    </form>

    <a href="mailto:?subject=Investment Account Manager Professional Demo&body=%0AHello, I thought you might find this investment software useful.%0A<?php echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">Refer a Friend</a>
  </div>
  
  <div class="mobile<?php if ($_SERVER["QUERY_STRING"] == "download") echo " mobile-off"; ?>">
    It looks like you're on a mobile device and won't be able to download Investment Account Manager at this time. If you would like to be sent an email reminder to download the IAM trial when you are at a desktop computer, enter your address in the form below.<br>
    <br>

    If you ARE on a device that allows downloads and installs, please <a href="?download">enable the download form</a> to proceed.<br>
    <br>

    <script type="text/javascript">
      $(document).ready(function() {
        var form = $('#download-reminder');
        var formMessages = $('#form-messages');
        $(form).submit(function(event) {
          event.preventDefault();

          function formValidation() {
            if ($('#reminder-email').val() === '') { alert('Email Address required.'); $('#reminder-email').focus(); return false; }
            return true;
          }

          if (formValidation()) {
            var formData = $(form).serialize();
            formData += '&src=ajax';

            $.ajax({
              type: 'POST',
              url: $(form).attr('action'),
              data: formData
            })
            .done(function(response) {
              $(formMessages).html(response);

              $('#reminder-email').val('');
            })
            .fail(function(data) {
              if (data.responseText !== '') {
                $(formMessages).html(data.responseText);
              } else {
                $(formMessages).text('Oops! An error occured and your message could not be sent.');
              }
            });
          }
        });
      });
    </script>

    <noscript>
    <?php
    $feedback = (!empty($_SESSION['feedback'])) ? $_SESSION['feedback'] : "";
    unset($_SESSION['feedback']);
    ?>
    </noscript>

    <form action="form-download-reminder.php" method="POST" id="download-reminder">
      <div>
        <label for="reminder-email">Email</label>
        <input type="email" name="<?php echo md5("reminder-email" . $ip . $salt . $timestamp); ?>" id="reminder-email" placeholder="Email Address"><br>
        <br>

        <input type="hidden" name="iam_version" value="pro">

        <input type="hidden" name="referrer" value="download-iam-pro.php">

        <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

        <input type="hidden" name="ip" value="<?php echo $ip; ?>">
        <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

        <input type="submit" name="submit" value="SET REMINDER">
      </div>
    </form>

    <div id="form-messages"><?php echo $feedback; ?></div>
  </div>
</article>

<div class="gray footer">
  <article>
    <h1>YOUR TRUSTED PARTNER SINCE 1985.</h1>
  </article>
</div>

<?php include "footer.php"; ?>