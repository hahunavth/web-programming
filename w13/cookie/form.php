<?php $prefers = $_POST["prefers"];
$custname = $_POST["custname"];
$expire = time() + (60 * 60 * 24 * 30);
setcookie("custname", $custname, $expire);
setcookie("preference", $prefers, $expire);
?>
<html>

<head>
  <title>Happy Harry's Hardware Catalog </title>
</head>

<body>
  <form method="post" action="./index.php">
    Please enter your name:
    <input type="text" size="15" maxlength="20" name="custname">
    <br>
    Would you like to look at today
    <input type="radio" name="prefers" value="power tools" checked> Power Tools?
    <input type="radio" name="prefers" value="hand tools"> Hand Tools?
    <input type="radio" name="prefers” value=" air fresheners"> Air Fresheners?
    <br>

    <button type="reset">submit</button>
    <button type="submit">reset</button>
  </form>

  <!-- <font size=4 color="blue">
     <?php
      print "Thanks $custname! ";
      print "Let's now look at $prefers ";
      ?> </font> -->
</body>

</html>
