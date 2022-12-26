<?php

$line = "A:1:2:3";
list($partno, $part, $num, $cost) = explode(":", $line, 4);
print "partno=$partno part=$part num=$num cost=$cost";
