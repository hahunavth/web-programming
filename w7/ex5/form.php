<html>

<head>
  <title>Update Results</title>
</head>

<body>
  <?php
  $host = '172.17.0.2';
  $user = 'root';
  $pass = 'Ad_12345';
  $database = 'w7';
  $connect = mysqli_connect($host, $user, $pass, $database);
  $table_name = 'Products';

  print '<font size="5" color="blue">';
  print "$table_name Data</font><br>";
  $query = "SELECT * FROM $table_name";
  $results_id = mysqli_query($connect, $query);
  if ($results_id) {

    print '
    <form action="./result.php" method="post">
    <label>
    Hammer: <input type="radio" name="Product" value="Hammer">
    </label>
    <label>
    Screwdriver: <input type="radio"name="Product" value="Screwdriver">
    </label>
    <label>
    Wrench: <input type="radio" name="Product" value="Wrench">
    </label>
    <br/>
    <button type=\"submit\">Click to submit</button>
    <button type=\"reset\">Reset</button>
    </form>
    ';

    print '<br><table border=1>';
    print '<th>Num<th>Product<th>Cost<th>Weight <th>Count';
    while ($row = mysqli_fetch_row($results_id)) {
      print '<tr>';
      foreach ($row as $field) {
        print "<td>$field</td> ";
      }
      print '</tr>';
    }
    mysqli_free_result($results_id);
  } else {
    die("query=$Query Failed");
  }
  mysqli_close($connect); ?>
</body>

</html>