<?php

$firstName = $_POST["firstName"];
$midName = $_POST["midName"];
$lastName = $_POST["lastName"];
$midTerm = $_POST["midTerm"];
$finalEx = $_POST["finalEx"];
//
$final = $finalEx;
//$final = $finalEx * 8 / 10 + $midName * 2 / 10;
//print "a " . $midName;
$rate = "";
if ($final > 89) {
    $rate = "A";
    printf ("Your final grade id %.1f. You got an A. Congratulation!", $final);
} elseif ($final > 79) {
    $rate = "B";
    printf ("Your final grade id %.1f. You got a %c", $final, $rate);
}elseif ($final > 69) {
    $rate = "C";
    printf ("Your final grade id %.1f. You got a %c", $final, $rate);
}elseif ($final > 59) {
    $rate = "D";
    printf ("Your final grade id %.1f. You got a %c", $final, $rate);
}elseif ($final > 39) {
    $rate = "E";
    printf ("Your final grade id %.1f. You got a %c", $final, $rate);
}elseif ($final >= 0) {
    $rate = "F";
    printf ("Illegal grade less than 0, Final grade = %.1f", $final);
}

print("<br></br>");

switch ($rate) {
    case "A":
        print "Excellent!"; break;
    case "B":
        print "Good!"; break;
    case "C":
        print "Not bad!"; break;
    case "D":
        print("Normal!"); break;
    case "E": break;
    case "F": print "You have to try again!";
        break;
    default: print "Illegal grade";
}