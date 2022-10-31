<?php

$first = $_POST["first"];
$second = $_POST["second"];

print "Average score: " . ($first + $second) / 2 . "You got an A\n";
print "Your max score was " . (max($first, $second));