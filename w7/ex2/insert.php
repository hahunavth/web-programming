<html>
<head>
    <title>Insert</title>
</head>
<body>

<?php
$server = '172.17.0.2';
$user = 'root';
$pass = 'Ad_12345';
$database = 'w7';
$table_name = 'Products';
$connect = mysqli_connect($server, $user, $pass, $database);

$Item=$_POST['Item'];
$Cost=$_POST['Cost'];
$Weight=$_POST['Weight'];
$Quantity=$_POST['Quantity'];

$query = "INSERT INTO $table_name VALUES ('0','$Item','$Cost','$Weight','$Quantity')";

print "The Query is <i>$query</i><br>";
print '<br><font size="4" color="blue">';

if (mysqli_query($connect, $query)){
    print "Insert into $database was successful!</font>";
} else {
    print "Insert into $database failed!</font>";
}mysqli_close($connect);
?>
</body>
</html>