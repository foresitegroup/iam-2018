<?php
$GLOBALS['demodays'] = '60';
$GLOBALS['demodayspro'] = '60';

if (!isset($TopDir)) $TopDir = "";
if (!isset($HeaderInc)) $HeaderInc = "";
if (!isset($Description)) $Description = "";
if (!isset($Keywords)) $Keywords = "";

function email($address, $name="") {
  $email = "";
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
	<meta name="msvalidate.01" content="8960217402C9A3470F225E0B76D2A196" />

    <title>Investment Account Manager<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $TopDir; ?>images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $TopDir; ?>images/apple-touch-icon.png">

    <meta name="description" content="<?php if ($Description != "") echo $Description; ?>">
    <meta name="keywords" content="<?php if ($Keywords != "") echo $Keywords; ?>">
    <meta name="author" content="Foresite Group">

    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/main.css?<?php if ($TopDir == "") echo filemtime('inc/main.css'); ?>">

    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery.cycle2.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href*='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
        $("#main a[href*='.pdf'], #main a[href$='.jpg'], #main a[href$='.png'], #main a[href$='.gif']").attr('target','_blank');
        $(".testimonials").cycle();
      });
    </script>

    <!--[if lt IE 9]><script src="<?php echo $TopDir; ?>inc/modernizr-2.6.2-respond-1.1.0.min.js"></script><![endif]-->
    <!--[if lt IE 7 ]>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/dd_belatedpng.js"></script>
    <script type="text/javascript">DD_belatedPNG.fix('img, .png');</script>
    <![endif]-->
    <?php echo $HeaderInc; ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-9258113-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-9258113-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 721630910 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-721630910"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-721630910');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NWLWH2V');</script>
    <!-- End Google Tag Manager -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NWLWH2V"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header>
      <a href="<?php echo $TopDir; ?>."><img src="<?php echo $TopDir; ?>images/logo.png" alt="Investment Account Manager" id="logo"></a>

      <label for="show-menu" id="menu-toggle"><i class="fa fa-bars"></i></label>
      <input type="checkbox" id="show-menu" role="button">

      <nav id="main-menu">
        <?php include "menu.php"; ?>
      </nav>
    </header>
