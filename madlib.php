<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="madlib.php" method="get">

    <input type="text" name="str1">
    <br>
    <input type="text" name="str2">
    <br>
    <input type="text" name="str3">
    <br>
    <input type="submit">

   </form> 
   <br>

   <?php
   $color = $_GET["str1"];
   $plural_noun = $_GET["str2"];
   $thing = $_GET["str3"];

   echo "roses are $color <br>";
   echo "$plural_noun are blue <br>";
   echo "i love $thing <br>";
   ?>
</body>
</html>