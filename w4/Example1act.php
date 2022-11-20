<html>
<body>
<font size="4" color="blue">
    Welcome to the Tuna Cafe Survey!
</font>

    <?php
    $prefer = $_POST["prefer"];
    print $prefer;
    $menu = array('Tuna Casserole', 'Tuna Sandwich', 'Tuna Pie', 'Grilled Tuna', 'Tuna Surprise');
    if (count($prefer) == 0 ) {
        print 'Oh no! Please pick something as your favorite! ';
    } else {
    print '<br>Your selections were <ul>';
    foreach ($prefer as $item) {
        print "<li>$menu[$item]</li>";
    }}
    print '</ul>'
    ?>
</body>
</html>