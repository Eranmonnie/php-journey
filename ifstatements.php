<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $ismale=true;
    $istall=true;
    if ($ismale && $istall)
    {
        echo "you are a tall male";
    }

    elseif($ismale && !$istall)
    {
        echo "you are a male but you are not tall";
    }

    elseif(!$ismale && $istall)
    {
        echo "you are not a male but you are tall";
    }

    else
    {
        echo "you are not a male and ypu are not tall";
    }
    
    ?>
</body>
</html>