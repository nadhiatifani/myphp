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
function hitungUmur($thn_lahir, $thn_sekarang)
    {
        $umur = $thn_lahir - $thn_sekarang;
        return $umur;
    }
    
    echo "umur saya adalah ".hitungUmur(2003, 2022) ."tahun";
    
    ?>
</body>
</html>