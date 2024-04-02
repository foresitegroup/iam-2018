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

<style>
  #modal {
    display: none;
    position: fixed;
    z-index: 10000;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.8);
  }

  #modal-box {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 31.25rem;
    box-sizing: border-box;
    padding: 1.75rem 2.25rem;
    background: #FFFFFF;
    color: #070707;
    font-size: 1.5rem;
    line-height: 1.2;
  }

  @media only screen and (max-width: 550px) { #modal-box { width: 96%; } }

  #modal-button {
    position: absolute;
    top: 0;
    right: 0;
    width: 1.875rem;
    height: 1.875rem;
    cursor: pointer;
  }

  #modal-button:before {
    content: "\2715";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    font-size: 70%;
  }
</style>

<div class="sub-header tall" style="background: url(images/sub-header-free-trial.webp);">
  <article class="vert-center">
    GET STARTED WITH OUR <span class="redtext">FREE</span> TRIAL!
  </article>
</div>

<br><br>

<article style="text-align: center;">
  The demo version for Investment Account Manager 3 Individual is no longer available since we are nearing the release of Investment Account Manager 4 Individual.  If you please complete the form below, providing your name and email address, we will send you a notice when the free 60 day demo version of IAMv4 is available.  We appreciate your patience and thank you for your interest.<br>
  <br>

  If you are a current user of Investment Account Manager 3 Individual and are looking to reinstall for use on a new computer, please also complete the form below, providing your current user id.  We will verify your current registration and send to you a direct link to the prior v3 demo for reinstallation purposes.<br>
  <br>

  If any additional questions, please call our technical support team: 262-241-3990<br>
  <br>
  <br>

  <form action="form-iam4.php" method="POST" id="form-iam4" class="download-form" novalidate>
    <div>
      <input type="text" name="name" placeholder="* First & Last Name" id="name" required><br>
      <br>

      <input type="email" name="email" placeholder="* Email Address" id="email" required><br>
      <br>

      <input type="email" name="email" placeholder="* Confirm Email" id="confirmemail" required><br>
      <br>

      <textarea name="comment" placeholder="Comment"></textarea><br>
      <br>

      <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITE_KEY; ?>"></div><br>

      <input type="submit" name="submit" id="submit" value="SEND">
    </div>
  </form>
</article>

<div id="modal">
  <div id="modal-box">
    <div id="modal-button"></div>
    <div id="modal-content"></div>
  </div>
</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
  // BEGIN form submit
  const form = document.getElementById('form-iam4');
  form.addEventListener('submit', submitForm);

  function submitForm(event) {
    event.preventDefault();

    // Validate any fields with "required" selector
    var valid = 'yes';

    if (document.getElementById('name').value == "") { alert('First & Last Name required.'); document.getElementById('name').focus(); valid = 'no'; }
    if (document.getElementById('email').value == "") { alert('Email required.'); document.getElementById('email').focus(); valid = 'no'; }
    if (document.getElementById('confirmemail').value == "") { alert('Confirm Email required.'); document.getElementById('confirmemail').focus(); valid = 'no'; }
    if (document.getElementById('email').value != document.getElementById('confirmemail').value) {
      alert('The Email addresses provided do not match.  Please re-enter to confirm email.');
      document.getElementById('email').focus();
      valid = 'no';
    }

    // If fields are valid, send the data
    if (valid == 'yes') {
      const data = new FormData(form);

      fetch(form.action, {
        method: 'POST',
        body: data
      })
      .then((response) => response.text())
      .then((result) => {
        // Data sent, so display success message
        // and clear all the form fields
        document.getElementById('modal-content').innerHTML = result;
        modal.style.display = "block";
        form.reset();
        grecaptcha.reset();
      });
    }
  } // END submitForm

  const modal = document.getElementById("modal");
  const modalbutton = document.getElementById("modal-button");

  window.onclick = function(event) {
    if (event.target == modal) modal.style.display = "none";
  }

  modalbutton.onclick = function() { modal.style.display = "none"; }
</script>

<script type="text/javascript" async src="<?php echo $TopDir; ?>inc/jquery.cycle2.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() { $(".testimonials").cycle(); });
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