<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="urlparm.php" action ="get">
        
    <input type="text" name="name">
    </form>
    <br>

    <?php

        echo $_GET["name"];
//when using the get method url parameters are shown in the url opposed to post 
//check the url fpr more information 
    ?>
    
</body>
</html>