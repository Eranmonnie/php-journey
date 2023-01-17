<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculator.php" method="POST">
        First num 
        <br>
        <input type="number" name="num1">
        <br>
        Second num 
        <br>
        <input type="number" name="num2">
        <br>
        Operator
        <br>
        <input type="text" name="operator">
        <br>
        <input type="submit">
    </form>
    <br>

    <?php
    $x= $_POST["num1"];
    $y= $_POST["num2"];
    $opp= $_POST["operator"];
    
    if ($opp == '+')
    {
        echo $x + $y;
    }

    elseif ($opp == '-')
    {
        echo $x - $y;
    }
    
    elseif ($opp == '*')
    {
        echo $x * $y;
    }
    
    elseif ($opp == '/')
    {
        echo $x / $y;
    }
    else
    {
        echo 'invalid operator';
    }

    ?>

</body>
</html>