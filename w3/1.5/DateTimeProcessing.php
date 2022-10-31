<html>

<body>
<div>Enter your name and select date and time for your appointment</div>
<br/>
<br>
<label for="yname">
    Your name
</label>
<input type="text" name="yname"/>
<br/>
<label>Date: </label>
<?php
print ("<select name=\"start\">");
for ($i=1; $i<=31; $i++) {
    print ("<option>$i</option>");
}
print ("</select>");
?>
<?php
print ("<select name=\"start\">");
for ($i=1; $i<=12; $i++) {
    print ("<option>$i</option>");
}
print ("</select>");
?>
<?php
print ("<select name=\"start\">");
for ($i=2000; $i<=2022; $i++) {
    print ("<option>$i</option>");
}
print ("</select>");
?>
<br/>
<label>Time: </label>
<?php
print ("<select name=\"start\">");
for ($i=0; $i<=23; $i++) {
    print ("<option>$i</option>");
}
print ("</select>");
?>
<?php
print ("<select name=\"start\">");
for ($i=0; $i<=23; $i++) {
    print ("<option>$i</option>");
}
print ("</select>");
?>
<?php
print ("<select name=\"start\">");
for ($i=0; $i<=23; $i++) {
    print ("<option>$i</option>");
}
print ("</select>");
?>
<br/>

<br><input type="submit" value="Submit">
<input type="reset" value="Clear and Restart">

<br/>
<br/>
<br/>

<div>
    <?php
        print "<span>Hi, " . $_POST["start"] . "</span>";

        print "You have choose to have an appointment on "
    ?>
</div>
</body>
</html>