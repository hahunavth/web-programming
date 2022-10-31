<html><head><title>Loops</title></head>
<body><font size="5" color="blue">Generate Square and Cube Values </font>
<br>
<form action="SquareCube.php" method="post">
    <?php
    print ("Select Start Number");
    print ("<select name=\"start\">");
    for ($i=0; $i<10; $i++) {
        print ("<option>$i</option>");
    }
    print ("</select>");
    print ("<br>Select End Number");
    print ("<select name=\"end\">");
    for ($i=10; $i<20; $i++) {
        print "(<option>$i</option>)";
    }
    print ("</select>");
    ?>
    <br><input type="submit" value="Submit">
    <input type="reset" value="Clear and Restart">

    <?php
    if (array_key_exists("start", $_POST)) {
        $start = $_POST["start"]; $end = $_POST["end"];
    } else {
        $start = 0; $end = 0;
    }
    ?>
    <table border=1>
        <tr>
            <th> Numb </th> <th> Sqr </th> <th> Cubed </th>
        </tr>
        <?php
        $i = $start;
        while ($i <= $end) {
            $sqr = $i * $i;
            $cubed = $i * $i * $i;
            print ("<tr><td>$i</td><td>$sqr</td><td>$cubed</td></tr>");
            $i = $i + 1;
        }
        ?>
    </table>

</form></body></html>