<?php


$date = $_POST['date'];

$two = '[[:digit:]]{2}';

$month = '[0-1][[:digit:]]';
$day = '[0-3][[:digit:]]';
$year = '2[[:digit:]]{3}';

$datePerMonth = array(
  "01" => 31,
  "02" => 00,
  "03" => 31,
  "04" => 30,
  "05" => 31,
  "06" => 30,
  "07" => 31,
  "08" => 31,
  "09" => 30,
  "10" => 31,
  "11" => 30,
  "12" => 31,
);

if (preg_match("/^($month)\/($day)\/($year)$/", $date)) {
  // print "Valid date = $date";
  list($m, $d, $y) = explode("/", $date, 3);
  if (isset($datePerMonth[$m])) {
    if (($m != 2) ? ($datePerMonth[$m] > $d) : (($y % 1000 != 0) && ($y % 4 == 0) ? ($d <= 29) : ($d <= 28))) {
      print "Valid date = $date";
    } else {
      print "Day err";
    }
  } else {
    print "Month err";
  }
} else {
  print "Invalid date = $date";
}
