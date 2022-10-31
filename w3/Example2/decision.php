<?php

$first = $_POST["first"];
$second = $_POST["second"];

print "First=" . $first . "Second=" .$second . "\n";

if ($first > $second) {
    print $first . " is greater than ". $second;
} else {
    print $second . " is greater than ". $first;
}
