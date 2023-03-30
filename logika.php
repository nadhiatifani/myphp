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
    $a = true;
    $b = false;

    //variabel $c akan bernilai false
    $c = $a && $b;
    printf("%b && %b = %b", $a,$b,$c);
    echo "<hr>";

    //variabel $c akan bernilai true
    $c = $a || $b;
    printf("%b || %b = %b , $a,$b,$c");

    //variabel $c akan bernilai false
    $c = !$a;
    printf("!%b = %b" , $a,$c);
    echo "<hr>";
    
    
    ?>

</body>
</html>