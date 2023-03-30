<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method= "post" >
    <div>
        <label for="">Masukkan Uang</label>
        <input type="number"  name="uang" require >
    </div>
    <br>
    <button type="submit">Bayar</button>
    </form>
<?php
$nasori = 10000;
$nassuper = 15000;

$uang = @$_POST['uang'];

if (isset($_POST['uang'])){

    if ($uang < $nassuper and $uang >= 10000 ) {
        echo '<hr>';
        echo "anda telah membeli nasi goreng ori <br>";
    $kembali = $uang - $nasori;
        echo "kembalian anda" . $kembali;
    }elseif ($uang >= $nassuper) {
        echo '<hr>';
        echo "anda telah membeli nasi goreng super<br>";
    $kembali = $uang - $nassuper;
     echo "kembalian anda " . $kembali;

    } elseif ($uang < $nasori) {
        echo '<hr>';
        echo " maaf uang anad tidak cukup <br>";
    }
}

?>
</body>
</html>

