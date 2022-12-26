<?php

$email = $_POST["email"];
$url = $_POST["url"];
$phone = $_POST["phone"];

$remail = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$rurl = "/([a-z]+.){3,100}/";
$rphone = "/^\+?[0-9]{10,12}/";

if (preg_match($remail, $email)) {
  print "Valid email = $email";
} else {
  print "Invalid email = $email";
}

print "<br/>";

if (preg_match($rurl, $url)) {
  print "Valid url = $url";
} else {
  print "Invalid url = $url";
}

print "<br/>";

if (preg_match($rphone, $phone)) {
  print "Valid phone number = $phone";
} else {
  print "Invalid phone number = $phone";
}
