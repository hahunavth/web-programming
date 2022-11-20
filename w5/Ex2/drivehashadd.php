<html>
<body>
<h1>Add inventory program:</h1>
<form action="./hashadd.php" method="post">
    <span>Operation</span>
    <input type="radio" name="Action" value="Add" > Add
    <input type="radio" name="Action" value="Unknown" > Unknown
    <br>
    Enter Index:
    <input type="text" name="index" size=10> Enter Value:
    <input type="text" name="value" size=10>
    <br>
    <button type="submit">Click to submit!</button>
    <button type="reset">Click to reset!</button>
</form>
</body>
</html>