<?php

$name = $_POST['name'];
$mssv = $_POST['mssv'];
$nvacxin = $_POST['nvacxin'];

$encode_str = $name . "." . $mssv . "." . $nvacxin;
$qr_src = "https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=" . $encode_str . "&choe=UTF-8";

print "<img src=\"$qr_src\" title=\"Link to Google.com\" />"

?>