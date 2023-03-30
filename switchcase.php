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
    $Level = 3;

    switch ($Level) {
        case 1:
            echo "pelajari html";
            break;
        
        case 2:
            echo "pelajari css";
            break;
        case 3:
             echo "pelajari javascript";
            break;
        case 4:
            echo "pelajari php";
            break;

        default:
        echo "kamu bukan programer";
    }
    
    
    ?>
</body>
</html>