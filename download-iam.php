<?php
session_start();
$PageTitle = "Free Trial Download";
include "header.php";
include "inc/dbconfig.php";

// Settings for randomizing the field names
$ip = $_SERVER['REMOTE_ADDR'];
$timestamp = time();
$salt = "ForesiteGroupInvestmentAccountManagerDownloadForm";
?>

<div class="sub-header tall" style="background: url(images/sub-header-free-trial.jpg);">
  <article class="vert-center">
    <span class="redtext">FREE</span> TRIAL DOWNLOAD
  </article>
</div>

<article class="download-page">
  <img src="images/logo-download.png" alt="" style="max-width: 100%;"><br>
  <br>

  Thank you for your interest in the Investment Account Manager - Individual version.  We want you to be happy with Investment Account Manager before you buy it, so <strong><em class="redtext">try our <?php echo $GLOBALS['demodays']; ?> day 100% free demo</em></strong>.  You will have plenty of time to examine the software with your personal data.  You'll gain exposure to time-tested, multiple portfolio management features, while utilizing important tools to help reduce risk, and increase returns.  And, as you work with Investment Account Manager, you will have access to demonstration portfolios, tutorials and free unlimited support. <strong><em>No credit card required.</em></strong> Truly, a no-risk offer!<br>
  <br>

  <span class="redtext">Downloads: <?php echo $mysqli->query("SELECT number FROM downloads_count WHERE product = 'iam'")->fetch_object()->number; ?></span><br>
  <br>
  <br>

  <hr>
  <br>
  <br>

  <div class="desktop<?php if ($_SERVER["QUERY_STRING"] == "download") echo " desktop-on"; ?>">
    <script type="text/javascript">
      function checkform (form) {
        if(document.getElementById('uptodate').checked) {
          if (document.getElementById('email').value == "") { alert('Email required.'); document.getElementById('email').focus(); return false ; }
          if (document.getElementById('confirmemail').value == "") { alert('Confirm Email required.'); document.getElementById('confirmemail').focus(); return false ; }
          if (document.getElementById('email').value != document.getElementById('confirmemail').value) {
            alert('The Email addresses provided do not match.  Please re-enter to confirm email.');
            document.getElementById('email').focus(); return false;
          }
        }
        return true ;
      }

      $(document).ready(function(){
        $('#uptodate').click(function(){ $('#toggle-fields').toggle(); });
      });
    </script>

    <form action="download-iam-dl.php<?php if ($_SERVER["QUERY_STRING"] == "download") echo "?desktop"; ?>" method="POST" onSubmit="return checkform(this)" class="download-form">
      <div>
        <input type="checkbox" name="uptodate" id="uptodate" value="Keep me up to date with IAM news, software updates, special offers and more." checked>
        <label for="uptodate" style="text-align: left;"><span></span>Provide email to recieve weekly "how to" instructional videos during the <?php echo $GLOBALS['demodays']; ?> day free demo period.</label>
        <br>

        <div id="toggle-fields">
          <label for="firstname">First Name</label>
          <input type="text" name="<?php echo md5("firstname" . $ip . $salt . $timestamp); ?>" id="firstname" placeholder="First Name"><br>
          <br>

          <label for="lastname">Last Name</label>
          <input type="text" name="<?php echo md5("lastname" . $ip . $salt . $timestamp); ?>" id="lastname" placeholder="Last Name"><br>
          <br>

          <label for="email">Email</label>
          <input type="text" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="* Email Address"><br>
          <br>

          <label for="confirmemail">Confirm Email</label>
          <input type="text" name="<?php echo md5("confirmemail" . $ip . $salt . $timestamp); ?>" id="confirmemail" placeholder="* Confirm Email"><br>
          <br>
        </div>

        <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

        <input type="hidden" name="ip" value="<?php echo $ip; ?>">
        <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

        <input type="submit" name="submit" value="DOWNLOAD NOW"><br>
        <br>

        <span style="font-size: 70%; text-decoration: none;">Requirements: <strong>Windows 7</strong> or higher with Internet Access.<br>
        Apple computer requires Windows emulations software.</span>
      </div>
    </form>

    <a href="mailto:?subject=Investment Account Manager Demo&body=%0AHello, I thought you might find this investment software useful.%0A<?php echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">Refer a Friend</a>
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

        <input type="hidden" name="iam_version" value="ind">

        <input type="hidden" name="referrer" value="download-iam.php">

        <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

        <input type="hidden" name="ip" value="<?php echo $ip; ?>">
        <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

        <input type="submit" name="submit" value="SET REMINDER">
      </div>
    </form>

    <div id="form-messages"><?php echo $feedback; ?></div>
  </div>
</article>

<div class="gray footer bt">
  <article>
    <h1>YOUR TRUSTED PARTNER SINCE 1985.</h1>
  </article>
</div>


<?php include "footer.php"; ?>