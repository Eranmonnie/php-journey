<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkboxes.php" method="POST">
    
    apples: <input type="checkbox" name = "fruits[]" value ="apples"> <br>
    oranges: <input type="checkbox" name = "fruits[]" value ="oranges"> <br>
    mangos: <input type="checkbox" name = "fruits[]" value ="mangos"> <br>
    <input type="submit">
  
    </form>
    <br>

    <?php
    $fruits = $_POST["fruits"];
    echo "$fruits[0] <br>";
    echo $fruits[1];

    //this helps us to store multiple values in an array from the html form 
    ?>
</body>
</html>