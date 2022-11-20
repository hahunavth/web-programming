<html>
<head><title> Distance and Time Calculations </title></head>
<body>
<?php
$destination = $_POST['destination'];
//print sizeof($destination);
$cities = array ('Dallas' => 803, 'Toronto' => 435, 'Boston' => 848, 'Nashville' => 406, 'Las Vegas' => 1526, 'San Francisco' => 1835, 'Washington, DC'=> 595, 'Miami' => 1189, 'Pittsburgh' => 409);

print '<table border=1> <th> No <th> Destination <th> Driving time <th> Walking time ';

 for($i = 0; $i < count($destination); $i++) {
     $id = $i+1;
     $des = $destination[$i];
    if (isset($cities[$des])) {
//        print $des;
        $distance = $cities[$des];
        $time = round( ($distance / 60), 2);
        $walktime= round( ($distance / 5), 2);
        print "<tr>";
        print "<td> {$id} </td>";
        print "<td> {$des} </td>";
        print "<td> {$time} </td>";
        print "<td> {$walktime} </td>";
        print "</tr>";
    } else {
        print "Sorry, do not have destination information for $des.";
    }
}


?>
</body>
</html>

