<?php

print "Hello, " . $_POST["name"] . "<br/>";
print "You are studying at " . $_POST["class"] . ", " . $_POST["uni"] . "<br/>";
print "Your hobby is <br/>";

$hobs = $_POST["hobs"];
if (!is_null($hobs)) {
    $n_hobbies = count($hobs);

    for($c = 0; $c < $n_hobbies; $c++) {
        print "" . ($c+1) . ".\t" . $hobs[$c] . "<br/>";
    }
}
?>