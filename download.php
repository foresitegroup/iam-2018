<?php
$file = $_GET['f'];
header('Content-Type: application/vnd.microsoft.portable-executable');
header('Content-length: ' . filesize($file));
header('Content-Disposition: attachment; filename="'.basename($file).'"');
readfile($file);
exit;
?>