<?php
$PageTitle = "Testimonial Request";
include "header.php";
include_once "inc/dbconfig.php";
?>

<style type="text/css">
  .site-width {
    margin: 0 auto;
    width: 1000px;

    @media (max-width: 1024px) { & { width: 96%; } }
  }

  .sub-header {
    display: flex;
    align-items: center;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    padding: 3.75em 0;
    color: #FFFFFF;
    font-size: 1.0625rem;
    line-height: 1.4;
    text-align: center;
    position: relative;

    height: auto;
  }

  .sub-header.sh-gray { background: #EBEBEB; color: #555555; }

  .sub-header .site-width H1 {
    margin: 0;
    font-size: 3rem;
    line-height: 1;
    text-transform: uppercase;
  }

  .content { padding: 3rem 0; }

  .form INPUT[name="username"] { position: absolute; left: -999999999px; }

  .form TEXTAREA {
    height: 10em;
    width: 100%;
    box-sizing: border-box;
    margin: 0.5em 0;
    outline: 0;
    border: 0.0625rem solid #555555;
    border-radius: 0.1875rem;
    padding: 0.5em 2%;
    background: #FFFFFF;
    color: #555555;
    font-family: 'Open Sans', Arial, Helvetica, sans-serif;
    font-size: 0.9375rem;
    -webkit-appearance: none;
    appearance: none;
  }

  .form :-ms-input-placeholder { color: #555555; }
  .form ::placeholder { color: #555555; opacity: 1; }
  .form :focus::placeholder { color: transparent; opacity: 0; }

  .form BUTTON {
    display: block;
    margin: 1.5em auto 0;
    outline: 0;
    border: 0;
    border-radius: 0.1875rem;
    padding: 1em 2em;
    background: #ED243B;
    color: #FFFFFF;
    font-family: 'Open Sans', Arial, Helvetica, sans-serif;
    font-size: 93.75%;
    line-height: 1;
    text-transform: uppercase;
    cursor: pointer;
    -webkit-appearance: none;
    appearance: none;
  }

  .form BUTTON:hover { background: #C2C2C2; color: #111111; }

  .note {
    margin-top: 2em;
    color: #ED243B;
    font-size: 80%;
    line-height: 1.6;
    text-align: center;
  }

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

  .shin {
    border-top: 0.0625rem solid #CCCCCC;
    padding: 0.9em 0;
    background: #EBEBEB;
    color: #555555;
    font-weight: bold;
    font-size: 3rem;
    line-height: 1;
    text-align: center;
    text-transform: uppercase;
  }
</style>

<div class="sub-header sh-gray">
  <div class="site-width">
    <h1>Testimonial Request</h1>
  </div>
</div>

<div class="site-width content">
  <strong>Share your thoughts about Investment Account Manager (IAM).</strong><br>
  
  <form action="form-testimonial.php" method="POST" id="form-testimonial" class="form" novalidate>
    <div>
      <input type="text" name="username" tabindex="-1" aria-hidden="true" autocomplete="new-password">

      <textarea name="comment" placeholder="Your comment here" style="margin: 0.5em 0;"></textarea>

      <strong style="display: block; text-align: center;">Thank you for sharing!</strong><br>

      <input type="hidden" name="oid" value="<?php if (isset($_POST["oid"])) echo $_POST["oid"]; ?>">
      <input type="hidden" name="oname" value="<?php if (isset($_POST["oname"])) echo $_POST["oname"]; ?>">

      <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITE_KEY; ?>"></div>

      <button type="submit" id="submit">Submit</button>

      <div class="note">
        Note your name and Identity will not be collected or used.<br>
        Note your testimony may be used for IAM marketing material.
      </div>
    </div>
  </form>
</div>

<div id="modal">
  <div id="modal-box">
    <div id="modal-button"></div>
    <div id="modal-content"></div>
  </div>
</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
  // BEGIN form submit
  const form = document.getElementById('form-testimonial');
  form.addEventListener('submit', submitForm);

  function submitForm(event) {
    event.preventDefault();

    const data = new FormData(form);

    fetch(form.action, {
      method: 'POST',
      body: data
    })
    .then((response) => response.text())
    .then((result) => {
      if (result != "") {
        document.getElementById('modal-content').innerHTML = result;
        modal.style.display = "block";
        form.reset();
        grecaptcha.reset();
      }
    });
  } // END submitForm

  const modal = document.getElementById("modal");
  const modalbutton = document.getElementById("modal-button");

  window.onclick = function(event) {
    if (event.target == modal) modal.style.display = "none";
  }

  modalbutton.onclick = function() { modal.style.display = "none"; }
</script>

<div class="shin">
  Your trusted partner since 1985.
</div>

<?php
// include "shin-partner.php";
include "footer.php";
?>