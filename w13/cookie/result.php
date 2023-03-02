 <?php $prefers = $_POST["prefers"];
  $custname = $_POST["custname"];
  $expire = time() + (60 * 60 * 24 * 30);
  setcookie("custname", $custname, $expire);
  setcookie("preference", $prefers, $expire);
  ?>
 <html>

 <head>
   <title>Happy Harry's Hardware Catalog </title>
 </head>

 <body>
   <!-- <form >
     <input type="text" size="15" maxlength="20" name="custname">
     <input type="radio" name="prefers" value="power tools" checked> Power Tools?
     <input type="radio" name="prefers" value="hand tools"> Hand Tools?
     <input type="radio" name="prefers” value=" air fresheners"> Air Fresheners?
   </form> -->

   <font size=4 color="blue">
     <?php
      print "Thanks $custname! ";
      print "Let's now look at $prefers ";
      ?> </font>
 </body>

 </html>
