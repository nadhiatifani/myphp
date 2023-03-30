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
    $a = 60;
    $b = 13;

    // bitwise and
    $c = $a & $b;
    echo "$a & $b = $c";
    echo "<br>";
    
    //bitwise or
    $c = $a | $b;
    echo "$a | $b = $c";
    echo "<br>";

    //bitwise xor
    $c = $a ^ $b;
    echo "$a ^ $b = $c";
    echo "<br>";

    //shift left
    $c = $a << $b;
    echo "$a << $b = $c";
    echo "<br>";

    //shift right
    $c = $a >> $b;
    echo "$a >> $b = $c";
    echo "<br>";
    
    ?>
</body>
</html>