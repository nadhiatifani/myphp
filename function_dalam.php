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
    function hitungumur($thn_lahir, $thn_sekarang)
    {
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }
    function perkenalan($nama, $salam="assalamualaikum")
    {
        echo $salam. ",";
        echo "perkenalkan nama saya".$nama. "<br/>";
        echo "saya berusia". hitungumur(2003, 2022) ." tahun</br>";
        echo "senang berkenalan dengan anda<br/>";
    }
    perkenalan("nadhia");
    
    ?>
</body>
</html>