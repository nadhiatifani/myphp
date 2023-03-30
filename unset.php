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
    $hewan = [ "burung",
               "kucing",
               "ikan",

    ];
    unset($hewan[1]);

    echo $hewan[0]."<br>";
    echo $hewan[1]."<br>";
    echo $hewan[2]."<br>";

    echo "<hr>";

    echo "<pre>";
    print_r($hewan);
    echo "</pre>";

    
    
    ?>
</body>
</html>