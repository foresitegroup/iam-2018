<div id="trial-box">
  <div>
    <h1>FREE TRIAL!</h1>
    <div class="text">Start your free Investment Account Manager v3 trial now.</div>

    <strong>No Credit Card Required!</strong>
  </div>
  <div>
    <div class="link link-red">
      <?php echo $GLOBALS['demodays']; ?> Day <strong class="redtext"><em>Individual</em></strong> Trial<br>
      <a href="download-iam.php">Free Trial Download</a>
      <span class="redtext">Downloads: <?php include "inc/dbconfig.php"; echo $mysqli->query("SELECT number FROM downloads_count WHERE product = 'iam'")->fetch_object()->number; ?></span>
    </div>
  </div>
</div>