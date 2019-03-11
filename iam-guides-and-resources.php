<?php
session_start();
$PageTitle = "IAM Individual Guides and Resources";
$Description = "";
$Keywords = "";
include "header.php";
?>

<div class="sub-header tb-header mb" style="background: url(images/sub-header-uam.jpg);">
  <article class="vert-center">
    IAM INDIVIDUAL GUIDES AND RESOURCES
  </article>

  <?php include "trialbox-iam.php"; ?>
</div>

<article>
  Provided here are useful guides and resources to help you better utilize and understand the features provided by Investment Account Manager 3 Individual.<br>
  <br>

  <a href="survey-results.php">Recent IAM3 Individual User Survey Results</a><br>
  <br>

  <a href="pdf/Getting_Started_IAMv3_Individual_Demo.pdf">Getting Started with the IAM3 Individual Demo</a><br>
  <br>

  <a href="pdf/IAMv3_Individual_Sample_Reports.pdf">Sample IAM3 Individual Reports</a><br>
  <br>

  <a href="pdf/Tax_Tracking_Tools_IAM3_Individual.pdf">Tax Tracking Tools</a><br>
  <br>

  <a href="https://www.sec.gov/investor/pubs/sec-guide-to-savings-and-investing.pdf">SEC's publication Saving and Investing: A Roadmap to your Financial Security</a><br>

  <?php
  $ip = $_SERVER['REMOTE_ADDR'];
  $timestamp = time();
  $salt = "InvestmentAccountManagerSECForm";
  ?>

  <script type="text/javascript">
    $(document).ready(function() {
      var form = $('#form-sec');
      var formMessages = $('#form-messages');
      $(form).submit(function(event) {
        event.preventDefault();

        function formValidation() {
          var missing = 'no';

          $('INPUT[required]').each(function(){
            if ($(this).val() === "") {
              alert($(this).attr('placeholder')+" is required.");
              $(this).focus();
              missing = 'yes';
              return false;
            }
          });

          return (missing == 'no') ? true : false;
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

            $(form).find('input[type="text"], input[type="email"]').val('');
            $('#show-form').prop('checked', false);
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

  <input type="checkbox" id="show-form" role="button">
  <label for="show-form" id="form-toggle">[Request by mail]</label>

  <form action="form-sec.php" method="POST" id="form-sec" novalidate>
    <div>
      <label for="name">Name</label>
      <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name" placeholder="Name" required><br>
      <br>

      <label for="address">Address</label>
      <input type="text" name="<?php echo md5("address" . $ip . $salt . $timestamp); ?>" id="address" placeholder="Address" required><br>
      <br>

      <input type="text" name="<?php echo md5("city" . $ip . $salt . $timestamp); ?>" id="city" placeholder="City" required>
      <input type="text" name="<?php echo md5("state" . $ip . $salt . $timestamp); ?>" id="state" placeholder="State" required>
      <input type="text" name="<?php echo md5("zip" . $ip . $salt . $timestamp); ?>" id="zip" placeholder="Zip Code" required>
      <div style="clear: both;"></div>
      <br>

      <label for="email">Email</label>
      <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="Email" required><br>
      <br>

      <input type="text" name="confirmationCAP" style="display: none;">
      <input type="hidden" name="ip" value="<?php echo $ip; ?>">
      <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

      <input type="submit" name="submit" value="REQUEST">
    </div>
  </form>

  <div id="form-messages"><?php echo $feedback; ?></div>
</article>

<div class="gray footer bt">
  <article>
    <h2>START YOUR IAM <a href="download-iam.php" class="redlink">FREE TRIAL</a> TODAY</h2>
  </article>
</div>

<?php include "footer.php"; ?>