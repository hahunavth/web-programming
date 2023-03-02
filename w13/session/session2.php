<?php session_start(); ?>
<html>

<body>
  <?php

  $product = $_SESSION["product"];
  $quantity = $_SESSION["quantity"];

  print "New order: Product=$product Number=$quantity";

  ?>
</body>

</html>
