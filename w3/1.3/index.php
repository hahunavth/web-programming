<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Please Enter Two String to compare</h1>
<form action="ConditionalTest.php" method="post">
    <label for="./firstName">
        First name:
    </label>
    <input type="text" name="firstName" id="firstName"/>
    <br/>
    <label for="midName">
        Middle name:
    </label>
    <input type="text" name="midName" id="midName"/>
    <br/>

    <label for="lastName">
        Last name:
    </label>
    <input type="text" name="lastName" id="lastName"/>
    <br/>

    <label for="midTerm">
        Enter Mid-term Score:
    </label>
    <input type="text" name="midTerm" id="midTerm"/>
    <br/>

    <label for="finalEx">
        Enter Final-exam Score:
    </label>
    <input type="text" name="finalEx" id="finalEx"/>
    <br/>

    <div>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </div>
</form>
</body>
</html>