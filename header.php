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
<html lang="en-US">
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

    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/main.css?<?php if ($TopDir == "") echo filemtime('inc/main.css'); ?>" media="screen">

    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery-3.6.1.min.js"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PSG1VWKKV8"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-PSG1VWKKV8');
    </script>
  </head>
  <body>
    <header>
      <a href="<?php echo $TopDir; ?>."><img src="<?php echo $TopDir; ?>images/logo.webp" alt="Investment Account Manager" width="419" height="81" id="logo"></a>

      <label for="show-menu" id="menu-toggle"></label>
      <input type="checkbox" id="show-menu" role="button">

      <nav id="main-menu">
        <?php include "menu.php"; ?>
      </nav>
    </header>
