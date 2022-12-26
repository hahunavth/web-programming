<html>

<head>
  <title>Product Update Results</title>
</head>

<body>
  <?php
  $host = '172.17.0.2';
  $user = 'root';
  $pass = 'Ad_12345';
  $database = 'w7';
  $connect = mysqli_connect($host, $user, $pass, $database);
  $table_name = 'Products';
  $Search = $_POST['Search'];

  print '<font size="5" color="blue">';
  print "Update result for table $table_name </font><br>";

  $desc = $_POST["Product"];
  $query = "Update $table_name set Numb = Numb - 1 where (Product_desc='$desc')";
  $results_id = mysqli_query($connect, $query);

  $query2 = "SELECT * FROM $table_name";
  $results_id = mysqli_query($connect, $query2);
  if ($results_id) {
    print "This query is $query";
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