<html>
<body>
    <table border=1>
        <tr>
            <th> Numb </th> <th> Sqr </th> <th> Cubed </th>
        </tr>
        <?php
        $start = $_POST["start"]; $end = $_POST["end"];
        $i = $start;
        while ($i <= $end) {
            $sqr = $i * $i;
            $cubed = $i * $i * $i;
            print ("<tr><td>$i</td><td>$sqr</td><td>$cubed</td></tr>");
            $i = $i + 1;
        }
        ?>
        </table>
</body>
</html>