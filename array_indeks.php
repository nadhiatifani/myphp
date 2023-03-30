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
    $hobi = ["membaca",
             "menulis",
             "ngeblog"
    
    
];

//menambahkan isi indeks -3
$hobi[3] = "coding";
//menambahkan isi pada indeks terakhir
$hobi[] = "olahraga";

//cetak array dengan perulangan
foreach ($hobi as $hobiku) {
    echo $hobiku."<br>";
}
    
    
    ?>
</body>
</html>