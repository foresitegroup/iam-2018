<?php
include("../inc/dbconfig.php");

if (!empty($_POST['start_date']) && !empty($_POST['end_date'])) {
  $where = "WHERE download_date >= '".strtotime($_POST['start_date'])."' AND download_date <= '".strtotime($_POST['end_date'] . " 23:59:59")."'";
} elseif (!empty($_POST['start_date']) && empty($_POST['end_date'])) {
  $where = "WHERE download_date >= '".strtotime($_POST['start_date'])."'";
} elseif (empty($_POST['start_date']) && !empty($_POST['end_date'])) {
  $where = "WHERE download_date <= '".strtotime($_POST['end_date'] . " 23:59:59")."'";
} else {
  $where = "";
}

$result = $mysqli->query("SELECT firstname,lastname,phone,email,FROM_UNIXTIME(download_date,'%c/%e/%Y') FROM ".$_POST['database']." ".$where." ORDER BY lastname ASC");

$csv_output = "First Name,Last Name,Phone Number,Email,Download Date";

$data = "";

while($row = $result->fetch_array(MYSQLI_NUM)) {
  $line = '';
  foreach($row as $value) {
    if ((!isset($value)) OR ($value == "") OR ($value == "12/31/1969")) {
      $value = ",";
    } else {
      $value = str_replace('"', '""', $value);
      $value = str_replace("\n", " ", $value);
      $value = '"' . $value . '"' . ",";
    }
    $line .= $value;
  }
  $data .= rtrim($line, ",") . "\n";
}
$data = str_replace("\r","",$data);

$filetag = $_POST['database']."-".date("Ymd-Hi");

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$filetag.csv");
header("Pragma: no-cache");
header("Expires: 0");
print $csv_output."\n".$data;

$result->free();

exit;
?>