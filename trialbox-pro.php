<div id="trial-box">
  <h1>FREE TRIAL!</h1>
  <div class="text">Start your free Investment Account Manager v3 trial now.</div>

  <strong>No Credit Card Required!</strong>

  <div class="link link-blue">
    <?php echo $GLOBALS['demodayspro']; ?> Day <strong class="bluetext"><em>Professional</em></strong> Trial<br>
    <a href="download-iam-pro.php">Free Trial Download</a>
    <span class="bluetext">Downloads: <?php include "inc/dbconfig.php"; echo $mysqli->query("SELECT number FROM downloads_count WHERE product = 'iam_pro'")->fetch_object()->number; ?></span>
  </div>
</div>