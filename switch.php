<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switch.php" method="POST">
        Grade 
        <br>
        <input type="text" name="grade">
        <br>
        <input type="submit">
    </form>
    <?php
    $x = $_POST["grade"];

    switch($x)
    {
        case "A":
            echo "you did amazing";
            break;

        case "B":
            echo "you did good";
            break;

        case "C":
            echo "you did well";
            break;

        case "D":
            echo "you did bad";
            break;

        case "F":
            echo "you did very bad";
            break;

        default:
            echo "invalid grade";

    }
    
    ?>
</body>
</html>