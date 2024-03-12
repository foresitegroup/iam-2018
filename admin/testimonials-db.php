<?php
include("../inc/dbconfig.php");

switch ($_GET['a']) {
  case "delete":
    $mysqli->query("DELETE FROM testimonials WHERE id = '" . $_GET['id'] . "'") or die($mysqli->error);
    break;
}

$mysqli->close();

header( "Location: testimonials.php" );
?>