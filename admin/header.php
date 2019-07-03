<?php
$TopDir = "../";
include_once "../inc/dbconfig.php";

function email($address, $name="") {
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>IAM Administration<?php if ($PageTitle != "IAM Administration") echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $TopDir; ?>images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $TopDir; ?>images/apple-touch-icon.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Foresite Group">

    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/main.css?<?php echo filemtime($TopDir . "inc/main.css"); ?>" type="text/css">
    <link rel="stylesheet" href="inc/admin.css?<?php echo filemtime("inc/admin.css"); ?>" type="text/css">
    <link rel="stylesheet" href="inc/jquery-ui.css" type="text/css">

    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="inc/jquery-ui.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
        $("#startdate,#enddate").datepicker();
      });
    </script>

    <!--[if lt IE 9]><script src="<?php echo $TopDir; ?>inc/modernizr-2.6.2-respond-1.1.0.min.js"></script><![endif]-->
    <!--[if lt IE 7 ]>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/dd_belatedpng.js"></script>
    <script type="text/javascript">DD_belatedPNG.fix('img, .png');</script>
    <![endif]-->
  </head>
  <body>

    <header>
      <a href="."><img src="<?php echo $TopDir; ?>images/logo.png" alt="Investment Account Manager" id="logo" style="margin-bottom: 23px;"></a>

      <label for="show-menu" id="menu-toggle"><i class="fa fa-bars"></i></label>
      <input type="checkbox" id="show-menu" role="button">

      <nav id="main-menu">
        <?php if ($PageTitle != "Login") include "menu.php"; ?>
      </nav>
    </header>

    <div class="darkgray whitetext mb" style="text-transform: uppercase;">
      <article>
        <h2><?php echo $PageTitle; ?></h2>
      </article>
    </div>
