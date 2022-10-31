<?php

$rating = $_POST["rating"];
$rated = "Poor";

switch ($rating) {
    case 1:
        print "The rating was $rated";
        break;
    case 2:
        $rated = "Fair";
        print "The rating was $rated";
        break;
    case 3:
        $rated = "Good";
        print "The rating was $rated";
        break;
    default:
        print "Error: that rating does not exists";
}

