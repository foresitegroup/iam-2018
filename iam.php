<?php
session_start();
$PageTitle = "Free Trial";
$Description = "Download a free 60 day demo of Investment Account Manager";
$Keywords = "investment record keeping, investment account manager, investment software, investment portfolio software, investment accounts, investment management, investing, investment software free trial, investment account management, portfolio tracker, portfolio management software, personal investment portfolio, quant IX, quantix, quant 9, stock manager, personal stock, personal stock monitor, stock tracking software, retirement planning, unified account management, account manager, personal finance software, financial tools, financial planning, finance, microsoft money, microsoft money replacement, Quicken, captools, aaii";
include "header.php";
include "inc/dbconfig.php";

// Settings for randomizing the field names
$ip = $_SERVER['REMOTE_ADDR'];
$timestamp = time();
$salt = "ForesiteGroupInvestmentAccountManagerDownloadForm";
?>

<div class="sub-header tall" style="background: url(images/sub-header-free-trial.webp);">
  <article class="vert-center">
    GET STARTED WITH OUR <span class="redtext">FREE</span> TRIAL!
  </article>
</div>

<div class="gray mb">
  <article class="trial-gray">
    Follow Our 3 Simple Steps:
  </article>
</div>

<article style="position: relative;">
  <div class="trial-number">1</div>
  <div class="trial-step">
    <h1>DOWNLOAD</h1>
  </div>

  <div style="clear: both;"></div>

  <div class="trial-number">2</div>
  <div class="trial-step">
    <h1>TRY PRODUCT</h1>
  </div>

  <div style="clear: both;"></div>

  <div class="trial-number">3</div>
  <div class="trial-step">
    <h1>ACTIVATE</h1>
  </div>

  <div style="clear: both;"></div>

  <img src="images/trial-screen.webp" alt="" width="502" height="559" loading="lazy" class="trial-image">
</article>

<article class="download-page">
  <img src="images/windows.webp" alt="Windows" width="600" height="130" loading="lazy" id="dl-win-logo"><br>
  <br>

  Thank you for your interest in the Investment Account Manager - Individual version. We want you to be happy with Investment Account Manager before you buy it, so <strong><em class="redtext">try our <?php echo $GLOBALS['demodays']; ?> day 100% free demo</em></strong>. No Credit Card Required. You'll have plenty of time to examine the software using the provided sample data, as well as entering your own personal data.  We offer free unlimited support during the trial period.  Plus, if you decide to purchase the software activation key any time during or after the trial period, rest assured you'll have an additional <strong><em class="redtext">full 30 day money back guarantee</em></strong> within 30 days of software activation. Truly, a no-risk offer!
  <br>
  <br>

  <img src="images/30-day-mbg.webp" alt="30 day money back guarantee" width="600" height="536" loading="lazy" id="mbg"><br>
  <br>

  <span class="redtext">Downloads: <?php echo $mysqli->query("SELECT number FROM downloads_count WHERE product = 'iam'")->fetch_object()->number; ?></span><br>
  <br>

  <strong>Please complete the form below to download the free <?php echo $GLOBALS['demodays']; ?> day demo of Investment Account Manager Individual.</strong><br>
  Please be sure to enter a valid email address so you can receive weekly tutorial emails during your free <?php echo $GLOBALS['demodays']; ?> day trial period while learning Investment Account Manager.  Your email will not be used for any additional purposes.<br>
  <br>
  Before submitting the form, please disable any popup or ad blocker you may be running; sometimes they block the demo from downloading. (We don't have any annoying ads on our site.)<br>
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
        return true;
      }
    </script>

    <form action="download-iam-dl.php<?php if ($_SERVER["QUERY_STRING"] == "download") echo "?desktop"; ?>" method="POST" onSubmit="return checkform(this)" class="download-form">
      <div>
        <label for="firstname">First Name</label>
        <input type="text" name="<?php echo md5("firstname" . $ip . $salt . $timestamp); ?>" id="firstname" placeholder="* First Name"><br>
        <br>

        <label for="lastname">Last Name</label>
        <input type="text" name="<?php echo md5("lastname" . $ip . $salt . $timestamp); ?>" id="lastname" placeholder="* Last Name"><br>
        <br>

        <label for="phone" style="display: none;">Phone Number</label>
        <input type="hidden" name="<?php echo md5("phone" . $ip . $salt . $timestamp); ?>" id="phone" placeholder="Phone Number">

        <label for="email">Email</label>
        <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="* Email Address"><br>
        <br>

        <label for="confirmemail">Confirm Email</label>
        <input type="email" name="<?php echo md5("confirmemail" . $ip . $salt . $timestamp); ?>" id="confirmemail" placeholder="* Confirm Email"><br>
        <br>

        <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

        <input type="hidden" name="ip" value="<?php echo $ip; ?>">
        <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

        <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITE_KEY; ?>"></div><br>

        <input type="submit" name="submit" value="DOWNLOAD NOW"><br>
        <br>

        <span style="font-size: 70%; text-decoration: none;">Requirements: <strong>Windows 7</strong> or higher with Internet Access.<br>
        Apple computer requires Windows emulations software.</span>
      </div>
    </form>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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

<script type="text/javascript" defer src="<?php echo $TopDir; ?>inc/jquery.cycle2.min.js"></script>
<script type="text/javascript">
  // $(document).ready(function() { $(".testimonials").cycle(); });
</script>

<div class="gray">
  <article>
    <div class="cycle-slideshow testimonials" data-cycle-slides="> div" data-cycle-timeout="8000">
      <div>
        <div>
          "I've used your program for many years and you've always been great in responding to any problems I've encountered. Thanks for providing such an excellent product for individual investors!"
        </div>
      </div>
      <div>
        <div>
          "Investment Account Manager is an incredibly easy way to track your investments, dividend income and cost basis for tax planning. A very intuitive tool."
        </div>
      </div>
      <div>
        <div>
          "I've found IAM to be one of the best tools for managing accounts held at different brokers. IAM allows me to work with different accounts without having to switch between broker accounts, saving me a lot of time."
        </div>
      </div>
    </div> <!-- END testimonials -->
  </article>
</div>

<?php include "footer.php"; ?>