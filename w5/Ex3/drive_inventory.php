<html>
<head>

</head>
<body>

<h1>Hardware Harry's Inventory Information</h1>
<form action="show_inventory.php" method="post">
    <div>Select a part number for more information:</div>
        <?php
            $inventories = array("AC1000", "AC1001", "AC1002", "AC1003");
            foreach ($inventories as $i) {
                print "<input type='radio' name=\"inventory\" value=\"$i\">$i</input>";
            }
        ?>
    <br>
    <button type="submit">Click to submit!</button>
    <button type="reset">Click to reset!</button>
</form>

</body>
</html>