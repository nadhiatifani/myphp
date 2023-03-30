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
    $nilai = 88;
    if ($nilai > 90) {
        $grade = "A";
    }elseif ($nilai > 80) {
        $grade = "B+";

    }elseif ($nilai > 70) {
        $grade = "B";

    }else{
        $grade = "F";
    }
    echo "Nilai anda= $nilai <br>";
    echo "grade: $grade";
    
    
    ?>
</body>
</html>