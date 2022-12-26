<html>

<head></head>

<body>

  <?php
  $host = '172.17.0.2';
  $user = 'root';
  $pass = 'Ad_12345';
  $database = 'w7';
  $connect = mysqli_connect($host, $user, $pass, $database);
  $table_name = 'Category';

  $select_query = "select * from $table_name";

  $results_id = mysqli_query($connect, $query);
  ?>

  <h1>Category Administration</h1>

  <form>
    <table>
      <th>
        <tr style="background-color:gray;">
          <td>Car Id</td>
          <td>Title</td>
          <td>Description</td>
        </tr>
      </th>
      <!-- <tbody> -->
      <?php
      if ($results_id) {
        while ($row = mysqli_fetch_row($results_id)) {
          print '<tr>';
          foreach ($row as $field) {
            print "<td>$field</td> ";
          }
          print '</tr>';
        }
        mysqli_free_result($results_id);
      } else {
        die("query=$select_query Failed");
      }
      ?>


      <tr>
        <td><input type="text" name="carId" /></td>
        <td><input type="text" name="title" /></td>
        <td><input type="text" name="description" /></td>
      </tr>
      <!-- </tbody> -->
    </table>
    <button type="submit">Add category</button>
  </form>
</body>

</html>