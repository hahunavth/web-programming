<?php


$date = $_POST['date'];

$two = '[[:digit:]]{2}';

$month = '[0-1][[:digit:]]';
$day = '[0-3][[:digit:]]';
$year = '2[[:digit:]]{3}';

if (preg_match("/^($month)\/($day)\/($year)$/", $date)) {
  print "Valid date = $date";
} else {
  print "Invalid date = $date";
}
// if (preg_match($regex, $date)) {
