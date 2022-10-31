<html>
<body>
<font size="4" color="blue">Please pick head or tail!</font>
<form action="CoinFlip.php" method="post">
    <?php
    print "<input type=\"radio\" name=\"pick\" value=\"0\">Head";
    print "<input type=\"radio\" name=\"pick\" value=\"1\">Tail"
    ?>
</form>
</body>
</html>