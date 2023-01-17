<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getvspost.php" method = "POST">
        password: <input type="password" name = "password" >
        <br>
        <input type="submit">
    </form>
    <br>
    <?php

        echo $_POST["password"];
      //when using post method the ul parameters are kept securly amd is not shown in the url    
    ?>
</body>
</html>